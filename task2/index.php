<?php
session_start();

if(isset($_SESSION['p_name'])){
    header("Location: http://localhost/vaibhav/task2/profile.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Form</title>
</head>

<body>

    <div class=" container border broder-dark p-5 m-auto ">
        <form action="profile.php" method="post" >

            <div class="row">

                <label for="name">Name : </label>
                <input type="text" class="form-control" name="name" id="name">
                <label for="name">Email : </label>
                <input type="email" class="form-control" name="email" id="email">
                <label for="name">Phone Number : </label>
                <input type="number" class="form-control" name="phone_number" id="phone_number">
                <input type="submit"  class="btn btn-primary"  >
            </div>
        </form>
    </div>

<?php




// print_r($_SESSION);
// echo session_id();




?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>