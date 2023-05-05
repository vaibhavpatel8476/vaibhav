<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gymnasia The Fitness Club</title>
    <link rel="stylesheet" href="neww.css">

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <!-- header section -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand m-auto" href="./index.html">
            <img src="./resources/logo.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top m-1">GYMNASIA
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav justify-content-center">
                <li class="nav-item active">
                    <a class="nav-linking" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-linking " href="./aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-linking" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Registration</a>
                </li>

            </ul>
        </div>
    </nav>






    <!-- header section ends -->

    <!-- carousel -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./resources/gymnasia_bg.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./resources/gymnasia_bg.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
    </div>

    <!-- chooseing section  -->
    <section class="choseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Why chose us?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-034-stationary-bike"><img src="./resources/treadmill-gym-svgrepo-com.svg"  width="60%" alt=""></span>
                        <h4>Modern equipment</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-033-juice"><img src="./resources/juice-svgrepo-com.svg" color="white" width="60%" alt=""></span>
                        <h4>Healthy nutrition plan</h4>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-002-dumbell"><img src="./resources/dumbbell-gym-svgrepo-com.svg"  width="60%" alt=""></span>
                        <h4>Proffesponal training plan</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-014-heart-beat"><img src="./resources/heartbeat-svgrepo-com.svg"  alt=""></span>
                        <h4>Unique to your needs</h4>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- price section  -->
    <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Plan</span>
                        <h2>Choose your pricing plan</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>Class drop-in</h3>
                        <div class="pi-price">
                            <h2>$ 39.0</h2>
                            <span>SINGLE CLASS</span>
                        </div>
                        <ul>
                            <li>Free riding</li>
                            <li>Limited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                            <li>Month to mouth</li>
                            <li>Time restriction</li>
                        </ul>
                        <button type="button" class="primary-btn pricing-btn m-auto" style="color:#fff;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Enroll Now
                          </button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>12 Month unlimited</h3>
                        <div class="pi-price">
                            <h2>$ 99.0</h2>
                            <span>SINGLE CLASS</span>
                        </div>
                        <ul>
                            <li>Registration included</li>
                            <li>Free riding</li>
                            <li>Unlimited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                            <li>No time restriction</li>
                        </ul>
                        <button type="button" class="primary-btn pricing-btn m-auto" style="color:#fff;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Enroll Now
                          </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- registration section -->

    <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg" style="background-image: url(./resources/banner-bg.jpg.webp);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>registration now to get more deals</h2>
                        <div class="bt-tips">Where health, beauty and fitness meet.</div>
                        <button type="button" class="btn primary-btn  btn-normal" style="color:#fff;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Register Now
                          </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> Register Yourself</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="index.php" method="POST">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12"><input type="text" class="form-control mb-1" name="name" id="name" placeholder="Enter your name" required></div>
                        </div>
                        <div class="row">
                            <div class="col-12"><input type="email" class="form-control mb-1" name="email" id="email" placeholder="Enter your Email" required></div>

                        </div>
                        <div class="row">
                            <div class="col-12"><input type="text" class="form-control mb-1" name="gender" id="gender" placeholder="Enter your gender" required></div>

                        </div>
                        <div class="row">
                            <div class="col-12"><input type="number" class="form-control mb-1" name="age" id="age" placeholder="Enter your Age"></div>

                        </div>
                        <div class="row">
                            <div class="col-6"><input type="number"  class="form-control mb-1" name="weight" id="weight" placeholder="Enter your weight(in kg)"></div>
                            <div class="col-6"><input type="number" class="form-control mb-1" name="height" id="height" placeholder="Enter your Height(in Cm)"></div>

                        </div>
                        <div class="row">
                            <div class="col-12"><input type="number" class="form-control mb-1" name="phone_number" id="phone_number" placeholder="Enter your phone number"></div>

                        </div>
                        <div class="row">
                            <div class="col-12"><input type="text" class="form-control mb-1" name="address" id="address" placeholder="Enter your Address"></div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- footer section -->

    <footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg" style="background-image: url(&quot;img/footer-bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <div class="fw-info-box">
                            <img src="img/icons/1.png" alt="">
                            <div class="fw-info-text">
                                <h4 style="color: #fff;">Address</h4>
                                <p>Sector 6/893, Vikas Nagar, <br>Lucknow - 226022 (Near Power House).</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">

                        <div class="fw-info-box">
                            <img src="img/icons/2.png" alt="">
                            <div>
                                <h4 style="color: #fff;"> Contact Number</h4>
                                <p> +91 7942692194</p>
                                <p> +91 7942692194</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <div class="fw-info-box">
                            <div class="fw-info-text">
                                <h4 style="color: #fff;">E-mail</h4>
                                <p> gymnasia1@gmail.com</p>
                                <p> gymnasia1@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <div class="fw-info-box">
                            <img src="img/icons/4.png" alt="">
                            <div class="social-links">
                                <h4 style="color: #fff;">Social Media</h4>
                                <a href="#"><i class="fi fi-brands-whatsapp"></i></a>
                                <a href="#"><i class="fi fi-brands-facebook"></i></a>
                                <a href="#"><i class="fi fi-brands-telegram"></i></a>
                                <a href="#"><i class="fi fi-sr-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row text-center">
                <div class="col-md-12 order-2 order-md-1 ">
                    <div class="copyright">
                        <p>
                            Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | Gymnasia<br>Terms & Conditions | Privacy Policy
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <?php
if (isset($_POST['name'])) {
    


$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Check the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
   
$name = $_POST['name'];
$email = $_POST['email'];
$gender =$_POST['gender'];
$age=$_POST['age'];
$weight=$_POST['weight'];
$phone_number=$_POST['phone_number'];
$height=$_POST['height'];
$address=$_POST['address'];



$sql="INSERT INTO `user_detail`.`details` ( `name`, `email`, `gender`, `age`, `weight`, `height`, `phone_number`, `address`, `dt`) VALUES ( '$name', '$email', '$gender', '$age', '$weight', '$height', '$phone_number', '$address ', current_timestamp());";

// echo $sql;
if ($conn->query($sql)== true) {
    // echo "sucess";
    
}
else{ "error $sql <br> $conn->error";    
}

$conn->close();

}
?>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>