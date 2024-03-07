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
    <title>Loccafe - Cafe List</title>
</head>
<body>
    <!-- header start -->
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="logo"><a href="index.php"><img src="logo2.png"></a></div>
                <p style='color: white;D'>Hello, <?php echo htmlspecialchars($username); ?>!</p>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item active">
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

    <!-- content body start -->
    <div class="container-fluid" id="cafelist">
        <div style="margin-left: 20px; margin-right: 20px;" class="about_taital_main">
            <div class="about_taital" style="background-color: white; padding:15px;">Cafe List</div>
            <p style="background-color:white; padding:15px; font-weight:500; font-size: 20px;">Here are some of the cafes we recommend.</p>
            <div class="container reveal fade-right">
            <div class="row" id="content">
                <div style="font-weight: 600; font-size: 18px;">
                    <img src="arabica.jpg" style="padding: 15px; float: left; width: 420px; height: 300px;">
                    <h3 style="color: #48b688; margin-top: 10px;">%ARABICA Cafe</h3></li>
                    <p>Located in Senayan, Kebayoran Baru, South Jakarta, %ARABICA Cafe comes in as one of our picks for an amazing cafe for hanging out, offering plenty of unique ice cream coffees as well as baked goods, although, coming in at a higher average price than other cafes.</p>
                    <P>Address : Ashta district 8 ground floor, RT.8/RW.3, Senayan, Kebayoran Baru, South Jakarta City Jakarta 12190</P> 
                    <p>Operational Hours : 8AM WIB - 10PM WIB</p>
                    <p>Contact Info : (021) 50111100</p>
                    <span class="rating-label" style="color: red;">Rating:</span>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 90%;"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">4.5/5</div>
                        </div>
                    <a href="https://www.google.com/maps/dir//Ashta+distri ct+8+ground+floor,+RT.8%2FRW.3,+Senayan,+Kebayoran+Baru,+South+Jakarta+City,+Jakarta+12190/@-6.228123,106.736783,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69f12daf879a75:0x28a244530f5121be!2m2!1d106.8068272!2d-6.2281101?entry=ttu" target="_blank">Find %ARABICA Cafe in Google Maps</a>
                </div>
            </div>
        </div>
        <div class="container reveal fade-left">
            <div class="row" id="content">
                <div style="font-weight: 600; font-size: 18px;">
                    <img src="shisacafe.jpg" style="padding: 15px; float: left; width: 420px; height: 300px;">
                    <h3 style="color: #48b688; margin-top: 10px;">Shisa Cafe</h3></li>
                    <p>Shisa Cafe, being one of the most renowned cafe in Jakarta as well as being 20 years in business, there's no surprise if a lot of people recognize this cafe immediately. Offering unique lebanese cuisine as well as coffee, this cafe is sure to give you a breath of fresh air from your daily life.</p>
                    <P>Address : Town Square, Jl. TB Simatupang No.17, RT.2/RW.1, West Cilandak, Kec. Cilandak, South Jakarta Citt, Jakarta 12430</P> 
                    <p>Operational Hours : 10AM WIB - 10PM WIB</p>
                    <p>Contact Info : (021) 75913537</p>
                    <span class="rating-label" style="color: rgb(220, 8, 8) ;" >Rating:</span>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 90%;"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">4.5/5</div>
                        </div>
                    <a href="https://www.google.com/maps/dir/-6.291456,106.807296/Shisha+Cafe,+Town+Square,+Jl.+TB+Simatupang+No.17,+RT.2%2FRW.1,+Cilandak+Bar.,+Kec.+Cilandak,+Kota+Jakarta+Selatan,+Daerah+Khusus+Ibukota+Jakarta+12430/@-6.2920069,106.797142,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2e69f1e67737c2e1:0x83cd5efed629be8e!2m2!1d106.799791!2d-6.291497?entry=ttu" target="_blank">Find Sisha Cafe in Google Maps</a>
                </div>
            </div>
        </div>
        <div class="container reveal fade-right">
            <div class="row" id="content">
                <div style="font-weight: 600; font-size: 18px;">
                    <img src="cecemuwe.jpg" style="padding: 15px; float: left; width: 420px; height: 300px;">
                    <h3 style="color: #48b688; margin-top: 10px;">Cecemuwe Cafe</h3></li>
                    <p>With an amazing atmosphere as well as relaxing views, Cecemuwe Cafe gives not only a good environment to relax and do student work or hang out with friends. Not only that, they also provide service for events making it one of our top choices.</p>
                    <P>Address : Jl. Hang Jebat IX No. 6 Kebayoran Baru, South Jakarta City, Jakarta, Indonesia, 12120</P> 
                    <p>Operational Hours : 10AM WIB - 10PM WIB</p>
                    <p>Contact Info : +62 812 8338 8128</p>
                    <span class="rating-label" style="color: red;">Rating:</span>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%;"
                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">4/5
                            </div>
                        </div>
                    <a href="https://www.google.com/maps/dir//cecemuwe+cafe/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x2e69f1529a686f9f:0x2102ba34ce032fe?sa=X&ved=2ahUKEwjBtf_Nv8X_AhVeUGwGHSxvBDwQ9Rd6BAhpEAU" target="_blank">Find Cecemuwe Cafe in Google Maps</a>
                </div>
            </div>
        </div>
        <div class="container reveal fade-left">
            <div class="row" id="content">
                <div style="font-weight: 600; font-size: 18px;">
                    <img src="gordicafe.jpg" style="padding: 15px; float: left; width: 420px; height: 300px;">
                    <h3 style="color: #48b688; margin-top: 10px;">Gordi Cafe</h3></li>
                    <p>Not only does Gordi Cafe offer amazing service and quality coffee, they also offer freshly roasted coffee beans for the coffee enthusiasts out there. Very spacious but also cozy, you can just go and hang out here on the weekends, with friends, family, etc.</p>
                    <P>Address : Jl. Jeruk Purut Dalam Nomor 25, RT.6/RW.3, East Cilandak, Ps. Minggu, South Jakarta City, Jakarta 12560</P> 
                    <p>Operational Hours : 7.30AM WIB - 9PM WIB</p>
                    <p>Contact Info : (021) 22785171</p>
                    <span class="rating-label" style="color: red;">Rating:</span>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%;"
                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">4/5
                            </div>
                        </div>
                    <a href="https://www.google.com/maps/dir//gordi+cafe/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x2e69f1f6aaaaf82b:0x63c4be8f258156e3?sa=X&ved=2ahUKEwiagbu0wsX_AhX7XmwGHehTD8UQ9Rd6BAhTEAU" target="_blank">Find Gordi Cafe in Google Maps</a>
                </div>
            </div>
        </div>
        <div class="container reveal fade-right">
            <div class="row" id="content">
                <div style="font-weight: 600; font-size: 18px;">
                    <img src="brunocafe.jpg" style="padding: 15px; float: left; width: 420px; height: 300px;">
                    <h3 style="color: #48b688; margin-top: 10px;">BRUNO Cafe in the park</h3></li>
                    <p>BRUNO Cafe in the park gives off a very comfortable and homey environment, perfect for lunch or just spending some free time relaxing. Although at first it seems more of a restaurant, it also has a cafe inside making it a 2 for 1 deal.</p>
                    <P>Address : Sunshine Park, Gripastudio, Jl. Griya Tapa Jl. Taman Margasatwa Raya No.9G, Jakarta 12550</P> 
                    <p>Operational Hours : 10AM WIB - 8PM WIB (tuesday to friday), 9AM WIB - 8PM WIB (Weekends), Monday Closed</p>
                    <p>Menu : <a href="https://spark.adobe.com/page/ANyxfqcPXvNiI/">https://spark.adobe.com/page/ANyxfqcPXvNiI/</a></p>
                    <p>Contact Info : 0896-8329-8600</p>
                    <span class="rating-label" style="color: red;">Rating:</span>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 90%;"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">4.5/5
                            </div>
                        </div>
                    <a href="https://www.google.com/maps/dir//Ashta+district+8+ground+floor,+RT.8%2FRW.3,+Senayan,+Kebayoran+Baru,+South+Jakarta+City,+Jakarta+12190/@-6.228123,106.736783,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69f12daf879a75:0x28a244530f5121be!2m2!1d106.8068272!2d-6.2281101?entry=ttu" target="_blank">Find Bruno Cafe in Google Maps</a>
                </div>
            </div>
        </div>
        <div class="container reveal fade-left"> 
            <div class="row" id="content">
                <div style="font-weight: 600; font-size: 18px;">
                    <img src="JCH.jpg" style="padding: 15px; float: left; width: 420px; height: 300px;">
                    <h3 style="color: #48b688; margin-top: 10px;">Jakarta Coffee House</h3></li>
                    <p>Jakarta Coffee House is one of the iconic cafes in Jakarta as it gives off a greenhouse aesthetic, you can enjoy being mesmerized in the bustling streets of Jakarta while relaxing with your cup of coffee. If you're lucky and there's not alot of people, you can enjoy relaxing even more as it is a beautiful place to hang out.</p>
                    <P>Address : Jl. Cipete Raya No.2, RT.8/RW.4, South Cipete, Kec. Cilandak, South Jakarta City, Jakarta 12410</P> 
                    <p>Operational Hours : 8AM WIB - 12AM WIB, 8AM WIB - 1AM WIB (fridays & Saturdays)</p>
                    <p>Contact Info : (021) 75900570</p>
                    <span class="rating-label" style="color: red;">Rating:</span>
                    <div class="progress" >
                        <div class="progress-bar bg-success" role="progressbar" style="width: 90%;"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">4.5/5
                        </div>
                    </div>
                    <a href="https://www.google.com/maps/dir//Jl.+Cipete+Raya+No.2,+RT.8%2FRW.4,+Cipete+Sel.,+Kec.+Cilandak,+Kota+Jakarta+Selatan,+Daerah+Khusus+Ibukota+Jakarta+12410/@-6.2780642,106.7344543,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69f19364da5ecd:0x70299c9131e0f78a!2m2!1d106.8044922!2d-6.2780916?entry=ttu" target="_blank">Find JCH in Google Maps</a>
                </div>
            </div>
        </div>
        <div class="container reveal fade-right">
            <div class="row" id="content">
                <div style="font-weight: 600; font-size: 18px;">
                    <img src="bukanruang.jpg" style="padding: 15px; float: left; width: 420px; height: 300px;">
                    <h3 style="color: #48b688; margin-top: 10px;">Bukan Ruang, Kemang</h3></li>
                    <p>This cafe located in Kemang is almost like a hole in a wall, giving off a small but cozy environment making you feel cozy and relaxed. A perfect place to go when you want to enjoy your weekends or maybe hang around with friends, as well as doing schoolwork.</p>
                    <P>Address : Jl. Kemang Raya No.29B, RT.6/RW.1, Bangka, Kec. Mampang Prpt, South Jakarta City, Jakarta 12730</P> 
                    <p>Operational Hours : 7AM WIB - 9PM WIB</p>
                    <p>Contact Info : (021) 22720330</p>
                    <span class="rating-label" style="color: red;">Rating:</span>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 90%;"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">4.5/5
                            </div>
                        </div>
                    <a href="https://www.google.com/maps/dir//bukan+ruang,+kemang/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x2e69f1dd9ed2f9df:0x7cdd8ee6ff4f4ace?sa=X&ved=2ahUKEwj-3evcx8X_AhX_8DgGHTeeBQYQ9Rd6BAhkEAU" target="_blank">Find Bukan Ruang, Kemang in Google Maps</a>
                </div>
            </div>
        </div>
            <div style="background-color: white; color:#48b688; justify-content: center; padding: 15px; text-align: center;">
                <h2>More Cafe Coming Soon...</h2>
            </div>
        </div>
    </div>
    <!-- content body end -->

    <!-- Footer Start -->
    <div id="footer" class="container-fluid bs-success mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</body>
</html>