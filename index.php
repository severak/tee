<?php
if (!file_exists(__DIR__ . '/config.php')) {
	die("ERROR: Kyselo not installed.");
}
$config = require __DIR__ . '/config.php';

require 'lib/flight/Flight.php';
require "lib/flight/autoload.php";

Flight::init();
Flight::set('flight.handle_errors', false);
Flight::set('flight.views.path', __DIR__ . '/lib/views');
require "lib/tracy/src/tracy.php";
use \Tracy\Debugger;
Debugger::enable();

flight\core\Loader::addDirectory("lib/flourish");

Flight::register('db', 'sparrow', [], function($db) use($config) {
	$db->setDb('pdosqlite://localhost/' . __DIR__ . '/' . $config['database']);
	$db->show_sql = true;
});


// homepage
Flight::route('/', function(){
	Flight::render('homepage');
});

// station
Flight::route('/station/@slug', function($slug){
	$db = Flight::db();
	
	$station = $db->from('stations_csv')->where('slug', $slug)->select()->one();
	
	if (empty($station)) {
		Flight::notFound();
	}
	
	$vias = $db->from('trip_stations')->where('station_id', $station['id'])->select()->many();
	$vias = array_column($vias, 'trip_id');
	
	$departures = $db->from('trips')->where('from_id', $station['id'])->where('|id @', $vias)->select()->many();
	$arrivals = $db->from('trips')->where('to_id', $station['id'])->select()->many();


	Flight::render('station', [
		'station' => $station,
		'departures' => $departures,
		'arrivals' => $arrivals
	]);
});



// trip
Flight::route('/trip/@id', function($tripId){
	$db = Flight::db();
	
	$trip = $db->from('trips')->where('id', $tripId)->where('is_visible', 1)->select()->one();
	
	if (empty($trip)) {
		Flight::notFound();
	}
	
	$channel = null;
	if ($trip['channel_id']) {
		$channel = $db->from('channels')->where('id', $trip['channel_id'])->select()->one();
	}
	
	$stations = [];
	
	$fromStation = $db->from('stations_csv')->where('id', $trip['from_id'])->select()->one();
	$stations[ $fromStation['slug'] ] = $fromStation['name'];
	
	$innerStations = $db
		->select(['name', 'slug'])
		->from('trip_stations')
		->join('stations_csv', array('station_id' => 'stations_csv.id'))
		->where('trip_id', $tripId)
		->sortAsc('ord')
		->select()
		->many();
		
	foreach ($innerStations as $st) {
		$stations[ $st['slug'] ] = $st['name'];
	}
	
	$toStation = $db->from('stations_csv')->where('id', $trip['to_id'])->select()->one();
	$stations[ $toStation['slug'] ] = $toStation['name'];

	Flight::render('trip', [
		'trip' => $trip,
		'channel' => $channel,
		'stations' => $stations
	]);
});



Flight::start();