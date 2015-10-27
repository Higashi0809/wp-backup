<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?>
    <?php wp_title(); ?></title>

    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet"href="<?php echo get_stylesheet_uri(); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <header>
    <div class="siteinfo">
    <div class="container">
    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
<p><?php bloginfo('description'); ?></p>
    </div>
    </div>

<nav>
<div class="container">
<?php wp_nav_menu('theme_location=navigation'); ?>
    </div>
    </nav>
    </header>