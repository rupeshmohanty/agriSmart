<?php
  include('./config.php');
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGRiSmart</title>

    <!-- External css files -->
    <link rel="stylesheet" href="./assets/css/style.css">

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
              <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#about">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#categories">How can we help?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#products">Our Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#footer">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="banner" style="background-image: url(./assets/images/bg.jpg);">
            <div class="welcome text-center">
                <h1 class="mt-4" style="display: inline-block;">Welcome!</h1>
                <p class="lead">
                “IF THE FARMER KNOWS HIS CUSTOMERS, HE WILL NEVER POISON THEIR FOOD.IF A CUSTOMER KNOWS THE FARMER GROWING HIS FOODS, THEY WONT BARGAIN WITH THEM”
                </p>
                <a href="index.php#about" class="btn btn-success mb-4">Take a tour!</a>
            </div>
      </div><br>
     
      <!-- ==========================About us=========================== -->
      <section id="about">
          <div class="container text-center" data-aos="fade-up" data-aos-delay="200">
            <h1 style="display: inline-block;">About Us</h1><br>
            <hr class=" mb-2 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px;background-color: #28a745;"><br>
            <div class="row" data-aos="fade-up" data-aos-delay="300">
                <div class="col-md-6 mt-4">
                    <p class="lead">
                    A digital platform to abridge the gap between the farmers and the consumers so here we are at your service keeping an aim to provide clean and nutritious food products for your households. And in addition to this provide farmers the latest updates regarding the Pesticides and Fertilisers which come into the market so that they will be able to utilise that for crop production.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="./assets/images/about.png" alt="" width="300" height="300">
                </div>
            </div>
          </div>
      </section><br><br>

      <!-- ==============Cards for selling and buying options!================= -->
      <section id="categories">
        <div class="text-center" class="mt-4" data-aos="fade-up" data-aos-delay="200">
            <h1 style="display: inline-block;">How can we help?</h1><br>
            <hr class=" mb-2 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px;background-color: #28a745;"><br>
        </div>     
        <div class="container mt-4" data-aos="fade-up" data-aos-delay="300">
            <div class="row">
                <!-- Buy -->
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="./assets/images/fertilisers.jpg" class="card-img" alt="..." height="210">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Buy</h5>
                              <p class="card-text">Buy crop products here!</p>
                              <a href="./buy" class="btn btn-outline-success">Buy crop products!</a>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>

                <!-- Sell -->
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="./assets/images/goods.jpg" class="card-img" alt="..." height="210">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Sell your products!</h5>
                              <p class="card-text">Sell your goods over here to reach maximum users!</p>
                              <a href="./sell" class="btn btn-outline-success">Sell raw goods!</a>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>  
      </section><br>

      <!-- =================Products section================================ -->
      <section id="products" class="mt-4">
        <div class="text-center" class="mt-4"  data-aos="fade-up" data-aos-delay="200">
          <h1 style="display: inline-block;">Our Products</h1><br>
          <hr class=" mb-2 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px;background-color: #28a745;"><br>
      </div>  
        <div class="container mt-4" data-aos="fade-up" data-aos-delay="300">
          <div class="row">
            <?php
              $product = "SELECT * FROM products LIMIT 3";
              $product_result = mysqli_query($con,$product) or die(mysqli_error($con));
              while($row = mysqli_fetch_assoc($product_result)) {
                $pid = $row['id'];
            ?>
            <div class="col-md-4 mt-4 mb-4">
                <div class="card">
                    <img src="./sell/products/<?php echo $row['p_img']; ?>" alt="" width="300" height="300">
                    <div class="card-body">
                        <div class="card-title">
                            <strong><?php echo $row['pname']; ?></strong>
                            <p class="text-muted">Price: Rs. <?php echo $row['price'] ?></p>
                            <p class="text-muted"><?php echo $row['details']; ?></p>
                            <div class="text-center">
                                <a href="./buy_product.php?pid=<?php echo $pid; ?>" style="border-radius: 25px;" class="btn btn-outline-success">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
                <?php
                $_SESSION['id'] = $pid;
              }
                ?>
              </div>
            </div>
      </section><br>


      <!-- ==================Testimonial section========================= -->
      <section id="testimonial">
        <div class="text-center" class="mt-4" data-aos="fade-up" data-aos-delay="200">
          <h1 style="display: inline-block;">Testimonials</h1><br>
          <hr class=" mb-2 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px;background-color: #28a745;"><br>
        </div>

        <div class="container mt-4" data-aos="fade-up" data-aos-delay="300">
          <div class="row">
            <div class="col-md-4">
              <img src="./assets/images/user.jpg" alt="" width="300" height="300">
              <div class="card-body">
                <div class="card-title">
                  Lorem Ipsum
                </div>
                <p class="lead">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio voluptas natus ullam! Magni fugiat nulla ab neque molestiae tempore fuga expedita, atque sunt minus animi debitis ipsam! Aperiam, iste unde!
                </p>
              </div>
            </div>

            <div class="col-md-4">
              <img src="./assets/images/user.jpg" alt="" width="300" height="300">
              <div class="card-body">
                <div class="card-title">
                  Lorem Ipsum
                </div>
                <p class="lead">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio voluptas natus ullam! Magni fugiat nulla ab neque molestiae tempore fuga expedita, atque sunt minus animi debitis ipsam! Aperiam, iste unde!
                </p>
              </div>
            </div>

            <div class="col-md-4">
              <img src="./assets/images/user.jpg" alt="" width="300" height="300">
              <div class="card-body">
                <div class="card-title">
                  Lorem Ipsum
                </div>
                <p class="lead">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio voluptas natus ullam! Magni fugiat nulla ab neque molestiae tempore fuga expedita, atque sunt minus animi debitis ipsam! Aperiam, iste unde!
                </p>
              </div>
            </div>
          </div>
        </div>
        
      </section>

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
                <a href="index.php#about" class="lead" style="color: #ffffff;">About</a><br>
                <a href="index.php#categories" class="lead" style="color: #ffffff;">How can we help?</a><br>
                <a href="index.php#products" class="lead" style="color: #ffffff;">Products</a>
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
