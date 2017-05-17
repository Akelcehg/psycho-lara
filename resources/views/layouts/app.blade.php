<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>UniLearn - Education and Courses Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <!-- style -->
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/fi/flaticon.css">
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css"/>
    <link rel="stylesheet" href="css/owl.carousel.css">
    {{--<link rel="stylesheet" type="text/css" href="js/libs/rs-plugin/css/settings.css" media="screen">--}}
    <link rel="stylesheet" href="css/animate.css">
    <!--styles -->
</head>
<body>
<header class="only-color">
    <!-- header top panel -->
    <div class="page-header-top">
        <div class="grid-row clear-fix">
            <address>
                <a href="tel:123-123456789" class="phone-number"><i class="fa fa-phone"></i>123-123456789</a>
                <a href="mailto:uni@domain.com" class="email"><i class="fa fa-envelope-o"></i>uni@domain.com</a>
            </address>
            <div class="header-top-panel">
                <a href="" class="fa fa-shopping-cart"></a>
                <a href="page-login.html" class="fa fa-user login-icon"></a>
                <div id="top_social_links_wrapper">
                    <div class="share-toggle-button"><i class="share-icon fa fa-share-alt"></i></div>
                    <div class="cws_social_links"><a href="https://plus.google.com/" class="cws_social_link"
                                                     title="Google +"><i class="share-icon fa fa-google-plus"
                                                                         style="transform: matrix(0, 0, 0, 0, 0, 0);"></i></a><a
                                href="http://twitter.com/" class="cws_social_link" title="Twitter"><i
                                    class="share-icon fa fa-twitter"></i></a><a href="http://facebook.com"
                                                                                class="cws_social_link"
                                                                                title="Facebook"><i
                                    class="share-icon fa fa-facebook"></i></a><a href="http://dribbble.com"
                                                                                 class="cws_social_link"
                                                                                 title="Dribbble"><i
                                    class="share-icon fa fa-dribbble"></i></a></div>
                </div>
                <a href="#" class="search-open"><i class="fa fa-search"></i></a>
                <form action="#" class="clear-fix">
                    <input type="text" placeholder="Search" class="clear-fix">
                </form>

            </div>
        </div>
    </div>
    <!-- / header top panel -->
    <!-- sticky menu -->
    <div class="sticky-wrapper">
        <div class="sticky-menu">
            <div class="grid-row clear-fix">
                <!-- logo -->
                <a href="/" class="logo">
                    <img src="/images/logo.png" data-at2x="images/logo@2x.png" alt>
                        <h1>uniLearn</h1>
                </a>
                <!-- / logo -->
                <nav class="main-nav">
                    <ul class="clear-fix">
                        <li>
                            <a href="index.html" class="active">Home</a>
                            <!-- sub menu -->
                            <ul>
                                <li><a href="index.html" class="active">Full-Width Slider</a></li>
                                <li><a href="index-fullscreen.html">Full-Screen Slider</a></li>
                                <li><a href="index-bg-video.html">Video Slider</a></li>
                            </ul>
                            <!-- / sub menu -->
                        </li>
                        <li class="megamenu">
                            <a href="content-elements.html">Features</a>
                            <!-- sub mega menu -->
                            <ul class="clear-fix">
                                <li>
                                    <div class="header-megamenu">Pages</div>
                                    <ul>
                                        <li><a href="page-about-us.html">About Us</a></li>
                                        <li><a href="page-our-staff.html">Our Staff</a></li>
                                        <li><a href="page-services.html">Services</a></li>
                                        <li><a href="page-full-width.html">Full-Width Page</a></li>
                                        <li><a href="page-left-sidebar.html">Page Left Sidebar</a></li>
                                        <li><a href="page-right-sidebar.html">Page Right Sidebar</a></li>
                                        <li><a href="page-double-sidebars.html">Double Sidebars</a></li>
                                        <li><a href="page-faq.html">Faq Page</a></li>
                                        <li><a href="page-sitemap.html">SiteMap</a></li>
                                        <li><a href="page-404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="header-megamenu">Content</div>
                                    <ul>
                                        <li><a href="content-elements.html">Content Elements</a></li>
                                        <li><a href="page-content-typography.html">Typography</a></li>
                                        <li><a href="page-pricing-plans.html">Pricing Plans</a></li>
                                        <li><a href="page-login.html">Login</a></li>

                                    </ul>
                                    <images src="http://placehold.it/250x150" alt>
                                </li>
                                <li>
                                    <div class="header-megamenu">Portfolio</div>
                                    <ul>
                                        <li><a href="portfolio-one-column.html">One Column</a></li>
                                        <li><a href="portfolio-two-columns.html">Two Columns</a></li>
                                        <li><a href="portfolio-three-columns.html">Three Columns</a></li>
                                        <li><a href="portfolio-four-columns.html">Four Columns</a></li>
                                        <li><a href="portfolio-gallery.html">Gallery</a></li>
                                        <li><a href="portfolio-filtered.html">Filtered</a></li>
                                    </ul>
                                    <images src="http://placehold.it/250x150" alt>
                                </li>
                                <li>
                                    <div class="header-megamenu">Blog</div>
                                    <ul>
                                        <li><a href="blog-default.html">Default</a></li>
                                        <li><a href="blog-two-columns.html">Two Columns</a></li>
                                        <li><a href="blog-three-columns.html">Three Columns</a></li>
                                        <li><a href="blog-fullwidth.html">Full Width</a></li>
                                        <li><a href="blog-post.html">Blog Post</a></li>
                                    </ul>
                                    <images src="http://placehold.it/250x150" alt>
                                </li>
                            </ul>
                            <!-- / sub mega menu -->
                        </li>
                        <li>
                            <a href="courses-grid.html">Courses</a>
                            <!-- sub menu -->
                            <ul>
                                <li><a href="courses-grid.html">Courses grid</a></li>
                                <li><a href="courses-list.html">Courses list</a></li>
                                <li><a href="courses-single-item.html">Courses single item</a></li>
                            </ul>
                            <!-- / sub menu -->
                        </li>
                        <li>
                            <a href="events-single-item.html">Events</a>
                            <!-- sub menu -->
                            <ul>
                                <li><a href="event-calendar.html">Events Calendar</a></li>
                                <li><a href="events-single-item.html">Events Single Item</a></li>
                            </ul>
                            <!-- / sub menu -->
                        </li>
                        <li>
                            <a href="shop-product-list.html">Shop</a>
                            <!-- sub menu -->
                            <ul>
                                <li><a href="shop-product-list.html">Product List</a></li>
                                <li><a href="shop-single-product.html">Single Product</a></li>
                                <li><a href="shop-checkout.html">Checkout</a></li>
                                <li><a href="shop-cart.html">Shop Cart</a></li>
                            </ul>
                            <!-- / sub menu -->
                        </li>
                        <li>
                            <a href="contact-us.html">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- sticky menu -->
