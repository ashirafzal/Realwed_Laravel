<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{csrf_token()}}" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>List Detail - RealWed</title>
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="{{ asset('fontawesome/css/fontawesome-all.css') }}" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="{{ asset('fontello/css/fontello.css') }}" rel="stylesheet">
    <!--jquery-ui  -->
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
    <!--jquery-rateyo  -->
    <link href="{{ asset('css/jquery.rateyo.css') }}" rel="stylesheet">
    <!-- Template magnific popup gallery -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">
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
    <style>
        #list{
            z-index:1;
        }
        #signinform{
            z-index:999;
            position:absolute;
            width:100%;
            display:none;
            height:100%;
        }
    </style>
</head>
<body>
<script type="text/javascript">
    function whistlist(){
        document.getElementById("list").style.display="none";
        document.getElementById("signinform").style.display="block";
    }
</script>
  <div id="signinform">
        <!-- hero-section -->
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
                    <!-- search-block -->
                    <div class="">
                        <div class="text-center search-head">
                            <h1 class="search-head-title">Find Local Wedding Vendors</h1>
                            <p class="d-none d-xl-block d-lg-block d-sm-block text-white">Browse the best wedding vendors in your area — from venues and photographers, to wedding planners, caterers, florists and more by registering yourself.</p>
                        </div>
                        <!-- /.search-block -->
                        <!-- search-form -->
                        <form action="/userlogin" id="loginuser" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                            {{ csrf_field() }}
                            <div class="form-group">                              
                                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Enter your username" required>
                                <div class="invalid-feedback">Please enter a valid username.</div>
                            </div>                            
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Enter your password" required>
                                <div class="invalid-feedback">Please enter your new password to continue.</div>
                            </div>
                            <button type="submit" name="login" class="btn btn-default btn-block">Sign in</button>
                        </form>
                        <!-- /.search-form -->
                        <br/>
                        <!-- Sign in text -->
                        <div class="text-center search-head">
                            <p class="d-none d-xl-block d-lg-block d-sm-block text-white">
                                <a class="text-white" href="/register">Don't have an account ? Register Yourelf</a>
                                <br/>
                                <a class="text-white" href="/forgotpassword">Forgot your password?</a>
                            </p>
                        </div>
                        <!-- /. Sign in text -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.hero-section -->
    <!-- social-media-section -->
    <div class="social-media-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-6 col-12">
                    <h3 class="text-white mb0 mt10">Would you like to connect with us</h3>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12 text-right">
                    <div class="social-icons">
                        <a href="https://www.facebook.com" class="icon-square"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com" class="icon-square"><i class="fab fa-twitter"></i> </a>
                        <a href="https://www.google.com" class="icon-square"><i class="fab fa-google-plus-g"></i></a>
                        <a href="https://www.instagram.com" class="icon-square"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com" class="icon-square"><i class="fab fa-youtube"></i></a>
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
                            List you Business
                        </h3>
                        <p>Are you vendor ? List your venue and service get more from listing business.</p>
                        <a href="/signin" class="btn btn-default">List your Business</a>
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
  </div>
  <div id="list">
         <!-- header -->
  @foreach ($listing as $listing)
    @foreach ($listowner as $listowner)
    <!-- header end -->
    <div style="background-image: url( {{asset('userimage')}}/{{$listing->filebutton}} );" class="venue-pageheader">
        <div class="container">
            <div class="row align-items-end page-section">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">                   
                    <div class="">
                        <h1 class="vendor-heading">{{ $listing->title }}</h1>
                        <p class="text-white"><span class="mr-2"><i class="fas fa-map-marker-alt "></i></span>{{ $listing->address }} <a href="#view-map" class="btn-default-link">view map</a></p>
                    </div>                    
                </div>
                <div class="col-xl-5 text-lg-right">
                     <div class="mt-xl-4">
                        <a href="#" class="btn btn-primary" id="open-popup">View Gallery</a>
                        <a href="javascript:whistlist()" class="btn-default-wishlist"><i class="fa fa-heart"></i> <span class="pl-1">Add To Wishlist</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header -->
    <!-- page-header --> 
    <div class="vendor-content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                    <!--vendor-details -->
                    <div class="vendor-meta bg-white border m-0">
                        <div class="vendor-meta-item vendor-meta-item-bordered">
                            <span class="vendor-price">
                                {{ $listing->price }}
                                </span>
                            <span class="vendor-text">Start From</span></div>
                        <div class="vendor-meta-item vendor-meta-item-bordered">
                            <span class="vendor-guest">
                                {{ $listing->seat }}
                            </span>
                            <span class="vendor-text">Guest</span>
                        </div>
                        <div class="vendor-meta-item vendor-meta-item-bordered">
                        @if($overallrating >= 24.9)
                                <span class="rated">
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa  fa-star"></i> 
                                    <i class="fa  fa-star"></i>
                                </span>
                            @elseif($overallrating >= 22.5 && $overallrating < 25)
                                <span class="rated">
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa  fa-star"></i> 
                                    <i class="fa  fa-star-half"></i>
                                </span>
                            @elseif($overallrating >= 20)
                                <span class="rated">
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa  fa-star"></i> 
                                    <i class="far  fa-star"></i>
                                </span>
                            @elseif($overallrating >= 17.5 && $overallrating < 20)
                                <span class="rated">
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa  fa-star-half"></i> 
                                    <i class="far  fa-star"></i>
                                </span>
                            @elseif($overallrating >= 15)
                                <span class="rated">
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="far  fa-star"></i> 
                                    <i class="far  fa-star"></i>
                                </span>
                            @elseif($overallrating >= 12.5 && $overallrating < 15)
                                <span class="rated">
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star-half"></i> 
                                    <i class="far  fa-star"></i> 
                                    <i class="far  fa-star"></i>
                                </span>
                            @elseif($overallrating >= 10)
                                <span class="rated">
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="far fa-star"></i> 
                                    <i class="far  fa-star"></i> 
                                    <i class="far  fa-star"></i>
                                </span>
                            @elseif($overallrating >= 7.5 && $overallrating < 10)
                                <span class="rated">
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star-half"></i> 
                                    <i class="far fa-star"></i> 
                                    <i class="far  fa-star"></i> 
                                    <i class="far  fa-star"></i>
                                </span>
                            @elseif($overallrating >= 5)
                                <span class="rated">
                                    <i class="fa fa-star"></i> 
                                    <i class="far fa-star"></i> 
                                    <i class="far fa-star"></i> 
                                    <i class="far  fa-star"></i> 
                                    <i class="far  fa-star"></i>
                                </span>
                            @elseif($overallrating >= 2.5 && $overallrating < 5)
                                <span class="rated">
                                    <i class="fa fa-star-half"></i> 
                                    <i class="far fa-star"></i> 
                                    <i class="far fa-star"></i> 
                                    <i class="far  fa-star"></i> 
                                    <i class="far  fa-star"></i>
                                </span>
                            @else
                                <span class="rated">
                                    <i class="far fa-star"></i> 
                                    <i class="far fa-star"></i> 
                                    <i class="far fa-star"></i> 
                                    <i class="far  fa-star"></i> 
                                    <i class="far  fa-star"></i>
                                </span>
                            @endif
                            <span class="rating-count vendor-text">({{$listing_review_count}})</span>
                        </div>
                    </div>
                    <div class="mt20">
                        <div class="card border card-shadow-none">
                            <h3 class="card-header bg-white">About Wedding Venue</h3>
                            <div class="card-body">
                                <!--/.vendor-details -->
                                <!--vendor-description -->
                                <p class="lead">{{ $listing->title }}</p>
                                <h4>Description and other details</h4>
                                <p>{{ $listing->editordata }}</p>
                                <!--venue-highlights -->
                                <div class="venue-highlights">
                                    <div class=" table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Venue Highlights</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Maximum Capacity</td>
                                                    <td class="venue-highlight-meta">{{ $listing->seat }}</td>
                                                </tr>
                                                <tr>
                                                    <td>City</td>
                                                    <td class="venue-highlight-meta">{{ $listing->city }}</td>
                                                </tr>
                                                <tr>
                                                    <td>State</td>
                                                    <td class="venue-highlight-meta">{{ $listing->state }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Country</td>
                                                    <td class="venue-highlight-meta">{{ $listing->country }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.venue-highlights -->
                            </div>
                        </div>
                        <!--vendor-description -->
                        <!-- aminities-block -->
                        <div class="card border card-shadow-none">
                            <h3 class="card-header bg-white">Accommodations / Amenities Included</h3>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <div class="animities-list">
                                            <ul class="list-unstyled arrow">
                                                <li>Groom Lounge - {{ $listing->groomlounge }}</li>
                                                <li>Bridal Suite - {{ $listing->bridalsuite }}</li>
                                                <li>Table and Chairs - {{ $listing->tableandchairs }}</li>
                                                <li>Get Ready Rooms - {{ $listing->getreadyrooms }}</li>
                                                <li>Event Rental - {{ $listing->eventrentals }}</li>
                                                <li>Outside Vendors - {{ $listing->outsidevendors }}</li>
                                                <li>Bar Services - {{ $listing->barservices }} </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <div class="animities-list">
                                            <ul class="list-unstyled arrow">
                                                <li>Catering Services - {{ $listing->cateringservices }}</li>
                                                <li>Clean Up - {{ $listing->cleanup }}</li>
                                                <li>Event Planner - {{ $listing->eventplanner }}</li>
                                                <li>Wifi - {{ $listing->wifi }}</li>
                                                <li>Pet Friendly - {{ $listing->petfriendly }}</li>
                                                <li>Accomodations - {{ $listing->accommodations }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.aminities-block -->
                        <!-- review-block -->
                        <div id="reviews">
                            <div class="card border card-shadow-none ">
                                <div class="card-header bg-white">
                                    <h3 class="mb0 d-inline-block">Reviews</h3>
                                    <a href="#review-form" class="btn btn-default btn-sm float-right d-inline-block">write a review</a>
                                </div>
                                <div class="card-body">
                                    <div class="review-block">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <!-- review-sidebar -->
                                                <div class="review-sidebar">
                                                        <div class="review-total">{{$listing_review_count}}</div>
                                                        <div class="review-text">Reviews</div>
                                                        @if($overallrating >= 24.9)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa  fa-star"></i> 
                                                                <i class="fa  fa-star"></i>
                                                            </span>
                                                        @elseif($overallrating >= 22.5 && $overallrating < 25)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa  fa-star"></i> 
                                                                <i class="fa  fa-star-half"></i>
                                                            </span>
                                                        @elseif($overallrating >= 20)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($overallrating >= 17.5 && $overallrating < 20)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa  fa-star-half"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($overallrating >= 15)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($overallrating >= 12.5 && $overallrating < 15)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star-half"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($overallrating >= 10)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($overallrating >= 7.5 && $overallrating < 10)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star-half"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($overallrating >= 5)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($overallrating >= 2.5 && $overallrating < 5)
                                                            <span class="rated">
                                                                <i class="fa fa-star-half"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @else
                                                            <span class="rated">
                                                                <i class="far fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @endif
                                                        <p>{{ number_format($overallrating,1)/5 }} average based on 1 ratings.</p>
                                                    </div>
                                                
                                                <!-- /.review-sidebar -->
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="review-box">
                                                <!-- review-list -->
                                                <div class="review-list">
                                                    <div class="review-for">Quality Service</div>
                                                    <div class="review-rating">
                                                    @if($qualityservices == 5)
                                                        <span class="rated">
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa  fa-star"></i> 
                                                            <i class="fa  fa-star"></i>
                                                        </span>
                                                    @elseif($qualityservices >= 4.5 && $qualityservices < 5)
                                                        <span class="rated">
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa  fa-star"></i> 
                                                            <i class="fa  fa-star-half"></i>
                                                        </span>
                                                    @elseif($qualityservices >= 4)
                                                        <span class="rated">
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa  fa-star"></i> 
                                                            <i class="far  fa-star"></i>
                                                        </span>
                                                    @elseif($qualityservices >= 3.5 && $qualityservices < 4)
                                                        <span class="rated">
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa  fa-star-half"></i> 
                                                            <i class="far  fa-star"></i>
                                                        </span>
                                                    @elseif($qualityservices >= 3)
                                                        <span class="rated">
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa fa-star"></i> 
                                                            <i class="far  fa-star"></i> 
                                                            <i class="far  fa-star"></i>
                                                        </span>
                                                    @elseif($qualityservices >= 2.5 && $qualityservices < 3)
                                                        <span class="rated">
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa fa-star-half"></i> 
                                                            <i class="far  fa-star"></i> 
                                                            <i class="far  fa-star"></i>
                                                        </span>
                                                    @elseif($qualityservices >= 2)
                                                        <span class="rated">
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa fa-star"></i> 
                                                            <i class="far fa-star"></i> 
                                                            <i class="far  fa-star"></i> 
                                                            <i class="far  fa-star"></i>
                                                        </span>
                                                    @elseif($qualityservices >= 1.5 && $qualityservices < 2)
                                                        <span class="rated">
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa fa-star-half"></i> 
                                                            <i class="far fa-star"></i> 
                                                            <i class="far  fa-star"></i> 
                                                            <i class="far  fa-star"></i>
                                                        </span>
                                                    @elseif($qualityservices >= 1)
                                                        <span class="rated">
                                                            <i class="fa fa-star"></i> 
                                                            <i class="far fa-star"></i> 
                                                            <i class="far fa-star"></i> 
                                                            <i class="far  fa-star"></i> 
                                                            <i class="far  fa-star"></i>
                                                        </span>
                                                    @elseif($qualityservices >= 0.5 && $qualityservices < 1)
                                                        <span class="rated">
                                                            <i class="fa fa-star-half"></i> 
                                                            <i class="far fa-star"></i> 
                                                            <i class="far fa-star"></i> 
                                                            <i class="far  fa-star"></i> 
                                                            <i class="far  fa-star"></i>
                                                        </span>
                                                    @else
                                                        <span class="rated">
                                                            <i class="far fa-star"></i> 
                                                            <i class="far fa-star"></i> 
                                                            <i class="far fa-star"></i> 
                                                            <i class="far  fa-star"></i> 
                                                            <i class="far  fa-star"></i>
                                                        </span>
                                                    @endif
                                                    </div>
                                                    <div class="review-number">{{ number_format($qualityservices,1) }}</div>
                                                </div>
                                                <!-- /.review-list -->
                                                <!-- review-list -->
                                                <div class="review-list">
                                                    <div class="review-for">Facilities</div>
                                                    <div class="review-rating">
                                                        @if($faciliteis == 5)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa  fa-star"></i> 
                                                                <i class="fa  fa-star"></i>
                                                            </span>
                                                        @elseif($faciliteis >= 4.5 && $faciliteis < 5)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa  fa-star"></i> 
                                                                <i class="fa  fa-star-half"></i>
                                                            </span>
                                                        @elseif($faciliteis >= 4)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($faciliteis >= 3.5 && $faciliteis < 4)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa  fa-star-half"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($faciliteis >= 3)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($faciliteis >= 2.5 && $faciliteis < 3)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star-half"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($faciliteis >= 2)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($faciliteis >= 1.5 && $faciliteis < 2)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star-half"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($faciliteis >= 1)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($faciliteis >= 0.5 && $faciliteis < 1)
                                                            <span class="rated">
                                                                <i class="fa fa-star-half"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @else
                                                            <span class="rated">
                                                                <i class="far fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="review-number">{{ number_format($faciliteis,1) }}</div>
                                                </div>
                                                <!-- /.review-list -->
                                                <!-- review-list -->
                                                <div class="review-list">
                                                    <div class="review-for">Staff</div>
                                                    <div class="review-rating">
                                                    @if($staff == 5)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa  fa-star"></i> 
                                                                <i class="fa  fa-star"></i>
                                                            </span>
                                                        @elseif($staff >= 4.5 && $staff < 5)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa  fa-star"></i> 
                                                                <i class="fa  fa-star-half"></i>
                                                            </span>
                                                        @elseif($staff >= 4)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($staff >= 3.5 && $staff < 4)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa  fa-star-half"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($staff >= 3)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($staff >= 2.5 && $staff < 3)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star-half"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($staff >= 2)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($staff >= 1.5 && $staff < 2)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star-half"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($staff >= 1)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($staff >= 0.5 && $staff < 1)
                                                            <span class="rated">
                                                                <i class="fa fa-star-half"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @else
                                                            <span class="rated">
                                                                <i class="far fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @endif
                                                </div>
                                                    <div class="review-number">{{ number_format($staff,1) }}</div>
                                                </div>
                                                <!-- /.review-list -->
                                                <!-- review-list -->
                                                <div class="review-list">
                                                    <div class="review-for">Flexibility</div>
                                                    <div class="review-rating">
                                                    @if($flexibility == 5)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa  fa-star"></i> 
                                                                <i class="fa  fa-star"></i>
                                                            </span>
                                                        @elseif($flexibility >= 4.5 && $flexibility < 5)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa  fa-star"></i> 
                                                                <i class="fa  fa-star-half"></i>
                                                            </span>
                                                        @elseif($flexibility >= 4)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($flexibility >= 3.5 && $flexibility < 4)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa  fa-star-half"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($flexibility >= 3)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($flexibility >= 2.5 && $flexibility < 3)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star-half"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($flexibility >= 2)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($flexibility >= 1.5 && $flexibility < 2)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star-half"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($flexibility >= 1)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($flexibility >= 0.5 && $flexibility < 1)
                                                            <span class="rated">
                                                                <i class="fa fa-star-half"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @else
                                                            <span class="rated">
                                                                <i class="far fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="review-number">{{ number_format($flexibility,1) }}</div>
                                                </div>
                                                <!-- /.review-list -->
                                                <!-- review-list -->
                                                <div class="review-list">
                                                    <div class="review-for">Value of money</div>
                                                    <div class="review-rating">
                                                        @if($valueofmoney == 5)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa  fa-star"></i> 
                                                                <i class="fa  fa-star"></i>
                                                            </span>
                                                        @elseif($valueofmoney >= 4.5 && $valueofmoney < 5)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa  fa-star"></i> 
                                                                <i class="fa  fa-star-half"></i>
                                                            </span>
                                                        @elseif($valueofmoney >= 4)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($valueofmoney >= 3.5 && $valueofmoney < 4)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa  fa-star-half"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($valueofmoney >= 3)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($valueofmoney >= 2.5 && $valueofmoney < 3)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star-half"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($valueofmoney >= 2)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($valueofmoney >= 1.5 && $valueofmoney < 2)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star-half"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($valueofmoney >= 1)
                                                            <span class="rated">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @elseif($valueofmoney >= 0.5 && $valueofmoney < 1)
                                                            <span class="rated">
                                                                <i class="fa fa-star-half"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @else
                                                            <span class="rated">
                                                                <i class="far fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far fa-star"></i> 
                                                                <i class="far  fa-star"></i> 
                                                                <i class="far  fa-star"></i>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="review-number">{{ number_format($valueofmoney,1) }}</div>
                                                </div>
                                                <!-- /.review-list -->
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach($listing_review as $listing_review)
                        <!-- /.review-block -->
                        <div class="card border card-shadow-none ">
                            <!-- review-user -->
                            <div class="card-header bg-white mb0">
                                <div class="review-user">
                                    <div class="user-img"> <img style="width:50px;height:50px;" src="{{ asset('userimage') }}/{{$listing_review->userimage}}" alt="star rating jquery" class="rounded-circle"></div>
                                    <div class="user-meta">
                                        <h5 class="user-name mb-0">{{ $listing_review->username }}<span class="user-review-date">Date : {{ $listing_review->date }}</span></h5>
                                        <div class="given-review">
                                            @if($listing_review->overallrating == 25)
                                                <span class="rated">
                                                    <i class="fa fa-star"></i> 
                                                    <i class="fa fa-star"></i> 
                                                    <i class="fa fa-star"></i> 
                                                    <i class="fa  fa-star"></i> 
                                                    <i class="fa  fa-star"></i>
                                                </span>
                                            @elseif($listing_review->overallrating >= 20)
                                                <span class="rated">
                                                    <i class="fa fa-star"></i> 
                                                    <i class="fa fa-star"></i> 
                                                    <i class="fa fa-star"></i> 
                                                    <i class="fa  fa-star"></i> 
                                                    <i class="far  fa-star"></i>
                                                </span>
                                            @elseif($listing_review->overallrating >= 15)
                                                <span class="rated">
                                                    <i class="fa fa-star"></i> 
                                                    <i class="fa fa-star"></i> 
                                                    <i class="fa fa-star"></i> 
                                                    <i class="far  fa-star"></i> 
                                                    <i class="far  fa-star"></i>
                                                </span>
                                            @elseif($listing_review->overallrating >= 10)
                                                <span class="rated">
                                                    <i class="fa fa-star"></i> 
                                                    <i class="fa fa-star"></i> 
                                                    <i class="far fa-star"></i> 
                                                    <i class="far  fa-star"></i> 
                                                    <i class="far  fa-star"></i>
                                                </span>
                                            @elseif($listing_review->overallrating >= 5)
                                                <span class="rated">
                                                    <i class="fa fa-star"></i> 
                                                    <i class="far fa-star"></i> 
                                                    <i class="far fa-star"></i> 
                                                    <i class="far  fa-star"></i> 
                                                    <i class="far  fa-star"></i>
                                                </span>
                                                @else
                                                <span class="rated">
                                                    <i class="far fa-star"></i> 
                                                    <i class="far fa-star"></i> 
                                                    <i class="far fa-star"></i> 
                                                    <i class="far  fa-star"></i> 
                                                    <i class="far  fa-star"></i>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.review-user -->
                            <div class="card-body">
                                <!-- review-descripttions -->
                                <div class="review-descriptions">
                                    <p>{{ $listing_review->review_text }}</p>
                                </div>
                                <!-- /.review-descripttions -->
                            </div>
                        </div>
                        @endforeach
                        <!-- /.review-content -->
                    </div>
                    <!-- /.review-content -->
                    <!-- review-form -->
                    <!-- /.review-block -->
                    <div class="card border card-shadow-none leave-review" id="review-form">
                        <div class="card-header bg-white mb0">
                            <h3 class="mb0">Write Your Reviews</h3>
                        </div>
                        <div class="card-body">
                            <div class="review-rating-select">
                                <div class="rate-selection">
                                    <span class="text-dark">Quality Service </span>
                                    <span class="rated">
                                        <i class="far fa-star" id="qstar" onclick="change()"></i>
                                        <i class="far fa-star" id="qstar2" onclick="change2()"></i> 
                                        <i class="far fa-star" id="qstar3" onclick="change3()"></i> 
                                        <i class="far fa-star" id="qstar4" onclick="change4()"></i> 
                                        <i class="far  fa-star" id="qstar5" onclick="change5()"></i> 
                                    </span>
                                    <!--<span id="rateYo1"></span>-->
                                </div>
                                <div class="rate-selection">
                                    <span class="text-dark">Facilities </span>
                                        <i class="far fa-star" id="qstar6" onclick="change6()"></i>
                                        <i class="far fa-star" id="qstar7" onclick="change7()"></i> 
                                        <i class="far fa-star" id="qstar8" onclick="change8()"></i> 
                                        <i class="far fa-star" id="qstar9" onclick="change9()"></i> 
                                        <i class="far  fa-star" id="qstar10" onclick="change10()"></i> 
                                    <!--<span id="rateYo2"></span>-->
                                </div>
                                <div class="rate-selection">
                                    <span class="text-dark">Staff</span>
                                        <i class="far fa-star" id="qstar11" onclick="change11()"></i>
                                        <i class="far fa-star" id="qstar12" onclick="change12()"></i> 
                                        <i class="far fa-star" id="qstar13" onclick="change13()"></i> 
                                        <i class="far fa-star" id="qstar14" onclick="change14()"></i> 
                                        <i class="far  fa-star" id="qstar15" onclick="change15()"></i>
                                    <!--<span id="rateYo3"></span>-->
                                </div>
                                <div class="rate-selection">
                                    <span class="text-dark">Flexibility</span>
                                        <i class="far fa-star" id="qstar16" onclick="change16()"></i>
                                        <i class="far fa-star" id="qstar17" onclick="change17()"></i> 
                                        <i class="far fa-star" id="qstar18" onclick="change18()"></i> 
                                        <i class="far fa-star" id="qstar19" onclick="change19()"></i> 
                                        <i class="far  fa-star" id="qstar20" onclick="change20()"></i>
                                    <!--<span id="rateYo4"></span>-->
                                </div>
                                <div class="rate-selection">
                                    <span class="text-dark">Value of money</span>
                                    <i class="far fa-star" id="qstar21" onclick="change21()"></i>
                                        <i class="far fa-star" id="qstar22" onclick="change22()"></i> 
                                        <i class="far fa-star" id="qstar23" onclick="change23()"></i> 
                                        <i class="far fa-star" id="qstar24" onclick="change24()"></i> 
                                        <i class="far  fa-star" id="qstar25" onclick="change25()"></i>
                                    <!--<span id="rateYo5"></span>-->
                                </div>
                            </div>
                            <form id="submitreview">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="alert alert-success" style="display:none">
                                    </div>
                                    <div class="alert alert-danger" style="display:none">
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="form-group">
                                            <input id="userid" name="userid" type="hidden" value="" class="form-control input-md" required="">
                                        </div>
                                    <!-- Textarea -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt30">
                                        <div class="form-group">
                                            <label class="control-label" for="review">Write Your Review</label>
                                            <textarea class="form-control" id="review_text" name="review_text" rows="5" placeholder="Write Review"></textarea>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="name">Name</label>
                                            <input id="review_name" name="review_name" type="text" placeholder="Name" class="form-control input-md">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="email">Email</label>
                                            <input id="review_email" name="review_email" type="text" placeholder="Email" class="form-control input-md">
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <button onclick="whistlist()" name="submit" class="btn btn-default">Submit review</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                    
                    <!-- /.review-form -->
                    <!-- location -->
                    <div class="card border card-shadow-none" id="view-map">
                        <div class="card-header bg-white mb0">
                            <h3 class="mb0">Location - Map</h3>
                        </div>
                        <div class="card-body">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
                <!-- /.location -->
                <!-- list-sidebar -->
                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                    <div class="sidebar-venue" >
                        <div class="card">
                            <div class="card-body">
                                <form id="requestquote" class="needs-validation" novalidate>
                                    {{ csrf_field() }}
                                        <div class="alert alert-info alert-block" style="display:none;">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong></strong>
                                        </div>
                                        <div class="alert alert-danger" id="danger" style="display:none">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong></strong>
                                        </div>
                                        <br>
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h3 class="mb20">Request Quote</h3>
                                        </div>
                                         <!-- Time field -->
                                         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <input id="localtime" name="localtime" type="hidden" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <!-- Time Field end -->
                                        <!-- Text input-->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <input id="requestquote_creatorid" name="requestquote_creatorid" value="{{ $listowner->id }}" type="hidden" placeholder="Name" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label sr-only" for="name1">Name</label>
                                                <input id="requestquote_name" name="requestquote_name" type="text" placeholder="Name" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class=" control-label sr-only" for="email1">Email</label>
                                                <input id="requestquote_email" name="requestquote_email" type="text" placeholder="Email" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class=" control-label sr-only" for="phone">Phone</label>
                                                <input id="requestquote_phone" name="requestquote_phone" type="text" placeholder="Phone" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label sr-only" for="weddingdate">Wedding Date</label>
                                                <input id="requestquote_weddingdate" name="requestquote_weddingdate" type="text" placeholder="Wedding Date" class="form-control weddingdate" required="">
                                                <div class="venue-form-calendar"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                        <!-- Textarea -->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label sr-only" for="comments">Comment</label>
                                                <textarea class="form-control" id="requestquote_comments" name="requestquote_comments" rows="3" placeholder="Write Comment"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <button type="submit" id="requestquote_submit" name="requestquote_submit" class="btn btn-default btn-block">Submit Quote</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- venue-admin -->
                        <div class="vendor-owner-profile mb30">
                            <div class="vendor-owner-profile-head">
                                <div class="vendor-owner-profile-img"><img style="width:150px; height:150px;" src="{{ asset('userimage') }}/{{$listowner->userimage}}" class="rounded-circle" alt=""></div>
                                <h4 class="vendor-owner-name mb0">{{ $listowner->name }}</h4>
                            </div>
                            <div class="vendor-owner-profile-content">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><span class="mr-2"><i class="fas fa-align-justify"></i></span>{{ $listowner->description }}</li>
                                    <li class="list-group-item"><span class="mr-2"><i class="fas fa-fw fa-phone"></i></span>{{ $listowner->phone }}</li>
                                    <li class="list-group-item"><span class="mr-2"><i class="fab fa-facebook-f"></i></span>{{ $listowner->facebook }}/li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.venue-admin -->
                        <!-- social-media -->
                        <div class="widget">
                            <h4 class="widget-title">Share this </h4>
                            <div class="social-icons">
                                <a href="#" class="icon-square-outline facebook-outline"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="icon-square-outline twitter-outline"><i class="fab fa-twitter"></i> </a>
                                <a href="#" class="icon-square-outline googleplus-outline"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#" class="icon-square-outline instagram-outline"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="icon-square-outline linkedin-outline"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="icon-square-outline pinterest-outline"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                        <!-- /.social-media -->
                    </div>
                </div>
            </div>
            <!-- /.list-sidebar -->
        </div>
    </div>
    <!-- vendor-thumbnail section -->
    <div class="space-small">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2>Latest listings from this vendor</h2>
                </div>
            </div>
            <div class="row">
            @foreach ($last3listing as $last3listing)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="vendor-thumbnail">
                        <!-- Vendor thumbnail -->
                        <div class="vendor-img zoomimg">
                            <!-- Vendor img -->
                            <a href="{{$last3listing->id }}"><img style="width:400px; height:250px;" src="{{ asset('userimage') }}/{{$last3listing->filebutton}}" alt="" class="img-fluid"></a>
                            <div class="wishlist-sign"><a href="javascript:whistlist()" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                        </div>
                        <!-- /.Vendor img -->
                        <div class="vendor-content">
                            <!-- Vendor Content -->
                            <h2 class="vendor-title"><a href="#" class="title">{{ $last3listing->title }}</a></h2>
                            <p class="vendor-address">{{ $last3listing->address }}</p>
                        </div>
                        <div class="vendor-meta">
                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                <span class="vendor-price">
                                    {{ $last3listing->price }}
                                </span>
                                <span class="vendor-text">Start From</span></div>
                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                <span class="vendor-guest">
                                 {{ $last3listing->seat }}
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
                                <span class="rating-count vendor-text">(X)</span></div>
                        </div>
                        <!-- /.Vendor Content -->
                    </div>
                    <!-- /.Vendor thumbnail -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- /.vendor-thumbnail section -->
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
  </div>
    <!-- /.tiny-footer-section -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/fastclick.js') }}"></script>
    <!-- popup gallery -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <!--<script src="{{ asset('js/custom-script.js') }}"></script>-->
    <script type="text/javascript">
        function change()
        {
            if(document.getElementById("qstar").className == "far fa-star"){
                document.getElementById("qstar").className = "fa fa-star"
            }else{
                document.getElementById("qstar").className = "far fa-star"
            }
        }
        function change2()
        {
            if(document.getElementById("qstar2").className == "far fa-star"){
                document.getElementById("qstar2").className = "fa fa-star"
            }else{
                document.getElementById("qstar2").className = "far fa-star"
            }
        }
        function change3()
        {
            if(document.getElementById("qstar3").className == "far fa-star"){
                document.getElementById("qstar3").className = "fa fa-star"
            }else{
                document.getElementById("qstar3").className = "far fa-star"
            }
        }
        function change4()
        {
            if(document.getElementById("qstar4").className == "far fa-star"){
                document.getElementById("qstar4").className = "fa fa-star"
            }else{
                document.getElementById("qstar4").className = "far fa-star"
            }
        }
        function change5()
        {
            if(document.getElementById("qstar5").className == "far fa-star"){
                document.getElementById("qstar5").className = "fa fa-star"
            }else{
                document.getElementById("qstar5").className = "far fa-star"
            }
        }
        function change6()
        {
            if(document.getElementById("qstar6").className == "far fa-star"){
                document.getElementById("qstar6").className = "fa fa-star"
            }else{
                document.getElementById("qstar6").className = "far fa-star"
            }
        }
        function change7()
        {
            if(document.getElementById("qstar7").className == "far fa-star"){
                document.getElementById("qstar7").className = "fa fa-star"
            }else{
                document.getElementById("qstar7").className = "far fa-star"
            }
        }
        function change8()
        {
            if(document.getElementById("qstar8").className == "far fa-star"){
                document.getElementById("qstar8").className = "fa fa-star"
            }else{
                document.getElementById("qstar8").className = "far fa-star"
            }
        }
        function change9()
        {
            if(document.getElementById("qstar9").className == "far fa-star"){
                document.getElementById("qstar9").className = "fa fa-star"
            }else{
                document.getElementById("qstar9").className = "far fa-star"
            }
        }
        function change10()
        {
            if(document.getElementById("qstar10").className == "far fa-star"){
                document.getElementById("qstar10").className = "fa fa-star"
            }else{
                document.getElementById("qstar10").className = "far fa-star"
            }
        }
        function change11()
        {
            if(document.getElementById("qstar11").className == "far fa-star"){
                document.getElementById("qstar11").className = "fa fa-star"
            }else{
                document.getElementById("qstar11").className = "far fa-star"
            }
        }
        function change12()
        {
            if(document.getElementById("qstar12").className == "far fa-star"){
                document.getElementById("qstar12").className = "fa fa-star"
            }else{
                document.getElementById("qstar12").className = "far fa-star"
            }
        }
        function change13()
        {
            if(document.getElementById("qstar13").className == "far fa-star"){
                document.getElementById("qstar13").className = "fa fa-star"
            }else{
                document.getElementById("qstar13").className = "far fa-star"
            }
        }
        function change14()
        {
            if(document.getElementById("qstar14").className == "far fa-star"){
                document.getElementById("qstar14").className = "fa fa-star"
            }else{
                document.getElementById("qstar14").className = "far fa-star"
            }
        }
        function change15()
        {
            if(document.getElementById("qstar15").className == "far fa-star"){
                document.getElementById("qstar15").className = "fa fa-star"
            }else{
                document.getElementById("qstar15").className = "far fa-star"
            }
        }
        function change16()
        {
            if(document.getElementById("qstar16").className == "far fa-star"){
                document.getElementById("qstar16").className = "fa fa-star"
            }else{
                document.getElementById("qstar16").className = "far fa-star"
            }
        }
        function change17()
        {
            if(document.getElementById("qstar17").className == "far fa-star"){
                document.getElementById("qstar17").className = "fa fa-star"
            }else{
                document.getElementById("qstar17").className = "far fa-star"
            }
        }
        function change18()
        {
            if(document.getElementById("qstar18").className == "far fa-star"){
                document.getElementById("qstar18").className = "fa fa-star"
            }else{
                document.getElementById("qstar18").className = "far fa-star"
            }
        }
        function change19()
        {
            if(document.getElementById("qstar19").className == "far fa-star"){
                document.getElementById("qstar19").className = "fa fa-star"
            }else{
                document.getElementById("qstar19").className = "far fa-star"
            }
        }
        function change20()
        {
            if(document.getElementById("qstar20").className == "far fa-star"){
                document.getElementById("qstar20").className = "fa fa-star"
            }else{
                document.getElementById("qstar20").className = "far fa-star"
            }
        }
        function change21()
        {
            if(document.getElementById("qstar21").className == "far fa-star"){
                document.getElementById("qstar21").className = "fa fa-star"
            }else{
                document.getElementById("qstar21").className = "far fa-star"
            }
        }
        function change22()
        {
            if(document.getElementById("qstar22").className == "far fa-star"){
                document.getElementById("qstar22").className = "fa fa-star"
            }else{
                document.getElementById("qstar22").className = "far fa-star"
            }
        }
        function change23()
        {
            if(document.getElementById("qstar23").className == "far fa-star"){
                document.getElementById("qstar23").className = "fa fa-star"
            }else{
                document.getElementById("qstar23").className = "far fa-star"
            }
        }
        function change24()
        {
            if(document.getElementById("qstar24").className == "far fa-star"){
                document.getElementById("qstar24").className = "fa fa-star"
            }else{
                document.getElementById("qstar24").className = "far fa-star"
            }
        }
        function change25()
        {
            if(document.getElementById("qstar25").className == "far fa-star"){
                document.getElementById("qstar25").className = "fa fa-star"
            }else{
                document.getElementById("qstar25").className = "far fa-star"
            }
        }
    </script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
</script>
<script>
        jQuery(document).ready(function(){
            jQuery('#requestquote_submit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });

              if ($.trim($("#requestquote_name").val()) === "" || $.trim($("#requestquote_email").val()) === ""
                || $.trim($("#requestquote_phone").val()) === "" || $.trim($("#requestquote_weddingdate").val()) === ""
                || $.trim($("#requestquote_comments").val()) === ""){
                    $("#danger").css('display','block');
                    $("#danger").html('All Fields required. Make sure you fill up all fields');
                    return false;
            }else{                      
                        jQuery.ajax({
                        url: "{{ url('requestquote') }}",
                        method: 'post',
                        data: {
                            requestquote_creatorid : jQuery('#requestquote_creatorid').val(),
                            localtime: jQuery('#localtime').val(),
                            requestquote_name: jQuery('#requestquote_name').val(),
                            requestquote_email: jQuery('#requestquote_email').val(),
                            requestquote_phone: jQuery('#requestquote_phone').val(),
                            requestquote_weddingdate: jQuery('#requestquote_weddingdate').val(),
                            requestquote_comments: jQuery('#requestquote_comments').val()
                        },
                            success: function(result){
                                $(".alert-info").css('display','block');
                                $(".alert-info").html(result);
                        }
                    });
                }                    
            });
        });
</script>
<script type="text/javascript">
        var currentTime = new Date();
        document.getElementById("localtime").value = currentTime;
</script>
<script>
        jQuery(document).ready(function(){
            jQuery('#submit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });                                
            });
        });
    </script>
    <script>
    function initMap() {
        var uluru = {
            lat: 23.0732195,
            lng: 72.5646902
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: "{{ asset('images/map-pin.png') }}",
        });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvZiQwPXkkIeXfAn-Cki9RZBj69mg-95M&amp;callback=initMap">
    </script>
    <script src="{{ asset('js/jquery.rateyo.min.js') }}"></script>
    <script>
    $(function() {

        $("#rateYo1, #rateYo2, #rateYo3, #rateYo4, #rateYo5 ").rateYo({
            rating: 3.6
        });

    });
    </script>
    <script src="{{ asset('js/return-to-top.js') }}"></script>
        @endforeach
    @endforeach
</body>
</html>