<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RealWed | Wedding Vendor & Supplier Directory HTML Template - Real Wedding Single</title>
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="{{ asset('fontawesome/css/fontawesome-all.css') }}" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="{{ asset('fontello/css/fontello.css') }}" rel="stylesheet">
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
@foreach($weddingwebsite as $weddingwebsite)
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
                            <p>Are You Vendor?<a href="#" class="text-white">List Your Business</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.header-top -->
    <!-- /.header -->
    <!-- page-header -->
    <div class="real-wedding-single-img" style="background-image: url( {{asset('userimage')}}/{{$weddingwebsite->rsvpformpic}} );">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="realwed-caption">
                        <h1 class="real-wedding-single-title">{{ $weddingwebsite->couplename }}</h1>
                        <span class="real-wedding-date text-white">{{ $weddingwebsite->weddingdate }}</span>
                        <span class="real-wedding-place ml-4 text-white"><i class="fas fa-map-marker-alt pr-2"></i>{{ $weddingwebsite->weddingplace }}</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- page caption -->
        <div class="realwed-addressbar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <p><i class="fas fa-map-marker-alt pr-2"></i>{{ $weddingwebsite->weddingaddress }}<span class="ml-4">Wedding Theme: <strong>Traditional Cultural Wedding</strong></span></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- page breadcrumb -->
    </div>
    <!-- /.page-header -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="leftsocial-icon">
                     <a href="#" class="icon-square-outline facebook-outline"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="icon-square-outline twitter-outline"><i class="fab fa-twitter"></i> </a>
                        <a href="#" class="icon-square-outline googleplus-outline"><i class="fab fa-google-plus-g"></i></a>
                         <a href="#" class="icon-square-outline instagram-outline"><i class="fab fa-instagram"></i></a>
                         <a href="#" class="icon-square-outline linkedin-outline"><i class="fab fa-linkedin-in"></i></a>
                       <a href="#" class="icon-square-outline pinterest-outline"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                    <div class="real-wedding-content bg-white border">
                        <!-- real-wedding-story -->
                        <div class="mb30">
                            <h3>Our Story</h3>
                            <p>{{ $weddingwebsite->yourstory }}</p>
                            <img src="{{asset('userimage')}}/{{$weddingwebsite->rsvpformpic}}" alt="">
                            <!-- /.real-wedding-story -->
                        </div>
                        <div class="mb30">
                            <h3>The Proposal</h3>
                            <p>{{ $weddingwebsite->yourproposal }}</p>
                            <img src="{{asset('userimage')}}/{{$weddingwebsite->filebutton2}}" alt="" class="mb10">
                            <img src="{{asset('userimage')}}/{{$weddingwebsite->filebutton3}}" alt="" class="mb10">
                            <img src="{{asset('userimage')}}/{{$weddingwebsite->filebutton4}}" alt="">
                        </div>
                    </div>
                    <div class="next-prev-post">
                        <div class="row">
                            <!-- prev-post -->
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="prev-post">
                                    <a href="#"><span class="pr-3"><i class="fas fa-angle-left"></i></span>Previous Real Wedding</a>
                                </div>
                            </div>
                            <!--/.prev-post -->
                            <!-- next-post -->
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="next-post">
                                    <a href="#">Next Real Wedding<span class="pl-3"><i class="fas fa-angle-right"></i></span></a>
                                </div>
                            </div>
                            <!-- /.next-post -->
                        </div>
                    </div>
                    <!-- /.real-wedding-grid -->
                </div>
                <!-- sidebar -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="sidebar ">
                        <div class="widget">
                            <h3 class="widget-title">Recent Real Wedding</h3>
                            <div class="recent-realwed">
                                <div class="row">
                                    <!-- real wedding block -->
                                    <div class="col-xl-4">
                                        <div class="real-wedding-img zoomimg">
                                            <!-- real wedding img -->
                                            <a href="#"><img src="{{ asset('images/real-wedding-img-1.jpg') }}" alt="Wedding Vendor & Supplier Directory HTML Template "  class="img-fluid"></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <!-- /.real wedding img -->
                                        <div class="recent-realwed-content pl-0">
                                            <!-- real wedding content -->
                                            <h5 class="mb-1"><a href="#" class="title">Vanessa & Ryan</a></h5>
                                            <div class="real-wedding-meta"><span class="real-wedding-date">07 May, 2018</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.real wedding img -->
                            </div>
                            <div class="recent-realwed">
                                <div class="row">
                                    <!-- real wedding block -->
                                    <div class="col-xl-4">
                                        <div class="real-wedding-img zoomimg">
                                            <!-- real wedding img -->
                                            <a href="#"><img src="{{ asset('images/real-wedding-img-2.jpg') }}" alt="Wedding Vendor & Supplier Directory HTML Template "  class="img-fluid"></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <!-- /.real wedding img -->
                                        <div class="recent-realwed-content pl-0">
                                            <!-- real wedding content -->
                                            <h5 class="mb-1"><a href="#" class="title">Jaunita & John</a></h5>
                                            <div class="real-wedding-meta"><span class="real-wedding-date">05 May, 2018</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.real wedding img -->
                            </div>
                            <div class="recent-realwed">
                                <div class="row">
                                    <!-- real wedding block -->
                                    <div class="col-xl-4">
                                        <div class="real-wedding-img zoomimg">
                                            <!-- real wedding img -->
                                            <a href="#"><img src="{{ asset('images/real-wedding-img-3.jpg') }}" alt="Wedding Vendor & Supplier Directory HTML Template "  class="img-fluid"></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <!-- /.real wedding img -->
                                        <div class="recent-realwed-content pl-0">
                                            <!-- real wedding content -->
                                            <h5 class="mb-1"><a href="#" class="title">Ronald & Stella</a></h5>
                                            <div class="real-wedding-meta"><span class="real-wedding-date">04 May, 2018</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.real wedding img -->
                            </div>
                            <div class="recent-realwed">
                                <div class="row">
                                    <!-- real wedding block -->
                                    <div class="col-xl-4">
                                        <div class="real-wedding-img zoomimg">
                                            <!-- real wedding img -->
                                            <a href="#"><img src="{{ asset('images/real-wedding-img-4.jpg') }}" alt="Wedding Vendor & Supplier Directory HTML Template "  class="img-fluid"></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <!-- /.real wedding img -->
                                        <div class="recent-realwed-content pl-0">
                                            <!-- real wedding content -->
                                            <h5 class="mb-1"><a href="#" class="title">Mary & Ronald</a></h5>
                                            <div class="real-wedding-meta"><span class="real-wedding-date">03 May, 2018</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.real wedding img -->
                            </div>
                        </div>
                        <div class="widget-banner">
                            <div class="widget-banner-caption">
                                <h3 class="text-white">Submit Your Real Wedding</h3>
                                <p>Only 3 Step and submit your realwedding photos.</p>
                                <a href="#" class="btn btn-default">submit now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.sidebar -->
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-block">
                        <h2>You may also like..</h2>
                    </div>
                </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="real-wedding-block">
                        <!-- real wedding block -->
                        <div class="real-wedding-img zoomimg">
                            <!-- real wedding img -->
                            <a href="#"><img src="{{ asset('images/real-wedding-img-1.jpg') }}" alt="Wedding Vendor & Supplier Directory HTML Template "  class="img-fluid"></a>
                        </div>
                        <!-- /.real wedding img -->
                        <div class="real-wedding-content ">
                            <!-- real wedding content -->
                            <h3 class="real-wedding-title"><a href="#" class="title">Vanessa & Ryan</a></h3>
                            <div class="real-wedding-meta"><span class="real-wedding-date">07 May, 2018</span> 
                            <span class="real-wedding-place pl-3"><i class="fas fa-map-marker-alt pr-1"></i>Surat</span>
                            </div>
                        </div>
                        <!-- /.real wedding img -->
                    </div>
                    <!-- /.real wedding block -->
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="real-wedding-block">
                        <!-- real wedding block -->
                        <div class="real-wedding-img zoomimg">
                            <!-- real wedding img -->
                            <a href="#"><img src="{{ asset('images/real-wedding-img-4.jpg') }}" alt="Wedding Vendor & Supplier Directory HTML Template "  class="img-fluid"></a>
                        </div>
                        <!-- /.real wedding img -->
                        <div class="real-wedding-content">
                            <!-- real wedding content -->
                            <h3 class="real-wedding-title"><a href="#" class="title">Rahul & Pooja</a></h3>
                           <div class="real-wedding-meta"><span class="real-wedding-date">10 May, 2018</span> 
                            <span class="real-wedding-place pl-3"><i class="fas fa-map-marker-alt pr-1"></i>Ahmedabad</span>
                           </div>
                        </div>
                        <!-- /.real wedding img -->
                    </div>
                    <!-- /.real wedding block -->
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="real-wedding-block">
                        <!-- real wedding block -->
                        <div class="real-wedding-img zoomimg">
                            <!-- real wedding img -->
                            <a href="#"><img src="{{ asset('images/real-wedding-img-2.jpg') }}" alt="Wedding Vendor & Supplier Directory HTML Template "  class="img-fluid"></a>
                        </div>
                        <!-- /.real wedding img -->
                        <div class="real-wedding-content">
                            <!-- real wedding content -->
                            <h3 class="real-wedding-title"><a href="#" class="title">Shreena & Dhanesh</a></h3>
                         <div class="real-wedding-meta"><span class="real-wedding-date">12 May, 2018</span> 
                            <span class="real-wedding-place pl-3"><i class="fas fa-map-marker-alt pr-1"></i>Pune</span>
                        
                         </div>
                        </div>
                        <!-- /.real wedding img -->
                    </div>
                    <!-- /.real wedding block -->
                </div>
            </div>
        </div>
    </div>
    <!-- social-media-section -->
    <div class="social-media-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
                    <h3 class="text-white mb0 mt10">Would you like to connect with us</h3>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12 text-right">
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
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Faq</a></li>
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
                            List you Business
                        </h3>
                        <p>Are you vendor ? List your venue and service get more from listing business.</p>
                        <a href="#" class="btn btn-default">List your Business</a>
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
    <!-- /.footer-section -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   
    <script src="{{ asset('js/custom-script.js') }}"></script>
    <script src="{{ asset('js/return-to-top.js') }}"></script>
@endforeach
</body>
</html>