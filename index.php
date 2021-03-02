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
    <title>BANGER - Keep Banging!!</title>
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
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-1.jpg);"></div>
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Banger <span>Banger</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">Keep Banging</p>
                </div>
                <h2 class="big-text">Banger</h2>
            </div>
                <div class="single-hero-slide d-flex align-items-center justify-content-center">
                    <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-2.jpg);"></div>
                    <div class="hero-slides-content text-center">
                        <a href="indiat10.php">
                            <h2 data-animation="fadeInUp" data-delay="100ms">India <span>India</span></h2>
                            <p data-animation="fadeInUp" data-delay="300ms">Top 10</p>
                        </a>
                    </div>
                    <h2 class="big-text">India</h2>
                </div>
                <div class="single-hero-slide d-flex align-items-center justify-content-center">
                    <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-3.jpg);"></div>
                    <div class="hero-slides-content text-center">
                        <a href="globalt10.php">
                            <h2 data-animation="fadeInUp" data-delay="100ms">Global <span>Global</span></h2>
                            <p data-animation="fadeInUp" data-delay="300ms">Top 10</p>
                        </a>
                    </div>
                    <h2 class="big-text">Global</h2>
                </div>
        </div>
        <div class="bg-gradients"></div>
    </section>
    <br><br>
    <h3 style="text-align:center">Featured Playlists</h3>
    <div class="music-player-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="music-player-slides owl-carousel">
                        <div class="single-music-player">
                            <img src="img/bg-img/mp1.jpg" alt="Hip-Hop">
                            <div class="music-info d-flex justify-content-between">
                                <a href="hiphop.php">
                                    <div class="music-text">
                                        <h5>Hip-Hop</h5>
                                        <p>Drake-Money in the grave</p>
                                    </div>
                                </a>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                    <source src="audio/Drake-MING.mp3">
                                </audio>
                                </div>
                            </div>
                        </div>
                        <div class="single-music-player">
                            <img src="img/bg-img/mp2.jpg" alt="">
                            <div class="music-info d-flex justify-content-between">
                                <a href="rock.php">
                                    <div class="music-text">
                                        <h5>Rock</h5>
                                        <p>Pink Floyd - Comfartably Numb</p>
                                    </div>
                                </a>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                    <source src="audio/Comfortably numb.mp3">
                                </audio>
                                </div>
                            </div>
                        </div>
                        <div class="single-music-player">
                            <img src="img/bg-img/mp3.jpg" alt="">
                            <div class="music-info d-flex justify-content-between">
                                <a href="punjabi.php">
                                    <div class="music-text">
                                        <h5>Punjabi</h5>
                                        <p>Diljit Dosanjh - CLASH</p>
                                    </div>
                                </a>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                    <source src="audio/Clash.mp3">
                                </audio>
                                </div>
                            </div>
                        </div>
                        <div class="single-music-player">
                            <img src="img/bg-img/mp4.jpg" alt="">
                            <div class="music-info d-flex justify-content-between">
                                <a href="edm.php">
                                    <div class="music-text">
                                        <h5>EDM</h5>
                                        <p>David Guetta - Lovers on the sun</p>
                                    </div>
                                </a>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                    <source src="audio/LOTS.mp3">
                                </audio>
                                </div>
                            </div>
                        </div>
                        <div class="single-music-player">
                            <img src="img/bg-img/mp2.jpg" alt="">
                            <div class="music-info d-flex justify-content-between">
                                <a href="romantic.php">
                                    <div class="music-text">
                                        <h5>Bollywood Romantic</h5>
                                        <p>DDLJ - Tujhe dekha toh</p>
                                    </div>
                                </a>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                    <source src="audio/DDLJ.mp3">
                                </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="featured-album-area section-padding-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-album-content d-flex flex-wrap">
                        <div class="album-thumbnail h-100 bg-img" style="background-image: url(img/bg-img/bg-4.jpg);"></div>
                        <div class="album-songs h-100">
                            <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">
                                <div class="album-title">
                                    <h6>Featured album</h6>
                                    <h4>Love is all Around</h4>
                                </div>
                                <div class="album-buy-now">
                                    <a href="#" class="btn musica-btn">Buy it on Itunes</a>
                                </div>
                            </div>
                            <div class="album-all-songs">
                                <div class="music-playlist">
                                    <div class="single-music active">
                                        <h6>Lovers on the sun - David Guetta</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/LOTS.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music">
                                        <h6>Nothing Else Matters - Metallica</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/Metallica-Nothing-Else-Matters.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music">
                                        <h6>Toosie Slide - Drake</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/Toosie Slide.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music">
                                        <h6>Hale Dil - Murder 2</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/Hale-Dil-Harshit-Saxena.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music">
                                        <h6>Comfortably Numb - Pink Floyd</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/Comfortably numb.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music">
                                        <h6>3 Peg down - Sharry Maan</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/3-Peg-Sharry-Maan.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music">
                                        <h6>So High - Sidhu Moosewala</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/So-High-Sidhu-Moose-Wala.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music">
                                        <h6>Lemonade - Internet Money</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/Lemonade.mp3">
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
    <div class="musica-music-artists-area d-flex flex-wrap clearfix">
        <div class="music-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(img/bg-img/bg-9.jpg);">
            <div class="music-search-content">
                <h2>Music</h2>
                <a href="https://music.youtube.com/"><h4>Search for the best music</h4></a>
            </div>
        </div>
        <div class="artists-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="600ms" style="background-image: url(img/bg-img/bg-1.jpg);">
            <div class="music-search-content">
                <h2>Artists</h2>
                <a href="https://music.youtube.com/"><h4>Search for the best artists</h4></a>
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