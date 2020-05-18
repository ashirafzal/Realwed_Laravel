<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{csrf_token()}}" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RealWed | Couple Dashboard - To Do List</title>
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
                                        <a class="dropdown-item" href="wishlist">My Wishlist </a>
                                        <a class="dropdown-item" href="todo-list">To Do List</a>
                                        <a class="dropdown-item" href="couple-budget">Budget</a>
                                        <a class="dropdown-item" href="couple-guestlist">Guestlist </a>
                                        <a class="dropdown-item" href="couple-table-planner">Seating Table </a>
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
                    <li><a href="wishlist"><span class="dash-nav-icon"><i class="fas fa-heart"></i> </span> My Wishlist </a></li>
                    <li><a href="todo-list"><span class="dash-nav-icon"><i class="fas fa-list-ul"></i></span>To Do List</a></li>
                    <li><a href="couple-budget"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Budget</a></li>
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
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">Wedding Website</h3>
                            <p>Create Your wedding website and share with your friend and family.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">Settings</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-2">Websites URL</div>
                                    <div class="col-xl-8">
                                        <p class="text-primary">
                                            @foreach($couplewebsite as $couplewebsite)
                                                <a href="http://127.0.0.1:8000/couple-website/{{ $couplewebsite->id }}">http://127.0.0.1:8000/couple-website/{{ $couplewebsite->id }}</a>
                                                <br/>
                                            @endforeach
                                        </p>
                                    </div>
                                    <!--<div class="col-xl-2 text-right "><a href="#" class="btn btn-default btn-xs">Copy URL</a></div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="success" class="alert alert-success alert-block" style="display:none;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong id="success_msg">Task Edited successfully</strong>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                RSVP Setting
                            </div>                             
                                <div class="rsvp-create-form">
                                    <form id="rsvp-form" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="card-body">
                                            <h5>RSVP Form</h5>
                                            <div class="alert alert-danger alert-block" id="danger_msg" style="display:none;">
                                            </div>
                                            <ul class="list-group">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">Start Your RSVP Form
                                                    <div class="switch-notification">
                                                        <label class="switch">
                                                            <input id="creatersvp" type="checkbox">
                                                            <span class="slider"></span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body border-top">
                                            <div class="">
                                                <div class="form-group">
                                                    <label class="control-label" for="">Couple Name</label>
                                                    <input id="couplename" name="couplename" type="text" placeholder="Your couple name" class="form-control ">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="">Wedding Date</label>
                                                    <input id="weddingdate" name="weddingdate" type="text" placeholder="Your wedding date" class="form-control">
                                                    <div class="venue-form-calendar"><i class="far fa-calendar-alt"></i></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="">Wedding city & country</label>
                                                    <input id="weddingplace" name="weddingplace" type="text" placeholder="Your wedding city & country" class="form-control ">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="">Wedding address</label>
                                                    <input id="weddingaddress" name="weddingaddress" type="text" placeholder="Your wedding address" class="form-control ">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="">Contact Email</label>
                                                    <input id="contactemail" name="contactemail" type="email" placeholder="Your contact email" class="form-control ">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="">Phone Number</label>
                                                    <input id="contactnumber" name="contactnumber" type="number" placeholder="Your phone number" class="form-control ">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="">Whatsapp Contact</label>
                                                    <input id="whatsapp" name="whatsapp" type="number" placeholder="Your whatsapp contact" class="form-control ">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="summernote">Your Wedding Story</label>
                                                    <textarea class="form-control" id="yourstory" name="yourstory" placeholder="Write your wedding story here ..."></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="summernote">Your Proposal</label>
                                                    <textarea class="form-control" id="yourproposal" name="yourproposal" placeholder="Write your wedding story here ..."></textarea>
                                                </div>
                                                <h2 class="text-danger">Header Image</h2>
                                                <div class="custom-file">
                                                    <input type="file" name="rsvpformpic" name="filebutton" id="filebutton" onchange="readURL(this);" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                                <div class="couple-form-image-section">
                                                    <img id="image" name="image" src="{{ asset('images/couple-form-image.jpg') }}" alt="" class="img-fluid">
                                                </div>
                                                <br/>
                                                <h2 class="text-danger">Add 3 wedding gallery images</h2>
                                                <div class="form-group">
                                                    <input type="file" id="filebutton2" name="filebutton2" onchange="readURL2(this);" class="btn btn-primary btn-block" type="file">
                                                    <input type="file" id="filebutton3" name="filebutton3" onchange="readURL3(this);" class="btn btn-primary btn-block" type="file">
                                                    <input type="file" id="filebutton4" name="filebutton4" onchange="readURL4(this);" class="btn btn-primary btn-block" type="file">
                                                </div>
                                                <div class="form-group">
                                                    <div class="gallery-upload-img">
                                                        <img src="" id="image2" alt="" class="img-fluid">
                                                        <span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="gallery-upload-img">
                                                        <img src="" id="image3" alt="" class="img-fluid">
                                                        <span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="gallery-upload-img">
                                                        <img src="" id="image4" alt="" class="img-fluid">
                                                        <span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <button class="btn btn-default" id="submitrsvp" type="submit">Create Wedding Wed Page</button>
                                        </div>
                                    </form>
                                </div>                             
                        </div>
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
                        .width("100%")
                        .height(500);
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
                        .width("100%")
                        .height(350);
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
                        .width("100%")
                        .height(350);
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
                        .width("100%")
                        .height(350);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
    </script>
    <script>
        jQuery(document).ready(function(){
            jQuery('#rsvp-form').submit(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });

              $(".alert-danger").css('display','none');

                if($('#filebutton').get(0).files.length === 0){
                    $(".alert-danger").css('display','block');
                    $(".alert-danger").html('Header image required');
                }
                    else{
                            if ($('#filebutton2').get(0).files.length === 0 ||
                                $('#filebutton3').get(0).files.length === 0 ||
                                $('#filebutton4').get(0).files.length === 0)
                            {
                                $(".alert-danger").css('display','block');
                                $(".alert-danger").html('Wedding gallery images required');                            
                            }else
                            {                                   
                                if ($.trim($("#couplename").val()) === "" || $.trim($("#weddingdate").val()) === "" ||
                                    $.trim($("#weddingplace").val()) === "" || $.trim($("#weddingaddress").val()) === "" ||
                                    $.trim($("#contactemail").val()) === "" || $.trim($("#contactnumber").val()) === "" ||
                                    $.trim($("#whatsapp").val()) === "" || $.trim($("#yourstory").val()) === "" ||
                                    $.trim($("#yourproposal").val()) === ""){
                                    $(".alert-danger").css('display','block');
                                    $(".alert-danger").html('Text feilds cannot be blank');
                                    return false;
                                }
                                else{                                    
                                    var formData = new FormData($('#rsvp-form')[0]);

                                    jQuery.ajax({
                                    url: "{{ url('submit-website') }}",
                                    method: 'post',
                                    data:   formData,
                                    cache:  false,
                                    processData: false,
                                    contentType: false, 
                                        success: function(result){
                                            alert(result);
                                        }
                                    });
                                }                                               
                            }
                        }                    
                    });
                });
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/menumaker.min.js') }}"></script>
    <script src="{{ asset('js/custom-script.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/offcanvas.js') }}"></script>
    <script src="{{ asset('js/jquery.slidereveal.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
</body>
</html>