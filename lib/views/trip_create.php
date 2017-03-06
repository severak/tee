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
		    
		    
		    <label>Kam | To | Nach</label>
		    <?= $form->text('to_name')->required(); ?>
		    <?= $form->showError('to_name'); ?>
		    
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




</body>
</html>
