<?php
include 'Assets/Classes/DB.php';
include 'Assets/Classes/page.php';
include 'Assets/Classes/pages/SinglePage.php';
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scrolling Nav - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <?php include 'Assets/Pager/CreateMenu.php'?>

    <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>php CMS beginning</h1>
      </div>
    </header>

    <section id="about">
      <div class="container">
          <?php
          if(isset($_GET['page']))
          {
              $page = $_GET['page'];

              if(file_exists("Pages/".$page.".php"))
              {
                  include("Pages/".$page.".php");
              }
              else
              {
                  include("Pages/404.php");
              }
          }
          else
          {
              include("Pages/home.php");
          }
          ?>
      </div>
    </section>

    

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

  </body>

</html>