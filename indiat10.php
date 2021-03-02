<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: register.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: register.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BANGER - India Top 10</title>
    <link rel="icon" href="img/core-img/logo.ico">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <img src="img/core-img/compact-disc.png" alt="">
        </div>
    </div>
     <header class="header-area">
        <div class="musica-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <nav class="classy-navbar justify-content-between" id="musicaNav">
                        <a href="index.html" class="nav-brand"><img src="img/core-img/banger2.png" alt=""></a>
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
                        <div class="classy-menu">
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="aboutus.php">About us</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="blogs.php">Blogs</a></li>
                                            <li><a href="concerttours.php">Concert & Tours</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="#" style="color: white;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></a></li>
                                    <li><a href="index.php?logout='1'" style="color: white;">logout</a></li>
                                </ul>
                                <div class="top-social-info">
                                    <a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="https://www.linkedin.com/login"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="single-hero-slide d-flex align-items-center justify-content-center">
        <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-1.jpg);"></div>
        <div class="hero-slides-content text-center">
            <h2 data-animation="fadeInUp" data-delay="100ms">India <span>India</span></h2>
            <p data-animation="fadeInUp" data-delay="300ms">Top 10</p>
        </div>
    </div>
    <div class="featured-album-area section-padding-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-album-content d-flex flex-wrap">
                        <div class="album-songs h-100">
                            <div class="album-all-songs">
                                <div class="music-playlist">
                                    <div class="single-music active">
                                        <h6>Liggi - Ritwiz</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/Liggi.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music active">
                                        <h6>Phir Mohabbat - Murder 2</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/Phir Mohabbat.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music active">
                                        <h6>Phir Le Aaya - Barfi</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/Phir Le Aaya.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music active">
                                        <h6>Rock On - Rock onn</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/Rock On.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music active">
                                        <h6>Senorita - Zindagi Na Milegi Dobara</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/Senorita.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music active">
                                        <h6>Duaa - Shanghai</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/Dua.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music active">
                                        <h6>Iktara - Wake Up Sid</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/Iktara.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music active">
                                        <h6>Illahi - Yeh Jawaani Hai Deewani</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/Ilahi.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music active">
                                        <h6>Ishq Wala Love - Student Of The Year</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/Comfortably numb.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music active">
                                        <h6>Follow Me - Ajab Prem Ki Ghazab Kahani</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/LOTS.mp3">
                                        </audio>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-area section-padding-100-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        <a href="#"><img src="img/core-img/banger2.png" alt=""></a>
                    </div>
                </div>
                <div class="col-12 col-sm-3 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Pages</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="aboutus.php">About Us</a></li>
                                <li><a href="blogs.php">Blogs</a></li>
                                <li><a href="concerttours.php">Concert & Tours</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Playlists</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="indiat10.php">India TOP 10</a></li>
                                <li><a href="globalt10.php">Global TOP 10</a></li>
                                <li><a href="punjabi.php">Punjabi</a></li>
                                <li><a href="hiphop.php">Hip Hop</a></li>
                                <li><a href="edm.php">EDM</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-3 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Social</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="https://www.facebook.com">Facebook</a></li>
                                <li><a href="https://twitter.com/login?lang=en">Twitter</a></li>
                                <li><a href="https://www.linkedin.com/login">Linkedin</a></li>
                                <li><a href="https://www.instagram.com/?hl=en">Instagram</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Subscribe</h4>
                        </div>
                        <form action="#" method="post" class="subscribe-form">
                            <input type="email" name="subscribe-email" id="subscribeemail">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins/plugins.js"></script>
    <script src="js/active.js"></script>
</body>
</html>