<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Trans Europ Express">
    <title>Nový vlak | New train | Neu zug - Trans Europ Express</title>
    
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-min.css">
    <!--<![endif]-->
    
    
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="/st/css/blog-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="/st/css/blog.css">
        <!--<![endif]-->
</head>
<body>







<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
		<img src="/st/tee-logo-200.png">
            <h1 class="brand-title"><a href="/">Trans Europ Express</a></h1>
            <h2 class="brand-tagline">your virtual travel agency</h2>
            
        </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
            <!-- A wrapper for all the blog posts -->
            <div class="posts">
		<h1 class="content-subhead">Vlak | Train | Zug</h1>
                
                <!-- A single blog post -->
                <section class="post">
                    <header class="post-header">
                        
                        <h2 class="post-title">Nový vlak | New train | Neu Zug</h2>
                        
                    </header>
		    
		    <?= $form->open()->addClass("pure-form pure-form-stacked"); ?>
		    
		    <label>Youtube ID</label>
		    <?= $form->text('youtube_id')->required(); ?>
		    <?= $form->showError('youtube_id'); ?>
		    
		    <label>Odkud | From | Ab</label>
		    <?= $form->text('from_name')->required(); ?>
		    <?= $form->showError('from_name'); ?>
		    
		    <label>ID from</label>
		    <?= $form->select('from_id'); ?>
		    <?= $form->showError('from_id'); ?>
		    
		    
		    <label>Kam | To | Nach</label>
		    <?= $form->text('to_name')->required(); ?>
		    <?= $form->showError('to_name'); ?>
		    
		    <label>ID to</label>
		    <?= $form->select('to_id'); ?>
		    <?= $form->showError('to_id'); ?>
		    
		    
		    <label>Přes | Via | Über</label>
		    <?= $form->textarea('via')->rows(2); ?>
		    
		    
		    <?= $form->submit('Add')->addClass('pure-button pure-button-primary'); ?>
		    
		    <?= $form->close(); ?>

                    <?php dump($form); ?>
                </section>
            </div>


            <div class="footer">
                <endora>
            </div>
        </div>
    </div>
</div>

<script src="/st/zepto.min.js"></script>
<script>
function array_walk (array, funcname, userdata) { // eslint-disable-line camelcase
  //  discuss at: http://locutus.io/php/array_walk/
  // original by: Johnny Mast (http://www.phpvrouwen.nl)
  // bugfixed by: David
  // improved by: Brett Zamir (http://brett-zamir.me)
  //      note 1: Only works with user-defined functions, not built-in functions like void()
  //   example 1: array_walk ([3, 4], function () {}, 'userdata')
  //   returns 1: true
  //   example 2: array_walk ('mystring', function () {})
  //   returns 2: false
  //   example 3: array_walk ({"title":"my title"}, function () {})
  //   returns 3: true
  if (!array || typeof array !== 'object') {
    return false
  }
  try {
    if (typeof funcname === 'function') {
      for (var key in array) {
        if (arguments.length > 2) {
          funcname(array[key], key, userdata)
        } else {
          funcname(array[key], key)
        }
      }
    } else {
      return false
    }
  } catch (e) {
    return false
  }
  return true
}

function htmlspecialchars (string, quoteStyle, charset, doubleEncode) {
  //       discuss at: http://locutus.io/php/htmlspecialchars/
  //      original by: Mirek Slugen
  //      improved by: Kevin van Zonneveld (http://kvz.io)
  //      bugfixed by: Nathan
  //      bugfixed by: Arno
  //      bugfixed by: Brett Zamir (http://brett-zamir.me)
  //      bugfixed by: Brett Zamir (http://brett-zamir.me)
  //       revised by: Kevin van Zonneveld (http://kvz.io)
  //         input by: Ratheous
  //         input by: Mailfaker (http://www.weedem.fr/)
  //         input by: felix
  // reimplemented by: Brett Zamir (http://brett-zamir.me)
  //           note 1: charset argument not supported
  //        example 1: htmlspecialchars("<a href='test'>Test</a>", 'ENT_QUOTES')
  //        returns 1: '&lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;'
  //        example 2: htmlspecialchars("ab\"c'd", ['ENT_NOQUOTES', 'ENT_QUOTES'])
  //        returns 2: 'ab"c&#039;d'
  //        example 3: htmlspecialchars('my "&entity;" is still here', null, null, false)
  //        returns 3: 'my &quot;&entity;&quot; is still here'
  var optTemp = 0
  var i = 0
  var noquotes = false
  if (typeof quoteStyle === 'undefined' || quoteStyle === null) {
    quoteStyle = 2
  }
  string = string || ''
  string = string.toString()
  if (doubleEncode !== false) {
    // Put this first to avoid double-encoding
    string = string.replace(/&/g, '&amp;')
  }
  string = string
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
  var OPTS = {
    'ENT_NOQUOTES': 0,
    'ENT_HTML_QUOTE_SINGLE': 1,
    'ENT_HTML_QUOTE_DOUBLE': 2,
    'ENT_COMPAT': 2,
    'ENT_QUOTES': 3,
    'ENT_IGNORE': 4
  }
  if (quoteStyle === 0) {
    noquotes = true
  }
  if (typeof quoteStyle !== 'number') {
    // Allow for a single string or an array of string flags
    quoteStyle = [].concat(quoteStyle)
    for (i = 0; i < quoteStyle.length; i++) {
      // Resolve string input to bitwise e.g. 'ENT_IGNORE' becomes 4
      if (OPTS[quoteStyle[i]] === 0) {
        noquotes = true
      } else if (OPTS[quoteStyle[i]]) {
        optTemp = optTemp | OPTS[quoteStyle[i]]
      }
    }
    quoteStyle = optTemp
  }
  if (quoteStyle & OPTS.ENT_HTML_QUOTE_SINGLE) {
    string = string.replace(/'/g, '&#039;')
  }
  if (!noquotes) {
    string = string.replace(/"/g, '&quot;')
  }
  return string
}


$(document).ready(function() {
	
	$('input[name=from_name]').on('blur', function() {

	var searchFor = $('input[name=from_name]').val();
	
	var found = $.getJSON('/ajax/search/station', {s: searchFor}, function(data) {
		var opts = '';
		array_walk(data, function(val, key){
			opts += '<option value="' + htmlspecialchars(val.id) + '">' + htmlspecialchars(val.name) + '</option>'; 
		});
		$('select[name=from_id]').html(opts);
	});
});

});


</script>

</body>
</html>
