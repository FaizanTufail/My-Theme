<?php 
     register_nav_menus(
     	array('primary-menu'=>'header')
     );

     add_theme_support('post-thumbnails');
      add_theme_support('custom-header');
 ?>
 <?php 
    register_sidebar( array(
        'name'          =>'footer1',
        'id'            => 'onecol',
    ) );
    register_sidebar( array(
        'name'          =>'footer2',
        'id'            => 'twocol',
    ) );
register_sidebar( array(
        'name'          =>'footer3',
        'id'            => 'threecol',
    ) );
register_sidebar( array(
        'name'          =>'footer4',
        'id'            => 'fourcol',
    ) );
 ?>
 <?php 
          register_nav_menus(
     	array('how-menu'=>'how')
     );
 ?>