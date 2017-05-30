@extends('layouts.app')

@section('content')
    <body class="courses-list">

    <header>
        <!-- header top panel -->
    {{--  <div class="page-header-top">
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
      </div>--}}
    <!-- / header top panel -->
        <!-- sticky menu -->
    {{--<div class="sticky-wrapper">
        <div class="sticky-menu">
            <div class="grid-row clear-fix">
                <!-- logo -->
                <a href="index.html" class="logo">
                    <img src="img/logo.png" data-at2x="img/logo@2x.png" alt>
                    <h1>uniLearn</h1>
                </a>
                <!-- / logo -->
                <!-- main menu -->
                <nav class="main-nav">
                    <ul class="clear-fix">
                        <li>
                            <a href="index.html">Home</a>
                            <!-- sub menu -->
                            <ul>
                                <li><a href="index.html">Full-Width Slider</a></li>
                                <li><a href="index-fullscreen.html">Full-Screen Slider</a></li>
                                <li><a href="index-bg-video.html">Video Slider</a></li>
                            </ul>
                            <!-- / sub menu -->
                        </li>
                        <li class="megamenu">
                            <a href="content-elements.html">Features</a>
                            <!-- sub menu -->
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
                                    <img src="http://placehold.it/250x150" alt>
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
                                    <img src="http://placehold.it/250x150" alt>
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
                                    <img src="http://placehold.it/250x150" alt>
                                </li>
                            </ul>
                            <!-- / sub menu -->
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
                            <a href="events-single-item.html" class="active">Events</a>
                            <!-- sub menu -->
                            <ul>
                                <li><a href="event-calendar.html" class="active">Events Calendar</a></li>
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
                <!-- / main menu -->
            </div>
        </div>
    </div>--}}
    <!-- sticky menu -->
        <!-- page title -->
        <div class="page-title">
            <div class="grid-row">
                <h1>Calendar</h1>
                <!-- bread crumb -->
                <nav class="bread-crumb">
                    <a href="index.html">Home</a>
                    <i class="fa fa-long-arrow-right"></i>
                    <a href="">Calendar</a>
                </nav>
                <!-- / bread crumb -->
            </div>
        </div>
        <!-- / page title -->
    </header>

    <div class="page-content">
        <div class="container">
            <!-- calendar header -->
            <div class="calendar-header"><!--
			 --><div class="buttons-carousel">
                    <div class="button-left fa fa-angle-left"></div>
                    <div class="calendar-list"></div>
                    <div class="button-right fa fa-angle-right"></div>
                </div><!--
				 --><div class="buttons-calendar-view"><!--
					 --><div class="day-view calendar-view"><i class="fa fa-navicon"></i> Day</div><!--
					 --><div class="week-view calendar-view"><i class="fa fa-navicon"></i> Week</div><!--
					 --><div class="month-view calendar-view active"><i class="fa fa-navicon"></i> Month</div>
                </div><!--
		--></div>
            <!-- / calendar header -->
            <!-- container wrap calendar -->
            <div class="event-container-wrap">
                <div class="event-container wow fadeInUp animated">

                </div>
            </div>
            <!-- / container wrap calendar -->
        </div>
    </div>


@endsection