<?php

if (!isset($_SESSION)) {
  session_start();
}

$_SESSION['current_page'] = 'login';
include "./includes/header.php";
include "./includes/head.php";
include "./includes/script.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  # SQL command to check if there is registered account with the entered username
  if ($sql = $mysqli->prepare('SELECT id,username,fname,password FROM user WHERE username = ? ')) {
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    $sql->bind_param('s', $_REQUEST['username']);
    $sql->execute();
    // Store the result so we can check if the account exists in the database.
    $sql->store_result();
  
  # If the result of execting the SQL command is more than one row (There is a registered account with the eneterd username)
  if ($sql->num_rows > 0) {
        $sql->bind_result($id, $username, $fname, $password);
        $sql->fetch();
        if (password_verify($_REQUEST['password'], $password)) {
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['username'] = $username;
        $_SESSION['fname'] = $fname;
        $_SESSION['id'] = $id;
    
        header("location:user-page.php");
      } else {
        echo "Invalid username or password";
      }
    }
}
}
?>

<html lang="en">
<head>
  <title>تسجيل الدخول</title>
  <link href="https://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet">
  <link href="./assets/css/index.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width: 100vw; z-index:1;">
    <div class="container-fluid">
      <a class="navbar-brand ml-auto" href="#"><img src="./assets/img/logo.png" height="90" width="150"></a>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 pr-5">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php#contact-us">تواصل معنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login.php">تسجيل الدخول</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="sign-up.php">تسجيل</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php#intiatives">مبادراتنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php#about-us">من نحن</a>
          </li>
          <li class="nav-item mr-auto">
            <a class="nav-link active" aria-current="page" href="index.php">الرئيسية</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
      <div class="row justify-content-center align-items-center p-5 m-5">
            <form method="POST">
            <div class="text-center">
            </div>
              <h1 class="title m-2 p-2 text-center"><b>تسجيل الدخول</b></h1>
              <div class="form-outline mb-3">
                <input type="text" id="form3Example4" name="username" class="form-control form-control-lg text-right title" placeholder="اسم المستخدم" requiered />
              </div>
              <div class="form-outline mb-3">
                <input type="password" id="form3Example4" name="password" class="form-control form-control-lg text-right title" placeholder=" كلمة المرور" requiered />
              </div>
              <div class="text-center text-lg-start mt-4 pt-2">
                <input type="submit" name="submit"  value="دخول"class="btn btn-success btn-lg title" style="padding-left: 2.5rem; padding-right: 2.5rem;">
              </div>
              <p class="text-center pt-3"><a href="#">نسيت كلمة المرور؟</a></p>
            </form>
          </div>
    </body>