<!DOCTYPE html>
<html lang="en">
    <head>
      <title>الرئيسية</title>
      <link href="https://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet">
      <link href="./assets/css/index.css" rel="stylesheet">
    </head>
    <?php 
    if (!isset($_SESSION)) {
      session_start();
    }  
    $_SESSION['current_page'] = 'index';
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
                <a class="nav-link active" aria-current="page" href="#contact-us">تواصل معنا</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">تسجيل الدخول</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="sign-up.php">تسجيل</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#intiatives">مبادراتنا</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#about-us">من نحن</a>
              </li>
              <li class="nav-item mr-auto">
                <a class="nav-link active" aria-current="page" href="#home">الرئيسية</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div id='home'
        class="p-5 text-center bg-image"
        style="
          background-image: url('./assets/img/home.png');
          height: 900px;  background-size:cover; background-repeat: no-repeat;">
        <div class="mask">
          <div class="d-flex justify-content-center align-items-center h-100 p-5">
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
      <section class="first-section p-5 m-5" id="about-us">
        <div class="container">
          <div class="text-center">
            <h2 class="section-heading pb-3" id="title">من نحن</h2>
            <img src="./assets/img/logo_ar_en.png" class="pb-5" height="190">

          </div>
          <div class="row justify-content-center text-justify ">
            <div class="col-md-8">
              <p class="text-muted text-center "> نِظَافْ هي منظمة غير ربحية تهدف إلى دعم استدامة البيئة وإلى تحقيق رؤية المملكة العربية السعودية 2030، التي تحثنا على حماية بيئتنا وتشجعنا على تبني ممارسات تدعم استدامتها</p>
              <p class="text-muted text-center">في نِظَافْ، نوفر العديد من التحديات التي تساهم إلى حدٍ كبير في تخفيف الممارسات السيئة مع البيئة، وتحث أبناء المجتمع عى الحفاظ على نظافة البيئة ونمائها وعدم الإضرار بها وذلك خلال توفير عدد من المكافأت لكل من يساهم بإحدى مبادرات نِظَافْ</p>
              <p class="text-muted text-center">متعاقدون مع عدة محال تجارية ومتاجر عبر الانترنت لتقديم خصومات وقسائم شرائية لمستخدمي "نِظَافْ، وذلك من خلال تحويل نقاط المبادرات إلى عملة الريال السعودي والاستفادة منها."</p>
            </div>
          </div>
        </div>
      </section>
      <section class="second-section" id="intiatives">
        <div class="container">
          <div class="text-center">
            <h2 class="section-heading text-white section-title p-4 m-4" id="title">مبادراتنا</h2>
          </div>
          <div class="row justify-content-center text-center">
            <div class="col-md-6">
              <div class="card" style="width: 30rem;">
                <div class="card-body">
                  <h3  class="card-title pt-3 pb-3" id="intiative-title"><b>.المبادرة الثانية: اتركه كما كان</b></h3>
                  <p class="card-text">
                    <p class="text-right"><b>:الهدف</b></p>
                    <p class="text-right" >تشجيع أبناء المجتمع على القيام بمبادرة ترك الأماكن نظيفةً كما كانت بل وأفضل مما كانت عليه، وذلك من خلال تصويرهم للمكان قبل جلوسهم فيه وبعد انتهاؤهم منه، وبالاعتماد على تقنيات الذكاء الاصطناعي سيتم التحقق من نظافة المكان</p>
                    <br>
                    <p class="text-right"><b>:المكافأة</b></p>
                    <p class="text-right">.خمسة عشر نقطة (15)</p>
                  <a href="#" class="btn btn-success">ابدأ الآن</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card" style="width: 30rem;">
                <div class="card-body">
                  <h3  class="card-title p-3" id="intiative-title"><b>.المبادرة الأولى: أنا لها</b></h3>
                  <p class="card-text">
                  <p class="text-right"><b>:الهدف</b></p>
                  <p class="text-right" >تشجيع أبناء المجتمع على القيام بمبادرة تنظيف الأماكن الغير نظيفة والتي تكتظ بكل ما هو ضار بالبيئة وإعادة تأهيلها, وذلك من خلال تصويرهم للمكان الغير نظيف قبل و بعد,  وبالاعتماد على تقنيات الذكاء الاصطناعي سيتم التحقق من نظافة المكان</p>
                  <p class="text-right"><b>:المكافأة</b></p>
                  <p class="text-right">.عشر نقاط (10)</p>
                  <a href="#" class="btn btn-success">ابدأ الآن</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="first-section p-5 m-5" id="contact-us">
        <div class="container">
          <div class="text-center">
            <h2 class="section-heading pb-5" id="title">تواصل معنا</h2>
            <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="./assets/img/contact-us.png" class="img-fluid" alt="Sample image">
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form method="POST">
            <div class="text-center">
              <h2 class="section-heading text-white section-title p-4 m-4" id="title">مبادراتنا</h2>
            </div>
              <!-- Name input -->
              <div class="form-outline mb-4">
                <input type="name" id="form3Example3" name="name" class="form-control form-control-lg text-right title" placeholder="الإسم" />
              </div>
              <!-- Email input -->
              <div class="form-outline mb-3">
                <input type="email" id="form3Example4" name="email" class="form-control form-control-lg text-right title" placeholder="الإيميل" />
              </div>
              <div class="mb-3">
                <textarea class="form-control form-control-lg text-right title" id="message" name="message" rows="5" placeholder="الرسالة"></textarea>
              </div>
              <div class="d-flex justify-content-between align-items-center">
              </div>
              <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" name="submit" class="btn btn-success btn-lg title" style="padding-left: 2.5rem; padding-right: 2.5rem;">إرسال </button>
              </div>
            </form>
          </div>
        </div>
        </div>
      </section>
      <section class="vh-100">
      <div class="container-fluid h-custom">

      </div>
      </div>
      </div>
    </section>
    </body>
</html>