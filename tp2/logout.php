<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);

session_destroy();
echo "<script>document.location='login.php'</script>";

?>