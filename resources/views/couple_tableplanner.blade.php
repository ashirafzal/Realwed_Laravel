<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{csrf_token()}}" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RealWed | Couple Dashboard - Table Planner</title>
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="{{ asset('fontawesome/css/fontawesome-all.css') }}" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="{{ asset('fontello/css/fontello.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magicsuggest.css') }}" rel="stylesheet">
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
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
</script>
<script>
        jQuery(document).ready(function(){
            /* 4 Seat Edit */
            jQuery('#4seatedit').submit(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });

              $(".alert-danger").css('display','none');
              $("#4seatalertinfo").css('display','none');

                    if ($.trim($("#4seattablename").val()) === ""){
                            $(".alert-danger").css('display','block');
                            $(".alert-danger").html('Text feilds cannot be blank');
                        }
                        else{                                    
                            var formData = new FormData($('#4seatedit')[0]);

                            jQuery.ajax({
                            url: "{{ url('four-seat-edit') }}",
                            method: 'post',
                            data:   formData,
                            cache:  false,
                            
                            processData: false,
                            contentType: false, 
                                success: function(result){
                                    $("#4seatalertinfo").css('display','block');
                                    $("#4seatalertinfo").html('Table seating edited successfully');
                                }
                            });                                                                              
                        }                                                                 
                    });
                });
</script>
<script>
        jQuery(document).ready(function(){
            /* 8 Seat Edit */
            jQuery('#8seatedit').submit(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });

              $("#8seatalertdanger").css('display','none');
              $("#8seatalertinfo").css('display','none');

                    if ($.trim($("#8seattablename").val()) === ""){
                            $("#8seatalertdanger").css('display','block');
                            $("#8seatalertdanger").html('Text feilds cannot be blank');
                        }
                        else{                                    
                            var formData = new FormData($('#8seatedit')[0]);

                            jQuery.ajax({
                            url: "{{ url('eight-seat-edit') }}",
                            method: 'post',
                            data:   formData,
                            cache:  false,
                            
                            processData: false,
                            contentType: false, 
                                success: function(result){
                                    $("#8seatalertinfo").css('display','block');
                                    $("#8seatalertinfo").html('Table seating edited successfully');
                                }
                            });                                                                              
                        }                                                                 
                    });
                });
</script>
<script>
        jQuery(document).ready(function(){
            /* 12 Seat Edit */
            jQuery('#12seatedit').submit(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });

              $("#12seatalertdanger").css('display','none');
              $("#12seatalertinfo").css('display','none');

                    if ($.trim($("#12seattablename").val()) === ""){
                            $("#12seatalertdanger").css('display','block');
                            $("#12seatalertdanger").html('Text feilds cannot be blank');
                        }
                        else{                                    
                            var formData = new FormData($('#12seatedit')[0]);

                            jQuery.ajax({
                            url: "{{ url('twelve-seat-edit') }}",
                            method: 'post',
                            data:   formData,
                            cache:  false,
                            
                            processData: false,
                            contentType: false, 
                                success: function(result){
                                    $("#12seatalertinfo").css('display','block');
                                    $("#12seatalertinfo").html('Table seating edited successfully');
                                }
                            });                                                                              
                        }                                                                 
                    });
                });
</script>
<script>
        jQuery(document).ready(function(){
            /* Single Guest */
            jQuery('#createtable').submit(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });

              $(".alert-danger").css('display','none');
              $(".alert-success").css('display','none');

                    if ($.trim($("#tablename").val()) === ""){
                            $(".alert-danger").css('display','block');
                            $(".alert-danger").html('Text feilds cannot be blank');
                            alert("Text feilds cannot be blank");
                        }
                        else{                                    
                            var formData = new FormData($('#createtable')[0]);

                            jQuery.ajax({
                            url: "{{ url('create-table') }}",
                            method: 'post',
                            data:   formData,
                            cache:  false,
                            
                            processData: false,
                            contentType: false, 
                                success: function(result){
                                    alert(result);
                                    $(".alert-success").css('display','block');
                                    $(".alert-success").html('Table created successful.');
                                }
                            });                                                                              
                        }                                                                 
                    });
                });
