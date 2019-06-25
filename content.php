<style>
    .title>a {
        color:black;
    }

    .post-categories>li {
        list-style:none;
    }

    .pubDate {
        color:grey;
        text-transform: uppercase;
    }

    img.attachment-article-thumbnail {
        width:300px;
        height:200px;
    }
</style>
<div class="row">
    <div class="col-4">
        <!-- Blog post title -->
        
        <figure class="image is-square">
        <!-- if there is a thumbnail on post, use it. If not, use website logo -->
        <?php if ( get_the_post_thumbnail() ): ?> 
        <a href="<?php the_permalink(); ?> "> <?php echo get_the_post_thumbnail('','article-thumbnail'); ?> </a>
        <?php else: ?> 

    <?php
     $custom_logo_id = get_theme_mod( 'custom_logo' );
     $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        ?>

    <img class="img-fluid attachment-article-thumbnail" src="<?php echo $image[0]; ?>" />
        <?php endif ?>


        
       
</figure>
    </div>
    <div class="col-8">
        
        <h2 class="title "> <a href="<?php the_permalink(); ?> "> <?php the_title(); ?> </a> </h2>
        <p class="pubDate">PUBLISHED <?php the_date(); ?> IN <?php the_category(' '); ?> </p>
        
            <!-- Blog post excerpt -->
            <p> <?php the_excerpt(); ?> </p>

            <a style="text-transform:uppercase;"href="<?php the_permalink(); ?> "> read more > </a>

    </div>
</div>