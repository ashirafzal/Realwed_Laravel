<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>
<body>
  <!-- header -->
  @foreach ($listing as $listing)
    @foreach ($users as $user)
    <div class="header">
        <!-- header-top -->
        <!-- navigation start -->
        <div class="dashboard-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-8 col-md-8 col-sm-6 col-6">
                    <div class="header-logo">
                        <a href="/"><img src="{{ asset('images/logo.png') }}" alt="Weddings | Find A Wedding Venue &amp; Supplier WordPress Theme"></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <nav class="navbar navbar-expand-lg float-right db-nav-list">
                        <div>
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown dropleft notification ">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="notification-icon"> <i class="fas fa-bell"></i></span><span class="user-vendor-name"></span></a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                        <li>
                                            <div class="notification-title"> Notification</div>
                                            <div class="notification-list">
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item list-group-item-action active">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                                <div class="notification-date">2 min ago</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">John Deo</span>is now following you
                                                                <div class="notification-date">2 days ago</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                                <div class="notification-date">2 min ago</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                                <div class="notification-date">2 min ago</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list-footer"> <a href="#">View all notifications</a></div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown dropleft user-vendor ">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="user-icon">
                                        <img src="{{ asset('userimage') }}/{{$user->userimage}}" alt="" class="rounded-circle mb10">
                                        </span>
                                        <span class="user-vendor-name"><?php {{ echo $username = Session::get('username'); }} ?></span></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="/dashboard">Dashboard</a>
                                        <a class="dropdown-item" href="mylisting"> My Listed Item </a>
                                        <a class="dropdown-item" href="vendor-dashboard-pricing.html">Pricing Plan</a>
                                        <a class="dropdown-item" href="vendor-dashboard-request-quote.html">Request Quotes</a>
                                        <a class="dropdown-item" href="vendor-dashboard-reviews.html">Reviews </a>
                                        <a class="dropdown-item" href="myprofile">My Profile </a>
                                        <a class="dropdown-item" href="/logout">Log Out</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
        <!-- navigation close -->
        <!--/.header-top -->
        
    </div>
    <!-- /.header -->
    <!-- page-header -->
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
                        <a href="#" class="btn-default-wishlist"><i class="fa fa-heart"></i> <span class="pl-1">Add To Wishlist</span></a>
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
                            <span class="rating-star">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rate-mute"></i> 
                                    </span>
                            <span class="rating-count vendor-text">(20)</span>
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
                                                    
                                                        <div class="review-total">4.8 </div>
                                                        <div class="review-text">Reviews</div>
                                                        <span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa  fa-star"></i> <i class="fa fa-star"></i> </span>
                                                        <p>4.4 average based on 1 ratings.</p>
                                                    </div>
                                                
                                                <!-- /.review-sidebar -->
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="review-box">
                                                <!-- review-list -->
                                                <div class="review-list">
                                                    <div class="review-for">Quality Service</div>
                                                    <div class="review-rating"><span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far  fa-star"></i> </span></div>
                                                    <div class="review-number">3.0</div>
                                                </div>
                                                <!-- /.review-list -->
                                                <!-- review-list -->
                                                <div class="review-list">
                                                    <div class="review-for">Facilities</div>
                                                    <div class="review-rating"><span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </span></div>
                                                    <div class="review-number">4.0</div>
                                                </div>
                                                <!-- /.review-list -->
                                                <!-- review-list -->
                                                <div class="review-list">
                                                    <div class="review-for">Staff</div>
                                                    <div class="review-rating"><span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> </span></div>
                                                    <div class="review-number">3.0</div>
                                                </div>
                                                <!-- /.review-list -->
                                                <!-- review-list -->
                                                <div class="review-list">
                                                    <div class="review-for">Flexibility</div>
                                                    <div class="review-rating"><span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> </span></div>
                                                    <div class="review-number">3.0</div>
                                                </div>
                                                <!-- /.review-list -->
                                                <!-- review-list -->
                                                <div class="review-list">
                                                    <div class="review-for">Value of money</div>
                                                    <div class="review-rating"><span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </span></div>
                                                    <div class="review-number">4.0</div>
                                                </div>
                                                <!-- /.review-list -->
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.review-block -->
                        <div class="card border card-shadow-none ">
                            <!-- review-user -->
                            <div class="card-header bg-white mb0">
                                <div class="review-user">
                                    <div class="user-img"> <img src="{{ asset('images/review-pic-1.jpg') }}" alt="star rating jquery" class="rounded-circle"></div>
                                    <div class="user-meta">
                                        <h5 class="user-name mb-0">Eric M. Rahn  <span class="user-review-date">14 May, 2018</span></h5>
                                        <div class="given-review">
                                            <span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far  fa-star"></i> <i class="far  fa-star"></i></span></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.review-user -->
                            <div class="card-body">
                                <!-- review-descripttions -->
                                <div class="review-descriptions">
                                    <p>Morbi pharetra mollis tortor ac maximus. Nunc dapibus bibendum urna, in egestas dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra.Fusce ullamcorper sit amet augue a volutpat. Cras ultrices dictum ante vel iaculis.Donec accumsan consequat massa non gravida. Aenean molestie molestie elementum. Nullam semper vel mauris et semper. </p>
                                </div>
                                <!-- /.review-descripttions -->
                            </div>
                        </div>
                        <!-- /.review-content -->
                        <!-- /.review-block -->
                        <div class="card border card-shadow-none ">
                            <!-- review-user -->
                            <div class="card-header bg-white mb0">
                                <!-- review-user -->
                                <div class="review-user">
                                    <div class="user-img"> <img src="{{ asset('images/review-pic-2.jpg') }}" alt="star rating jquery" class="rounded-circle"></div>
                                    <div class="user-meta">
                                        <h5 class="user-name mb-0">Jolene E. Cochran <span class="user-review-date">14 May, 2018</span></h5>
                                        <div class="given-review">
                                            <span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far  fa-star"></i> <i class="far  fa-star"></i> 

                                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.review-user -->
                            </div>
                            <div class="card-body">
                                <!-- review-descripttions -->
                                <div class="review-descriptions">
                                    <p>Donec accumsan consequat massa non gravida. Morbi pharetra mollis tortor ac maximus. Nunc dapibus bibendum urna, in egestas dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra.Fusce ullamcorper sit amet augue a volutpat. Cras ultrices dictum ante vel iaculis. Aenean molestie molestie elementum. Nullam semper vel mauris et semper. </p>
                                </div>
                                <!-- /.review-descripttions -->
                            </div>
                        </div>
                        <!-- /.review-block -->
                        <div class="card border card-shadow-none ">
                            <!-- review-user -->
                            <div class="card-header bg-white mb0">
                                <!-- review-user -->
                                <div class="review-user">
                                    <div class="user-img"> <img src="{{ asset('images/review-pic-3.jpg') }}" alt="star rating jquery" class="rounded-circle"></div>
                                    <div class="user-meta">
                                        <h5 class="user-name mb-0">Raymond S. Wilson<span class="user-review-date">12 May, 2018</span></h5>
                                        <div class="given-review">
                                            <span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far  fa-star"></i> <i class="far  fa-star"></i>                                                         </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.review-user -->
                            <div class="card-body">
                                <!-- review-descripttions -->
                                <div class="review-descriptions">
                                    <p>Mauris ut efficitur lorem, at mattis libero. Suspendisse viverra eu libero eget dapibus. Suspendisse potenti. Aenean ex ex, efficitur a porta ac, pulvinar at elit. Pellentesque suscipit at lacus sit amet tincidunt. Vivamus quis pellentesque dolor. Donec dignissim pharetra accumsan. </p>
                                </div>
                                <!-- /.review-descripttions -->
                            </div>
                        </div>
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
                                    <span class="text-dark">Quality Service</span>
                                    <span id="rateYo1"></span>
                                </div>
                                <div class="rate-selection">
                                    <span class="text-dark">Facilities</span>
                                    <span id="rateYo2"></span>
                                </div>
                                <div class="rate-selection">
                                    <span class="text-dark">Staff</span>
                                    <span id="rateYo3"></span>
                                </div>
                                <div class="rate-selection">
                                    <span class="text-dark">Flexibility</span>
                                    <span id="rateYo4"></span>
                                </div>
                                <div class="rate-selection">
                                    <span class="text-dark">Value of money</span>
                                    <span id="rateYo5"></span>
                                </div>
                            </div>
                            
                            <form>
                                <div class="row">
                                    <!-- Textarea -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt30">
                                        <div class="form-group">
                                            <label class="control-label" for="review">Write Your Review</label>
                                            <textarea class="form-control" id="review" name="review" rows="5" placeholder="Write Review"></textarea>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="name">Name</label>
                                            <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="email">Email</label>
                                            <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <button id="submit" name="submit" class="btn btn-default">Submit review</button>
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
                                <form action="/requestquote" id="requestquote" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                                    {{ csrf_field() }}
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-info alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        <br>
                                    @endif
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
                                <div class="vendor-owner-profile-img"><img style="width:150px; height:150px;" src="{{ asset('userimage') }}/{{$user->userimage}}" class="rounded-circle" alt=""></div>
                                <h4 class="vendor-owner-name mb0">{{ $user->name }}</h4>
                            </div>
                            <div class="vendor-owner-profile-content">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><span class="mr-2"><i class="fas fa-align-justify"></i></span>{{ $user->description }}</li>
                                    <li class="list-group-item"><span class="mr-2"><i class="fas fa-fw fa-phone"></i></span>{{ $user->phone }}</li>
                                    <li class="list-group-item"><span class="mr-2"><i class="fab fa-facebook-f"></i></span>{{ $user->facebook }}/li>
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
                            <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
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
                                <span class="rating-count vendor-text">(20)</span></div>
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
    <script src="{{ asset('js/custom-script.js') }}"></script>
    <script>
    function initMap() {
        var uluru = {
            lat: {{ $listing->latitude }},
            lng: {{ $listing->longitude }}
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: 'images/map-pin.png'
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
    <script type="text/javascript">
        var currentTime = new Date();
        document.getElementById("localtime").value = currentTime;
    </script>
     <script type="text/javascript">
    if ($("#requestquote").length > 0) {
        $("#requestquote").validate({   
            requestquote_name: {
                required: true,
                minlength: 3,
                maxlength: 50,
            },
            requestquote_email: {
            required: true,
            maxlength: 50,
            },
            requestquote_phone: {
            required: true,
            maxlength: 50,
            },
            requestquote_weddingdate: {
            required: true,
            minlength: 6,
            maxlength: 50,
            },
            requestquote_comments: {
            required: true,
            minlength: 6,
            maxlength: 50,
            },
        },
        messages: {
            requestquote_name: {
                required: "Please enter name",
                minlength: "Your username minlength should be more than 3 characters long."
                maxlength: "Your username maxlength should not be more than 50 characters long."
                requestquote_name: "Please enter name",
            },
            requestquote_email: {
                required: "Please enter email",
                requestquote_email: "Please enter email",
                requestquote_email: "Please enter email",
            },
            requestquote_phone: {
                required: "Please enter your phone number",
                requestquote_phone: "Please enter your phone number",
                 },
            requestquote_weddingdate: {
                required: "Please select wedding date",
                requestquote_weddingdate: "Please select wedding date",
                 },
            requestquote_comments: {
                required: "Please enter comments",
                requestquote_comments: "Please enter comments",
                 },
            },
        })
    }
    </script>
    <script src="{{ asset('js/return-to-top.js') }}"></script>
            @endforeach
        @endforeach
</body>
</html>