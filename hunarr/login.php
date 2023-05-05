<?php
session_start();

$err = true;
if(isset($_SESSION['fname'])){
    header("Location: http://localhost/vaibhav/hunarr/display.php");
}



// ========================first name validation=====================
if (isset($_POST['fname']) && $_POST['fname'] != "") {
    if (preg_match('/[0-9]/', $_POST['fname'])) {
        echo 'No digits are allowed <br>';
        $err = true;
    } elseif (preg_match('/^[a-z]/', $_POST['fname'])) {
        $_SESSION['fname'] = $_POST['fname'];
        $err = false;
    }
} else if(isset($_POST['sbmt'])){
    echo "first name cannot be empty <br>";
    $err = true;
}

// ========================last name validation=====================
if (isset($_POST['lname']) && $_POST['lname'] != "") {
    
    if (preg_match('/[0-9]/', $_POST['lname'])) {
        echo 'No digits are allowed <br>';
        $err = true;
    } elseif (preg_match('/^[a-z]/', $_POST['lname'])) {
        $_SESSION['lname'] =$_POST['lname'];
        $err = false;
    }
} else if(isset($_POST['sbmt'])){
    echo "last name cannot be empty <br>";
    $err = true;
}
// =======================date validation===========

if (isset($_POST['dob'])) {
    $todaydate = date('Y-m-d');

    if ($_POST['dob'] >= $todaydate) {
        echo 'date is greater than today date <br>';
        $err = true;
    } else {
        $_SESSION['dob'] = $_POST['dob'];
        $err = false;
    }
}else if(isset($_POST['sbmt'])){
    echo "select a date <br>";
    $err = true;
}


// =============phone number validation============


if (isset($_POST['phone_number'])) {
    if (preg_match('/\./', $_POST['phone_number'])) {
        echo 'dots are not allowed';
        $err = true;
    } else if (strlen($_POST['phone_number']) < 10 || strlen($_POST['phone_number']) > 10) {
        echo "digits are not equal to 10 <br>";
        $err = true;
    } else {
        $_SESSION['phone_number'] = $_POST['phone_number'];
        $err = false;
    }
} else if(isset($_POST['sbmt'])){
    echo "enter phone number <br>";
    $err = true;
}

// ======gender=======

if (isset($_POST['gender'])) {
    $_SESSION['gender'] = $_POST['gender'];
    $err = false;
} else if(isset($_POST['sbmt'])){
    echo "select gender <br>";
    $err = true;
}

// ============password===========

if (isset($_POST['pass'])) {
    if (isset($_POST['cpass'])) {
        if ($_POST['pass'] == $_POST['cpass']) {
            $_SESSION['cpass'] = $_POST['cpass'];
            $err = false;
        } else {
                echo 'enter password <br>';
                $err = true;
            }
    }  else if(isset($_POST['sbmt'])){
        echo "enter password <br>";
        $err = true;
    }
} else if(isset($_POST['sbmt'])){
    echo "enter password <br>";
    $err = true;
}


// ===============qualification============

if(isset($_POST['qualification']) && ($_POST['qualification'])!=""){

    $_SESSION['qualification'] = $_POST['qualification'];
    $err=false;
} else if(isset($_POST['sbmt'])){
    echo "select qualification <br>";
    $err = true;
}


// ===============Address============


if(isset($_POST['address']) && ($_POST['address'])!=""){
    $_SESSION['address'] = $_POST['address'];
    $err=false;
}else if(isset($_POST['sbmt'])){
    echo "enter address <br>";
    
    $err = true;
}







// ================file upload=============

if(isset($_FILES['formfile'])){
    $target="uploads/";
    $filepath=$target.basename($_FILES['formfile']['name']);
    // echo $filepath;
    // print_r($_FILES['formfile']['tmp_name']);

    if (move_uploaded_file($_FILES['formfile']['tmp_name'], $filepath)) {
        $_SESSION['formfile']=$filepath;
       $err=false;
    } else {
        $err = true;
        echo "Possible file upload !\n";
    }
}else if(isset($_POST['sbmt'])){
    echo "upload a file <br>";
    
    $err = true;
}





