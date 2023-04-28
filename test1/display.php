<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><?php
$language=$_POST['language'];
$content_type=$_POST['content_type'];
$category_type=$_POST['category_type'];
$sub_title=$_POST['sub_title'];
$description=$_POST['description'];
$image=$_POST['image'];
$provider=$_POST['provider'];
$price=$_POST['price'];
$Discount=$_POST['Discount'];








echo 'language = '. $language .'<br>';
echo 'content_type = '. $content_type .'<br>';
echo 'category_type = '. $category_type.' <br>';
echo 'sub_title = '. $sub_title .'<br>';
echo 'description = '. $description.' <br>';
echo 'image = '. $image.' <br>';
echo 'provider = '. $provider.' <br>';
echo 'Discount = '. $Discount.' <br>';


    ?>
</body>
</html>