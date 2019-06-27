
  <?php get_header(); ?>
  <style>
    .articles {
      box-shadow: 2px 2px 4px #dedede, -2px 3px 4px #dedede;

      border-top: 5px solid #007bff;

    }
  </style>
  
  <div class="container-fluid mx-auto">
    <div class="row">

    <div class="col-md-2">
    </div>

      <div  class="col-12 col-md-6  mt-md-2 articles ml-md-4">
        <div class="mt-2" style="display:flex;justify-content:space-between">
          <h3 class="mb-4 font-weight-bold" > Top Articles </h3>
          <h5> <a href="">MORE</a> </h5>
       </div>
        <?php
          if ( have_posts() ) : while ( have_posts() ) : the_post();
              get_template_part( 'content', get_post_format() );
        endwhile; endif;
        ?>

        
      </div>

      <div class="col-12 col-md-2 articles mt-md-2 text-center  ml-md-4">

        <div id="sidebar-primary" class="sidebar ">
    <?php if ( is_active_sidebar( 'primary' ) ) : ?>
        <?php dynamic_sidebar( 'primary' ); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
        
    <?php endif; ?>
</div>
      </div>



    </div>
  </div>


  
  <?php get_footer(); ?>

<?php get_pages(); ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>