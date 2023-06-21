<!DOCTYPE html>
<html lang="en">
    <head>
      <title>أنا لها </title>
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

    $_SESSION['fPrint']=false; 
    $_SESSION['sPrint']=false; 

    if(isset($_REQUEST['fCheck'])){
      $_SESSION['fPrint']=true;
    }
    if(isset($_REQUEST['sCheck'])){
      $_SESSION['sPrint']=true;
       $sql = "UPDATE user SET score = score+15 WHERE id=$_SESSION[id]";
       mysqli_query($mysqli, $sql);
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
            <a href="profile.php" class="nav-link text-dark font-italic ">
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
            <a href="i'm-for-that.php" class="nav-link text-dark font-italic bg-light">
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
        <div class="row">
        <div class="col-2 text-cenetr title text-center " id="uploadDiv"style="padding-top:9.5%; padding-left:20%">
              <div class="card justify-content-center align-items-center " style="width: 30rem;">
                <div class="card-body">
                  <form method="post">
                  <?php 
                    if(isset($_SESSION['sPrint'])){
                      if($_SESSION['sPrint']){
                        echo "<div class='alert alert-success'>.تم إضافة 15 نقطة إلى نقاطك </div>";
                      }
                    }
                    ?>
                    <label for="formFileMultiple m-5" class="form-label"><b>: قم بتحميل صورة المكان المراد تنظيفه</b></label>
                    <input class="form-control success mt-5 mb-5" type="file" id="formFileMultiple"  />
                    <input type="submit" class="btn btn-success mb-5" name="fCheck" value="تحقق">
                    <?php 
                    if(isset($_SESSION['fPrint'])){
                      if($_SESSION['fPrint']){
                        echo "<p style='color:green'>.تم التحقق بنجاح</p>";
                      }
                    }
                    ?>
                    <br>
                    <label for="formFileMultiple m-5" class="form-label"><b>: قم بتحميل صورة المكان بعد إضافة لمساتك الخاصة عليه</b></label>
                    <input class="form-control success mt-5 mb-5" type="file" id="formFileMultiple" />
                    <input type="submit" class="btn btn-success" name="sCheck" value="تحقق"> 
                    <?php 
                    if(isset($_SESSION['sPrint'])){
                      if($_SESSION['sPrint']){
                        echo "<p style='color:green'>.تم التحقق بنجاح</p>";
                      }
                    }
                    ?>
                  </form>
                </div>
              </div>
        </div>
        <div class="col-2 text-cenetr title text-center " id="instructionsDiv"style="padding-top:9.5%; padding-left:40%">
              <div class="card justify-content-center align-items-center bg-success text-white" style="width: 30rem;">
                <div class="card-body">
                    <div class="card-title">
                        <h2><b>التعليمات</b></h2>
                    </div>
                    <div class="card-text text-right">
                        <p:>.<b>أولًا: </b> قم بتعيين مكان تريد تنظيفه وإعادة تأهيله</p>
                        <p>.<b>ثانيًا: </b>قم بإلتقاط صورة المكان على وضعه الحالي </p>
                        <p>.<b>ثالثًا: </b>قم بإعادة تأهيل المكان وتنظيفه</p>
                        <p>.<b>رابعًا: </b> قم بإلتقاط صورة المكان  بعد الانتهاء من تنظيفه </p>
                        <p>.<b>خامسًا: </b>قم برفع الصورتين من خلال هذه الصفحة </p>
                        <p>.<b>سادسًا: </b>انقر على زر تحقق </p>
                    </div>
                </div>
              </div>
        </div>
              </div>
        </div>
        </div>
    </body>
</html>