<style>
    .post-container {
        margin-top:10rem;
    }
</style>
<?php get_header();?>
<div class="container-fluid">
<div class="row">
    <div class="col-8 mx-auto post-container">


    <!-- Blog post excerpt -->
    <div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

        <?php echo get_the_post_thumbnail('','article-thumbnail', array( 'class' => 'img-fluid float-right')); ?>

        <small class="text-secondary" style="text-transform:uppercase;"> 
            <?php the_date(); ?> 
        </small>
        <h1 class="title font-italic"> 
            <a class="text-dark " href="<?php the_permalink(); ?> "><?php the_title(); ?> </a> 
        </h1>
        <p class="pubDate font-italic">By <?php the_author(); ?>  </p>
        
        <?php the_content(); ?>
        <?php endwhile; else : ?>
        <p> <?php esc_html_e('Sorry, no posts matched your criteria.'); ?> </p>
        <?php endif; ?>
    </div>


    </div>
</div>
</div>

<?php get_footer();?>
