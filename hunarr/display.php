<?php
session_start();
if (!isset($_SESSION['fname'])) {
    header('Location: http://localhost/vaibhav/hunarr/login.php');
}


?>







<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <span class="fs-4" style="text-transform: uppercase;"><?php echo $_SESSION['fname']." "; echo $_SESSION['lname']; ?></span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            </ul>
        </header>
    </div>

    <div class="container">
    <h1 style="text-transform: capitalize;">Hello, <?php echo $_SESSION['fname']; ?></h1>
    <div class="about-desc">
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis, iusto distinctio impedit quas deserunt aliquid quod sed iste laudantium soluta quae repellendus molestiae, fuga cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta velit beatae repellendus officia architecto aliquid ex, porro facere excepturi alias accusamus non! Maxime odit illum at fugiat, impedit debitis velit earum! Repellendus earum mollitia consectetur, nemo laudantium doloribus, eos quod libero corporis eum sapiente perspiciatis, assumenda praesentium placeat exercitationem hic.

    </div>
        <div class="row">
            <div class="col-md-6 col-md-push-1 animate-box fadeInUp animated">
                <div class="about-desc">

                    <div class="desc">
                        <div class="rotate">
                            <h2 class="heading">About</h2>
                        </div>

                        <div class="row"> 
                            <p><strong>Date of Birth :</strong> <?php echo $_SESSION['dob']; ?></p>
                        </div>
                        <div class="row"> 
                            <p><strong>Phone Number :</strong> <?php echo $_SESSION['phone_number']; ?></p>
                        </div>
                        <div class="row"> 
                            <p><strong>Gender :</strong> <?php echo $_SESSION['gender']; ?></p>
                        </div>
                        <div class="row"> 
                            <p><strong>Password :</strong> <?php echo $_SESSION['cpass']; ?></p>
                        </div>
                        <div class="row"> 
                            <p><strong>Qualificaton :</strong> <?php foreach($_SESSION['qualification'] as $val){
                                echo $val.",";
                            } ?></p>
                        </div>
                        <div class="row"> 
                            <p><strong>Address :</strong> <?php echo $_SESSION['address']; ?></p>
                        </div>
                        <div class="row"> 

                            <p><strong>File :</strong> <a href="<?php echo $_SESSION['formfile']; ?>" target="_blank">Click me</a></p>
                        </div>
                        <p class="colorlib-social-icons">
                            <a href="#"><i class="icon-facebook4"></i></a>
                            <a href="#"><i class="icon-twitter3"></i></a>
                            <a href="#"><i class="icon-googleplus"></i></a>
                            <a href="#"><i class="icon-dribbble2"></i></a>
                        </p>
                        <p><a href="logout.php" class="btn btn-primary btn-outline">Logout</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>