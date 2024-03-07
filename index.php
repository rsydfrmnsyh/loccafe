<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['logout'])) {
    $_SESSION = array();

    session_destroy();

    header("Location: login.php");
    exit();
}
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Loccafe - Menu Page</title>
</head>
<body>
    <!-- header start -->
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="logo"><a href="index.php"><img src="logo2.png"></a></div>
                <p style='color: white;'>Hello, <?php echo htmlspecialchars($username); ?>!</p>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cafelist.php">Cafe List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?logout=1">logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- header end -->

    <!--banner start-->
    <div class="banner_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="banner_taital">
                        <h1 class="coffee_text">Loccafe</h1>
                        <p class="there_text">A cup of coffee is all you need to go through the day.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- about section start-->
    <div class="about_section layout_padding">
        <div class="container reveal fade-right">
           <div class="row">
              <div class="col-md-6">
                <div class="about_taital_main">
                    <div class="about_taital">About Loccafe</div>
                    <p style="width: 500px; display: flex; flex-wrap: wrap; font-weight: bold;" class="about_text">Loccafe is a small project made by a group of college students, our goal is to give convenience for cafe and coffee lovers alike to make finding cafes more easily accessible. </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about_img"><img style="height: 450px; vertical-align: middle;" src="homepg.png"></div>
              </div>
           </div>
        </div>
     </div>
    <!-- about section end -->

    <!-- Content body start -->
    <div class="container-fluid" id="main">
        <h2 style="font-weight: bold; text-align: center;" class="mb-4 display-5">Recommendations</h2>
        <div class="flex-container reveal fade-bottom">
            <div class="row" id="rec1" >
                <div class="col-12" >
                    <img src="gordicafe.jpg" style="width: 400px; height: 250px;">
                    <ul>
                        <li><h3 style="color: #48b688; margin-top: 10px;">Cafe Gordi</h3></li>
                    </ul>
                    <p>This cafe is located in Jeruk Purut, South Jakarta, making it one of the most accessible cafes out there with amazing services such as selected roasted coffee beans for quality coffee. This cafe is sure to attract coffee enthusiasts.</p>
                </div>
            </div>
            <div class="row" >
                <div class="col-12" id="rec2">
                    <img src="shisacafe.jpg" style="width: 400px; height: 250px;">
                    <ul>
                        <li><h3 style="color: #48b688;margin-top: 10px;">Shisa Cafe</h3></li>
                    </ul>
                    <p>An amazing and unique cafe located in Kemang, South Jakarta decorated with middle eastern asthetics as well Lebanese cuisine that gives you a relaxing atmosphere perfect to spend weekends in.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12" id="rec3">
                    <img src="cecemuwe.jpg" style="width: 400px; height: 250px;">
                    <ul>
                        <li><h3 style="color: #48b688; margin-top: 10px;">Cecemuwe Cafe</h3></li>
                    </ul>
                    <p>A Cozy cafe located in Kebayoran Baru, South Jakarta. Very spacious for parties and events as well making it one of our top recommendations.</p>
                </div>
            </div>
        </div>
    </div>
    <!--content body end-->

    <!-- Footer Start -->
    <div id="footer" class="container-fluid">
        <div class="row">
            <div id="footer-text" class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h1 style="font-weight: bold; color: #f76d37;" class="mb-4 display-5">Loccafe</h1>
                <p>Coffee and friends are treasures that go together.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Jakarta, Indonesia</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>ESQ Business School, Jakarta Selatan</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>loccafeid@gmail.co.id</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>081247354834</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div id="footer-text" class="col-md-4 mb-5">
                        <h3 style="margin-top: 80px;" class="mb-4">Quick Links</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="mb-2" href="index.php">Home</a>
                            <a class="mb-2" href="cafelist.php">Cafe List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-dark mx-xl-5 py-4">
            <div id="footer-text" class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left">
                    &copy; <a class="font-weight-semi-bold">Loccafe</a>. All Rights Reserved. 
                </p>
            </div>
        </div>
    </div>
    <!-- footer end -->
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</body>
</html>