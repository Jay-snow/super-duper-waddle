<div class="container-fluid nav-primary mt-3">
    This theme was created by Marcus Snow.
    
    <?php
     $custom_logo_id = get_theme_mod( 'custom_logo' );
     $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

        ?>

    <img class="img-fluid" src="<?php echo $image[0]; ?>" />
</div>