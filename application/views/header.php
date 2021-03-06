<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">

    <!-- style css nya -->
    <style type="text/css">
      /* navbar start*/
      .navbar-brand,.nav-link{
          font-family: Montserrat;
          color: white !important;
          text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
          display: inline-block;
      }

      .navbar-brand{
          font-weight: bold;
          font-size: 25px;
      }

      .nav-link {
          margin-right: 25px;
      }

      .nav-link:hover::after {
          content: '';
          display: block;
          border-bottom: 3px solid #74b9ff;
          width: 50%;
          margin: auto;
          padding-bottom: 3px;
          margin-bottom: -8px;
      }
      /* navbar end */

      /* jumbotron start*/
      .jumbotron{
          background-image: url('<?php echo base_url()?>assets/img/jumbotron-bg.jpg');
          background-size: cover;
          height:100vh;
          /* min-height:500px;
          max-height:1080px; */
          margin-top: -75px;
          margin-bottom: -50px;
          text-align: center;
          overflow: hidden;
          /* position: relative; */
      }

      .jumbotron .display-4, .jumbotron .display-7{
          color: white;
          text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
      }

      .jumbotron .display-4{
          margin-top: 180px;
      }

      .btn{
          margin-top: 30px;
          border-radius: 50px;
      }
      /* jumbotron end */
    </style>

    <title>Medgency!</title>
  </head>
  <body>

      <!-- ini navbar -->
      <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">MedGency</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">About</a>
                </li>
            </ul>
            </div>
        </div>
      </nav>
      <!-- akhir navbar -->

      <!-- ini jumbotron -->
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4"><span>Welcome</span> to <span>MedGency</span></h1>
          <h6 class="display-7">Medical <span>Service</span> You Can <span>Rely</span> On</h6>
          <a href="#" class="btn btn-primary">Get Started</a>
        </div>
      </div>
      <!-- akhir jumbotron -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>