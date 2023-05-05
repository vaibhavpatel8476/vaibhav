<?php
session_start();
session_unset();
session_destroy();

header("Location: http://localhost/vaibhav/hunarr/index.php", true, 301);
?>
