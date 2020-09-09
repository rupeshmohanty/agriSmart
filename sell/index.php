<?php
  include('../config.php');
  session_start();
  error_reporting(0);
  $msg = $_SESSION['msg'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGRiSmart</title>

    <!-- External css files -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Bootstrap css files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!----------------AOS------------------>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">AGRiSmart</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php#about">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php#categories">How can we help?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php#products">Our Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php#footer">Contact Us</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <!-- =============== Header part ends ============================== -->

      <!-- ====================== Form to sell raw goods ================= -->

        <div class="container mt-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
                <h1 class="text-center">Fill the details about the product!</h1>
                <hr class=" mb-2 mt-0 d-inline-block mx-auto" style="width: 300px; height: 2px;background-color: #28a745;"><br>
                <?php
                  if($msg == 'Success'){
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Your product is live now!</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
                <?php
                  } else {
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Sorry there was some error! Submit again!</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
                <?php
                  }
                ?>
                <div class="card-body">
                <form action="post.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" id="pname" name="pname" placeholder="Product Name" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="price" name="price" placeholder="Product Price" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="ptype" name="ptype" placeholder="What product do you want to sell?" required>
                    </div>


                    <div class="form-group">
                      <label for="exampleFormControlFile1">Product's Display Picture</label>
                      <input type="file" class="form-control-file" id="p_img" name="p_img" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Product quantity" required>
                    </div>

                    <div class="form-group">
                      <textarea name="details" id="details" placeholder="Product Details" cols="30" class="form-control" rows="10" required></textarea>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-outline-success" style="border-radius: 25px;">Submit</button>
                    </div>

                </form>
                </div>
            </div>
        </div>





       <!-- ========================Footer================================ -->
      <section id="footer">
        <div class="footer" style="background-color: #28a745;" data-aos="fade-up" data-aos-delay="300">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h4 class="mt-4" style="color: #ffffff;"><strong>AGRiSmart</strong></h4>
                <hr class=" mb-2 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px;background-color: #ffffff;">
                <p class="lead" style="color: #ffffff;">
                A digital platform to abridge the gap between the farmers and the consumers so here we are at your service keeping an aim to provide clean and nutritious food products for your households. And in addition to this provide farmers the latest updates regarding the Pesticides and Fertilisers which come into the market so that they will be able to utilise that for crop production.
                </p>
              </div>
              <div class="col-md-4">
                <h4 class="mt-4" style="color: #ffffff;"><strong>Useful Links</strong></h4>
                <hr class=" mb-2 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px;background-color: #ffffff;"><br>
                <a href="../index.php#about" class="lead" style="color: #ffffff;">About</a><br>
                <a href="../index.php#categories" class="lead" style="color: #ffffff;">How can we help?</a><br>
                <a href="../index.php#products" class="lead" style="color: #ffffff;">Products</a>
              </div>
              <div class="col-md-4">
                <h4 class="mt-4" style="color: #ffffff;"><strong>Contact Us</strong></h4>
                <hr class=" mb-2 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px;background-color: #ffffff;">
                <p class="lead" style="color: #ffffff;">AGRiSmart Technology LTD.</p>
                <p class="lead" style="color: #ffffff;">agrismart@gmail.com </p>
                <p class="lead" style="color: #ffffff;">Mobile no : 1234355453</p>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>
</html>