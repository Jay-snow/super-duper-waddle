<?php get_header();?>

<h2 class="title "> <a href="<?php the_permalink(); ?> "> <?php the_title(); ?> </a> </h2>
        <p class="pubDate">PUBLISHED <?php the_date(); ?> IN <?php the_category(' '); ?> </p>
        
            <!-- Blog post excerpt -->
             <div> <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
                 <?php the_content(); ?>
            <?php endwhile; else : ?>
                 <p> <?php esc_html_e('Sorry, no posts matched your criteria.'); ?> </p>
            <?php endif; ?>
              </div>

            <a style="text-transform:uppercase;"href="<?php the_permalink(); ?> "> read more > </a>
