<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{csrf_token()}}"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RealWed | Couple Dashboard - Realwedding</title>
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
    <link href="{{ asset('css/summernote-bs4.css') }}" rel="stylesheet">
    <!-- Magic suggestion -->
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
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">Real Wedding </h3>
                            <p>Submit your real wedding photos and vendor details. Share your story of big day</p>
                        </div>
                    </div>
                </div>
                <div id="success" class="alert alert-success alert-block" style="display:none;">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong id="success_msg">Task Edited successfully</strong>
                </div>
                <div id="info_success" class="alert alert-info alert-block" style="display:none;">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong id="info_success_msg">Task Edited successfully</strong>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="card">
                            <h4 class="card-header">Real Wedding Setting</h4>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">Show Private
                                        <div class="switch-notification">
                                            <label class="switch">
                                                <input id="showprivate" type="checkbox">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <h4 class="card-header">
                                Upload Your Real Wedding
                            </h4>
                            <form id="RealWedding" action="save-real-wedding" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <h4 class="card-title">Upload Featured Image</h4>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="featured_image"  id="featured_image">
                                        <label class="custom-file-label" for="realwedding-featured-img">Choose Featured image</label>
                                    </div>
                                </div>
                                <div class="alert alert-danger alert-block" id="edittask_danger" style="display:none;">
                                </div>
                                <div class="card-body border-top">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h4 class="card-title">Upload Wedding Gallery</h4>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <!-- File Button -->
                                            <div class="form-group">
                                                <label class="control-label d-none" for="filebutton">Browse Image</label>
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
                                <div class="card-body border-top">
                                    <h4 class="card-title mb0">Add Vendors Information</h4>
                                    <p><small>Select vendor. Type your vendor name and hit the enter.</small></p>
                                    <div class="mb-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="fromwebsite" id="inlineRadio1" value="our-website">
                                            <label class="form-check-label" for="inlineRadio1">From Our website</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="fromoutside" id="inlineRadio2" value="vendor-outside">
                                            <label class="form-check-label" for="inlineRadio2">Outside Website</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="both" id="inlineRadio3" value="both">
                                            <label class="form-check-label" for="inlineRadio3">Both</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <h4 class="card-title">Story Description</h4>
                                    <div class="form-row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Write about your wedding journey.</label>
                                                <textarea class="form-control" name="textarea" id="textarea" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <button type="Submit" id="submit_realwedding" class="btn btn-default">Submit Real Weddings</button>
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
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            $("#showprivate").click(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $("#success").css('display','none');
                $("#info_success").css('display','none');

                if($(this).is(":checked"))
                {
                    var checked = "checked";
                    jQuery.ajax({
                        url: "{{ url('show-realwedding') }}",
                        method: 'post',
                        data:{
                            checked: checked,
                        },
                        success: function(result){
                            $("#success").css('display','block');
                            $("#success_msg").html("Real wedding will be shown");
                        }
                    });
                }
                else{
                    var checked = "not checked";
                    jQuery.ajax({
                        url: "{{ url('dont-show-realwedding') }}",
                        method: 'post',
                        data:{
                            checked: checked,
                        },
                        success: function(result){
                            $("#info_success").css('display','block');
                            $("#info_success_msg").html("Real wedding will not be shown");
                        }
                    });
                }
            });
        });
    </script>
    <script>
        jQuery(document).ready(function(){
            jQuery('#RealWedding').submit(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });

              $(".alert-danger").css('display','none');

                if($('#featured_image').get(0).files.length === 0){
                    $(".alert-danger").css('display','block');
                    $(".alert-danger").html('Featured image required');
                }
                    else{
                            if ($('#filebutton').get(0).files.length === 0 ||
                                $('#filebutton2').get(0).files.length === 0 ||$('#filebutton3').get(0).files.length === 0 ||
                                $('#filebutton4').get(0).files.length === 0 ||$('#filebutton5').get(0).files.length === 0 ||
                                $('#filebutton6').get(0).files.length === 0)
                            {
                                $(".alert-danger").css('display','block');
                                $(".alert-danger").html('Wedding gallery images required');                                
                            }else
                            {   
                                if ($.trim($("#textarea").val()) === ""){
                                    $(".alert-danger").css('display','block');
                                    $(".alert-danger").html('Text cannot be blank');
                                    return false;
                                }
                                else{                                    

                                    if($('#inlineRadio1').is(":checked") || $('#inlineRadio2').is(":checked") ||
                                        $('#inlineRadio3').is(":checked"))
                                        {           
                                            var formData = new FormData($('#RealWedding')[0]);

                                            jQuery.ajax({
                                            url: "{{ url('save-real-wedding') }}",
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
                                        else
                                        {
                                            $(".alert-danger").css('display','block');
                                            $(".alert-danger").html('Please check atleast one of the given options in the form');
                                        }                                   
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
    <!-- nice-select js -->
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/fastclick.js') }}"></script>
    <script src="{{ asset('js/magicsuggest.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script>
    $(function() {
        var VendorsCateogry = $('#VendorsCateogry').magicSuggest({
            data: ['Photographer - Matrimony Wedding Photography',
                'Venue',
                'Cake',
                'Dresses',
                'Dj'

            ]
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('input[type="radio"]').click(function() {
            var inputValue = $(this).attr("value");
            var targetBox = $("." + inputValue);
            $(".rw-vendor-list-info").not(targetBox).hide();
            $(targetBox).show();
        });
    });
    </script>
</body>
</html>