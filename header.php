<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="http://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>\css\style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>\css\styleres.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>\css\.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>LivDao</title>
</head>
<body>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col nav">
                    <nav class="navbar navbar-expand-sm navbar-expand-md navbar-expand-lg navbar-light bg-white">
                     <!--  <?php $logoimage=get_header_image(); ?> -->
                        <div>
                           <!--  <img style="width: 30px; height: 30px; display: none;" src="<?php echo $logoimage ?>"> -->
                          <a style="text-decoration: none;" href="<?php echo site_url(); ?>">
                            <h1 class="logo">LivDao</h1>
                          </a>
                        </div>
                       <!--  <button class="navbar-toggler " data-bs-toggle="collapse" data-bs-target="#menu">
                            <span class="navbar-toggler-icon"></span>
                        </button> -->
                        <div class="menu">
                            <?php
                            wp_nav_menu(
                                array('theme_location'=>'primary-menu',
                                      'menu_class'=>'menu')
                            )
                              ?>
                        </div>
                        <!-- <div class="menu collapse navbar-collapse" id="menu">
                            <ul class="navbar-nav ms-auto menu px-4">
                                <a href=""><li>Furniture</li></a>
                                <a href=""><li>How We Work</li></a>
                            </ul>
                        </div> -->
                        <div class="menusrch">
                            <input class="search" type="search" value="What are you looking for?">
                        </div>
                        <div class="icon">
                            <a href="#" style="color:black"><i class="fa-solid fa-arrow-up-from-bracket"></i>
                            <p class="icontxt">Remove</p></a>
                        </div>
                        <div class="icon2">
                            <a href="#" style="color:black"><i class="fa-solid fa-gift"></i>
                            <p class="icontxt">Cart</p></a>
                        </div>
                        <div>
                            <input class="menubutton" type="button" value="Log In">
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