</header>

@yield('content')

<footer>
    <div class="grid-row">
        <div class="grid-col-row clear-fix">
            <section class="grid-col grid-col-4 footer-about">
                <h2 class="corner-radius">About Us</h2>
                <div>
                    <h3>Sed aliquet dui auctor blandit ipsum tincidunt</h3>
                    <p>Quis rhoncus lorem dolor eu sem. Aenean enim risus, convallis id ultrices eget.</p>
                </div>
                <address>
                    <p></p>
                    <a href="tel:123-123456789" class="phone-number">123-123456789</a>
                    <br/>
                    <a href="mailto:uni@domain.com" class="email">uni@domain.com</a>
                    <br/>
                    <a href="www.sample.com" class="site">www.sample.com</a>
                    <br/>
                    <a href="www.sample.com" class="address">250 Biscayne Blvd. (North) 11st Floor<br/>New World Tower
                        Miami, 33148</a>
                </address>
                <div class="footer-social">
                    <a href="" class="fa fa-twitter"></a>
                    <a href="" class="fa fa-skype"></a>
                    <a href="" class="fa fa-google-plus"></a>
                    <a href="" class="fa fa-rss"></a>
                    <a href="" class="fa fa-youtube"></a>
                </div>
            </section>
            <section class="grid-col grid-col-4 footer-latest">
                <h2 class="corner-radius">Latest courses</h2>
                <article>
                    <images src="http://placehold.it/83x83" data-at2x="http://placehold.it/83x83" alt>
                        <h3>Sed aliquet dui at auctor blandit</h3>
                        <div class="course-date">
                            <div>10<sup>00</sup></div>
                            <div>23.02.15</div>
                        </div>
                        <p>Sed pharetra lorem ut dolor dignissim,
                            sit amet pretium tortor mattis.</p>
                </article>
                <article>
                    <images src="http://placehold.it/83x83" data-at2x="http://placehold.it/83x83" alt>
                        <h3>Sed aliquet dui at auctor blandit</h3>
                        <div class="course-date">
                            <div>10<sup>00</sup></div>
                            <div>23.02.15</div>
                        </div>
                        <p>Sed pharetra lorem ut dolor dignissim,
                            sit amet pretium tortor mattis.</p>
                </article>
            </section>
            <section class="grid-col grid-col-4 footer-contact-form">
                <h2 class="corner-radius">apply for instructor</h2>
                <div class="email_server_responce"></div>
                <form action="php/contacts-process.php" class="contact-form" method="post" novalidate="novalidate">
                    <p><span class="your-name"><input type="text" name="name" value="" size="40" placeholder="Name"
                                                      aria-invalid="false" required></span>
                    </p>
                    <p><span class="your-email"><input type="text" name="phone" value="" size="40" placeholder="Phone"
                                                       aria-invalid="false" required></span></p>
                    <p><span class="your-message"><textarea name="message" placeholder="Comments" cols="40" rows="5"
                                                            aria-invalid="false" required></textarea></span></p>
                    <button type="submit" class="cws-button bt-color-3 border-radius alt icon-right">Submit <i
                                class="fa fa-angle-right"></i></button>
                </form>
            </section>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="grid-row clear-fix">
            <div class="copyright">uniLearn<span></span> 2015 . All Rights Reserved</div>
            <nav class="footer-nav">
                <ul class="clear-fix">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="courses-grid.html">Courses</a>
                    </li>
                    <li>
                        <a href="content-elements.html">Plans</a>
                    </li>
                    <li>
                        <a href="blog-default.html">News</a>
                    </li>
                    <li>
                        <a href="page-about-us.html">Pages</a>
                    </li>
                    <li>
                        <a href="contact-us.html">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</footer>
<!-- / footer -->
<script type="text/javascript" src="js/libs/jquery.min.js"></script>
{{--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript"
        src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox_packed.js"></script>--}}
{{--<script type='text/javascript' src='js/libs/jquery.validate.min.js'></script>
<script src="js/libs/jquery.form.min.js"></script>--}}
<script src="js/libs/TweenMax.min.js"></script>
<script src="js/libs/main.js"></script>
<!-- jQuery REVOLUTION Slider  -->
{{--<script type="text/javascript" src="js/libs/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/libs/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/libs/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="js/libs/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/libs/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript"
        src="js/libs/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/libs/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="js/libs/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/libs/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/libs/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="js/libs/jquery.isotope.min.js"></script>--}}


<script src="js/libs/owl.carousel.js"></script>
{{--
<script src="js/libs/owl.carousel.js"></script>
<script src="js/libs/jquery-ui.min.js"></script>
<script src="js/libs/jflickrfeed.min.js"></script>
<script src="js/libs/jquery.fancybox.pack.js"></script>
<script src="js/libs/jquery.fancybox-media.js"></script>
<script src="js/libs/retina.min.js"></script>--}}
</body>
</html>