if (isset($_POST['mail'])) {
    if(preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',$_POST['mail'])){
        $_SESSION['mail'] = $_POST['mail'];
        $err=false;

    }
    else{
        $err=true;
    }
}else if(isset($_POST['sbmt'])){
    echo "email <br>";
    
    $err = true;
}


if($err==false){
    header("Location: http://localhost/vaibhav/hunarr/display.php");
}else{
//   echo "alert('')";
}





?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   


</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .formoutter {
        border: 1px solid grey;
        width: 60%;
        display: block;
    }
</style>

<body>

    <div class="formoutter mt-5 mx-auto justify-content-center d-flex rounded-5">
        <div class="container mt-5">
            <h3 class="text-center">Register Yourself</h3>
            <form action="login.php" method="post" class="row" onsubmit="return empty()" enctype="multipart/form-data" autocomplete="off">
                <div class="col-md-6 mb-1">
                    <label for="fname" class="form-label">First Name : </label>
                    <input type="text" class="form-control" name="fname" id="fname" onkeyup="namecheck(this.id)">
                    <small class="text-danger" id="fnameerror"></small>
                </div>
                <div class="col-md-6 mb-1">
                    <label for="lname" class="form-label">Last Name : </label>
                    <input type="text" class="form-control" name="lname" id="lname" onkeyup="namecheck(this.id)">
                </div>
                <div class="col-md-12 mb-1">
                    <label for="dob" class="form-label">Date of Birth :</label>
                    <input type="date" class="form-control" name="dob" id="dob" oninput="checkdate()" required>
                    <small class="text-danger" id="doberr"></small>
                </div>
                <div class="col-md-12  mb-1 ">
                    <label for="phone_number" class="form-label">Phone Number : </label>
                    <input type="number" class="form-control" id="phone_number" name="phone_number" onkeyup="phonecheck()" required>
                    <small class="text-danger" id="numerr"></small>
                </div>
                <div class="col-md-12 mb-1">
                    <p class="mb-1">Gender:</p>
                    <input type="radio" name="gender" value="male" required>
                    <label for="male">MALE</label>
                    <input type="radio" name="gender" value="female">
                    <label for="female">FEMALE</label>
                    <input type="radio" name="gender" value="others">
                    <label for="others">OTHERS</label>

                </div>
                <div class="col-md-12 mb-1">
                    <label for="email" class="form-label">E - mail : </label>
                    <input type="email" class="form-control" id="email" name="mail" required>
                </div> 
                <div class="col-md-12 mb-1">
                    <label for="pass" class="form-label">Password : </label>
                    <input type="password" id="pass" name="pass" class="form-control" required>
                </div>
                <div class="col-md-12 mb-1">
                    <label for="cpass" class="form-label">Confirm Password : </label>
                    <input type="password" id="cpass" class="form-control" name="cpass" onkeyup="matchpass()" required>
                    <small class="text-danger" id="passerror"></small>
                </div>
                <div class="col-md-12 mb-1">
                    <p class="mb-1"> Qualification:</p>
                    <select name="qualification[]" class="form-select" id="qualification" aria-label="multiple select example" multiple >
                        <option value="">---select an option---</option>
                        <option value="highschool">high school</option>
                        <option value="intermidiate">Intermediate</option>
                        <option value="graduation">Graduation</option>
                    </select>

                </div>
                <div class="col-md-12 mb-1">
                    <label for="address">Address : </label>
                    <textarea name="address" id="address" class="form-control"  ></textarea>
                </div> 
                <div class="mb-3 ">
                    <label for="formfile" class="form-label">Add your file :</label>
                    <input class="form-control" type="file" name='formfile' accept=".pdf" id="formfile"  required onchange="validate()" >
                    <small class="text-danger" id="fileerr"></small>
                </div>

                <button type="submit" id="submit" name="sbmt" class="btn btn-primary col-lg-1 col-sm-4 m-auto mb-4 ">Submit</button>
            </form>
        </div>


    </div>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe " crossorigin="anonymous "></script>

    <script src="js/loginform.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script>
        function empty() {
            let a = $('small').text();
            if (a == '') {
                return true;
            } else {
                alert("values are incorrect");
                return false;
            }
        }

      
    </script>
</body>

</html>