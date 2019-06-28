<style>
    #menu-footer-menu {   
        display:inherit;
        list-style:none;

    }
    #menu-footer-menu>li {   
        display:inherit;
        padding-right:0.75rem;
        color:white;
        font-size: 0.85em;

    }

    #menu-footer-menu>li>a {   
        color:white;

    }

    #menu-footer-menu>li + li:before {   
        content: " | ";
        padding-right:0.55rem;
        color:inherit;

    }

    .menu-footer-menu-container{
        justify-content: center;
        display:flex;
    }
</style>
<?php
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

?>


<footer class="container-fluid nav-primary mt-3">
   <div class="row"> 
       <div class="col">

              
        
        <div class="mt-5">
        <img class="img-fluid mx-auto d-block" src="<?php echo $image[0]; ?>" />
        </div>
        
       <div class="mt-3">
       <?php wp_nav_menu( 
            array( 
                'theme_location' => 'footer'
                ) 
            ); ?>
        </div>
        <div class="text-center">
        <small class="text-white"> This theme was created by <a class="text-white" href="https://www.marcussnow.dev/" target="_blank"> Marcus Snow.</a> </small>
        </div>


       </div>
   </div>
   <?php wp_footer(); ?>
</footer>