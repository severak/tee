<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Trans Europ Express">
    <title><?php echo $station['name']; ?> - Trans Europ Express</title>
    
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-min.css">
    <!--<![endif]-->
    

	<link rel="stylesheet" href="/st/css/font-awesome/css/font-awesome.css">
    
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
            <h2 class="brand-tagline">your virtual travel guide</h2>

            
        </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
            <!-- A wrapper for all the blog posts -->
            <div class="posts">
                
                <!-- A single blog post -->
                <section class="post">
                    <header class="post-header">
                        
                        <h2 class="post-title"><?php echo $station['name']; ?></h2>
                        
                    </header>

                    <div class="post-description">

			<h3>Odjezd Departure Abfarth</h3>

			<table class="pure-table pure-table-horizontal pragotron">
			<tr><th></th><th>Kam To Nach</th><th>Přes Via Über</th><th></th></tr>
			<?php foreach ($departures as $trip): ?>
			<tr>
			<td>
				<?php echo $trip['train_name']; ?>
			</td>
			<td class="pragotron-to">
				<?php echo $trip['to_name']; ?>
			</td>
			<td>
				<?php echo $trip['via']; ?>
			</td>
			<td>
				<a class="pure-button pure-button-primary" href="/trip/<?php echo $trip['id']; ?>"><i class="fa fa-paper-plane" aria-hidden="true"></i> travel</a>
			</td>
			</tr>
			<?php endforeach; ?>
			
			<?php if (empty($departures)): ?>
			<tr><td></td><td></td><td></td><td></td></tr>
			<?php endif; ?>
			
			
			</table>

			<h3>Příjezd Arrival Ankunft</h3>

			<table class="pure-table pure-table-horizontal pragotron">
			<tr><th></th><th>Odkud  From Ab</th><th>Přes Via Über</th><th></th></tr>
			<?php foreach ($arrivals as $trip): ?>
			<tr>
			<td>
				<?php echo $trip['train_name']; ?>
			</td>
			<td class="pragotron-to">
				<?php echo $trip['from_name']; ?>
			</td>
			<td>
				<?php echo $trip['via']; ?>
			</td>
			<td>
				<a class="pure-button pure-button-primary" href="/trip/<?php echo $trip['id']; ?>"><i class="fa fa-paper-plane" aria-hidden="true"></i> travel</a>
			</td>
			</tr>
			<?php endforeach; ?>
			
			<?php if (empty($arrivals)): ?>
			<tr><td></td><td></td><td></td><td></td></tr>
			<?php endif; ?>
			
			
			</table>


                    </div>
                </section>
            </div>


            <div class="footer">
                <div class="pure-menu pure-menu-horizontal">
                    <ul>
                        <li class="pure-menu-item"><a href="http://purecss.io/" class="pure-menu-link">About</a></li>
                        <li class="pure-menu-item"><a href="http://twitter.com/yuilibrary/" class="pure-menu-link">Twitter</a></li>
                        <li class="pure-menu-item"><a href="http://github.com/yahoo/pure/" class="pure-menu-link">GitHub</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>




</body>
</html>
