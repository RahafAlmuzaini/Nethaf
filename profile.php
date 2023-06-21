<!DOCTYPE html>
<html lang="en">

<head>
  <title>ملفي الشخصي</title>
  <link href="https://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet">
  <link href="./assets/css/index.css" rel="stylesheet">
</head>
<?php
if (!isset($_SESSION)) {
  session_start();
}
include "./includes/config.php";
include "./includes/header.php";
include "./includes/head.php";
include "./includes/script.php";
$sql = "SELECT * FROM user WHERE id=$_SESSION[id]";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $fname = $row["fname"];
    $lname = $row["lname"];
    $username = $row["username"];
    $phone_number = $row["phone_number"];
    $email = $row["email"];
  }
}
?>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position:fixed; width: 100vw; z-index:1;">
    <div class="container-fluid">
      <a class="navbar-brand ml-auto" href="#"><img src="./assets/img/logo.png" height="90" width="150"></a>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 pr-5">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php#contact-us">تواصل معنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php#intiatives">مبادراتنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php#about-us">من نحن</a>
          </li>
          <li class="nav-item mr-auto">
            <a class="nav-link active" aria-current="page" href="user-page.php">الرئيسية</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <div class="col-2 flow-right" id="menu" style="position:fixed; padding-top:8.7%;">
    <div class="vertical-nav bg-white flow right" id="sidebar">

      <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0 text-center">الخدمات</p>

      <ul class="nav flex-column bg-white mb-0 text-center">
        <li class="nav-item">
          <a href="profile.php" class="nav-link text-dark font-italic bg-light">
            <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
            ملفي الشخصي
          </a>
        </li>
        <li class="nav-item">
          <a href="score.php" class="nav-link text-dark font-italic">
            <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
            نقاطي
          </a>
        </li>
        <li class="nav-item">
          <a href="i'm-for-that.php" class="nav-link text-dark font-italic">
            <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
            مبادرة أنا لها
          </a>
        </li>
        <li class="nav-item">
          <a href="leave-it-as-it-was.php" class="nav-link text-dark font-italic">
            <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
            مبادرة اتركه كما كان
          </a>
        </li>
        <li class="nav-item">
          <a href="partners.php" class="nav-link text-dark font-italic">
            <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
            شركاؤنا
          </a>
        </li>
        <div class="vertical-nav bg-white flow right" id="sidebar">
          <li class="nav-item">
            <a href="logout.php" class="nav-link text-dark font-italic">
              <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
              تسجيل الخروج
            </a>
          </li>
      </ul>

    </div>
  </div>
  </div>
  <div class="col-2 text-cenetr title" id="profile-card" style="padding-top:18%; padding-left:35%">
    <div class="card justify-content-center align-items-center " style="width: 30rem;">
      <div class="card-body">
        <h3 class="card-title p-3 text-center" id="intiative-title"><b> ملفي الشخصي</b></h3>
        <form method="POST" class="text-right">
          <div class="row">
            <div class="col">
              <div class="form-outline mb-3">
                <label>الإسم الأخير</label>
                <input type="text" id="form3Example4" name="lname" class="form-control form-control-lg text-right title" value="<?php echo $lname; ?> " />
              </div>
            </div>
            <div class="col">
              <div class="form-outline mb-3">
                <label>الإسم الأول</label>
                <input type="text" id="form3Example3" name="fname" class="form-control form-control-lg text-right title" value="<?php echo $fname; ?>" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-outline mb-3">
                <label> إسم المستخدم</label>
                <input type="text" id="form3Example4" name="username" class="form-control form-control-lg text-right title" value="<?php echo $username; ?> " />
              </div>
            </div>
            <div class="col">
              <div class="form-outline mb-3">
                <label>رقم الجوال</label>
                <input type="text" id="form3Example4" name="phone_number" class="form-control form-control-lg text-right title" value="<?php echo $phone_number; ?>" />
              </div>
            </div>
          </div>
          <div class="form-outline mb-3">
            <label> البريد الإلكتروني</label>
            <input type="email" id="form3Example4" name="email" class="form-control form-control-lg text-right title" value="<?php echo $email; ?>" />
          </div>
          <div class="d-flex justify-content-center align-items-center">
            <a href="#" class="btn btn-success m-2">تحديث البيانات</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>