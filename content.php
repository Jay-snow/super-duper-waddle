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

    .article-thumbnail-container {
        width:13em;
        height:13em;

    }
</style>
<div class="container">
<div class="row mb-4">
    <div class="col-12 col-md-3">
        <!-- Blog post title -->
        
        <figure class="image is-square">
        <!-- if there is a thumbnail on post, use it. If not, use website logo -->

        <?php if ( get_the_post_thumbnail() ): ?> 
            <div class="article-thumbnail-container">
            <a href="<?php the_permalink(); ?> "> <?php echo get_the_post_thumbnail('','article-thumbnail', array( 'class' => 'w-100 img-fluid')); ?> </a>
            </div>
        <?php else: ?> 
            <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                ?>
          <div class="article-thumbnail-container">
          <img class="w-100 img-fluid " style="background-color:black;" src="<?php echo $image[0]; ?>" />
          </div>
        <?php endif ?>   
        </figure>

        

    </div>
    <div class="col-12 col-md-9">
        
        <h2 class="title "> <a href="<?php the_permalink(); ?> "> <?php the_title(); ?> </a> </h2>
        <p class="pubDate">PUBLISHED <?php the_date(); ?> IN <?php the_category(' '); ?> </p>
        
            <!-- Blog post excerpt -->
             <div> <?php the_excerpt(); ?> </div>

            <a style="text-transform:uppercase;"href="<?php the_permalink(); ?> "> read more > </a>

    </div>
</div>
</div>