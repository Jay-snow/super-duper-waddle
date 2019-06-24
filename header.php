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
        }

        /**Sub menu stylings **/
        .header-menu-navigation-container {
            display:flex;
        }
        .header-menu-navigation-container>li {
            list-style:none;
            display:block;
            padding: 0.55rem 1.75rem;
            color:black;
            font-size:1.15rem;            
        }




        .submenu-navigation-container {
            display:flex;
        }

        /**Sub menu stylings **/
        .submenu-navigation-container {
            display:flex;
        }
        .submenu-navigation-container>li {
            list-style:none;
            display:block;
            padding: 0.55rem 1.75rem;
            color:white;
            font-size:1.15rem;            
        }

        /** Hover effects for submenu **/
        .submenu-navigation-container>li:hover {
            background-color:white;
            cursor:pointer;
            color:blue;
        }

        a {
            color:inherit;
        }
        a:hover {
            text-decoration: none;
        }


        .hero {
            background-image:url( <?php echo get_bloginfo('template_directory'); ?>/hero2.jpg);
            height:800px;
            width:1024px;
            display:flex;
            background-size:cover;
            background-repeat:no-repeat;
            background-position: 0 -100px;
        }

        .hero-float {
            background-color: rgba(0,0,255,0.6);
            color:white;
            align-self:center;
            margin-bottom:150px;
            padding:50px 75px 50px 25px;
        }

        .logo {
            position:absolute;
            margin-left:80px;
            width:135px;
            height:127px;
            z-index:100;
            padding:5px;
        }

        .logo2 {
            position:absolute;
            margin-left:-20px;
            width:41px;
            border: 1px solid grey;
            z-index:100;
            padding:5px;
        }

        

    </style>

  </head>
  <body>

 <div>

</div>
   
  <div class="container-fluid">

  

    <div class="row border-bottom no-gutters">
        <div class="col ">

        <?php
     $custom_logo_id = get_theme_mod( 'custom_logo' );
     $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

        ?>
        
        <span class="logo nav-primary d-none d-lg-block" >
             <img class="img-fluid" src="<?php echo $image[0]; ?>" />
        </span>
        <span class="logo2 nav-primary d-lg-none " >
             <img class="img-fluid" src="<?php echo $image[0]; ?>" />
        </span>
           
        <?php wp_nav_menu( 
            array( 
                'theme_location' => 'header-menu',
                'container' => 'nav',
                'items_wrap' => '%3$s',
                'container_class' => 'header-menu-navigation-container justify-content-end'
                ) 
            ); ?>
        

        </div>
    </div>
    <div class="row d-none d-lg-block">
        <div class="col nav-primary">
        
        <?php wp_nav_menu( 
            array( 
                'theme_location' => 'sub-menu',
                'container' => 'nav',
                'items_wrap' => '%3$s',
                'container_class' => 'submenu-navigation-container justify-content-center'
                ) 
            ); ?>


        </div>
    </div>
    <div class="row">
        <div class="col hero">
            <div class="hero-float">
                <h2> Start your education now! </h2>
                <a href=> Learn More </a>

            </div>
            
         </div>
    </div>
</div> <!-- End of  container-fluid -->