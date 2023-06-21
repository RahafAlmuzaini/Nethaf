<?php
//clear the session
if (!isset($_SESSION)) {
    session_start();
}
session_destroy();
//redirect to the home page
header("Location: login.php");
?>