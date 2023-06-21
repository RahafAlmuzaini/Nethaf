<!DOCTYPE html>
<html lang="en">
    <head>
      <title>نقاطي</title>
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
        while($row = $result->fetch_assoc()) {
           $score= $row["score"];                       
        }
    }
    
    $_SESSION['converted']=false;
    if(isset($_POST['convertScore'])){
      $SR =  $score/20;
      $_SESSION['converted']=true;
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
            <a href="profile.php" class="nav-link text-dark font-italic">
                        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                        ملفي الشخصي
                    </a>
            </li>
            <li class="nav-item">
            <a href="score.php" class="nav-link text-dark font-italic bg-light">
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
        <div class="col-2 text-cenetr title" id="score-card"style="padding-top:18%; padding-left:35%">
              <div class="card justify-content-center align-items-center" style="width: 30rem;">
                <div class="card-body">
                  <form method="post">
                  <div class='alert alert-warning title'>.كل عشرين نقطة تعادل ريال واحد</div>
                    <h3  class="card-title p-3 text-center" id="intiative-title"><b> نقاطي</b></h3>
                    <h2 class="card-text text-center"><?php echo "$score"; ?></h2>
                    <div class="text-center text-lg-start mt-4 pt-2">
                      <input type="submit" class="btn btn-success mb-5" value="تحويل نقاطي" name="convertScore">
                    </div>
                   <?php 
                    if(isset($_SESSION['converted'])){
                      if($_SESSION['converted']){
                        echo "<div class='alert alert-success text-center'>نقاطك تعادل: <b>";
                        echo $SR;
                          echo " ريال </b>
                          انقر <a href='partners.php'> هنا</a> لاستبدال نقاطك مع أحد شركائنا</div>";
                      }
                    }
                    ?>
                  </form>
                </div>
              </div>
        </div>
    </body>
</html>