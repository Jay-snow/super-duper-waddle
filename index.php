  <style>
    .articles {
      box-shadow: 2px 2px 4px grey, -2px 3px 4px grey;

      border-top: 3px solid #007bff;

    }
  </style>
  
  <?php get_header(); ?>

  <div class="container-fluid">
    <div class="row">

      <div class="col-7  mt-2 articles ml-4">
        <h2> Top articles </h2>
        <?php
          if ( have_posts() ) : while ( have_posts() ) : the_post();
              get_template_part( 'content', get_post_format() );
        endwhile; endif;
        ?>
      </div>

      <div class="col-2">
        <h2> Upcoming Events </h2>
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