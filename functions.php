<?php
function theme_style() {
    
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/CSS/bootstrap.min.css');
}

add_action( 'wp_enqueue_scripts', 'theme_style' );

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
