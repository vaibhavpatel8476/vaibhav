<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajax</title>
</head>

<body>
    <div>
        i am div
    </div>



<?php
$mysqli= new my



echo ;

?>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('div').click(function() {
                $('div').load("/abc.txt", function(response, status, xhr) {
                    alert(xhr.statusText);
                });
            });
        });
    </script>
</body>

</html>