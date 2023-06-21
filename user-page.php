<!DOCTYPE html>
<html lang="en">

<head>
  <title>حسابي</title>
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
            <a class="nav-link active" aria-current="page" href="#intiatives">مبادراتنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php#about-us">من نحن</a>
          </li>
          <li class="nav-item mr-auto">
            <a class="nav-link active" aria-current="page" href="">الرئيسية</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="col-2 flow-right" style="position:absolute; padding-top:8.7%;">
    <div class="vertical-nav bg-white flow right" id="sidebar">

      <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0 text-center">الخدمات</p>

      <ul class="nav flex-column bg-white mb-0 text-center">
        <li class="nav-item">
          <a href="profile.php" class="nav-link text-dark font-italic">
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
  <div id='home' class="p-5 text-center bg-image" style="
          background-image: url('./assets/img/home.png');
          height: 900px;  background-size:cover; background-repeat: no-repeat; ">
    <div class="mask">
      <div class="d-flex justify-content-center align-items-center h-100 w-100 p-1">
        <div class="text-white">
          <br><br><br><br><br><br>
          <h1 class="title pt-5 mb-3" style="vertical-align:middle">نِظَافْ</h1>
          <h5 class=" title mb-3" style="vertical-align:middle">"..لنحمي الغِلَافْ"</h4>
            <br><br>
            <h5 class=" title mb-3" style="vertical-align:middle">معاً لبيئةٍ أفضل، و حياةٍ أفضل</h4>
              <a class="btn btn-outline-light btn-lg" href="sign-up.php" role="button">انضم معنا</a>
        </div>
      </div>
    </div>
  </div>

  </div>
  <section class="second-section" id="intiatives">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-white section-title p-4 m-4" id="title">مبادراتنا</h2>
      </div>
      <div class="row justify-content-center text-center">
        <div class="col-md-6">
          <div class="card" style="width: 30rem;">
            <div class="card-body">
              <h3 class="card-title pt-3 pb-3" id="intiative-title"><b>.المبادرة الثانية: اتركه كما كان</b></h3>
              <p class="card-text">
              <p class="text-right"><b>:الهدف</b></p>
              <p class="text-right">تشجيع أبناء المجتمع على القيام بمبادرة ترك الأماكن نظيفةً كما كانت بل وأفضل مما كانت عليه، وذلك من خلال تصويرهم للمكان قبل جلوسهم فيه وبعد انتهاؤهم منه، وبالاعتماد على تقنيات الذكاء الاصطناعي سيتم التحقق من نظافة المكان</p>
              <br>
              <p class="text-right"><b>:المكافأة</b></p>
              <p class="text-right">.خمس عشرة نقطة (15)</p>
              <a href="leave-it-as-it-was.php" class="btn btn-success">ابدأ الآن</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card" style="width: 30rem;">
            <div class="card-body">
              <h3 class="card-title p-3" id="intiative-title"><b>.المبادرة الأولى: أنا لها</b></h3>
              <p class="card-text">
              <p class="text-right"><b>:الهدف</b></p>
              <p class="text-right">تشجيع أبناء المجتمع على القيام بمبادرة تنظيف الأماكن الغير نظيفة والتي تكتظ بكل ما هو ضار بالبيئة وإعادة تأهيلها, وذلك من خلال تصويرهم للمكان الغير نظيف قبل و بعد, وبالاعتماد على تقنيات الذكاء الاصطناعي سيتم التحقق من نظافة المكان</p>
              <p class="text-right"><b>:المكافأة</b></p>
              <p class="text-right">.عشر نقاط (10)</p>
              <a href="i'm-for-that.php" class="btn btn-success">ابدأ الآن</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
  </div>
  </div>
  </section>
</body>

</html>