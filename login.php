<?php
include 'include/header.php';
?>
<!-- banner section -->
<!--breadcumb start here-->
<div class="xs-banner inner-banner contet-to-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 align-self-center">
				<div class="xs-banner-content">
                    <h1 class="banner-sub-title wow fadeInLeft">Willkommen beim</h1>
					<h2 class="banner-title wow fadeInLeft" data-wow-duration="1.5s">Kunden Login</h2>
                </div><!-- .xs-banner-content END -->
			</div>
			<div class="col-lg-6 align-self-end">
                <div class="inner-welcome-image-group signin-icon">
                    <img src="assets/images/innerWelcome/signin.png" alt="hosting image">
                    <img src="assets/images/innerWelcome/man.png" class="banner-ico banner-ico-1" alt="phone icon">
                    <img src="assets/images/innerWelcome/folder.png" class="banner-ico banner-ico-2" alt="phone icon">
                </div>
            </div>
		</div>
	</div>
</div>
<!--breadcumb end here--><!-- End banner section -->

<!-- login form section -->
<section class="xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="xs-heading wow fadeIn">
                    <h2 class="heading-sub-title">Login</h2>
                    <h3 class="heading-title">Kunden <span>Login</span></h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->        
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="xs-form-group form-style-2 wow fadeInUp">
                    <form action="https://developer.leenders-it.de/shopv2/whmcs/dologin.php" method="POST" class="xs-form">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Email Adresse" size="50">
                            <input type="password" class="form-control" name="password" autocomplete="off" size="20" placeholder="Password">
                        </div>
                        <div class="media justify-content-between">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="tenInch">
                                <label class="custom-control-label">Login Speichern</label>
                            </div><!-- .custom-control custom-checkbox END -->
                            <div class="forgot-password-wraper">
                                <a href="forgot-password.html">Password vergessen?</a>
                            </div>
                        </div>
                        <div class="xs-btn-wraper">
                            <input type="submit" class="btn btn-primary" value="Login">
                        </div>
                        <p class="form-info">Nicht registriert?  <a href="https://developer.leenders-it.de/shopv2/whmcs/register.php">Jetzt Registrieren</a></p>
                    </form>
                </div>
            </div>        
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- END login form section -->

<!-- language switcher strart -->
<!-- xs modal -->
<div class="zoom-anim-dialog mfp-hide modal-language" id="modal-popup-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="language-content">
                <p>Switch The Language</p>
                <ul class="flag-lists">
                    <li><a href="#"><img src="assets/images/flags/006-united-states.svg" alt=""><span>English</span></a></li>
                    <li><a href="#"><img src="assets/images/flags/002-canada.svg" alt=""><span>English</span></a></li>
                    <li><a href="#"><img src="assets/images/flags/003-vietnam.svg" alt=""><span>Vietnamese</span></a></li>
                    <li><a href="#"><img src="assets/images/flags/004-france.svg" alt=""><span>French</span></a></li>
                    <li><a href="#"><img src="assets/images/flags/005-germany.svg" alt=""><span>German</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- End xs modal --><!-- end language switcher strart -->

<!-- language switcher strart -->
<!-- xs modal -->
<div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="xs-search-panel">
                <form action="#" method="POST" class="xs-search-group">
                    <input type="search" class="form-control" name="search" id="search" placeholder="Search">
                    <button type="submit" class="search-button"><i class="icon icon-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div><!-- End xs modal --><!-- end language switcher strart -->

<!-- offset cart strart -->
<!-- sidebar cart item -->
<div class="xs-sidebar-group cart-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading media">
                <div class="media-body">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
            </div>
            <div class="xs-empty-content">
                <h3 class="widget-title">Shopping cart</h3>
                <h4 class="xs-title">No products in the cart.</h4>
                <p class="empty-cart-icon">
                    <i class="icon icon-shopping-cart"></i>
                </p>
                <p class="xs-btn-wraper">
                    <a class="btn btn-primary" href="#">Return To Shop</a>
                </p>
            </div>
        </div>
    </div>
</div>    <!-- END sidebar cart item -->    <!-- END offset cart strart -->

<!-- offset cart strart -->
<!-- sidebar cart item -->
<div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    X
                </a>
            </div>
            <div class="sidebar-textwidget">
                <div class="sidebar-logo-wraper">
                    <img src="assets/images/blue_logo.png" alt="sidebar logo">
                </div>
                <p>Far far away, behind the word moun tains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of  </p>
                <ul class="sideabr-list-widget">
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/images/location.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>759 Pinewood Avenue</p>
                                <span>Marquette, Michigan</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/images/mail.png" alt="">
                            </div>
                            <div class="media-body">
                                <a href="mailto:info@domain.com">info@domain.com</a>
                                <span>Online Support</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/images/phone.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>906-624-2565</p>
                                <span>Mon-Fri 8am-5pm</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                </ul><!-- .sideabr-list-widget -->
                <div class="subscribe-from">
                    <p>Get Subscribed!</p>
                    <form action="#" method="POST" id="subscribe-form" class="subscribe-form">
                        <label for="sub-input"></label>
                        <div class="form-group">
                            <input type="email" name="email" id="sub-input" placeholder="Enter your mail here" class="form-control">
                            <button class="sub-btn" type="submit"><i class="icon icon-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
                <ul class="social-list version-2">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a></li>
                </ul><!-- .social-list -->
                <div class="text-center">
                    <a href="#" class="btn btn-primary">Purchase Now</a>
                </div>
            </div>
        </div>
    </div>
</div>    <!-- END sidebar widget item -->    <!-- END offset cart strart -->
<?php
include 'include/footer.php';
?>