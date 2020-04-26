<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="wedding vendor directory HTML template">
  	 
       <title> Wedding Vendor &amp; Supplier Directory HTML Template - RealWed </title>
       <!-- Bootstrap -->
       <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
       <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
       <!-- FontAwesome icon -->
       <link href="{{ asset('fontawesome/css/fontawesome-all.css') }}" rel="stylesheet">
       <!-- Fontello icon -->
       <link href="{{ asset('fontello/css/fontello.css') }}" rel="stylesheet">
       <!-- OwlCarosuel CSS -->
       <link href="{{ asset('css/owl.carousel.css') }}" type="text/css" rel="stylesheet">
       <link href="{{ asset('css/owl.theme.default.css') }}" type="text/css" rel="stylesheet">
       <!-- Favicon icon -->
       <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
       <!-- Style CSS -->
       <link href="{{ asset('css/style.css') }}" rel="stylesheet">
       <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
       <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
       <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
       <![endif]-->
</head>
<body>
    <!-- header -->
    <div class="header">
        <!-- header-top -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-6 col-6 d-none d-xl-block d-lg-block d-md-block">
                        <div class="header-text">
                            <p class="wlecome-text">Welcome to Wedding Directory HTML Template.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-12 col-12">
                        <div class="header-text text-right">
                            <p>Are You Vendor?<a href="/signin" class="text-white">List Your Business</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.header-top -->
        <!-- navigation start -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <nav class="navbar navbar-expand-lg navbar-classic">
                        <a class="navbar-brand" href="/"> <img src="{{ asset('images/logo.png') }}" alt=""></a>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-classic" aria-controls="navbar-classic" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar top-bar mt-0"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-classic">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-3">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="\" id="menu-1">
                                        Home
                                    </a>                                   
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Vendors
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-2">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" href="/list">Listing</a>                                      
                                        </li>
                                        <li><a class="dropdown-item" href="/vendor-by-category">
                                                Vendor By Categories</a>
                                        </li>
                                        <li><a class="dropdown-item" href="/vendor-by-location">
                                                Vendor By Locations</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Supplier
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-3">
                                        <li><a class="dropdown-item" href="/Dresses" title="">Dresses</a></li>
                                        <li><a class="dropdown-item" href="#" title="">Cakes</a></li>
                                        <li><a class="dropdown-item" href="#" title="">Florist</a></li>
                                        <li><a class="dropdown-item" href="#" title="">Photographers</a></li>
                                        <li><a class="dropdown-item" href="#" title="">Videographer</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="menu-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blogs
                                    </a>
                                </li>
                            </ul>
                            <a href="/signin" class="btn btn-default btn-sm">Get Started Now</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- navigation close -->
    </div>
    <!-- /.header -->
    <!-- hero-section -->
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
                    <!-- search-block -->
                    <div class="">
                        <div class="text-center search-head">
                            <h1 class="search-head-title">Find Local Wedding Vendors</h1>
                            <p class="d-none d-xl-block d-lg-block d-sm-block text-white">Browse the best wedding vendors in your area — from venues and photographers, to wedding planners, caterers, florists and more.</p>
                        </div>
                        <!-- /.search-block -->
                        <!-- search-form -->
                        <div class="search-form">
                            <form class="form-row">
                                <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- select -->
                                    <select class="wide">
                                        <option value="Venue Type">Vendor Type</option>
                                        <option value="Venue">Venue</option>
                                        <option value="Florist">Florist</option>
                                        <option value="Cake">Cake</option>
                                        <option value="Photographer">Photographer</option>
                                        <option value="Catering">Catering</option>
                                        <option value="Dress">Dress</option>
                                    </select>
                                </div>
                                <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- select -->
                                    <select class="wide">
                                        <option value="Karachi" data-display="Karachi">Karachi</option>
                                        <option value="Lahore">Lahore</option>
                                        <option value="Islamabad">Islamabad</option>
                                        <option value="Rawalpindi">Rawalpindi</option>
                                        <option value="Hyderabad">Hyderabad</option>
                                    </select>
                                </div>
                                <!-- button -->
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <button class="btn btn-default btn-block" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.search-form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.hero-section -->
    <!-- feature-section -->
    <div class="bg-white space-large">
        <div class="container">
            <div class="row">
                <!-- feature-1 -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb20">
                    <div class="icon-3x mb30 text-default"><i class="icon-051-wedding-arch"></i></div>
                    <h3>180+Wedding Venues & Vendors</h3>
                    <p>Fusce sed erat libasellus id orci quis ligula pretium modo lect sodales eu.</p>
                </div>
                <!-- /.feature-1 -->
                <!-- feature-2 -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb20">
                    <div class="icon-3x mb30 text-default"><i class="icon-051-love-birds"></i></div>
                    <h3>350+ Real Wedding Success</h3>
                    <p>Quisque ut ligula nec est pretium pharetra atmetus mattis volutpat invel elit.</p>
                </div>
                <!-- /.feature-2 -->
                <!-- feature-3 -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb20">
                    <div class="icon-3x mb30 text-default"><i class="icon-017-location"></i></div>
                    <h3>31+Cities Available</h3>
                    <p>Vestibulum elementum pellaliquet dui in massa arius et ornare augue feugiat.</p>
                </div>
                <!-- /.feature-3 -->
            </div>
        </div>
    </div>
    <!-- /.feature-section -->
    <div class="space-medium pdb0">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="mb10">Latest Wedding Venue</h2>
                        <p>A short description for showcase of latest wedding venue. </p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="venue-thumbnail-carousel">
                <div class="owl-carousel owl-theme owl-venue-thumb-second">
                    @foreach($listing as $listing)
                    <div class="item">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="vendor-thumbnail">
                                <!-- Vendor thumbnail -->
                                <div class="vendor-img zoomimg">
                                    <!-- Vendor img -->
                                    <a href="list-detail/{{$listing->id}}"><img style="width:400px; height:250px;" src="{{asset('userimage')}}/{{$listing->filebutton}}" alt=""  class="img-fluid"></a>
                                    <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                                </div>
                                <!-- /.Vendor img -->
                                <div class="vendor-content">
                                    <!-- Vendor Content -->
                                    <h2 class="vendor-title"><a href="list-detail/{{$listing->id}}" class="title">{{$listing->title}}</a></h2>
                                    <p class="vendor-address">{{$listing->city}} , {{$listing->country}}</p>
                                </div>
                                <!-- /.Vendor Content -->
                                <div class="vendor-meta">
                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="vendor-price">
                                        {{$listing->price}}
                                </span>
                                        <span class="vendor-text">Start From</span></div>
                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="vendor-guest">
                                        {{$listing->seat}}
                                </span>
                                        <span class="vendor-text">Guest</span>
                                    </div>
                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="rating-star">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rate-mute"></i> 
                                    </span>
                                        <span class="rating-count vendor-text">(20)</span></div>
                                </div>
                            </div>
                            <!-- /.Vendor thumbnail -->
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- /. venue-thumbnail-section-->
    <!-- venue-categoris-section-->
    <div class="space-small">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="mb10">Venues by Category</h2>
                        <p>You can browse all venues by category with thumbnail image and category name.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <!-- venue-categoris-block-->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="venue-categories-block zoomimg">
                        <div class="venue-categories-img"> <a href="#"><img src="{{ asset('images/venue_categories_img_1.jpg') }}" alt="" class="img-fluid"></a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#" class="venue-categories-title">Castles (20)</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- venue-categoris-block-->
                    <div class="venue-categories-block">
                        <div class="venue-categories-img zoomimg"> <a href="#"><img src="{{ asset('images/venue_categories_img_2.jpg') }}" alt="" class="img-fluid"></a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#" class="venue-categories-title">Stately Homes (10)</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- venue-categoris-block-->
                    <div class="venue-categories-block">
                        <div class="venue-categories-img zoomimg"> <a href="#"><img src="{{ asset('images/venue_categories_img_3.jpg') }}" alt="" class="img-fluid"></a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#" class="venue-categories-title">Barns (12)</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- venue-categoris-block-->
                    <div class="venue-categories-block ">
                        <div class="venue-categories-img zoomimg"> <a href="#"><img src="{{ asset('images/venue_categories_img_4.jpg') }}" alt="" class="img-fluid"></a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#" class="venue-categories-title">Outdoors (18)</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- venue-categoris-block-->
                    <div class="venue-categories-block ">
                        <div class="venue-categories-img zoomimg"> <a href="#"><img src="{{ asset('images/venue_categories_img_5.jpg') }}" alt="" class="img-fluid"></a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#" class="venue-categories-title">Landmarks(12)</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- venue-categoris-block-->
                    <div class="venue-categories-block">
                        <div class="venue-categories-img zoomimg "> <a href="#"><img src="{{ asset('images/venue_categories_img_6.jpg') }}" alt="" class="img-fluid"></a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#" class="venue-categories-title">Restaurant (11)</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
            </div>
            <!-- venue-categoris-btn -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt60"><a href="#" class="btn btn-default btn-lg">View All category</a></div>
            </div>
            <!-- /.venue-categoris-btn -->
        </div>
        <!-- /.venue-categoris-section-->
        <!-- real-wedding-section-->
        <div class="space-small">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb40">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="section-title text-center">
                            <!-- section title start-->
                            <h2 class="mb10">Real Weddings</h2>
                            <p>Real inspiration from the real wedding couple. Get ideas for grooms and brides.</p>
                        </div>
                        <!-- /.section title start-->
                    </div>
                </div>
                <div class="row">
                    @foreach($couplewebsite as $couplewebsite)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="real-wedding-block">
                            <!-- real wedding block -->
                            <div class="real-wedding-img zoomimg">
                                <!-- real wedding img -->
                                <a href="#"><img src="{{asset('userimage')}}/{{$couplewebsite->rsvpformpic}}" style="height:300px;" class="img-fluid"></a>
                            </div>
                            <!-- /.real wedding img -->
                            <div class="real-wedding-content ">
                                <!-- real wedding content -->
                                <h3 class="real-wedding-title"><a href="http://127.0.0.1:8000/couple-website/{{ $couplewebsite->id }}" class="title">{{ $couplewebsite->couplename }}</a></h3>
                                <div class="real-wedding-meta"><span class="real-wedding-date">{{ $couplewebsite->weddingdate }}</span> 
                                <span class="real-wedding-place pl-3"><i class="fas fa-map-marker-alt pr-1"></i>{{ $couplewebsite->weddingplace }}</span>
                                </div>
                            </div>
                            <!-- /.real wedding img -->
                        </div>
                        <!-- /.real wedding block -->                   
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <a href="#" class="btn btn-default btn-lg">See more Real Weddings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.real-wedding-section-->
    <!-- feature-section-->
    <div class="bg-white space-medium">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="mb10">How it Works</h2>
                        <p>Simple and easy step to get started your wedding planning.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <!-- feature-block-->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="feature feature-icon-block">
                        <div class="feature-icon"><i class="icon icon-017-location icon-3x icon-default"></i></div>
                        <div class="feature-content">
                            <h3 class="mb-3">Search Supplier</h3>
                            <p>Sed scelerisque mauris eget erat sodales, sed aliquet elit commodo. Pellentesque ultrices pel malesuada. </p>
                        </div>
                    </div>
                </div>
                <!-- /.feature-block-->
                <!-- feature-block-->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="feature feature-icon-block">
                        <div class="feature-icon"> <i class="icon icon-004-chat icon-3x icon-default"></i></div>
                        <div class="feature-content">
                            <h3 class="mb-3">Book Perfect Vendor</h3>
                            <p>Proin sollicitudin quis risus ut mattis. Interdum et malesuada fames arbi nulla lacus, pretium at losum dolro. </p>
                        </div>
                    </div>
                </div>
                <!-- /.feature-block-->
                <!-- feature-block-->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="feature feature-icon-block">
                        <div class="feature-icon"><i class="icon icon-025-groom icon-3x icon-default"></i></div>
                        <div class="feature-content">
                            <h3 class="mb-3">Celebrate Wedding Day</h3>
                            <p>Nam euismod magna et neque consectetur imperdie traesent ut arcu sit amet nunc sollicitudin fringilla.</p>
                        </div>
                    </div>
                </div>
                <!-- /.feature-block-->
            </div>
        </div>
    </div>
    <!-- /.feature-section-->
    <!-- Testimonial-section -->
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="mb10">Testimonials from Real Brides</h2>
                        <p>Find out what about real couple have to say about related.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="testimonial-block">
                        <!-- testimonial block -->
                        <div class="testimonial-icon"> <i class="fa fa-quote-right fa-default"></i></div>
                        <h3 class="testimonial-name">Saima Alvi</h3>
                        <p class="testimonial-text">“And I knew exactly how old Walt Disney’s Cinderella felt when she found her prince.”</p>
                        <div class="testimonial-pic"><img src="{{ asset('images/weddingimg.jpg') }}" class="rounded-circle" style="height:100px;width:100px;" alt=""></div>
                        <div class="testimonial-meta">
                            <p class="testimonial-small-text mb0">Karachi</p>
                        </div>
                        <!-- /.testimonial block -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="testimonial-block">
                        <!-- testimonial block -->
                        <div class="testimonial-icon"> <i class="fa fa-quote-right fa-default"></i></div>
                        <h3 class="testimonial-name">Zohra Javaid</h3>
                        <p class="testimonial-text">“In the arithmetic of love, one plus one equals everything, and two minus one equals nothing.”</p>
                        <div class="testimonial-pic"><img src="{{ asset('images/weddingimg2.jpg') }}" class="rounded-circle" style="height:100px;width:100px;" alt=""></div>
                        <div class="testimonial-meta">
                            <p class="testimonial-small-text mb0">Lahore</p>
                        </div>
                        <!-- /.testimonial block -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="testimonial-block">
                        <!-- testimonial block -->
                        <div class="testimonial-icon"> <i class="fa fa-quote-right fa-default"></i></div>
                        <h3 class="testimonial-name">Mahira Zafar</h3>
                        <p class="testimonial-text">“Oh the heart that has truly loved never forgets, But as truly loves on to the close.”</p>
                        <div class="testimonial-pic"><img src="{{ asset('images/weddingimg3.jpg') }}" class="rounded-circle" style="height:100px;width:100px;" alt=""></div>
                        <div class="testimonial-meta">
                            <p class="testimonial-small-text mb0">Islamabad</p>
                        </div>
                        <!-- /.testimonial block -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Testimonial-section -->
    <!-- blog-post-section -->
    <div class="space-medium bg-white">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="mb10">Wedding Tips and News</h2>
                        <p> The ultimate wedding guide and tips for wedding couples.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="post-block-small text-center">
                        <div class="post-img mb30 zoomimg rounded">
                            <a href="#"><img src="{{ asset('images/post-img-1.jpg') }}" alt="" class="img-fluid "></a>
                        </div>
                        <h4><a href="#" class="title">Top 10 Wedding Tips for Groom & Bride</a></h4>
                        <!-- post block -->
                        <div class="meta">
                            <span class="meta-category">Photography</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 rounded">
                    <div class="post-block-small text-center">
                        <div class="post-img mb30 zoomimg rounded">
                            <a href="#"><img src="{{ asset('images/post-img-2.jpg') }}" alt="" class="img-fluid "></a>
                        </div>
                        <h4><a href="#" class="title">Top 10 Wedding Dress Expert Collections</a></h4>
                        <!-- post block -->
                        <div class="meta">
                            <span class="meta-category">Wedding Planning</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="post-block-small text-center">
                        <div class="post-img mb30 zoomimg  rounded">
                            <a href="#"><img src="{{ asset('images/post-img-3.jpg') }}" alt="" class="img-fluid  "></a>
                        </div>
                        <h4><a href="#" class="title">Best Wedding Destination & Venues 2019</a></h4>
                        <!-- post block -->
                        <div class="meta">
                            <span class="meta-category">Flowers</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                    <div class="post-block-small text-center">
                        <div class="post-img mb30 zoomimg  rounded">
                            <a href="#"><img src="{{ asset('images/post-img-4.jpg') }}" alt="" class="img-fluid "></a>
                        </div>
                        <h4><a href="#" class="title">Happy Wedding Couple  Smile Enjoying  Wine</a></h4>
                        <!-- post block -->
                        <div class="meta">
                            <span class="meta-category">Catering</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.blog-post-section -->
    <!-- social-media-section -->
    <div class="social-media-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-6 col-12">
                    <h3 class="text-white mb0 mt10">Would you like to connect with us</h3>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12 text-right">
                    <div class="social-icons">
                        <a href="#" class="icon-square"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-twitter"></i> </a>
                        <a href="#" class="icon-square"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.social-media-section -->
    <!-- footer-section -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <!-- footer-widget -->
                    <div class="footer-widget">
                        <a href="#"><img src="{{ asset('images/footer-logo.png') }}" alt="" class="mb20"></a>
                        <p class="mb10">Vestibulum ante elit, convallis quis nibh in, vulputate rhoncus massa. In hac habitasse platea dictumst.</p>
                        <p>In hac habitasse platea dictumst simple dummy content here.</p>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- footer-widget -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            Contact Address
                        </h3>
                        <p>4998 Elk Creek Road Canton,
                            <br> GA 30114</p>
                        <p class="mb0 text-default">+0-800-1234-123</p>
                        <p class="mb0 text-default">info@realwed.com</p>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- footer-widget -->
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            About Company
                        </h3>
                        <ul class="listnone">
                            <li><a href="/about-us">About us</a></li>
                            <li><a href="/contact-us">Contact us</a></li>
                            <li><a href="/faq">Faq</a></li>
                            <li><a href="#">Pricing Plan</a></li>
                            <li><a href="#">Meet The Team</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- /.footer-widget -->
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            List your Business
                        </h3>
                        <p>Are you vendor ? List your venue and service get more from listing business.</p>
                        <a href="/sigin" class="btn btn-default">List your Business</a>
                    </div>
                </div>
                <!-- /.footer-widget -->
            </div>
        </div>
    </div>
    <!-- tiny-footer-section -->
    <div class="tiny-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right">
                    <p>© 2018 RealWed. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.tiny-footer-section -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   
    <!-- owl-carousel js -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- nice-select js -->
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/fastclick.js') }}"></script>
    <script src="{{ asset('js/custom-script.js') }}"></script>
    <script src="{{ asset('js/return-to-top.js') }}"></script>
    </body>
</html>
