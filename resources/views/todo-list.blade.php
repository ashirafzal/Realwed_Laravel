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
                <h3 class="vendor-profile-name"><?php echo Session::get('username'); ?></h3>
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
                                            <label class="control-label" for="taskdate">Task Status (Due / Completed)</label>
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
                <!-- Edit Task Form Start-->
                <div class="row" id="edittaskblock" style="display:none;">
                    <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="card">
                                    <div class="card-header">Edit Task</div>
                                    <div class="card-body">
                                        <form id="edittask">
                                            {{ csrf_field() }}
                                            {{ method_field('POST') }}
                                                <div id="edittasksuccess" class="alert alert-success alert-block" style="display:none;">
                                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                                    <strong id="edittask_success_msg">Task Edited successfully</strong>
                                                </div>
                                                <div id="edittaskdanger" class="alert alert-danger alert-block" style="display:none;">
                                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                                    <strong id="edittask_danger_msg">Error editing task</strong>
                                                </div>
                                            <!-- Form Name -->
                                            <div class="personal-form-info">
                                                <div class="row">
                                                    <div style="display:none;" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <input id="edittaskid" name="edittaskid" type="hidden" value="" placeholder="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="tasktitle">Task Tittle</label>
                                                            <input id="edittasktitle" name="edittasktitle" type="text" value="" placeholder="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="taskdate">Task Date</label>
                                                            <input id="edittaskdate" name="edittaskdate" type="text" value="" placeholder="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="taskstatus">Task Status (Due / Completed)</label>
                                                            <input id="edittaskstatus" name="edittaskstatus" type="text" value="" placeholder="" class="form-control ">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="social-form-info mb-0">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <button class="btn btn-default" id="submit_edittask" type="submit">Edit Task</button>
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
            </div>
                <!--Edit Task Form Ends-->
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
                <div class="alert alert-danger alert-block" id="edittask_danger" style="display:none;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong id="edittask_js_error"></strong>
                </div>
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
                                    <div class="table-responsive text-nowrap">
                                            <!--Table-->
                                            <table  id="table1" class="table table-bordered text-center">
                                            <!--Table head-->
                                            <thead>
                                                <tr>
                                                    <th>Select Task</th>
                                                    <th style="display:none;">Task ID</th>
                                                    <th>Task Name</th>
                                                    <th>Task Date</th>
                                                    <th>Task Status</th>
                                                    <th>Edit Task</th>
                                                    <th>Delete Task</th>
                                                </tr>
                                            </thead>
                                            <!--Table head-->
                                            <!--Table body-->
                                            <tbody>
                                                @foreach($addtask as $addtask)
                                                    @if($addtask->taskstatus == 'Completed')
                                                    <tr>
                                                        <td><input type="checkbox" id="check-tab1" name="check-tab1"></td>
                                                        <td style="display:none;">{{ $addtask->id }}</td>
                                                        <td>{{ $addtask->tasktitle }}</td>
                                                        <td>{{ $addtask->taskdate }}</td>
                                                        <td><span class="to-do-status"><span class="badge badge-success">Completed</span></span></td>
                                                        <td><a href="javascript:edittask()" onclick="edittask()" class="btn btn-outline-violate btn-xs">Edit</a></td>
                                                        <td><a href="delete-task/{{$addtask->id}}" class="btn btn-outline-violate btn-xs">Delete</a></td>
                                                    </tr>
                                                    @else
                                                    <tr>
                                                        <td><input type="checkbox" id="check-tab1" name="check-tab1"></td>
                                                        <td style="display:none;">{{ $addtask->id }}</td>
                                                        <td>{{ $addtask->tasktitle }}</td>
                                                        <td>{{ $addtask->taskdate }}</td>
                                                        <td><span class="to-do-status"><span class="badge badge-danger">Due</span></span></td>
                                                        <td><a href="javascript:edittask()" onclick="edittask()" class="btn btn-outline-violate btn-xs">Edit</a></td>
                                                        <td><a href="delete-task/{{$addtask->id}}" class="btn btn-outline-violate btn-xs">Delete</a></td>
                                                    </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                            <!--Table body-->
                                        </table>
                                        <!--Table-->
                                    </div>
                                        <!-- to do header -->
                                       
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
    <script type="text/javascript">
        function edittask(){

            var checkboxlength = $("#check-tab1:checked").length;

            if(checkboxlength > 1){
                document.getElementById("edittask_danger").style.display = "block";
                document.getElementById("edittask_js_error").innerHTML = "Cannot select more than one task to edit at a time";
            }
            else if(checkboxlength < 1){
                document.getElementById("edittask_danger").style.display = "block";
                document.getElementById("edittask_js_error").innerHTML = "select task to edit";
            }
            else{

                document.getElementById("edittaskblock").style.display = "block";
                
                var table1 = document.getElementById("table1");

                var edittaskid = document.getElementById("edittaskid");
                var edittasktittle = document.getElementById("edittasktittle");
                var edittaskdate = document.getElementById("edittaskdate");
                var edittaskstatus = document.getElementById("edittaskstatus");

                checkboxes = document.getElementsByName("check-tab1");

                for(var i = 0; i < checkboxes.length; i++){
                    if(checkboxes[i].checked)
                    {                    
                        document.getElementById("edittaskid").value = table1.rows[i+1].cells[1].innerHTML;
                        document.getElementById("edittasktitle").value = table1.rows[i+1].cells[2].innerHTML;
                        document.getElementById("edittaskdate").value = table1.rows[i+1].cells[3].innerHTML;
                        var checkstatus = table1.rows[i+1].cells[4].innerHTML;

                        if(checkstatus.indexOf('Completed') > -1){
                            document.getElementById("edittaskstatus").value = "Completed";
                        }else{
                            document.getElementById("edittaskstatus").value = "Due";
                        }
                    }
                }
            }           
            
        } 
    </script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#submit_edittask').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });

              if ($.trim($("#edittasktitle").val()) === "" || $.trim($("#edittaskdate").val()) === ""
                || $.trim($("#edittaskstatus").val()) === ""){
                    $("#edittaskdanger").css('display','block');
                    $("#edittask_danger_msg").html('All Fields required. Make sure you fill up all fields');
                    return false;
                }else{           
                            var edittaskid = jQuery('#edittaskid').val();           
                            jQuery.ajax({
                            url: "{{ url('edit-task') }}"+"/"+edittaskid,
                            method: 'post',
                            data: {
                                edittaskid: jQuery('#edittaskid').val(),
                                edittasktitle: jQuery('#edittasktitle').val(),
                                edittaskdate: jQuery('#edittaskdate').val(),
                                edittaskstatus: jQuery('#edittaskstatus').val()
                            },
                                success: function(result){
                                    $('#edittaskid').val("");
                                    $('#edittasktitle').val("");
                                    $('#edittaskdate').val("");
                                    $('#edittaskstatus').val("");
                                    $("#edittasksuccess").css('display','block');
                                    $("edittask_success_msg").html(result);
                                }
                            });
                        }                    
                    });
                });
    </script>
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