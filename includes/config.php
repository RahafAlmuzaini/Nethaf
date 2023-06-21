<?php
// database connection
$mysqli = new mysqli("localhost", "user1", "", "nethaf");
if ($mysqli->connect_error) {
    die("Connection wrong: " . $con->connect_error);
}
//path the website
define("ROOT", __DIR__ . "/");
define(
    "HTTP",
    ($_SERVER["SERVER_NAME"] == "localhost")
        ? "http://localhost/Nethaf/"
        : "http://Nethaf.com/"
);