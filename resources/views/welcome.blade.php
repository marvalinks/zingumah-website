<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
    <!--<![endif]-->

    <head>
        <title>Zingumah</title>
        <meta charset="utf-8" />
        <!--[if IE]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <![endif]-->
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="format-detection" content="telephone=no" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/css/animations.css" />
        <link rel="stylesheet" href="/css/font-awesome5.css" />
        <link rel="stylesheet" href="/css/icomoon.css" />
        <link rel="stylesheet" href="/css/main.css" class="color-switcher-link" />
        <link rel="stylesheet" href="/css/shop.css" class="color-switcher-link" />
        <link rel="stylesheet" href="/css/override.css" />
        <script src="/js/vendor/modernizr-2.6.2.min.js"></script>

        <!--[if lt IE 9]>
            <script src="/js/vendor/html5shiv.min.js"></script>
            <script src="/js/vendor/respond.min.js"></script>
            <script src="/js/vendor/jquery-1.12.4.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!--[if lt IE 9]>
            <div class="bg-danger text-center">
                You are using an <strong>outdated</strong> browser. Please
                <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your
                experience.
            </div>
        <![endif]-->

        <div class="preloader">
            <div class="preloader_image"></div>
        </div>

        <!-- search modal -->
        <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="widget widget_search">
                <form method="get" class="searchform search-form" action="/">
                    <div class="form-group">
                        <input
                            type="text"
                            value=""
                            name="search"
                            class="form-control"
                            placeholder="Search keyword"
                            id="modal-search-input"
                        />
                    </div>
                    <button type="submit" class="btn">Search</button>
                </form>
            </div>
        </div>
        <div id="team-form" class="ds modal">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="form-wrapper ls rounded">
                            <form class="contact-form" method="post" action="/">
                                <div class="row c-mb-20">
                                    <div class="col-12 form-title text-center form-builder-item">
                                        <div class="header title">
                                            <h4><span class="thin">Contact</span> me</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row c-mb-20">
                                    <div class="col-sm-12">
                                        <div class="form-group has-placeholder">
                                            <label for="name333">Full Name <span class="required">*</span></label>
                                            <input
                                                type="text"
                                                aria-required="true"
                                                size="30"
                                                value=""
                                                name="name"
                                                id="name333"
                                                class="form-control"
                                                placeholder="Your name"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group has-placeholder">
                                            <label for="phone35533">Email address<span class="required">*</span></label>
                                            <input
                                                type="tel"
                                                aria-required="true"
                                                size="30"
                                                name="phone"
                                                id="phone35533"
                                                class="form-control"
                                                placeholder="Phone Number"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="row c-mb-20">
                                    <div class="col-sm-12">
                                        <div class="form-group has-placeholder">
                                            <label for="message333">Message</label>
                                            <textarea
                                                aria-required="true"
                                                rows="3"
                                                cols="45"
                                                name="message"
                                                id="message333"
                                                class="form-control"
                                                placeholder="Message"
                                            ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row c-mb-20">
                                    <div class="col-sm-12 mb-0 mt-10 text-center">
                                        <div class="form-group">
                                            <input class="btn btn-gradient" type="submit" value="Contact me" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Unyson messages modal -->
        <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
            <div class="fw-messages-wrap ls p-normal">
                <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
                <!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->
            </div>
        </div>
        <!-- eof .modal -->

        <!-- wrappers for visual page editor and boxed version of template -->
        <div id="canvas">
            <div id="box_wrapper">
                <!-- template sections -->

                <!--topline section visible only on small screens|-->

                <div class="header_absolute">
                    <!--eof topline-->
                    <!-- header with two Bootstrap columns - left for logo and right for navigation -->
                    <header class="page_header_side header_slide header-special header_side_right ds">
                        <div class="scrollbar-macosx">
                            <div class="side_header_inner">
                                <p class="text-right mb-0 close-wrapper"><a href="javascript:void(0)">×</a></p>

                                <div class="widget widget_recent_posts">
                                    <h3 class="widget-title">Our news</h3>
                                    <ul class="list-unstyled">
                                        <li class="media">
                                            <article
                                                class="vertical-item post type-post status-publish format-standard has-post-thumbnail"
                                            >
                                                <div class="item-content">
                                                    <div class="entry-header">
                                                        <div class="entry-meta">
                                                            <div class="byline">
                                                                <span class="date">
                                                                    <a href="blog-@@type.html" rel="bookmark">
                                                                        <time
                                                                            class="published entry-date"
                                                                            datetime="2019-04-09T12:23:09+00:00"
                                                                            >20.03.2019</time
                                                                        >
                                                                    </a>
                                                                </span>
                                                                <span class="author vcard">
                                                                    <a
                                                                        class="url fn n"
                                                                        href="blog-@@type.html"
                                                                        rel="author"
                                                                        ><span>by</span> Admin</a
                                                                    >
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <h4 class="entry-title">
                                                            <a href="blog-single-@@type.html" rel="bookmark">
                                                                Adipisicing elit sed do eiusmod
                                                            </a>
                                                        </h4>

                                                        <!-- .entry-meta -->
                                                    </div>
                                                    <!-- .entry-header -->
                                                </div>
                                                <!-- .item-content -->
                                            </article>
                                        </li>
                                        <li class="media">
                                            <article
                                                class="vertical-item post type-post status-publish format-standard has-post-thumbnail"
                                            >
                                                <div class="item-content">
                                                    <div class="entry-header">
                                                        <div class="entry-meta">
                                                            <div class="byline">
                                                                <span class="date">
                                                                    <a href="blog-@@type.html" rel="bookmark">
                                                                        <time
                                                                            class="published entry-date"
                                                                            datetime="2019-04-09T12:23:09+00:00"
                                                                            >20.03.2019</time
                                                                        >
                                                                    </a>
                                                                </span>
                                                                <span class="author vcard">
                                                                    <a
                                                                        class="url fn n"
                                                                        href="blog-@@type.html"
                                                                        rel="author"
                                                                        ><span>by</span> Admin</a
                                                                    >
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <h4 class="entry-title">
                                                            <a href="blog-single-@@type.html" rel="bookmark">
                                                                Adipisicing elit sed do eiusmod
                                                            </a>
                                                        </h4>

                                                        <!-- .entry-meta -->
                                                    </div>
                                                    <!-- .entry-header -->
                                                </div>
                                                <!-- .item-content -->
                                            </article>
                                        </li>
                                        <li class="media">
                                            <article
                                                class="vertical-item post type-post status-publish format-standard has-post-thumbnail"
                                            >
                                                <div class="item-content">
                                                    <div class="entry-header">
                                                        <div class="entry-meta">
                                                            <div class="byline">
                                                                <span class="date">
                                                                    <a href="blog-@@type.html" rel="bookmark">
                                                                        <time
                                                                            class="published entry-date"
                                                                            datetime="2019-04-09T12:23:09+00:00"
                                                                            >20.03.2019</time
                                                                        >
                                                                    </a>
                                                                </span>
                                                                <span class="author vcard">
                                                                    <a
                                                                        class="url fn n"
                                                                        href="blog-@@type.html"
                                                                        rel="author"
                                                                        ><span>by</span> Admin</a
                                                                    >
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <h4 class="entry-title">
                                                            <a href="blog-single-@@type.html" rel="bookmark">
                                                                Adipisicing elit sed do eiusmod
                                                            </a>
                                                        </h4>

                                                        <!-- .entry-meta -->
                                                    </div>
                                                    <!-- .entry-header -->
                                                </div>
                                                <!-- .item-content -->
                                            </article>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget widget_about">
                                    <h3 class="widget-title">About</h3>
                                    <p>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum. Sed ut perspiciatis unde.
                                    </p>
                                </div>
                                <div class="widget widget_mailchimp">
                                    <h3 class="widget-title">Newsletter</h3>

                                    <form class="signup" action="/">
                                        <label for="mailchimp_email88d">
                                            <span class="screen-reader-text">Subscribe:</span>
                                        </label>
                                        <input
                                            id="mailchimp_email88d"
                                            name="email"
                                            type="email"
                                            class="form-control mailchimp_email has-placeholder"
                                            placeholder="Email"
                                        />
                                        <button type="submit" class="search-submit">
                                            <span class="screen-reader-text">Subscribe</span>
                                        </button>
                                        <div class="response"></div>
                                    </form>
                                </div>
                                <div class="widget widget_social_icons">
                                    <a
                                        href="#"
                                        class="fab fa-facebook-f rounded-icon bg-icon fs-16"
                                        title="facebook"
                                    ></a>
                                    <a href="#" class="fab fa-twitter rounded-icon bg-icon fs-16" title="telegram"></a>
                                    <a
                                        href="#"
                                        class="fab fa-linkedin-in rounded-icon bg-icon fs-16"
                                        title="linkedin"
                                    ></a>
                                    <a
                                        href="#"
                                        class="fab fa-instagram rounded-icon bg-icon fs-16"
                                        title="instagram"
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </header>

                    <header class="page_header header-1 ds bg-transparent s-py-xl-20 s-py-10">
                        <div class="container-fluid">
                            <div class="row d-flex align-items-center justify-content-center">
                                <div class="col-xl-3 col-md-4 col-12 text-center">
                                    <a href="{{route('home')}}" class="logo">
                                        <img src="/images/logo.png" alt="" />
                                        <span class="d-flex flex-column">
                                            <span class="logo-text color-darkgrey">zingumah</span>
                                            <span class="logo-subtext">resources limited</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-xl-6 col-1 text-right">
                                    <!-- main nav start -->
                                    <nav class="top-nav">
                                        <ul class="nav sf-menu">
                                            <li class="active">
                                                <a href="{{route('home')}}">Home</a>
                                            </li>
                                            <li class="active">
                                                <a href="{{route('home')}}">Overview</a>
                                            </li>
                                            <li class="active">
                                                <a href="{{route('home')}}">Project</a>
                                            </li>
                                            <li class="active">
                                                <a href="{{route('home')}}">Investors</a>
                                            </li>
                                            <li class="active">
                                                <a href="{{route('home')}}">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- eof main nav -->
                                </div>
                                <!-- <div class="col-xl-3 col-md-7 col-12 d-flex justify-content-md-end">
                                    <ul class="top-includes">
                                        <li class="metaphone">
                                            <a href="#">+233249119686 </a>
                                        </li>
                                        <li class="special-menu">
                                            <span
                                                class="toggle_menu toggle_menu_side header-slide toggle_menu_side_special"
                                                ><span></span
                                            ></span>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <!-- header toggler -->
                        <span class="toggle_menu"><span>menu</span></span>
                    </header>
                </div>

                <section class="page_slider">
                    <div class="flexslider">
                        <ul class="slides">

                            <li class="ds cover-image">
                                <img src="/images/home/P1050476.jpg" alt="Anyankyirem Gold Project" />
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="intro_layers_wrapper">
                                                <div class="intro_layers">
                                                    <div class="intro_layer">
                                                        <h6 class="intro_before_featured_word">
                                                            01. GOLD DEVELOPMENT • GHANA
                                                        </h6>
                                                        <h2 class="text-capitalize intro_featured_word">
                                                            Anyankyirem Gold Project
                                                        </h2>
                                                        <a href="#" class="btn btn-outline-darkgrey big-btn">
                                                            Investor Presentation
                                                        </a>
                                                        <span class="text-divider">or</span>
                                                        <a href="#" class="btn just-link">Contact Investor Relations</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="ds cover-image">
                                <img src="/images/home/P1050477.jpg" alt="Project Economics" />
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="intro_layers_wrapper">
                                                <div class="intro_layers">
                                                    <div class="intro_layer">
                                                        <h6 class="intro_before_featured_word">
                                                            02. STRONG ECONOMICS
                                                        </h6>
                                                        <h2 class="text-capitalize intro_featured_word">
                                                            $130M NPV • 35.7% IRR
                                                        </h2>
                                                        <a href="#" class="btn btn-outline-darkgrey big-btn">
                                                            View Project Economics
                                                        </a>
                                                        <span class="text-divider">or</span>
                                                        <a href="#" class="btn just-link">Download Financial Summary</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="ds cover-image">
                                <img src="/images/home/P1050472.jpg" alt="Gold Resource Growth" />
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="intro_layers_wrapper">
                                                <div class="intro_layers">
                                                    <div class="intro_layer">
                                                        <h6 class="intro_before_featured_word">
                                                            03. RESOURCE EXPANSION
                                                        </h6>
                                                        <h2 class="text-capitalize intro_featured_word">
                                                            0.76 Moz Resource with Growth Potential
                                                        </h2>
                                                        <a href="#" class="btn btn-outline-darkgrey big-btn">
                                                            Explore Resource Profile
                                                        </a>
                                                        <span class="text-divider">or</span>
                                                        <a href="#" class="btn just-link">Speak to Management</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- eof flexslider -->
                </section>

                <section class="ds text-sm-left text-center container-px-0 c-gutter-0">
                    <div class="container-fluid">
                        <div class="row service-v2">

                            <div class="col-sm-6 col-md-4 col-xl-2">
                                <div class="icon-box service-single with-icon layout2 ds text-center">
                                    <a class="link-icon" href="#">
                                        <div class="icon-styled fs-50">
                                            <i class="ico ico-extraction"></i>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <h5>Gold Resource</h5>
                                    </a>

                                    <p>~0.76 Moz total mineral resource with expansion upside</p>
                                    <a class="btn btn-outline-darkgrey" href="#">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-xl-2">
                                <div class="icon-box service-single with-icon layout2 ds text-center">
                                    <a class="link-icon" href="#">
                                        <div class="icon-styled fs-50">
                                            <i class="ico ico-refinery"></i>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <h5>Processing Access</h5>
                                    </a>

                                    <p>Located near major processing plants in Obuasi district</p>
                                    <a class="btn btn-outline-darkgrey" href="#">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-xl-2">
                                <div class="icon-box service-single with-icon layout2 ds text-center">
                                    <a class="link-icon" href="#">
                                        <div class="icon-styled fs-50">
                                            <i class="ico ico-oil-tanker"></i>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <h5>Production Plan</h5>
                                    </a>

                                    <p>Projected production of approximately 497K oz gold</p>
                                    <a class="btn btn-outline-darkgrey" href="#">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-xl-2">
                                <div class="icon-box service-single with-icon layout2 ds text-center">
                                    <a class="link-icon" href="#">
                                        <div class="icon-styled fs-50">
                                            <i class="ico ico-tank"></i>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <h5>Project Economics</h5>
                                    </a>

                                    <p>$130M NPV (8%) and strong 35.7% post-tax IRR</p>
                                    <a class="btn btn-outline-darkgrey" href="#">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-xl-2">
                                <div class="icon-box service-single with-icon layout2 ds text-center">
                                    <a class="link-icon" href="#">
                                        <div class="icon-styled fs-50">
                                            <i class="ico ico-pipe"></i>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <h5>Cash Flow</h5>
                                    </a>

                                    <p>Estimated free cash flow of approximately $227M</p>
                                    <a class="btn btn-outline-darkgrey" href="#">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-xl-2">
                                <div class="icon-box service-single with-icon layout2 ds text-center">
                                    <a class="link-icon" href="#">
                                        <div class="icon-styled fs-50">
                                            <i class="ico ico-oil"></i>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <h5>Growth Potential</h5>
                                    </a>

                                    <p>Clear pathway toward >1.5 Moz resource expansion target</p>
                                    <a class="btn btn-outline-darkgrey" href="#">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="ls main-testimonial s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60">
                    <div class="container">
                        <div class="row">

                            <div class="col-12 col-lg-3 text-center">
                                <h2 class="special-heading text-center">
                                    <span class="text-capitalize"> chairman’s message </span>
                                </h2>
                                <div class="divider-30"></div>
                                <a class="btn btn-gradient big-btn" href="#">Investor Relations</a>
                            </div>

                            <div class="col-12 col-lg-6 text-center">
                                <div class="divider-35 hidden-above-lg"></div>
                                <div class="divider--5"></div>

                                <p class="excerpt">
                                    Zingumah Resources is building Ghana’s next gold development company with a strong focus on value creation, resource growth, and disciplined execution.
                                </p>

                                <p>
                                    The Anyankyirem Gold Project represents a high-quality brownfield development opportunity located within one of Africa’s most prolific gold belts. 
                                    With defined mineral resources, strong post-tax economics, and clear expansion potential beyond 1.5 million ounces, we are strategically positioned 
                                    to deliver sustainable long-term returns for our stakeholders and investors.
                                </p>
                            </div>

                            <div class="col-12 col-lg-3 text-sm-left text-center">
                                <div class="divider-35 hidden-above-lg"></div>

                                <div class="signature">
                                    <div class="signature-image">
                                        <img src="https://asantegold.com/assets/images/Executive/malik.png" alt="Executive Chairman" />
                                    </div>
                                    <div class="signature-content">
                                        <span>Malik Easah</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="ls s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center container-px-0">
                    <div class="cover-image s-cover-left">
                        <img src="/images/home/P1050476.jpg" alt="Project Overview" />
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-12 col-lg-6"></div>
                            <div class="col-xs-12 col-12 col-lg-6">
                                <div class="content-center">
                                    <h2 class="special-heading numeric text-sm-left text-center">
                                        <span class="text-capitalize"> Project Overview </span>
                                    </h2>
                                    <div class="divider-45 hidden-below-lg"></div>
                                    <div class="divider-30 hidden-above-lg"></div>

                                    <p>
                                        The Anyankyirem Gold Project is a brownfield development-stage asset strategically located in Ghana’s Obuasi district, one of the most prolific gold-producing regions in Africa.
                                    </p>

                                    <div class="divider-45 hidden-below-lg"></div>
                                    <div class="divider-30 hidden-above-lg"></div>

                                    <ul class="list-styled">
                                        <li>Located within the Obuasi gold belt</li>
                                        <li>Strong existing infrastructure access</li>
                                        <li>Proximity to multiple processing plants</li>
                                    </ul>

                                    <div class="divider--10"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="ls s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center container-px-0">
                    <div class="cover-image s-cover-right">
                        <img src="/images/home/P1050477.jpg" alt="Resource Growth" />
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-12 col-lg-6">
                                <div class="content-center">
                                    <h2 class="special-heading numeric text-sm-left text-center">
                                        <span class="text-capitalize"> Resource Growth Strategy </span>
                                    </h2>

                                    <div class="divider-45 hidden-below-lg"></div>
                                    <div class="divider-30 hidden-above-lg"></div>

                                    <p>
                                        With a current mineral resource of approximately 761,000 ounces, the project offers significant exploration upside and a clear pathway toward exceeding 1.5 million ounces.
                                    </p>

                                    <div class="divider-45 hidden-below-lg"></div>
                                    <div class="divider-30 hidden-above-lg"></div>

                                    
                                </div>
                            </div>
                            <div class="col-xs-12 col-12 col-lg-6"></div>
                        </div>
                    </div>
                </section>
                <section class="ls s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center container-px-0">
                    <div class="cover-image s-cover-left">
                        <a
                            href="/images/home/P1050472.jpg"
                            class="photoswipe-link side-video"
                            data-width="800"
                            data-height="800"
                            data-iframe="https://www.youtube.com/embed/GhthHC0s38A"
                        ></a>
                        <img src="/images/home/P1050472.jpg" alt="Investor Presentation" />
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-12 col-lg-6"></div>
                            <div class="col-xs-12 col-12 col-lg-6">
                                <div class="content-center">
                                    <h2 class="special-heading numeric text-sm-left text-center">
                                        <span class="text-capitalize"> Investor Presentation </span>
                                    </h2>

                                    <div class="divider-45 hidden-below-lg"></div>
                                    <div class="divider-30 hidden-above-lg"></div>

                                    <p>
                                        Explore our strategic vision, development roadmap, and financial outlook for the Anyankyirem Gold Project. Watch the investor presentation for detailed project insights.
                                    </p>

                                    <div class="divider-50 hidden-below-lg"></div>
                                    <div class="divider-30 hidden-above-lg"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section
                    class="ls map-section s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-160 s-pb-lg-130 s-pb-md-90 s-pb-60"
                    >
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-6">
                                <h2 class="special-heading">
                                    <span class="text-capitalize">
                                        Project Location<br />
                                        & Key Metrics
                                    </span>
                                </h2>

                                <div class="divider-45 hidden-below-lg"></div>
                                <div class="divider-30 hidden-above-lg"></div>

                                <p class="special-heading">
                                    <span>
                                        Strategically located in Ghana’s Obuasi district, one of Africa’s most prolific gold belts with access to infrastructure, labour, and nearby processing facilities.
                                    </span>
                                </p>

                                <div class="divider-45 hidden-below-lg"></div>
                                <div class="divider-30 hidden-above-lg"></div>

                                <div class="d-flex flex-column flex-sm-row justify-content-between flex-wrap">

                                    <div class="simple-counter">
                                        <h3 class="special-heading counter-wrap">
                                            <span
                                                class="counter color-main thin big"
                                                data-from="0"
                                                data-to="761"
                                                data-speed="1800"
                                            >0</span>
                                            <span class="counter-add thin color-main big">k</span>
                                        </h3>
                                        <p class="special-heading bold color-darkgrey">
                                            <span> Ounces </span>
                                        </p>
                                        <h6 class="special-heading text-capitalize">
                                            <span> Resource </span>
                                        </h6>
                                    </div>

                                    <div class="divider-30 hidden-above-sm"></div>

                                    <div class="simple-counter">
                                        <h3 class="special-heading counter-wrap">
                                            <span
                                                class="counter color-main thin big"
                                                data-from="0"
                                                data-to="130"
                                                data-speed="1800"
                                            >0</span>
                                            <span class="counter-add thin color-main big">M</span>
                                        </h3>
                                        <p class="special-heading bold color-darkgrey">
                                            <span> USD </span>
                                        </p>
                                        <h6 class="special-heading text-capitalize">
                                            <span> NPV (8%) </span>
                                        </h6>
                                    </div>

                                    <div class="divider-30 hidden-above-sm"></div>

                                    <div class="simple-counter">
                                        <h3 class="special-heading counter-wrap">
                                            <span
                                                class="counter color-main thin big"
                                                data-from="0"
                                                data-to="497"
                                                data-speed="1800"
                                            >0</span>
                                            <span class="counter-add thin color-main big">k</span>
                                        </h3>
                                        <p class="special-heading bold color-darkgrey">
                                            <span> Ounces </span>
                                        </p>
                                        <h6 class="special-heading text-capitalize">
                                            <span> Production </span>
                                        </h6>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="divider-40 hidden-above-lg"></div>
                                <!-- <div id="map-vector"></div> -->
                            </div>

                        </div>
                    </div>
                </section>


                <footer class="page_footer text-center text-sm-left ds s-pt-55 s-pb-60 s-pt-md-85 s-pb-md-90 s-pt-lg-125 s-pb-lg-130 s-pt-xl-160 s-pb-xl-155 c-gutter-30 s-parallax c-mb-50 c-mb-lg-0" style="background-position: 50% -15px;">
                    <div class="container">
                        <div class="row justify-content-center">

                            <div class="col-lg-4 col-md-6 animate animated fadeInUp" data-animation="fadeInUp">
                                <a href="./" class="logo">
                                    <img src="images/logo.png" alt="">
                                    <span class="d-flex flex-column">
                                        <span class="logo-text color-darkgrey">zingumah</span>
                                        <span class="logo-subtext">resources limited</span>
                                    </span>
                                </a>

                                <div class="widget widget_mailchimp">
                                    <p>
                                        Subscribe for investor updates & project announcements
                                    </p>

                                    <form class="signup" action="/">
                                        <label for="mailchimp_email">
                                            <span class="screen-reader-text">Subscribe:</span>
                                        </label>

                                        <input id="mailchimp_email" name="email" type="email" class="form-control mailchimp_email" placeholder="Email Address">

                                        <button type="submit" class="search-submit">
                                            <span class="screen-reader-text">Subscribe</span>
                                        </button>

                                        <div class="response"></div>
                                    </form>
                                </div>

                                <a href="#" class="fab fa-facebook-f rounded-icon bg-icon fs-16" title="facebook"></a>
                                <a href="#" class="fab fa-twitter rounded-icon bg-icon fs-16" title="twitter"></a>
                                <a href="#" class="fab fa-linkedin-in rounded-icon bg-icon fs-16" title="linkedin"></a>
                                <a href="#" class="fab fa-instagram rounded-icon bg-icon fs-16" title="instagram"></a>
                            </div>

                            <div class="col-lg-3 col-md-6 animate animated fadeInUp" data-animation="fadeInUp">
                                <div class="widget widget_icons_list">
                                    <h3 class="widget-title">Contact Detail</h3>

                                    <ul>
                                        <li class="icon-inline">
                                            <div class="icon-styled icon-top bordered round fs-16">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                            <p>+233 24 911 9686</p>
                                        </li>

                                        <li class="icon-inline">
                                            <div class="icon-styled icon-top bordered round fs-16">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <p>bubune.kofi@gmail.com</p>
                                        </li>

                                        <li class="icon-inline">
                                            <div class="icon-styled icon-top bordered round fs-16">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <p>
                                                <a href="#">
                                                    Accra, Ghana<br>
                                                    Investor Relations Office
                                                </a>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-6 animate animated fadeInUp" data-animation="fadeInUp">
                                <div class="widget widget_nav_menu mb-0">
                                    <h3 class="widget-title">Quick Links</h3>

                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#overview">Project Overview</a>
                                        </li>
                                        <li>
                                            <a href="#resources">Resources</a>
                                        </li>
                                        <li>
                                            <a href="#investors">Investors</a>
                                        </li>
                                        <li>
                                            <a href="#contact">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 animate animated fadeInUp" data-animation="fadeInUp">
                                <div class="widget widget_nav_menu mb-0">
                                    <h3 class="widget-title">Project Highlights</h3>

                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#">761K oz Mineral Resource</a>
                                        </li>
                                        <li>
                                            <a href="#">US$130M NPV (8%)</a>
                                        </li>
                                        <li>
                                            <a href="#">35.7% IRR</a>
                                        </li>
                                        <li>
                                            <a href="#">497K oz Production Profile</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </footer>
            </div>
            <!-- eof #box_wrapper -->
        </div>
        <!-- eof #canvas -->

        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="/js/compressed.js"></script>
        <script src="/js/main.js"></script>

        <!-- Google Map Script -->
        <script
            type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0pr5xCHpaTGv12l73IExOHDJisBP2FK4&callback=initGoogleMap"
        ></script>

        <script
            defer
            src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516"
            integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg=="
            data-cf-beacon='{"version":"2024.11.0","token":"c3ad5c9eb7e440d5ad69cf416dc37b40","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
            crossorigin="anonymous"
        ></script>
    </body>
</html>
