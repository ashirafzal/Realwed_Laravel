<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RealWed | Vendor Dashboard - Review</title>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/offcanvas.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="body-bg">
    @foreach ($user as $user)
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
                                                            <div class="notification-list-user-img"><img src="{{ asset('images/avatar-2.jpg') }}" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
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
                                        <a class="dropdown-item" href="#">Pricing Plan</a>
                                        <a class="dropdown-item" href="requestquote-view">Request Quotes</a>
                                        <a class="dropdown-item" href="Reviews">Reviews</a>
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
                    <img src="{{ asset('userimage') }}/{{$user->userimage}}" alt="" class="rounded-circle"></div>
                <h3 class="vendor-profile-name"><?php {{ echo $username = Session::get('username'); }} ?></h3>
                <a href="#" class="edit-link">edit profile</a>
            </div>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li><a href="/dashboard"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li><a href="mylisting"><span class="dash-nav-icon"><i class="fas fa-list-alt"></i> </span> My Listed Item </a></li>
                    <li><a href="#"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Pricing Plan</a></li>
                    <li><a href="requestquote-view"><span class="dash-nav-icon"><i class="fas fa-edit"></i></span>Request Quotes</a></li>
                    <li class="active"><a href="Reviews"><span class="dash-nav-icon"><i class="fas fa-comments"></i></span>Reviews </a></li>
                    <li><a href="myprofile"><span class="dash-nav-icon"><i class="fas fa-user-circle"></i></span>My Profile </a></li>
                    <li><a href="/logout"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Logout </a></li>
                </ul>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="container-fluid">
                <div class="dashboard-page-header">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h3 class="dashboard-page-title">Reviews</h3>
                            <p>Check your latest reviews.</p>
                        </div>
                    </div>
                </div>
                <!--
                <div class="dashboard-filter-row mb20">
                    <div class="row">
                        <div class="offset-xl-9 col-xl-3">
                            <select class="form-control wide" id="exampleFormControlSelect1">
                                <option>Select Your Listing</option>
                                <option>Select Your Listing #1</option>
                                <option>Select Your Listing #2</option>
                                <option>Select Your Listing #3</option>
                                <option>Select Your Listing #4</option>
                            </select>
                        </div>
                    </div>
                </div>
                -->
                <div class="row ">
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-6 col-12">
                        <div class="card card-rating">
                            <div class="card-body">
                                <h5 class="mb30">Average Ratings</h5>
                                <div class="review-total">{{ number_format($overallrating,1)/5 }}</div>
                                <div class="review-text">Reviews</div>
                                @if($overallrating >= 25)
                                    <span class="rated">
                                        <i class="fa fa-star"></i> 
                                        <i class="fa fa-star"></i> 
                                        <i class="fa fa-star"></i> 
                                        <i class="fa  fa-star"></i> 
                                        <i class="fa  fa-star"></i>
                                    </span>
                                @elseif($overallrating >= 20 && $overallrating < 25)
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
                                @elseif($overallrating >= 15 && $overallrating < 20)
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
                                @elseif($overallrating >= 10 && $overallrating < 15)
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
                                @elseif($overallrating >= 5 && $overallrating < 10)
                                    <span class="rated">
                                        <i class="fa fa-star"></i> 
                                        <i class="fa fa-star-half"></i> 
                                        <i class="far fa-star"></i> 
                                        <i class="far  fa-star"></i> 
                                        <i class="far  fa-star"></i>
                                    </span>
                                @elseif($overallrating >= 10)
                                    <span class="rated">
                                        <i class="fa fa-star"></i> 
                                        <i class="far fa-star"></i> 
                                        <i class="far fa-star"></i> 
                                        <i class="far  fa-star"></i> 
                                        <i class="far  fa-star"></i>
                                    </span>
                                @elseif($overallrating >= 5 && $overallrating < 10)
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
                                <small>{{ number_format($overallrating,1)/5 }} average based on {{$listing_review_count}} ratings.</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-6 col-12">
                        <div class="card card-review-summary">
                            <div class="card-body">
                                <h5 class="mb30">Reviews Summary</h5>
                                <div class="row mb-2">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <h5 class="mb0 text-right">Quality Service</h5>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                        <div class="progress mt10">
                                        @if($qualityservices >= 4.9)
                                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        @elseif($qualityservices >= 4.5 && $qualityservices < 5)
                                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        @elseif($qualityservices >= 4)
                                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        @elseif($qualityservices >= 3.5 && $qualityservices < 4)
                                            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        @elseif($qualityservices >= 3)
                                            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        @elseif($qualityservices >= 2.5 && $qualityservices < 3)
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        @elseif($qualityservices >= 2)
                                            <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        @elseif($qualityservices >= 1.5 && $qualityservices < 2)
                                            <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        @elseif($qualityservices >= 1)
                                            <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        @elseif($qualityservices >= 0.5 && $qualityservices < 1)
                                            <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        @else
                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        @endif 
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-3  col-sm-12 col-12 text-right">
                                        <h6 class="text-dark mb0">{{ number_format($qualityservices,1) }}</h6>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <h5 class="mb0 text-right">Facilities</h5>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                        <div class="progress mt10">
                                            @if($faciliteis >= 4.9)
                                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($faciliteis >= 4.5 && $faciliteis < 5)
                                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($faciliteis >= 4)
                                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($faciliteis >= 3.5 && $faciliteis < 4)
                                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($faciliteis >= 3)
                                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($faciliteis >= 2.5 && $faciliteis < 3)
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($faciliteis >= 2)
                                                <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($faciliteis >= 1.5 && $faciliteis < 2)
                                                <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($faciliteis >= 1)
                                                <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($faciliteis >= 0.5 && $faciliteis < 1)
                                                <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @else
                                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @endif 
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-3 col-sm-12 col-12 text-right">
                                        <h6 class="text-dark mb0">{{ number_format($faciliteis,1) }}</h6>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <h5 class="mb0 text-right">Staff</h5>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                        <div class="progress mt10">
                                            @if($staff >= 4.9)
                                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($staff >= 4.5 && $staff < 5)
                                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($staff >= 4)
                                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($staff >= 3.5 && $staff < 4)
                                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($staff >= 3)
                                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($staff >= 2.5 && $staff < 3)
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($staff >= 2)
                                                <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($staff >= 1.5 && $staff < 2)
                                                <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($staff >= 1)
                                                <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($staff >= 0.5 && $staff < 1)
                                                <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @else
                                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @endif 
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-3 col-sm-12 col-12 text-right">
                                        <h6 class="text-dark mb0">{{ number_format($staff,1) }}</h6>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <h5 class="mb0 text-right">Flexibility</h5>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                        <div class="progress mt10">
                                            @if($flexibility >= 4.9)
                                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($flexibility >= 4.5 && $flexibility < 5)
                                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($flexibility >= 4)
                                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($flexibility >= 3.5 && $flexibility < 4)
                                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($flexibility >= 3)
                                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($flexibility >= 2.5 && $flexibility < 3)
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($flexibility >= 2)
                                                <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($flexibility >= 1.5 && $flexibility < 2)
                                                <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($flexibility >= 1)
                                                <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($flexibility >= 0.5 && $flexibility < 1)
                                                <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @else
                                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @endif 
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-3 col-sm-12 col-12 text-right">
                                        <h6 class="text-dark mb0">{{ number_format($flexibility,1) }}</h6>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <h5 class="mb0 text-right">Value of money</h5>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                        <div class="progress mt10">
                                            @if($valueofmoney >= 4.9)
                                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($valueofmoney >= 4.5 && $valueofmoney < 5)
                                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($valueofmoney >= 4)
                                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($valueofmoney >= 3.5 && $valueofmoney < 4)
                                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($valueofmoney >= 3)
                                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($valueofmoney >= 2.5 && $valueofmoney < 3)
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($valueofmoney >= 2)
                                                <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($valueofmoney >= 1.5 && $valueofmoney < 2)
                                                <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($valueofmoney >= 1)
                                                <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @elseif($valueofmoney >= 0.5 && $valueofmoney < 1)
                                                <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @else
                                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-3 col-sm-12 col-12 text-right">
                                        <h6 class="text-dark mb0">{{ number_format($valueofmoney,1) }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card review-summary-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Rating</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>Detials</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($listing_review as $listing_review)
                                    <tr>
                                        <td class="review-summary-name">{{ $listing_review->username }}</td>
                                        <td class="review-summary-rating"> 
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
                                        {{ number_format($listing_review->overallrating/5,1) }}
                                        </td>
                                        <td class="review-summary-id">{{ $listing_review->useremail }}</td>
                                        <td class="review-summary-time">{{ $listing_review->date }}</td>
                                        <td class="review-summary-action"><a class="btn btn-outline-pink btn-xs" data-toggle="collapse" id="example-one" data-text-swap="close" data-text-original="Details" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td colspan="12" class="expandable-info">
                                            <div class="collapse expandable-collapse" id="collapseExample1">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <!-- review-user -->
                                                        <div class="review-user">
                                                            <div class="user-img"> <img style="width:50px;height:50px;" src="{{ asset('userimage') }}/{{$listing_review->userimage}}" alt="star rating jquery" class="rounded-circle"></div>
                                                            <div class="user-meta">
                                                                <span class="user-name">{{ $listing_review->username }}</span>
                                                                <span class="user-review-date">Date : {{ $listing_review->date }}</span>
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
                                                        <!-- /.review-user -->
                                                        <!-- review-descripttions -->
                                                        <div class="review-descriptions">
                                                            <p>{{ $listing_review->review_text }}</p>
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Quality Service</div>
                                                                        <div class="review-rating">
                                                                        @if($listing_review->qualityservices == 5)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa  fa-star"></i> 
                                                                                <i class="fa  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->qualityservices >= 4.5 && $listing_review->qualityservices < 5)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa  fa-star"></i> 
                                                                                <i class="fa  fa-star-half"></i>
                                                                            </span>
                                                                        @elseif($listing_review->qualityservices >= 4)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->qualityservices >= 3.5 && $listing_review->qualityservices < 4)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa  fa-star-half"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->qualityservices >= 3)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="far  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->qualityservices >= 2.5 && $listing_review->qualityservices < 3)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star-half"></i> 
                                                                                <i class="far  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->qualityservices >= 2)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="far fa-star"></i> 
                                                                                <i class="far  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->qualityservices >= 1.5 && $listing_review->qualityservices < 2)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star-half"></i> 
                                                                                <i class="far fa-star"></i> 
                                                                                <i class="far  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->qualityservices >= 1)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="far fa-star"></i> 
                                                                                <i class="far fa-star"></i> 
                                                                                <i class="far  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->qualityservices >= 0.5 && $listing_review->qualityservices < 1)
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
                                                                        <div class="review-number">{{ number_format($listing_review->qualityservices,1) }}</div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Facilities</div>
                                                                        <div class="review-rating">
                                                                        @if($listing_review->faciliteis == 5)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa  fa-star"></i> 
                                                                                <i class="fa  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->faciliteis >= 4.5 && $listing_review->faciliteis < 5)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa  fa-star"></i> 
                                                                                <i class="fa  fa-star-half"></i>
                                                                            </span>
                                                                        @elseif($listing_review->faciliteis >= 4)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->faciliteis >= 3.5 && $listing_review->faciliteis < 4)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa  fa-star-half"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->faciliteis >= 3)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="far  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->faciliteis >= 2.5 && $listing_review->faciliteis < 3)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star-half"></i> 
                                                                                <i class="far  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->faciliteis >= 2)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="far fa-star"></i> 
                                                                                <i class="far  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->faciliteis >= 1.5 && $listing_review->faciliteis < 2)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star-half"></i> 
                                                                                <i class="far fa-star"></i> 
                                                                                <i class="far  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->faciliteis >= 1)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="far fa-star"></i> 
                                                                                <i class="far fa-star"></i> 
                                                                                <i class="far  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->faciliteis >= 0.5 && $listing_review->faciliteis < 1)
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
                                                                        <div class="review-number">{{ number_format($listing_review->faciliteis,1) }}</div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Staff</div>
                                                                        <div class="review-rating">
                                                                        @if($listing_review->staff == 5)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa  fa-star"></i> 
                                                                                <i class="fa  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->staff >= 4.5 && $listing_review->staff < 5)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa  fa-star"></i> 
                                                                                <i class="fa  fa-star-half"></i>
                                                                            </span>
                                                                        @elseif($listing_review->staff >= 4)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->staff >= 3.5 && $listing_review->staff < 4)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa  fa-star-half"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->staff >= 3)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="far  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->staff >= 2.5 && $listing_review->staff < 3)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star-half"></i> 
                                                                                <i class="far  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->staff >= 2)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="far fa-star"></i> 
                                                                                <i class="far  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->staff >= 1.5 && $listing_review->staff < 2)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star-half"></i> 
                                                                                <i class="far fa-star"></i> 
                                                                                <i class="far  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->staff >= 1)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="far fa-star"></i> 
                                                                                <i class="far fa-star"></i> 
                                                                                <i class="far  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->staff >= 0.5 && $listing_review->staff < 1)
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
                                                                        <div class="review-number">{{ number_format($listing_review->staff,1) }}</div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Flexibility</div>
                                                                            <div class="review-rating">
                                                                            @if($listing_review->flexibility == 5)
                                                                                <span class="rated">
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="fa  fa-star"></i> 
                                                                                    <i class="fa  fa-star"></i>
                                                                                </span>
                                                                            @elseif($listing_review->flexibility >= 4.5 && $listing_review->flexibility < 5)
                                                                                <span class="rated">
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="fa  fa-star"></i> 
                                                                                    <i class="fa  fa-star-half"></i>
                                                                                </span>
                                                                            @elseif($listing_review->flexibility >= 4)
                                                                                <span class="rated">
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="fa  fa-star"></i> 
                                                                                    <i class="far  fa-star"></i>
                                                                                </span>
                                                                            @elseif($listing_review->flexibility >= 3.5 && $listing_review->flexibility < 4)
                                                                                <span class="rated">
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="fa  fa-star-half"></i> 
                                                                                    <i class="far  fa-star"></i>
                                                                                </span>
                                                                            @elseif($listing_review->flexibility >= 3)
                                                                                <span class="rated">
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="far  fa-star"></i> 
                                                                                    <i class="far  fa-star"></i>
                                                                                </span>
                                                                            @elseif($listing_review->flexibility >= 2.5 && $listing_review->flexibility < 3)
                                                                                <span class="rated">
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="fa fa-star-half"></i> 
                                                                                    <i class="far  fa-star"></i> 
                                                                                    <i class="far  fa-star"></i>
                                                                                </span>
                                                                            @elseif($listing_review->flexibility >= 2)
                                                                                <span class="rated">
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="far fa-star"></i> 
                                                                                    <i class="far  fa-star"></i> 
                                                                                    <i class="far  fa-star"></i>
                                                                                </span>
                                                                            @elseif($listing_review->flexibility >= 1.5 && $listing_review->flexibility < 2)
                                                                                <span class="rated">
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="fa fa-star-half"></i> 
                                                                                    <i class="far fa-star"></i> 
                                                                                    <i class="far  fa-star"></i> 
                                                                                    <i class="far  fa-star"></i>
                                                                                </span>
                                                                            @elseif($listing_review->flexibility >= 1)
                                                                                <span class="rated">
                                                                                    <i class="fa fa-star"></i> 
                                                                                    <i class="far fa-star"></i> 
                                                                                    <i class="far fa-star"></i> 
                                                                                    <i class="far  fa-star"></i> 
                                                                                    <i class="far  fa-star"></i>
                                                                                </span>
                                                                            @elseif($listing_review->flexibility >= 0.5 && $listing_review->flexibility < 1)
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
                                                                        <div class="review-number">{{ number_format($listing_review->flexibility,1) }}</div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Value of money</div>
                                                                        <div class="review-rating">
                                                                        @if($listing_review->valueofmoney == 5)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa  fa-star"></i> 
                                                                                <i class="fa  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->valueofmoney >= 4.5 && $listing_review->valueofmoney < 5)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa  fa-star"></i> 
                                                                                <i class="fa  fa-star-half"></i>
                                                                            </span>
                                                                        @elseif($listing_review->valueofmoney >= 4)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->valueofmoney >= 3.5 && $listing_review->valueofmoney < 4)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa  fa-star-half"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->valueofmoney >= 3)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="far  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->valueofmoney >= 2.5 && $listing_review->valueofmoney < 3)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star-half"></i> 
                                                                                <i class="far  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->valueofmoney >= 2)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="far fa-star"></i> 
                                                                                <i class="far  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->valueofmoney >= 1.5 && $listing_review->valueofmoney < 2)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="fa fa-star-half"></i> 
                                                                                <i class="far fa-star"></i> 
                                                                                <i class="far  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->valueofmoney >= 1)
                                                                            <span class="rated">
                                                                                <i class="fa fa-star"></i> 
                                                                                <i class="far fa-star"></i> 
                                                                                <i class="far fa-star"></i> 
                                                                                <i class="far  fa-star"></i> 
                                                                                <i class="far  fa-star"></i>
                                                                            </span>
                                                                        @elseif($listing_review->valueofmoney >= 0.5 && $listing_review->valueofmoney < 1)
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
                                                                        <div class="review-number">{{ number_format($listing_review->valueofmoney,1) }}</div>
                                                                    </div>
                                                                </div>
                                                                <!-- /.review-list -->
                                                            </div>
                                                        </div>
                                                        <!-- /.review-descripttions -->
                                                    </div>
                                                </div>  
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/menumaker.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/offcanvas.js') }}"></script>
        <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('js/custom-script.js') }}"></script>
        <script src="{{ asset('js/fastclick.js') }}"></script>
        <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script>
        $("#example-one, #example-two, #example-three, #example-four, #example-five, #example-six  ").on("click", function() {
            var el = $(this);
            el.text() == el.data("text-swap") ?
                el.text(el.data("text-original")) :
                el.text(el.data("text-swap"));
        });
        </script>
    @endforeach
</body>
</html>