<!DOCTYPE html>
<html lang="en">
    <head>
      <title>شركاؤنا</title>
      <link href="https://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet">
      <link href="./assets/css/index.css" rel="stylesheet">
      <link href="./assets/css/partners.css" rel="stylesheet">
    </head>
    <?php 
    if (!isset($_SESSION)) {
      session_start();
    }  
    $_SESSION['current_page'] = 'index';
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
            <a href="partners.php" class="nav-link text-dark font-italic bg-light">
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
        <div class="col text-cenetr title" id="partners-card"style="padding-top:10%; padding-left:15%">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="card card-2 text-center" style="height: 35rem;">
                  <img src="./assets/img/p1.jpg" class="pt-5 d-block w-100">
                  <br><br>
                  <div class="card-body d-flex flex-column">                  
                    <p>استمتع باشتراك اللياقة الذي يلائم أسلوب حياتك وأهدافك الصحية. نقدم لك تجربة لياقة بمستوى عالمي في أكبر شبكة مراكز رياضية في منطقة الشرق الأوسط وشمال إفريقيا، لتستفيد من أحدث المعدات مع رواد اللياقة من المدربين والرياضيين.</p>
                    <div class="d-grid gap-2 d-md-block mt-auto">
                      <button class="btn btn-success" type="button">خصم</button>
                      <button class="btn btn-success" type="button">قسيمة شرائية</button>
                    </div>
                  </div>
              </div>
              </div>
              <div class="col-md-4">
                <div class="card card-2 text-center" style="height: 35rem;">
                <img src="./assets/img/p2.jpg" class="pt-5 d-block w-100">
                <br><br>
                  <div class="card-body d-flex flex-column">                  
                    <p>تقدّم بنده تجربة بيع بالتجزئة فريدة من نوعها للأفراد والعائلات من خلال توفير أطعمة ومنتجات طازجة بأفضل قيمة. ونمكّن عملاءنا ومجتمعاتنا من تحسين نوعية حياتهم من خلال توفير قيمة مضافة وتعزيز الرفاهية.</p>
                    <div class="d-grid gap-2 d-md-block mt-auto">
                      <button class="btn btn-success" type="button">خصم</button>
                      <button class="btn btn-success" type="button">قسيمة شرائية</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-2 text-center" style="height: 35rem;">
                  <img src="./assets/img/p3.png" class="pt-5 d-block w-100">
                  <br><br>
                  <div class="card-body d-flex flex-column">
                  <p>نون هي منصة تسوق إلكتروني رائدة محلياً توفر مجموعة متنوعة من المنتجات للتسوق بسهولة وأمان، ذلك بالإضافة إلى سرعة التوصيل وتوفر خيارات دفع متعددة مع إمكانية الإرجاع مجاناً، ولدينا ضمان للجودة وفئات منتجات تضمن لك وجود كل ما تحبه وتتمناه.</p>
                  <div class="d-grid gap-2 d-md-block mt-auto">
                    <button class="btn btn-success" type="button">خصم</button>
                    <button class="btn btn-success" type="button">قسيمة شرائية</button>
                  </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-2 text-center" style="height: 35rem;">
                <img src="./assets/img/p4.png" class="pt-5 d-block w-100">
                <br><br>
                <div class="card-body d-flex flex-column">
                <p>تعلم عبر الإنترنت وحقق تقدمًا في حياتك المهنية من خلال دورات في البرمجة وعلوم البيانات والذكاء الاصطناعي والتسويق الرقمي والمزيد. ابدأمعنا يرحلتك التعليمية واكتسب الخبرة المهنية التي تؤهلك لسوق العمل وتضيف العديد من المهارات في مختلف المجالات</p>
                <div class="d-grid gap-2 d-md-block mt-auto">
                  <button class="btn btn-success" type="button">خصم</button>
                  <button class="btn btn-success" type="button">قسيمة شرائية</button>
                </div> 
                </div> 
              </div>
              </div>
              <div class="col-md-4">
                <div class="card card-2 text-center" style="height: 35rem;">
                <img src="./assets/img/p5.png" class="pt-5 d-block w-100">
                <br><br>
                <div class="card-body d-flex flex-column">
                <p>صيدلية النهدي هي متجرك الشامل لتلبية احتياجاتك من فيتامينات ومسكنات الألم ومستلزمات العناية بالبشرة واحتياجات الحوامل والأمهات وجميع المكملات</p>
                <div class="d-grid gap-2 d-md-block mt-auto">
                  <button class="btn btn-success" type="button">خصم</button>
                  <button class="btn btn-success" type="button">قسيمة شرائية</button>
                </div> 
               </div>
              </div>
              </div>
              <div class="col-md-4">
                <div class="card card-2 text-center" style="height: 35rem;">
                <img src="./assets/img/p6.jpg" class="pt-5 d-block w-100">
                <br><br>
                <div class="card-body d-flex flex-column">
                  <p>.تتلخص مهمة آي هيرب في جعل منتجات الصحة والعافية في متناول الجميع, نكرس جهودنا لتقديم مجموعة مختارة من أنقى منتجات الصحة والعافية التي تجود بها الطبيعة بأفضل قيمة ممكنة، وبأسهل تجربة تسوق مريحة</p>
                <div class="d-grid gap-2 d-md-block mt-auto">
                  <button class="btn btn-success" type="button">خصم</button>
                  <button class="btn btn-success" type="button">قسيمة شرائية</button>
                </div> 
               </div>
              </div>
              </div>
            </div>
           </div>
        </div>
    </body>
</html>