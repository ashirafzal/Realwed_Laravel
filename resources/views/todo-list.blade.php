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
                                        <span class="user-vendor-name">
                                            <?php echo Session::get('username'); ?>
                                        </span></a>
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
                    <img src="userimage/{{$user->userimage}}" alt="" class="rounded-circle"></div>
                <h3 class="vendor-profile-name">Eva J. Giles</h3>
                <a href="#" class="edit-link">edit profile</a>
            </div>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li><a href="/coupledashboard"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li><a href="#"><span class="dash-nav-icon"><i class="fas fa-heart"></i> </span> My Wishlist </a></li>
                    <li class="active"><a href="todo-list"><span class="dash-nav-icon"><i class="fas fa-list-ul"></i></span>To Do List</a></li>
                    <li><a href="#"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Budget</a></li>
                    <li><a href="#l"><span class="dash-nav-icon"><i class="fas fa-users"></i></span>Guestlist </a></li>
                    <li><a href="#"><span class="dash-nav-icon"><i class="fas fa-table"></i></span>Seating Table </a></li>
                     <li><a href="#"><span class="dash-nav-icon"><i class="fas fa-link"></i></span>Wedding Website </a></li>
                      <li><a href="#"><span class="dash-nav-icon"><i class="fas fa-images"></i></span>Real Wedding </a></li>
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
                            <h3 class="dashboard-page-title">My To Do List</h3>
                            <p>Create and manage your wedding planning checklist. Its ultimate and real simple.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-xl-8 col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 text-right mb20">
                        <div id='slide-panel' class="slide-panel-light">
                            <h3>Create Task</h3>
                            <form id="addtask" autocomplete="off">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="alert alert-success" style="display:none">
                                    </div>
                                    <div class="alert alert-danger" style="display:none">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <div class="form-group">
                                            <label class="control-label" for="tasktitle">Task Title</label>
                                            <input id="tasktitle" name="tasktitle" type="text" placeholder="Write task here" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="taskdate">Task Date</label>
                                            <input id="taskdate" name="taskdate" type="text" placeholder="Task Date" class="form-control">
                                            <div class="venue-form-calendar"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="taskdate">Task Status</label>
                                            <input id="taskstatus" name="taskstatus" type="text" placeholder="Task status" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <button type="submit" id="submittask" name="submittask" class="btn btn-default">Submit to do </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <a href="#" class="btn btn-default" id='trigger'>Add New Task</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card card-summary">
                            <div class="card-body">
                                <div class="float-left">
                                    <div class="summary-count">{{ $addtask_completed }}</div>
                                    <p>Completed Task</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card card-summary">
                            <div class="card-body">
                                <div class="float-left">
                                    <div class="summary-count">{{ $addtask_due }}</div>
                                    <p>Due Task </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card card-summary">
                            <div class="card-body">
                                <div class="float-left">
                                    <div class="summary-count">{{ $addtask_total }}</div>
                                    <p>Total Task </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    <br>
                @endif
                <!-- accordions -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div id="accordion" class="todo">
                            <!-- accordion-card -->
                            <div class="accordion-card card">
                                <div class="accordion-card-header" id="headingOne">
                                    <h5 class="mb-0">
                                    <a role="button" href="#" class="accordion-card-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 All Task<span class="fas fa-plus float-right"></span></a></h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <!-- to do header -->
                                        <div class="todo-thead">
                                            <div class="row">
                                                <div style="text-align:center;" class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                <span class=" ">Task Name</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" ">Task Date</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" "> Status </span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    Action
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.to do header -->
                                        <div class="todo-list">
                                            <ul class="list-unstyled">
                                            @foreach ($addtask as $addtask)
                                                @if($addtask->taskstatus == 'Completed')
                                                <li>
                                                    <div class="row">
                                                        <div style="text-align:center;" class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                            {{ $addtask->tasktitle }}
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <span class="todo-date">{{ $addtask->taskdate }}</span>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <span class="to-do-status"><span class="badge badge-success">Completed</span></span>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                            <div class="todo-list-btn">
                                                                <a href="edit-task/{{$addtask->id}}" class="btn btn-outline-violate btn-xs">edit</a>
                                                                <a href="delete-task/{{$addtask->id}}" class="btn btn-outline-pink btn-xs">delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @else
                                                <li>
                                                    <div class="row">
                                                        <div style="text-align:center;" class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                            {{ $addtask->tasktitle }}
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <span class="todo-date">{{ $addtask->taskdate }}</span>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <span class="to-do-status"><span class="badge badge-danger">Due</span></span>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                            <div class="todo-list-btn">
                                                                <a href="edit-task/{{$addtask->id}}" class="btn btn-outline-violate btn-xs">edit</a>
                                                                <a href="delete-task/{{$addtask->id}}" class="btn btn-outline-pink btn-xs">delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endif
                                            </ul>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.accordion-card -->
                        </div>
                    </div>
                </div>
                <!-- /.accordions -->
            </div>
        </div>
    </div>   
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
     <script src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#submittask').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });

              $(".alert-danger").css('display','none');
              $(".alert-success").css('display','none');

              if ($.trim($("#tasktitle").val()) === "" || $.trim($("#taskdate").val()) === ""
                || $.trim($("#taskstatus").val()) === ""){
                    $(".alert-danger").css('display','block');
                    $(".alert-danger").html('All Fields required. Make sure you fill up all fields');
                    return false;
                }else{                      
                            jQuery.ajax({
                            url: "{{ url('add-task') }}",
                            method: 'post',
                            data: {
                                tasktitle: jQuery('#tasktitle').val(),
                                taskdate: jQuery('#taskdate').val(),
                                taskstatus: jQuery('#taskstatus').val(),
                            },
                                success: function(result){
                                    $('#tasktitle').val("");
                                    $('#taskdate').val("");
                                    $('#taskstatus').val("");
                                    $(".alert-success").css('display','block');
                                    $(".alert-success").html(result);
                                }
                            });
                        }                    
                    });
                });
    </script>
</body>
</html>