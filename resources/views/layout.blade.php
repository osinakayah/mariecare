<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mariecare</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="single-page @yield('page_title')">
<header class="site-header">
    <div class="top-header-bar">
        <div class="container">
            <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                    <div class="header-bar-email">
                        MAIL: <a href="#">info@mariecare.org</a>
                    </div><!-- .header-bar-email -->

                    <div class="header-bar-text">
                        <p>PHONE: <span>+23495045393, +2348032599864</span></p>
                    </div><!-- .header-bar-text -->
                </div><!-- .col -->

                <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                    <div class="donate-btn">
                        <a href="#">Donate Now</a>
                    </div><!-- .donate-btn -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .top-header-bar -->

    <div class="nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                    <div class="site-branding d-flex align-items-center">
                        <a class="d-block" href="/" rel="home"><img style="height: auto;width: 3rem;" class="d-block" src="images/logo.jpeg" alt="logo"></a>
                    </div><!-- .site-branding -->

                    <nav class="site-navigation d-flex justify-content-end align-items-center">
                        <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                            <li class="current-menu-item"><a href="/">Home</a></li>
                            <li><a href="about">About us</a></li>
                            <li><a href="portfolio">Gallery</a></li>
                            <li><a href="contact">Contact</a></li>
                        </ul>
                    </nav><!-- .site-navigation -->

                    <div class="hamburger-menu d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div><!-- .hamburger-menu -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .nav-bar -->
</header><!-- .site-header -->

@yield('content')

<footer class="site-footer">
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="foot-about">
                        <h2><a class="foot-logo" href="#"><img src="images/logo.jpeg" style="width: 3em" alt=""></a></h2>

                        <p>MARIECARE INITIATIVE is a non-profit organization (NGO), founded in 2017 with the common aspiration of meeting the essential needs of the underprivileged women and children in our society.</p>

                        <ul class="d-flex flex-wrap align-items-center">
                            <li><a href="http://www.facebook.com/mariecareinitiative"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://www.twitter.com/mariecareinitiative"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/mariecareinitiative/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div><!-- .foot-about -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                    <h2>Useful Links</h2>

                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#" class="become-volunteer">Become  a Volunteer</a></li>
                        <li><a href="#">Donate</a></li>
                    </ul>
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                    <div class="foot-contact">
                        <h2>Contact</h2>

                        <ul>
                            <li><i class="fa fa-phone"></i><span>+23495045393, +2348032599864</span></li>
                            <li><i class="fa fa-envelope"></i><span>info@mariecare.org</span></li>
                            <li><i class="fa fa-map-marker"></i><span>N0.2 Living Spring Chapel Avenue, Opp. Muhammadu Buhari international Market New Karu</span></li>
                        </ul>
                    </div><!-- .foot-contact -->

                    <div class="subscribe-form">
                        <form class="d-flex flex-wrap align-items-center">
                            <input type="email" placeholder="Your email">
                            <input type="submit" value="send">
                        </form><!-- .flex -->
                    </div><!-- .search-widget -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .footer-widgets -->

    <div class="footer-bar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div><!-- .col-12 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .footer-bar -->
</footer><!-- .site-footer -->



<div class="modal" id="volunteerModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Become a volunteer</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="name">Phone Number</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <button type="submit" class="btn btn-primary btn gradient-bg">Send</button>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<div class="modal" id="donateModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Make a Donation</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Account Number: 1015658473 <br>
                Bank:   Zenith Bank
                <br>
                <p>OR</p>
                <form method="POST" action="{{ route('pay') }}" id="donate-form">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="amount" name="amount" value="">
                        <label for="amount-real">Amount</label>
                        <input type="number" class="form-control" id="amount-real" required>

                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>

                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                        <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                        {{ csrf_field() }}

                    </div>
                    <button id="donate-submit" type="submit" class="btn btn-primary btn gradient-bg">Donate</button>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/jquery.countdown.min.js'></script>
<script type='text/javascript' src='js/circle-progress.min.js'></script>
<script type='text/javascript' src='js/jquery.countTo.min.js'></script>
<script type='text/javascript' src='js/jquery.barfiller.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type='text/javascript' src='js/custom.js'></script>
<script src="https://js.paystack.co/v1/paystack.js"></script>
</body>
</html>
