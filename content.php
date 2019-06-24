<div class="row">
    <div class="col-4">
        <!-- Blog post title -->
        
        <figure class="image is-square">
      <?php echo get_the_post_thumbnail(); ?>
       
</figure>
    </div>
    <div class="col-8">
        
        <h1 class="title"> <a href="<?php the_permalink(); ?> "> <?php the_title(); ?> </a> </h1>
        <p>PUBLISHED <?php the_date(); ?> </p>
        
            <!-- Blog post excerpt -->
            <p> <?php the_excerpt(); ?> </p>
            <p >  By <?php the_author(); ?>  </p>

            <a href="<?php the_permalink(); ?> "> READ MORE > </a>

    </div>
</div>