</script>
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
                                            @foreach ($users as $user)
                                                <img src="userimage/{{$user->userimage}}" alt="" class="rounded-circle mb10">
                                            @endforeach
                                        </span>
                                        <span class="user-vendor-name"><?php echo Session::get('username'); ?>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="/coupledashboard">Dashboard</a>
                                        <a class="dropdown-item" href="#">My Wishlist </a>
                                        <a class="dropdown-item" href="todo-list">To Do List</a>
                                        <a class="dropdown-item" href="#">Budget</a>
                                        <a class="dropdown-item" href="#">Guestlist </a>
                                        <a class="dropdown-item" href="#">Seating Table </a>
                                        <a class="dropdown-item" href="couple-profile">My Profile </a>
                                        <a class="dropdown-item" href="/logout">Log Out </a>
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
                    <img src="userimage/{{$user->userimage}}" alt="" class="rounded-circle mb10">
                @endforeach
                </div>
                <h3 class="vendor-profile-name"><?php echo Session::get('username'); ?></h3>
                <a href="#" class="edit-link">edit profile</a>
            </div>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li class="active"><a href="/coupledashboard"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li><a href="#"><span class="dash-nav-icon"><i class="fas fa-heart"></i> </span> My Wishlist </a></li>
                    <li><a href="todo-list"><span class="dash-nav-icon"><i class="fas fa-list-ul"></i></span>To Do List</a></li>
                    <li><a href="#"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Budget</a></li>
                    <li><a href="couple-guestlist"><span class="dash-nav-icon"><i class="fas fa-users"></i></span>Guestlist </a></li>
                    <li><a href="couple-table-planner"><span class="dash-nav-icon"><i class="fas fa-table"></i></span>Seating Table </a></li>
                    <li><a href="couple-website"><span class="dash-nav-icon"><i class="fas fa-link"></i></span>Wedding Website </a></li>
                    <li><a href="RealWedding"><span class="dash-nav-icon"><i class="fas fa-images"></i></span>Real Wedding </a></li>
                    <li><a href="couple-profile"><span class="dash-nav-icon"><i class="fas fa-user-circle"></i></span>My Profile </a></li>
                    <li><a href="/logout"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Log Out </a></li>
                </ul>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="container-fluid">
                <!-- 4 seat edit form -->
                <div class="row" id="row1" style="display:none;">
                    <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="card">
                                    <div class="card-header">Edit table seating</div>
                                    <div class="card-body">
                                        <div class="alert alert-info alert-block" id="4seatalertinfo" style="display:none;">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong></strong>
                                        </div>
                                        <div class="alert alert-danger alert-block" style="display:none;">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong></strong>
                                        </div>
                                        <form id="4seatedit" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="personal-form-info">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <input id="4seattableid" name="4seattableid" type="hidden" placeholder="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <input id="4seatcoupleid" name="4seatcoupleid" type="hidden" placeholder="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="4seattablename">Table Name</label>
                                                            <input id="4seattablename" name="4seattablename" type="text" placeholder="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <input id="4seatcapacity" name="4seatcapacity" type="hidden" placeholder="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="4seatguest1">Guest 1</label>
                                                            <input id="4seatguest1" name="4seatguest1" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="4seatguest2">Guest 2</label>
                                                            <input id="4seatguest2" name="4seatguest2" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="4seatguest3">Guest 3</label>
                                                            <input id="4seatguest3" name="4seatguest3" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="4seatguest4">Guest 4</label>
                                                            <input id="4seatguest4" name="4seatguest4" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                           <button class="btn btn-default btn-block">Edit table seating</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 4 seat edit end form -->
                <br/>
                <!-- 8 seat edit form -->
                <div class="row" id="row2" style="display:none;">
                    <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="card">
                                    <div class="card-header">Edit table seating</div>
                                    <div class="card-body">
                                        <div class="alert alert-info alert-block" id="8seatalertinfo" style="display:none;">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong></strong>
                                        </div>
                                        <div class="alert alert-danger alert-block" id="8seatalertdanger" style="display:none;">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong></strong>
                                        </div>
                                        <form id="8seatedit" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="personal-form-info">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <input id="8seattableid" name="8seattableid" type="hidden" placeholder="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <input id="8seatcoupleid" name="8seatcoupleid" type="hidden" placeholder="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="8seattablename">Table Name</label>
                                                            <input id="8seattablename" name="8seattablename" type="text" placeholder="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <input id="8seatcapacity" name="8seatcapacity" type="hidden" placeholder="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="8seatguest1">Guest 1</label>
                                                            <input id="8seatguest1" name="8seatguest1" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="8seatguest2">Guest 2</label>
                                                            <input id="8seatguest2" name="8seatguest2" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="8seatguest3">Guest 3</label>
                                                            <input id="8seatguest3" name="8seatguest3" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="8seatguest4">Guest 4</label>
                                                            <input id="8seatguest4" name="8seatguest4" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="8seatguest5">Guest 5</label>
                                                            <input id="8seatguest5" name="8seatguest5" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="8seatguest6">Guest 6</label>
                                                            <input id="8seatguest6" name="8seatguest6" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="8seatguest7">Guest 7</label>
                                                            <input id="8seatguest7" name="8seatguest7" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="8seatguest8">Guest 8</label>
                                                            <input id="8seatguest8" name="8seatguest8" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                           <button class="btn btn-default btn-block">Edit table seating</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 8 seat edit end form -->
                <br/>
                <!-- 12 seat edit form -->
                <div class="row" id="row3" style="display:none;">
                    <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="card">
                                    <div class="card-header">Edit table seating</div>
                                    <div class="card-body">
                                        <div class="alert alert-info alert-block" id="12seatalertinfo" style="display:none;">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong></strong>
                                        </div>
                                        <div class="alert alert-danger alert-block" id="12seatalertdanger" style="display:none;">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong></strong>
                                        </div>
                                        <form id="12seatedit" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="personal-form-info">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <input id="12seattableid" name="12seattableid" type="hidden" placeholder="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <input id="12seatcoupleid" name="12seatcoupleid" type="hidden" placeholder="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="12seattablename">Table Name</label>
                                                            <input id="12seattablename" name="12seattablename" type="text" placeholder="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <input id="12seatcapacity" name="12seatcapacity" type="hidden" placeholder="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="12seatguest1">Guest 1</label>
                                                            <input id="12seatguest1" name="12seatguest1" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="12seatguest2">Guest 2</label>
                                                            <input id="12seatguest2" name="12seatguest2" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="12seatguest3">Guest 3</label>
                                                            <input id="12seatguest3" name="12seatguest3" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="12seatguest4">Guest 4</label>
                                                            <input id="12seatguest4" name="12seatguest4" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="12seatguest5">Guest 5</label>
                                                            <input id="12seatguest5" name="12seatguest5" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="12seatguest6">Guest 6</label>
                                                            <input id="12seatguest6" name="12seatguest6" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="12seatguest7">Guest 7</label>
                                                            <input id="12seatguest7" name="12seatguest7" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="12seatguest8">Guest 8</label>
                                                            <input id="12seatguest8" name="12seatguest8" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="12seatguest9">Guest 9</label>
                                                            <input id="12seatguest9" name="12seatguest9" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="12seatguest10">Guest 10</label>
                                                            <input id="12seatguest10" name="12seatguest10" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="12seatguest11">Guest 11</label>
                                                            <input id="12seatguest11" name="12seatguest11" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="12seatguest12">Guest 12</label>
                                                            <input id="12seatguest12" name="12seatguest12" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                           <button class="btn btn-default btn-block">Edit table seating</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 12 seat edit end form -->
                <br/>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">Table Seating Planner</h3>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                        </div>                      
                    </div>
                </div>
                <div class="row">
                    <div class="offset-xl-8 col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 text-right mb20">
                        <div id='slide-panel' class="slide-panel-light">
                            <h3>Create Table</h3>
                            <form id="createtable">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="tablename">Table Name</label>
                                            <input id="tablename" name="tablename" type="text" placeholder="Table name here" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="seating">Select seating capacity</label>
                                            <input id="ms2" name="seating_capacity" type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="seating">Select Guest</label>
                                            <input id="ms1" name="seating" type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default">Create Table</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <a href="#" class="btn btn-default" id='trigger'>Add new table</a>
                    </div>
                </div>
                <div class="row">
                <!-- four seat loop-->
                    @foreach($seatingfour as $seatingfour)
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card seating-table-list table-responsive">
                            <table class="table" id="table1">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="seating-table-name">
                                            <span class="mb0">{{$seatingfour->tablename}}</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr >
                                        <td style="display:none;" class="seating-guest-name">{{$seatingfour->id}}</td>
                                        <td style="display:none;" class="seating-guest-name">{{$seatingfour->coupleid}}</td>
                                        <td style="display:none;" class="seating-guest-name">{{$seatingfour->tablename}}</td>
                                        <td style="display:none;" class="seating-guest-name">{{$seatingfour->seatingcapacity}}</td>
                                        <td class="seating-guest-name">{{$seatingfour->guest1}}</td>
                                        <td class="seating-guest-name">{{$seatingfour->guest2}}</td>
                                        <td class="seating-guest-name">{{$seatingfour->guest3}}</td>
                                        <td class="seating-guest-name">{{$seatingfour->guest4}}</td>
                                        <td class="seating-table-action"><a href="javascript:edittask()" onclick="edittask()" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endforeach
                    <!-- Eight seat loop -->
                    @foreach($seatingeight as $seatingeight)
                    <div class="col-xl-12">
                        <div class="card seating-table-list table-responsive">
                            <table class="table" id="table2">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="seating-table-name">
                                            <span class="mb0">{{$seatingeight->tablename}}</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="display:none;" class="seating-guest-name">{{$seatingeight->id}}</td>
                                        <td style="display:none;" class="seating-guest-name">{{$seatingeight->coupleid}}</td>
                                        <td style="display:none;" class="seating-guest-name">{{$seatingeight->tablename}}</td>
                                        <td style="display:none;" class="seating-guest-name">{{$seatingeight->seatingcapacity}}</td>
                                        <td class="seating-guest-name">{{$seatingeight->guest1}}</td>
                                        <td class="seating-guest-name">{{$seatingeight->guest2}}</td>
                                        <td class="seating-guest-name">{{$seatingeight->guest3}}</td>
                                        <td class="seating-guest-name">{{$seatingeight->guest4}}</td>
                                        <td class="seating-guest-name">{{$seatingeight->guest5}}</td>
                                        <td class="seating-guest-name">{{$seatingeight->guest6}}</td>
                                        <td class="seating-guest-name">{{$seatingeight->guest7}}</td>
                                        <td class="seating-guest-name">{{$seatingeight->guest8}}</td>
                                        <td class="seating-guest-name"><a href="javascript:edittask2()" onclick="edittask2()" class="btn btn-outline-violate btn-xs mr10">edit</a></td>
                                        <td class="seating-guest-name"><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endforeach
                    <!-- Twelve seat loop -->
                    @foreach($seatingtwelve as $seatingtwelve)
                    <div class="col-xl-12">
                        <div class="card seating-table-list table-responsive">
                            <table class="table" id="table3">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="seating-table-name">
                                            <span class="mb0">{{$seatingtwelve->tablename}}</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="display:none;" class="seating-guest-name">{{$seatingtwelve->id}}</td>
                                        <td style="display:none;" class="seating-guest-name">{{$seatingtwelve->coupleid}}</td>
                                        <td style="display:none;" class="seating-guest-name">{{$seatingtwelve->tablename}}</td>
                                        <td style="display:none;" class="seating-guest-name">{{$seatingtwelve->seatingcapacity}}</td>
                                        <td class="seating-guest-name">{{$seatingtwelve->guest1}}</td>
                                        <td class="seating-guest-name">{{$seatingtwelve->guest2}}</td>
                                        <td class="seating-guest-name">{{$seatingtwelve->guest3}}</td>
                                        <td class="seating-guest-name">{{$seatingtwelve->guest4}}</td>
                                        <td class="seating-guest-name">{{$seatingtwelve->guest5}}</td>
                                        <td class="seating-guest-name">{{$seatingtwelve->guest6}}</td>
                                        <td class="seating-guest-name">{{$seatingtwelve->guest7}}</td>
                                        <td class="seating-guest-name">{{$seatingtwelve->guest8}}</td>
                                        <td class="seating-guest-name">{{$seatingtwelve->guest9}}</td>
                                        <td class="seating-guest-name">{{$seatingtwelve->guest10}}</td>
                                        <td class="seating-guest-name">{{$seatingtwelve->guest11}}</td>
                                        <td class="seating-guest-name">{{$seatingtwelve->guest12}}</td>
                                        <td class="seating-guest-name"><a href="javascript:edittask3()" onclick="edittask3()" class="btn btn-outline-violate btn-xs mr10">edit</a></td>
                                        <td class="seating-guest-name"><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/menumaker.min.js') }}"></script>
    <script src="{{ asset('js/custom-script.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/magicsuggest.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script type="text/javascript">
        function edittask(){
            document.getElementById("row1").style.display = "block";
            var table1 = document.getElementById("table1");

            document.getElementById("4seattableid").value = table1.rows[1].cells[0].innerHTML;
            document.getElementById("4seatcoupleid").value = table1.rows[1].cells[1].innerHTML;
            document.getElementById("4seattablename").value = table1.rows[1].cells[2].innerHTML;
            document.getElementById("4seatcapacity").value = table1.rows[1].cells[3].innerHTML;
            document.getElementById("4seatguest1").value = table1.rows[1].cells[4].innerHTML;
            document.getElementById("4seatguest2").value = table1.rows[1].cells[5].innerHTML;
            document.getElementById("4seatguest3").value = table1.rows[1].cells[6].innerHTML;
            document.getElementById("4seatguest4").value = table1.rows[1].cells[7].innerHTML;
        }

        function edittask2(){
            document.getElementById("row2").style.display = "block";
            var table2 = document.getElementById("table2");

            document.getElementById("8seattableid").value = table2.rows[1].cells[0].innerHTML;
            document.getElementById("8seatcoupleid").value = table2.rows[1].cells[1].innerHTML;
            document.getElementById("8seattablename").value = table2.rows[1].cells[2].innerHTML;
            document.getElementById("8seatcapacity").value = table2.rows[1].cells[3].innerHTML;
            document.getElementById("8seatguest1").value = table2.rows[1].cells[4].innerHTML;
            document.getElementById("8seatguest2").value = table2.rows[1].cells[5].innerHTML;
            document.getElementById("8seatguest3").value = table2.rows[1].cells[6].innerHTML;
            document.getElementById("8seatguest4").value = table2.rows[1].cells[7].innerHTML;
            document.getElementById("8seatguest5").value = table2.rows[1].cells[8].innerHTML;
            document.getElementById("8seatguest6").value = table2.rows[1].cells[9].innerHTML;
            document.getElementById("8seatguest7").value = table2.rows[1].cells[10].innerHTML;
            document.getElementById("8seatguest8").value = table2.rows[1].cells[11].innerHTML;
        }

        function edittask3(){
            document.getElementById("row3").style.display = "block";
            var table3 = document.getElementById("table3");

            document.getElementById("12seattableid").value = table3.rows[1].cells[0].innerHTML;
            document.getElementById("12seatcoupleid").value = table3.rows[1].cells[1].innerHTML;
            document.getElementById("12seattablename").value = table3.rows[1].cells[2].innerHTML;
            document.getElementById("12seatcapacity").value = table3.rows[1].cells[3].innerHTML;
            document.getElementById("12seatguest1").value = table3.rows[1].cells[4].innerHTML;
            document.getElementById("12seatguest2").value = table3.rows[1].cells[5].innerHTML;
            document.getElementById("12seatguest3").value = table3.rows[1].cells[6].innerHTML;
            document.getElementById("12seatguest4").value = table3.rows[1].cells[7].innerHTML;
            document.getElementById("12seatguest5").value = table3.rows[1].cells[8].innerHTML;
            document.getElementById("12seatguest6").value = table3.rows[1].cells[9].innerHTML;
            document.getElementById("12seatguest7").value = table3.rows[1].cells[10].innerHTML;
            document.getElementById("12seatguest8").value = table3.rows[1].cells[11].innerHTML;
            document.getElementById("12seatguest9").value = table3.rows[1].cells[12].innerHTML;
            document.getElementById("12seatguest10").value = table3.rows[1].cells[13].innerHTML;
            document.getElementById("12seatguest11").value = table3.rows[1].cells[14].innerHTML;
            document.getElementById("12seatguest12").value = table3.rows[1].cells[15].innerHTML;
        }
    </script>
    <script>
        $(function() {
            var ms1 = $('#ms1').magicSuggest({                
                data: [                   
                    @foreach($guestlist_single as $guestlist_single)
                    '{{$guestlist_single->fname}}'+' '+'{{$guestlist_single->lname}}',  
                    @endforeach
                    @foreach($guestlist_couple as $guestlist_couple)
                    '{{$guestlist_couple->couple_firstname}}'+' '+'{{$guestlist_couple->couple_lastname}}',
                    @endforeach
                    @foreach($guestlist_household as $guestlist_household)
                    '{{$guestlist_household->household_fname}}'+' '+'{{$guestlist_household->household_lname}}',  
                    @endforeach                                                                                 
                ]                
            });
        });
        $(function() {
            var ms1 = $('#ms2').magicSuggest({                
                data: [                   
                    '4',
                    '8',
                    '12',                                                                       
                ]                
            });
        });
    </script>
    <script src="{{ asset('js/offcanvas.js') }}"></script>
    <script src="{{ asset('js/jquery.slidereveal.js') }}"></script>
</body>
</html>