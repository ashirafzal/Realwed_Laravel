<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RealWed | Vendor Dashboard - Add Listing</title>
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="{{ asset('fontawesome/css/fontawesome-all.css') }}" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="{{ asset('fontello/css/fontello.css') }}" rel="stylesheet">
    <link href="{{ asset('css/summernote-bs4.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <!-- Style CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/offcanvas.css') }}">
    <!-- External script links -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    <!-- -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="body-bg">
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
                                        @foreach ($users as $user)
                                         <img src="{{ URL::to('/userimage/' . $user->userimage) }}" alt="" class="rounded-circle mb10">
                                         @endforeach
                                        </span>
                                        <span class="user-vendor-name"><?php echo Session::get('username');?></span></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                              <a class="dropdown-item" href="/dashboard">Dashboard</a>
                                <a class="dropdown-item" href="mylisting"> My Listed Item </a>
                                <a class="dropdown-item" href="vendor-dashboard-pricing.html">Pricing Plan</a>
                                <a class="dropdown-item" href="requestquote-view">Request Quotes</a>
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
    <div class="navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="offcanvas">
            <span id="icon-toggle" class="fa fa-bars"></span>
        </button>
    </div>
    <div class="dashboard-wrapper">
        <div class="dashboard-sidebar offcanvas-collapse">
            <div class="vendor-user-profile">
                <div class="vendor-profile-img">
                    @foreach ($users as $user)
                    <img src="{{ URL::to('/userimage/' . $user->userimage) }}" alt="" class="rounded-circle">
                    @endforeach
                </div>
                <h3 class="vendor-profile-name"><?php echo Session::get('username'); ?></h3>
                <a href="#" class="edit-link">edit profile</a>
            </div>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li><a href="/dashboard"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li class="active"><a href="mylisting"><span class="dash-nav-icon"><i class="fas fa-list-alt"></i> </span> My Listed Item </a></li>
                    <li><a href="vendor-dashboard-pricing.html"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Pricing Plan</a></li>
                    <li><a href="requestquote-view"><span class="dash-nav-icon"><i class="fas fa-edit"></i></span>Request Quotes</a></li>
                    <li><a href="vendor-dashboard-reviews.html"><span class="dash-nav-icon"><i class="fas fa-comments"></i></span>Reviews </a></li>
                    <li><a href="myprofile"><span class="dash-nav-icon"><i class="fas fa-user-circle"></i></span>My Profile </a></li>
                    <li><a href="/logout"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Logout </a></li>
                </ul>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">Add New Listing</h3>
                            <p>Lists present multiple line items vertically as a single continuous element.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header"> <h4 class="mb0">About Listing</h4></div>
                    <div class="">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        <br>
                        @endif                   
                        <form id="addlistingform" action="{{ url('updatelisting') }}" enctype="multipart/form-data" method="post">
                            {{ csrf_field() }}
                            @foreach ($listing as $listing)
                            <!-- Form Name -->
                            <div class="venue-form-info card-body">
                                <div class="row">
                                    <!-- Text input-->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <input id="title" name="listid" value="{{ $listing->id }}" type="hidden" placeholder="" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="title">Title</label>
                                            <input id="title" name="title" value="{{ $listing->title }}" type="text" placeholder="Title" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="control-label" for="Category">Category</label>
                                            <select class="wide" name="Category" id="Category">
                                                <option value="Select Category">Select Category</option>
                                                <option value="Hotel">Hotel</option>
                                                <option value="Restaurant">Restaurant</option>
                                                <option value="Castle">Castle</option>
                                                <option value="Barns">Barns</option>
                                                <option value="Resort">Resort</option>
                                                <option value="Church">Church</option>
                                                <option value="In Door">In Door</option>
                                                <option value="">Florist</option>
                                                <option value="">Dj</option>
                                                  <option value="">Cake</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="seat">Seat Capacity</label>
                                            <input id="seat" name="seat" value="{{ $listing->seat }}" type="number" placeholder="e.g. 50" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="price">Price <small>(Start From)</small></label>
                                            <input id="price" name="price" value="{{ $listing->price }}" type="text" placeholder="Price" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="address">Address </label>
                                            <input id="address" name="address" value="{{ $listing->address }}" type="text" placeholder="Street address" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="city">City</label>
                                            <select class="wide" name="city" id="city">
                                                <option value="Karachi">Karachi</option>
                                                <option value="Hyderabad">Hyderabad</option>
                                                <option value="Quetta">Quetta</option>
                                                <option value="Peshawar">Peshawar</option>
                                                <option value="Multan">Multan</option>
                                                <option value="Islamabad">Islamabad</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="postcode">Postcode</label>
                                            <input id="postcode" name="postcode" value="{{ $listing->postcode }}" type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="control-label" for="state">Select Province</label>
                                            <select class="wide" name="state" id="state">
                                                <option value="Select State">Select Province</option>
                                                <option value="Sindh">Sindh</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Balochistan">Balochistan</option>
                                                <option value="KPK">KPK</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="control-label" for="country">Select Country</label>
                                            <select class="wide" name="country" id="country">
                                                <option value="Select Country">Select Country</option>
                                                <option value="Paksitan">Paksitan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="summernote">Descriptions </label>
                                            <textarea class="form-control" id="editordata" name="editordata" rows="6" placeholder="Write Descriptions for your venue">{{ $listing->editordata }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-location-map card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h4>Location Map</h4>
                                       
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="control-label" for="latitude">Latitude</label>
                                            <input id="latitude" name="latitude" value="{{ $listing->latitude }}" type="number" placeholder="23.0732195" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="longitude">Longitude</label>
                                            <input id="longitude" name="longitude" value="{{ $listing->longitude }}" type="number" placeholder="72.5646902" class="form-control ">
                                        </div>
                                    </div>
                                    <!--
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="well-box">
                                            <div id="map"></div>
                                        </div>
                                    </div>
                                    -->
                                </div>
                            </div>
                            <div class="aminities-form-info card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Amenities</h3>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="">
                                            <input type="checkbox" id="groomlounge" name="groomlounge" class="" id="customCheck1">
                                            <label class="" for="customCheck1"> Groom Lounge</label>
                                        </div>
                                        <div class="">
                                            <input type="checkbox" id="bridalsuite" name="bridalsuite" class="" id="customCheck2">
                                            <label class="" for="customCheck2"> Bridal Suite</label>
                                        </div>
                                        <div class="">
                                            <input type="checkbox" id="tableandchairs" name="tableandchairs" class="" id="customCheck3">
                                            <label class="" for="customCheck3">Table and chairs</label>
                                        </div>
                                        <div class="">
                                            <input type="checkbox" id="getreadyrooms" name="getreadyrooms" class="" id="customCheck4">
                                            <label class="" for="customCheck4"> Get Ready Rooms</label>
                                        </div>
                                        <div class="">
                                            <input type="checkbox" id="eventrentals" name="eventrentals" class="" id="customCheck5">
                                            <label class="" for="customCheck5">Event Rentals</label>
                                        </div>
                                        <div class="">
                                            <input type="checkbox" id="outsidevendors" name="outsidevendors" class="" id="customCheck6">
                                            <label class="" for="customCheck6">Outside Vendors</label>
                                        </div>
                                        <div class="">
                                            <input type="checkbox" id="barservices" name="barservices" class="" id="customCheck7">
                                            <label class="" for="customCheck7"> Bar Services</label>
                                        </div>
                                        <div class="">
                                            <input type="checkbox" id="cateringservices" name="cateringservices" class="" id="customCheck8">
                                            <label class="" for="customCheck8"> Catering Services</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="">
                                            <input type="checkbox" id="cleanup" name="cleanup" class="" id="customCheck9">
                                            <label class="" for="customCheck9"> Clean Up</label>
                                        </div>
                                        <div class="">
                                            <input type="checkbox" id="eventplanner" name="eventplanner" class="" id="customCheck10">
                                            <label class="" for="customCheck10">Event Planner</label>
                                        </div>
                                        <div class="">
                                            <input type="checkbox" id="wifi" name="wifi" class="" id="customCheck11">
                                            <label class="l" for="customCheck11">Wifi</label>
                                        </div>
                                        <div class="">
                                            <input type="checkbox" id="petfriendly" name="petfriendly" class="" id="customCheck12">
                                            <label class="" for="customCheck12">Pet Friendly</label>
                                        </div>
                                        <div class="">
                                            <input type="checkbox" id="accommodations" name="accommodations" class="" id="customCheck13">
                                            <label class="" for="customCheck13">Accommodations</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-venue-gallery card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Add Gallery Of Venue</h3>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <!-- File Button -->
                                        <div class="form-group">
                                            <label class="control-label" for="filebutton">Browse Images | Select upto 6 images</label>
                                            <input id="filebutton" name="filebutton" onchange="readURL(this);" class="btn btn-primary btn-block" type="file">
                                            <input id="filebutton2" name="filebutton2" onchange="readURL2(this);" class="btn btn-primary btn-block" type="file">
                                            <input id="filebutton3" name="filebutton3" onchange="readURL3(this);" class="btn btn-primary btn-block" type="file">
                                            <input id="filebutton4" name="filebutton4" onchange="readURL4(this);" class="btn btn-primary btn-block" type="file">
                                            <input id="filebutton5" name="filebutton5" onchange="readURL5(this);" class="btn btn-primary btn-block" type="file">
                                            <input id="filebutton6" name="filebutton6" onchange="readURL6(this);" class="btn btn-primary btn-block" type="file">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                                <div class="gallery-upload-img">
                                                    <img src="" id="image" alt="" class="img-fluid">
                                                    <span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                                <div class="gallery-upload-img">
                                                    <img src="" id="image2" alt="" class="img-fluid">
                                                    <span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                                <div class="gallery-upload-img">
                                                    <img src="" id="image3" alt="" class="img-fluid">
                                                    <span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                                <div class="gallery-upload-img">
                                                    <img src="" id="image4" alt="" class="img-fluid">
                                                    <span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                                <div class="gallery-upload-img">
                                                    <img src="" id="image5" alt="" class="img-fluid">
                                                    <span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                                <div class="gallery-upload-img">
                                                    <img src="" id="image6" alt="" class="img-fluid">
                                                    <span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-venue-video card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Add Video</h3>
                                         
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="video">Video</label>
                                            <input id="video" name="video" value="{{ $listing->video }}" type="url" placeholder="https://www.youtube.com/watch?v=VQWgez89JlM" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="social-form-info card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Social Media </h3>
                                        
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="facebook">Facebook</label>
                                            <input id="facebook" name="facebook" value="{{ $listing->facebook }}" type="url" placeholder="https://www.facebook.com" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="twitter">Twitter</label>
                                            <input id="twitter" name="twitter" value="{{ $listing->twitter }}" type="url" placeholder="https://www.twitter.com" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="instagram">Instagram</label>
                                            <input id="instagram" name="instagram" value="{{ $listing->instagram }}" type="url" placeholder="https://www.instagram.com" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="youtube">Youtube</label>
                                            <input id="youtube" name="youtube" value="{{ $listing->youtube }}" type="url" placeholder="https://www.youtube.com" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button class="btn btn-default" type="submit" name="update">Submit New Item</button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function readURL(input) 
        {
            if (input.files && input.files[0])
            {
                var reader = new FileReader();

                reader.onload = function (e) 
                {
                    $('#image')
                        .attr('src', e.target.result)
                        .width(400)
                        .height(250);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL2(input) 
        {
            if (input.files && input.files[0])
            {
                var reader = new FileReader();

                reader.onload = function (e) 
                {
                    $('#image2')
                        .attr('src', e.target.result)
                        .width(400)
                        .height(250);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL3(input) 
        {
            if (input.files && input.files[0])
            {
                var reader = new FileReader();

                reader.onload = function (e) 
                {
                    $('#image3')
                        .attr('src', e.target.result)
                        .width(400)
                        .height(250);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL4(input) 
        {
            if (input.files && input.files[0])
            {
                var reader = new FileReader();

                reader.onload = function (e) 
                {
                    $('#image4')
                        .attr('src', e.target.result)
                        .width(400)
                        .height(250);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL5(input) 
        {
            if (input.files && input.files[0])
            {
                var reader = new FileReader();

                reader.onload = function (e) 
                {
                    $('#image5')
                        .attr('src', e.target.result)
                        .width(400)
                        .height(250);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL6(input) 
        {
            if (input.files && input.files[0])
            {
                var reader = new FileReader();

                reader.onload = function (e) 
                {
                    $('#image6')
                        .attr('src', e.target.result)
                        .width(400)
                        .height(250);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
    if ($("#addlistingform").length > 0) {
        $("#addlistingform").validate({   
        rules: {
            listid: {
            required: false,
        },    
            title: {
            required: true,
            maxlength: 50
        },    
        Category: {
                required: true,
                minlength: 5,
                maxlength:15,
            },
        seat: {
                required: true,
                maxlength: 50,
                digits: true,
            },
        price: {
            required: true,
            maxlength: 50,
        },
        address: {
            required: true,
            maxlength: 50,
        },
        city: {
            required: true,
            maxlength: 50,
        },
        postcode: {
            required: true,
            maxlength: 50,
        },
        state: {
            required: true,
            maxlength: 50,
        },
        country: {
            required: true,
            maxlength: 50,
        },
        editordata: {
            required: true,
            maxlength: 50,
        },
        latitude: {
            required: true,
            maxlength: 50,
        },
        longitude: {
            required: true,
            maxlength: 50,
        },
        filebutton: {
            required: true,
        },
        filebutton2: {
            required: true,
        },
        filebutton3: {
            required: true,
        },
        filebutton4: {
            required: true,
        },
        filebutton5: {
            required: true,
        },
        filebutton6: {
            required: true,
        },
        facebook: {
            required: true,
            maxlength: 50,
        },
        instagram: {
            required: true,
            maxlength: 50,
        },
            },
        messages: {
            
            title: {
                required: "Please enter title",
                maxlength: "Your title maxlength should be 50 characters long."
            },
            Category: {
                required: "Please enter contact number",
                minlength: "The Category should be 5 letter long",
                maxlength: "The Category should be under 15 letters ",
            },
            seat: {
                required: "Please enter a seat number",
                seat: "Please enter a seat number",
                },
            price: {
                required: "Please enter price",
                price: "Please enter price",
            },
            address: {
                required: "Please enter address",
                address: "Please enter a address",
                },
            postcode: {
                required: "Please enter a postcode",
                postcode: "Please enter a postcode",
            },
            state: {
                required: "Please enter a state",
                state: "Please enter a state",
            },
            country: {
                required: "Please enter a country",
                country: "Please enter a country",
            },
            editordata: {
                required: "Please enter a editordata",
                editordata: "Please enter a editordata",
            },
            latitude: {
                required: "Please enter a latitude",
                latitude: "Please enter a latitude",
            },
            longitude: {
                required: "Please enter a longitude",
                longitude: "Please enter a longitude",
            },
            filebutton: {
                required: "Please select image one",
                filebutton: "Please select image one",
            },
            filebutton2: {
                required: "Please select image two",
                filebutton2: "Please select image two",
            },
            filebutton3: {
                required: "Please select image three",
                filebutton3: "Please select image three",
            },
            filebutton4: {
                required: "Please select image four",
                filebutton4: "Please select image four",
            },
            filebutton5: {
                required: "Please select image five",
                filebutton5: "Please select image five",
            },
            filebutton6: {
                required: "Please select image six",
                filebutton6: "Please select image six",
            },
            facebook: {
                required: "Facebook page address required",
                facebook: "Facebook page address required",
            },
            instagram: {
                required: "Instagram page address required",
                instagram: "Instagram page address required",
            },
            },
            })
    }
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/menumaker.min.js') }}"></script>
    <script src="{{ asset('js/custom-script.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/fastclick.js') }}"></script>
    <script src="{{ asset('js/offcanvas.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
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
            icon: 'images/map-pin.png'
        });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvZiQwPXkkIeXfAn-Cki9RZBj69mg-95M&amp;callback=initMap">
    </script>
    <script src="{{ asset('js/summernote-bs4.js') }}"></script>
</body>
</html>