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
    <title>BANGER - Concert Tours</title>
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
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb2.jpg);">
        <div class="bradcumbContent">
            <h2>Upcoming Shows</h2>
        </div>
    </div>
    <div class="bg-gradients"></div>
    <div class="upcoming-shows-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="upcoming-shows-content">
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>17 <span>July</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/s1.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>Electric castle Festival</h6>
                                    <p>Cluj, Romania</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>At the Castle</p>
                            </div>
                            <div class="shows-time">
                                <p>20:30</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="https://www.festicket.com/festivals/" target="_blank" class="btn musica-btn">Buy Tikets</a>
                            </div>
                        </div>
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>23 <span>July</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/s2.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>Tommorowland</h6>
                                    <p>Manhathan, NY, USA</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>Main Stadium</p>
                            </div>
                            <div class="shows-time">
                                <p>21:30</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="https://www.festicket.com/festivals/" target="_blank" class="btn musica-btn">Buy Tikets</a>
                            </div>
                        </div>
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>25 <span>July</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/s3.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>Sunflower festival</h6>
                                    <p>Paris, France</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>Sunflower Arena</p>
                            </div>
                            <div class="shows-time">
                                <p>20:30</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="https://www.festicket.com/festivals/" target="_blank" class="btn musica-btn">Buy Tikets</a>
                            </div>
                        </div>
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>30 <span>July</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/s4.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>The Reading Festival</h6>
                                    <p>Los Angeles, CA, USA.</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>Staples Center</p>
                            </div>
                            <div class="shows-time">
                                <p>20:30</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="https://www.festicket.com/festivals/" target="_blank"class="btn musica-btn">Buy Tikets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="featured-shows-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark">
                        <h2>Featured Shows</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="featured-shows-slides owl-carousel">
                        <div class="single-featured-shows">
                            <img src="img/bg-img/fs1.jpg" alt="">
                            <div class="featured-shows-content">
                                <div class="shows-text">
                                    <h4>Sunburn</h4>
                                    <p>January 23</p>
                                    <a href="https://sunburn.in/" target="_blank" class="buy-tickets-btn">Buy Tickets</a>
                                </div>
                                <div class="bg-gradients"></div>
                            </div>
                        </div>
                        <div class="single-featured-shows">
                            <img src="img/bg-img/fs2.jpg" alt="">
                            <div class="featured-shows-content">
                                <div class="shows-text">
                                    <h4>Ultra</h4>
                                    <p>March 26</p>
                                    <a href="https://ultramusicfestival.com/" target="_blank" class="buy-tickets-btn">Buy Tickets</a>
                                </div>
                                <div class="bg-gradients"></div>
                            </div>
                        </div>
                        <div class="single-featured-shows">
                            <img src="img/bg-img/fs3.jpg" alt="">
                            <div class="featured-shows-content">
                                <div class="shows-text">
                                    <h4>Tomorrowland</h4>
                                    <p>December 31</p>
                                    <a href="https://www.tomorrowland.com/en/festival/tickets" target="_blank" class="buy-tickets-btn">Buy Tickets</a>
                                </div>
                                <div class="bg-gradients"></div>
                            </div>
                        </div>
                        <div class="single-featured-shows">
                            <img src="img/bg-img/fs4.jpg" alt="">
                            <div class="featured-shows-content">
                                <div class="shows-text">
                                    <h4>Donauinselfest</h4>
                                    <p>June 26</p>
                                    <a href="https://donauinselfest.at/en/Welcome" target="_blank" class="buy-tickets-btn">Buy Tickets</a>
                                </div>
                                <div class="bg-gradients"></div>
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