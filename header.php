<!doctype html>
<html>
      <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          
          <?php wp_head(); ?>
      </head>
      <body <?php body_class('test');?>>
		<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        ?>  
        <div id="fixed_layput">
		  <div class="header">
              <div class="container">
                  <nav class="navbar navbar-expand-lg p-0">
                      <a class="navbar-brand mr-0 p-0" href="<?php echo get_home_url(); ?>"><img src="<?php echo $image[0]; ?>" alt="" class="img-fluid" /></a>
                      <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                          <span class="navbar-toggler-icon"></span>
                          <span class="navbar-toggler-icon"></span>
                      </button>

                     <?php
wp_nav_menu( [
    'menu' => 'Header Menu',
    'menu_class' => 'this-is-the-menu-class',
    'menu_id' => 'this-is-the-menu-id',
    'container' => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id' => 'navbarSupportedContent',
    'items_wrap' => '<ul class="navbar-nav ml-auto">%3$s</ul>',
] ); 
?>
                  </nav>
              </div>
          </div>