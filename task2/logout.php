<?php
session_start();
session_unset();
session_destroy();

header("Location: http://localhost/vaibhav/task2/index.php", true, 301);
?>
