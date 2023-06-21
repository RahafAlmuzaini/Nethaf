<!DOCTYPE html>
<html lang="en">
    <head>
      <title>تسجيل جديد</title>
      <link href="https://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet">
      <link href="./assets/css/index.css" rel="stylesheet">
    </head>
    <?php 
    if (!isset($_SESSION)) {
      session_start();
    }  
    include "./includes/header.php";
    include "./includes/head.php";
    include "./includes/script.php";
    unset($_SESSION['mismatch']);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname= $_REQUEST['fname'];
        $lname= $_REQUEST['lname'];
        $username= $_REQUEST['username'];
        $phone_number= $_REQUEST['phone_number'];
        $email= $_REQUEST['email'];
        $password= $_REQUEST['password'];
        $con_password= $_REQUEST['con_password'];
        if($password===$con_password){
          $encoded_password = password_hash($password, PASSWORD_DEFAULT);
          $sql = $mysqli->prepare('INSERT INTO user(fname, lname, username, email, phone_number, password, score) VALUES(?, ?, ?, ?, ?, ?, 30)');
          $sql->bind_param('ssssss', $fname, $lname, $username, $email, $phone_number, $encoded_password);
          if ($sql->execute()) {
              header("location: login.php");
        }
    }else{
      $_SESSION['mismatch']=true;
    }
}
    ?>
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
              <div class='alert alert-success title'>.عند التسجيل لأول مرة ستحصل على 30 نقطة مجانية</div>
              <h1 class="title m-2 p-2"><b>تسجيل حساب جديد  </b></h1>
              <?php 
              if(isset($_SESSION['mismatch'])){
                echo "<div class='alert alert-danger text-center title'>.كلمة المرور وتأكيد كلمة المرور غير متطابقتان</div>";
              }
              ?>
              <div class="form-outline mb-4 pt-2">
                <input type="text" id="form3Example3" name="fname" class="form-control form-control-sm text-right title" placeholder=" الإسم الأول" required />
              </div>
              <div class="form-outline mb-3">
                <input type="text" id="form3Example4" name="lname" class="form-control form-control-sm text-right title" placeholder="الإسم الأخير" required />
              </div>
              <div class="form-outline mb-3">
                <input type="text" id="form3Example4" name="username" class="form-control form-control-sm text-right title" placeholder="اسم المستخدم" required />
              </div>
              <div class="form-outline mb-3">
                <input type="text" id="form3Example4" name="phone_number" class="form-control form-control-sm text-right title" placeholder="رقم الجوال" required />
              </div>
              <div class="form-outline mb-3">
                <input type="email" id="form3Example4" name="email" class="form-control form-control-sm text-right title" placeholder="البريد الإلكتروني" required />
              </div>
              <div class="form-outline mb-3">
                <input type="password" id="form3Example4" name="password" class="form-control form-control-sm text-right title" placeholder=" كلمة المرور" required />
              </div>
              <div class="form-outline mb-3">
                <input type="password" id="form3Example4" name="con_password" class="form-control form-control-sm text-right title" placeholder=" تأكيد كلمة المرور" required />
              </div>
              <div class="text-center text-lg-start mt-4 pt-2">
                <input type="submit" value="تسجيل" name="submit" class="btn btn-success btn-lg title" style="padding-left: 2.5rem; padding-right: 2.5rem;">
              </div>
              <p class="text-center pt-3">هل لديك حساب؟ <a href="login.php">تسجيل الدخول</a></p>
            </form>
          </div>
   </body>