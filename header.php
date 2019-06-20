<!doctype html>
<html lang="en">
  <head>


  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
        .nav-primary {
            background-color: rgb(0, 57, 166);
        }

        .justify-content-center>a.nav-link:hover {
            background-color:white;
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
            margin-bottom:100px;
            padding:100px;
        }



    </style>

  </head>
  <body>
    
  <div class="container-fluid">

    <div class="row d-none d-lg-block">
        <div class="col ">
           
        <nav class="nav justify-content-end">
            <a class="nav-link active" href="#">Students</a>
            <a class="nav-link" href="#">Teachers</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </nav>

        </div>
    </div>
    <div class="row d-none d-lg-block">
        <div class="col  nav-primary">
           
        <nav class="nav justify-content-center">
            <a class="nav-link active" href="#">About</a>
            <a class="nav-link" href="#">Classes</a>
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link" href="#">Locations</a>
            <a class="nav-link" href="#">Giving</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </nav>

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