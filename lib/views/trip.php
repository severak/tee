<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Trans Europ Express">
    <title><?php echo $trip['from_name']; ?> » <?php echo $trip['to_name']; ?> - Trans Europ Express</title>
    
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

		<hr>
		<p>Trasa | Route | Strecke</p>

            <nav class="nav">
                <ul class="nav-list">
                    <?php foreach ($stations as $slug=>$name):?>
		    <li class="nav-item">
                        <a class="pure-button" href="/station/<?php echo $slug; ?>"><?php echo $name; ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
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
                        
                        <h2 class="post-title"><?php echo $trip['from_name']; ?> » <?php echo $trip['to_name']; ?></h2>
			
			<p class="post-meta">
                            <?php if (!empty($channel)): ?>
			    By <a href="https://www.youtube.com/channel/<?php echo $channel['id']; ?>" class="post-author"><?php echo $channel['name']; ?></a>, 
			    <?php endif; ?>
			    original URL <a href="https://youtu.be/<?php echo $trip['youtube_id']; ?>">https://youtu.be/<?php echo $trip['youtube_id']; ?></a>
                        </p>
                        
                    </header>

                    <div class="post-description">
<br>
<div class="videoWrapper">
<iframe width="560" height="315" src=" 
https://www.youtube.com/embed/<?php echo $trip['youtube_id']; ?>" frameborder="0" 
allowfullscreen></iframe>
</div>

                    </div>
                </section>
            </div>


            <div class="footer">
                <endora>
            </div>
        </div>
    </div>
</div>




</body>
</html>
