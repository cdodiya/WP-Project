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
    <title>BANGER - Contact Us</title>
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
                        <a href="index.php" class="nav-brand"><img src="img/core-img/banger2.png" alt=""></a>
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
                                    <a href="signup.html"><i class="fa fa-user" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb4.jpg);">
        <div class="bradcumbContent">
            <h2>Contact</h2>
        </div>
    </div>
    <div class="bg-gradients"></div>    
    <section class="contact-area mt-30 section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="contact-content mb-100">
                        <a href="#"><img src="img/core-img/banger3.jpg" alt=""></a>
                        <div class="contact-social-info mt-50">
                            <a href="www.https://www.facebook.com" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/login?lang=en" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="https://www.linkedin.com/login" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/?hl=en" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>                
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon">
                                <img src="img/core-img/placeholder.png" alt="">
                            </div>
                            <h6>Room no. 36, 39, 41, Old Boys Hostel, Mukesh Patel Technolgy Park, Village: Babulde Bank of Tapi River, National Highway No: 3, Shirpur District, Savalade, Maharashtra 425405</h6>
                        </div>
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon">
                                <img src="img/core-img/message.png" alt="">
                            </div>
                            <h6>shirpur@nmims.edu</h6>
                        </div>
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon">
                                <img src="img/core-img/smartphone.png" alt="">
                            </div>
                            <h6>+91  022 4233 4000</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="contact-content mb-100">
                        <div class="contact-form-area">
                            <form action="contactdtb.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="Your E-mail" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" name="sub">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message" name="msg"></textarea>
                                </div>
                                <button class="btn musica-btn mt-30" type="submit" name="send">send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="map-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <iframe src="https://maps.google.com/maps?q=Mukesh%20Patel%20School%20of%20Technology%20Management%20and%20Engineering%20Shirpur&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen></iframe>
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