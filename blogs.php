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
    <title>BANGER - Blog</title>
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
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <h2>Blogs</h2>
        </div>
    </div>
    <div class="bg-gradients"></div>
    <div class="blog-area mt-30 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="fitness-blog-posts">
                        <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                            <div class="blog-post-thumb mb-30">
                                <img src="img/blog-img/1.jpg" alt="">
                            </div>
                            <a class="post-title">10 Best Festival that you should’t miss this summer</a>
                            <div class="post-meta d-flex justify-content-between">
                                <div class="post-date">
                                    <p>September 12, 2019</p>
                                </div>
                            </div>
                            <div class="bg-gradients mb-30 w-25"></div>
                            <p>
                                It’s mid-September and we’re facing down a long winter, but that doesn’t mean we can’t be dreaming of summer,
                                and making plans now to attend the biggest parties of the year. Summer music festivals are a tradition for many. 
                                They’re a great excuse to travel, try new things, let your hair down, and get out of the proverbial box for a long weekend.
                            </p>
                            <a href="https://www.bootsnall.com/articles/10-summer-music-festivals.html" target="_blank" class="read-more-btn">Read more</a>
                        </div>
                        <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-post-thumb mb-30">
                                <img src="img/blog-img/2.jpg" alt="">
                            </div>
                            <a href="#" class="post-title">Top 5 Music Festivals in the World</a>
                            <div class="post-meta d-flex justify-content-between">
                                <div class="post-date">
                                    <p>May 22, 2020</p>
                                </div>
                            </div>
                            <div class="bg-gradients mb-30 w-25"></div>
                            <p>
                                In this divided world, one would rarely find anything that has the power to bring humans together, but music is one of those rarities with this power. With live music shows or festivals, music has never failed to bring people together, and bond, no matter their identity, but just their mutual sensitivity to the sonorous tunes played and performed. Every person prefers certain genres of music, but all in all, it will be an oddity to find a person who does not like music. Here is the list of top 5 music festivals one should experience to feel the power and grandeur of the music, influencing and binding the massive crowds around them and to feel one with the world for once!
                            </p>
                            <a href="https://ceoworld.biz/2019/10/23/top-5-music-festivals-in-the-world/" target="_blank" class="read-more-btn">Read more</a>
                        </div>
                        <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="500ms">
                            <div class="blog-post-thumb mb-30">
                                <img src="img/blog-img/3.jpg" alt="">
                            </div>
                            <a href="#" class="post-title">India's best music festivals</a>
                            <div class="post-meta d-flex justify-content-between">
                                <div class="post-date">
                                    <p>October 11, 2020</p>
                                </div>
                            </div>
                            <div class="bg-gradients mb-30 w-25"></div>
                            <p>
                                The music scene in India has exploded over the last few years, as have festivals catering to various audiences. From venues in the heart of cities; to some in truly offbeat locations. From indie gigs for everyone to exclusive gigs bringing you a dash of luxury. One thing's for certain, it's definitely an exciting time for live music fans in the country. And if you're visiting India, this is a great chance to check out some fabulous local talent, along with top international acts.
                            </p>
                            <a href="https://insider.in/music-festivals-india" target="_blank" class="read-more-btn">Read more</a>
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