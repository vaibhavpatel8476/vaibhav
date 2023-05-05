<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gymnasia The Fitness Club | About</title>
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
                    <a class="nav-linking" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-linking " href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-linking" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Registration</a>
                </li>

            </ul>
        </div>
    </nav>

    <!-- header section ends -->

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
                            <div class="col-12"><input type="text" class="form-control mb-1" name="name" id="name" placeholder="Enter your name"></div>
                        </div>
                        <div class="row">
                            <div class="col-12"><input type="email" class="form-control mb-1" name="email" id="email" placeholder="Enter your Email"></div>

                        </div>
                        <div class="row">
                            <div class="col-12"><input type="text" class="form-control mb-1" name="gender" id="gender" placeholder="Enter your gender"></div>

                        </div>
                        <div class="row">
                            <div class="col-12"><input type="number" class="form-control mb-1" name="age" id="age" placeholder="Enter your Age"></div>

                        </div>
                        <div class="row">
                            <div class="col-6"><input type="number" class="form-control mb-1" name="weight" id="weight" placeholder="Enter your weight(in kg)"></div>
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


    <section class="classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Classes</span>
                        <h2>WHAT WE CAN OFFER</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="./resources/bodybuilding-strength-concept.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>STRENGTH</span>
                            <h5>Weightlifting</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="resources/person-doing-indoor-cycling.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Cardio</span>
                            <h5>Indoor cycling</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="./resources/close-up-crossfit-workout-weight.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>STRENGTH</span>
                            <h5>Kettlebell power</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="./resources/young-woman-boxer-training-gym.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Training</span>
                            <h4>Boxing</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- gallery section -->

    <div class="album py-5 bg-dark">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="./resources/gymnasia-the-fitness-club-lucknow-0fayefshjk.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="./resources/gymnasia-the-fitness-club-lucknow-2kbcm5m122.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="./resources/gymnasia-the-fitness-club-lucknow-snpk6kgvu3.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="./resources/gymnasia-the-fitness-club-lucknow-x5nhi5o23u.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="./resources/gymnasia-the-fitness-club-lucknow-x5nhi5o23u.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact us -->

    <div class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Contact Us </span>
                        <h2>Ask your query </h2>
                    </div>
                </div>
            </div>
            <form action="aboutus.php" method="post">
                <div class="row">
                    <div class="col-12"><input type="text" class="form-control mb-1" name="name" id="name" placeholder="Enter your name"></div>
                </div>
                <div class="row">
                    <div class="col-12"><input type="email" class="form-control mb-1" name="email" id="email" placeholder="Enter your email"></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <textarea class="form-control mb-1" name="desc" id="desc" cols="20" rows="10" placeholder="Enter your message"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn primary-btn  btn-normal " style="color: white; border: 1px solid white;">Submit</button></div>
                </div>

            </form>
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
                                <a href="www.facebook.com"><i class="fi fi-brands-facebook"></i></a>
                                <a href="www.telegram.com"><i class="fi fi-brands-telegram"></i></a>
                                <a href="www.gmail.com"><i class="fi fi-sr-envelope"></i></a>
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
$desc = $_POST['desc'];

$sql="INSERT INTO `user_detail`.`contactus` ( `name`, `email`,`desc`, `dt`) VALUES ( '$name', '$email', '$desc ', current_timestamp());";

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