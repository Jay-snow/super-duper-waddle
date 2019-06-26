<!doctype html>
<html <?php language_attributes(); ?>>
  <head>


  
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset'); ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title><?php wp_title(); ?></title>

    <style>
        .nav-primary {
            background-color: rgb(0, 57, 166);
        }

        /** Main-menu stylings **/

        .header-menu-navigation-container {
            display:flex;
            background-color:white;
            z-index:5;
        }
        .header-menu-navigation-container>.container-fluid>li {
            list-style:none;
            display:block;
            margin-right:0.5em;
            color:black;
            font-size:1.15rem;            
        }



        /**Sub menu stylings **/
        .submenu-navigation-container {
            display:flex;
            margin-top: 2.4em;
            background-color: rgb(0, 57, 166);
            z-index:5;
            border-top:1px solid lightgrey;
        }
        .submenu-navigation-container>.container-fluid>li {
            list-style:none;
            display:block;
            margin-right:0.5em;
            color:white;
            margin-top: -.5rem; /* Negative margins so hover effect displays across the navbar  correctly */
            margin-bottom:-.5rem;
            padding:.25rem .5rem;
            font-size:1.15rem;            
        }

        /** Hover effects for submenu **/
        .submenu-navigation-container>.container-fluid>li:hover {
            background-color:white;
            cursor:pointer;
            color:blue;
        }
        /** Sub menu font color **/
        .submenu-navigation-container>.container-fluid>li>a {
            color:inherit;
        }
        .submenu-navigation-container>li>a:hover {
            text-decoration: none;
        }


        .hero {
            background-image:url( <?php echo get_bloginfo('template_directory'); ?>/hero2.jpg);
            height:100vh;
            width:100%;
            display:flex;
            background-size:cover;
            background-repeat:no-repeat;
            background-position: 100% 100%;
        }

        .hero-float {
            background-color: rgba(0,57,166,0.6);
            position:absolute;
            color:white;
            align-self:center;
            margin-bottom:15em;
            padding:50px 75px 50px 25px;
            text-shadow:2px 2px #000;
        }

        .bluebutts {
            background-color: rgba(0,57,166,0.6);
            width:100%;
            height:115px;
            align-self:flex-end;
        }


        .logo {
            position:fixed;
            margin-left:80px;
            width:135px;
            height:127px;
            z-index:100;
            padding:5px;
        }

        .logo2 {
            position:fixed;
            width:41px;
            border: 1px solid grey;
            z-index:100;
            padding:5px;
        }

 

        .hero-buttons {
            list-style:none;
            width:100%;
            display:flex;
            justify-content:space-around;
            padding:0px 6em;
            color:white;

        }

        .hero-buttons>li {
            margin-top:2em;
            text-align:center;
        }

        .hero-buttons>li>a:hover {
            background-color:white;
            color:rgb(0,57,166);
        }

        .hero-buttons>li>a {
            color:inherit;
            text-decoration: none;
            background-color: rgb(0,57,166);
            padding: 0.5em 3.0em;
            margin-right:0.5em;
            
            font-size:1.2em;
            text-transform:uppercase;
            font-weight:500;
        }

        .hero-buttons-mobile {
            list-style:none;
            width:100%;

            justify-content:column;
            padding:0px 6em;
            color:white;

        }

        .hero-buttons-mobile>li {
            margin-top:30px;
            margin-bottom:30px;
            background-color: rgb(0,57,166);
            text-align:center;
            margin-right:0.5em;
            padding:0.5em;
        }

        .hero-buttons-mobile>li>a {
            color:inherit;
            text-decoration: none;
            padding: 0.5em 3.2em;
            margin-right:0.5em;     
            font-size:1.2em;
            text-transform:uppercase;
            font-weight:500;
        }

        .hero-buttons-mobile>li:hover {
            background-color:white;
            color:rgb(0,57,166);
        }

        

    </style>

  </head>
  <body>
<!-- BEGINNEING OF HEADER TEMPLATE -->


        <?php
     $custom_logo_id = get_theme_mod( 'custom_logo' );
     $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

        ?>

        <span class="logo nav-primary d-none d-lg-block" >
             <a href="<?php echo get_home_url(); ?>"><img class="img-fluid" src="<?php echo $image[0]; ?>" /> </a>
        </span>
        <span class="logo2 nav-primary d-lg-none " >
             <img class="img-fluid" src="<?php echo $image[0]; ?>" />
        </span>
           
        <?php wp_nav_menu( 
            array( 
                'theme_location' => 'header-menu',
                'container' => 'nav',
                'items_wrap' => '<div class="%2$s"> %3$s</span>',
                'menu_class' => 'container-fluid justify-content-end',
                'container_class' => 'navbar  fixed-top header-menu-navigation-container '
                ) 
            ); ?>
        

        </div>
    </div>

        
        <?php wp_nav_menu( 
            array( 
                'theme_location' => 'sub-menu',
                'container' => 'nav',
                'items_wrap' => '<div class="%2$s"> %3$s</span>',
                'menu_class' => 'container-fluid justify-content-center',
                'container_class' => 'navbar d-none d-lg-block fixed-top submenu-navigation-container'
                ) 
            ); ?>

    
<div class="container-fluid">
    <div class="row border-bottom no-gutters">
        <div class="col ">
        <div class="row">
        <?php if ( is_front_page()) :?>
            <div id="hero" class=" hero">
                    <div class="hero-float">
                        <h2> MORE THAN AN EDUCATION </h2>
                        <a href=> Learn how to maximize your life! </a>

                    </div>

                    <div class="bluebutts ">
                    <?php wp_nav_menu( 
            array( 
                'theme_location' => 'hero-buttons',
                'container' => 'nav',
                'items_wrap' => '<div class="%2$s"> %3$s</span>',
                'menu_class' => 'container-fluid d-none d-lg-flex hero-buttons'
                ) 
            ); ?>
            
          
                    </div>
                    
                </div>
                <?php wp_nav_menu( 
            array( 
                'theme_location' => 'hero-buttons',
                'container' => 'nav',
                'items_wrap' => '<div class="%2$s"> %3$s</span>',
                'menu_class' => 'container-fluid d-lg-none hero-buttons-mobile'
                ) 
            ); ?>
        <?php endif?>
           
        </div>
</div> <!-- End of  container-fluid -->
    </div>
</div>
<!-- END OF HEADER TEMPLATE -->
