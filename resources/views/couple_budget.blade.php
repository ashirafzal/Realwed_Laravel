<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{csrf_token()}}" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RealWed | Couple Dashboard - Wedding Budget Planner</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="fontello/css/fontello.css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/offcanvas.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body class="body-bg">
<script>
    function opendeletebudget(){
        document.getElementById("deletesuccessmessage").style.display = "none"; 
        document.getElementById("deletediv").style.display = "block"; 
    }
    function closedeletebudget(){
        document.getElementById("deletesuccessmessage").style.display = "none";
        document.getElementById("deletediv").style.display = "none";
    }
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
                            <h3 class="dashboard-page-title">Budget planner</h3>
                            <p>Start your wedding budget with the Wedding budget planner estimator tool.</p>
                        </div>
                    </div>
                </div>
                <div id="budgetsuccess" class="alert alert-info alert-block" style="display:none;">
                </div>
                <div id="budgetdanger" class="alert alert-danger alert-block" style="display:none;">   
                </div>
                <div class="budget-board">
                    <div class="row">
                        <!-- budget-venue -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" id="allguest-tab" data-toggle="tab" href="#allguest" role="tab" aria-controls="allguest" aria-selected="true">Budget</a> </li>
                                        <li class="nav-item"> <a class="nav-link" id="confirmguest-tab" data-toggle="tab" href="#confirmguest" role="tab" aria-controls="confirmguest" aria-selected="false">Budget Details</a> </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="allguest" role="tabpanel" aria-labelledby="allguest-tab">
                                        <div class="card-body">
                                            <h3>Budget estimator</h3>
                                            <p>This is the budget estimator for all your wedding expenses. By the help of this buget estimator you can calculate all your expenses.</p>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <button onclick="editbudget()" style="height:100%; font-size:0.9rem;" class="btn btn-outline-violate btn-xs mr10">Edit Budget</button>
                                                    <button style="height:100%; font-size:0.9rem;" onclick="opendeletebudget()" class="btn btn-outline-pink btn-xs">Delete Budget</button>
                                                </div>
                                            </div>
                                            <br/>
                                            <div style="display:none;" id="deletediv">
                                                <!-- Delete success message -->
                                                <div id="deletesuccessmessage" class="alert alert-info alert-block" style="display:none;"></div>
                                                <!-- Delete success message end -->
                                                <p>Are you sure you want to delete budget ?</p>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <button style="height:100%;font-size:1rem;" onclick="closedeletebudget()" class="btn btn-block btn-outline-violate btn-xs mr10">No</button>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <button id="delete" style="height:100%;font-size:1rem;" class="btn btn-block btn-outline-pink btn-xs">Yes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="wedding-budget-event">Wedding Event</th>
                                                        <th class="wedding-budget-estimate">Estimate</th>
                                                        <th class="wedding-budget-actual">Actual</th>
                                                        <th class="wedding-budget-paid">Paid</th>
                                                        <th class="wedding-budget-pending">Pending</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($venue as $venue)
                                                    <tr>
                                                        <td> Venue </td>
                                                        @if($venue->estimate_total == '')
                                                            <td class="estimate-total"><span class="total-amount">0</span></td>
                                                        @else
                                                            <td class="estimate-total"><span class="total-amount">{{$venue->estimate_total}}</span></td>
                                                        @endif
                                                        @if($venue->actual_total == '')
                                                            <td class="actual-total"><span class="total-amount">0</span></td>
                                                        @else
                                                            <td class="actual-total"><span class="total-amount">{{$venue->actual_total}}</span></td>
                                                        @endif
                                                        @if($venue->paid_total == '')
                                                            <td class="paid-total"><span class="total-amount">0</span></td>
                                                        @else
                                                            <td class="paid-total"><span class="total-amount">{{$venue->paid_total}}</span></td>
                                                        @endif
                                                        @if($venue->pending_total == '')
                                                            <td class="pending-total"><span class="total-amount">0</span></td>
                                                        @else
                                                        <td class="pending-total"><span class="total-amount">{{$venue->pending_total}}</span></td>
                                                        @endif
                                                    </tr>
                                                    @endforeach
                                                    @foreach($ceremony as $ceremony)
                                                    <tr>
                                                        <td> Ceremony </td>
                                                        @if($ceremony->estimate_total == '')
                                                            <td class="estimate-total"><span class="total-amount">0</span></td>
                                                        @else
                                                            <td class="estimate-total"><span class="total-amount">{{$ceremony->estimate_total}}</span></td>
                                                        @endif
                                                        @if($ceremony->actual_total == '')
                                                            <td class="actual-total"><span class="total-amount">0</span></td>
                                                        @else
                                                            <td class="actual-total"><span class="total-amount">{{$ceremony->actual_total}}</span></td>
                                                        @endif
                                                        @if($ceremony->paid_total == '')
                                                            <td class="paid-total"><span class="total-amount">0</span></td>
                                                        @else
                                                            <td class="paid-total"><span class="total-amount">{{$ceremony->paid_total}}</span></td>
                                                        @endif
                                                        @if($ceremony->pending_total == '')
                                                            <td class="pending-total"><span class="total-amount">0</span></td>
                                                        @else
                                                            <td class="pending-total"><span class="total-amount">{{$ceremony->pending_total}}</span></td>
                                                        @endif
                                                    </tr>
                                                    @endforeach
                                                    @foreach($hairandmakeup as $hairandmakeup)
                                                    <tr>
                                                        <td> Hair & Makeup </td>
                                                        @if($hairandmakeup->estimate_total == '')
                                                            <td class="estimate-total"><span class="total-amount">0</span></td>
                                                        @else
                                                            <td class="estimate-total"><span class="total-amount">{{$hairandmakeup->estimate_total}}</span></td>
                                                        @endif
                                                        @if($hairandmakeup->actual_total == '')
                                                            <td class="actual-total"><span class="total-amount">0</span></td>
                                                        @else
                                                            <td class="actual-total"><span class="total-amount">{{$hairandmakeup->actual_total}}</span></td>
                                                        @endif
                                                        @if($hairandmakeup->paid_total == '')
                                                            <td class="paid-total"><span class="total-amount">0</span></td>
                                                        @else
                                                            <td class="paid-total"><span class="total-amount">{{$hairandmakeup->paid_total}}</span></td>
                                                        @endif
                                                        @if($hairandmakeup->pending_total == '')
                                                            <td class="pending-total"><span class="total-amount">0</span></td>
                                                        @else
                                                            <td class="pending-total"><span class="total-amount">{{$hairandmakeup->pending_total}}</span></td>
                                                        @endif
                                                    </tr>
                                                    @endforeach
                                                    @foreach($flowers as $flowers)
                                                    <tr>
                                                        <td> Flowers </td>
                                                        @if($flowers->estimate_total == '')
                                                            <td class="estimate-total"><span class="total-amount">0</span></td>
                                                        @else
                                                            <td class="estimate-total"><span class="total-amount">{{$flowers->estimate_total}}</span></td>
                                                        @endif
                                                        @if($flowers->actual_total == '')
                                                            <td class="actual-total"><span class="total-amount">0</span></td>
                                                        @else
                                                            <td class="estimate-total"><span class="total-amount">{{$flowers->actual_total}}</span></td>
                                                        @endif
                                                        @if($flowers->paid_total == '')
                                                            <td class="paid-total"><span class="total-amount">0</span></td>
                                                        @else
                                                            <td class="estimate-total"><span class="total-amount">{{$flowers->paid_total}}</span></td>
                                                        @endif
                                                        @if($flowers->pending_total == '')
                                                            <td class="pending-total"><span class="total-amount">0</span></td>
                                                        @else
                                                            <td class="estimate-total"><span class="total-amount">{{$flowers->pending_total}}</span></td>
                                                        @endif
                                                    </tr>
                                                    @endforeach
                                                    @foreach($cake as $cake)
                                                    <tr>
                                                        <td> Cake </td>
                                                        @if($cake->estimate_total == '')
                                                        <td class="estimate-total"><span class="total-amount">0</span></td>
                                                        @else
                                                        <td class="estimate-total"><span class="total-amount">{{$cake->estimate_total}}</span></td>
                                                        @endif
                                                        @if($cake->actual_total == '')
                                                        <td class="actual-total"><span class="total-amount">0</span></td>
                                                        @else
                                                        <td class="actual-total"><span class="total-amount">{{$cake->actual_total}}</span></td>
                                                        @endif
                                                        @if($cake->paid_total == '')
                                                        <td class="paid-total"><span class="total-amount">0</span></td>
                                                        @else
                                                        <td class="paid-total"><span class="total-amount">{{$cake->paid_total}}</span></td>
                                                        @endif
                                                        @if($cake->pending_total == '')
                                                        <td class="pending-total"><span class="total-amount">0</span></td>
                                                        @else
                                                        <td class="pending-total"><span class="total-amount">{{$cake->pending_total}}</span></td>
                                                        @endif
                                                    </tr>
                                                    @endforeach
                                                    @foreach($photography as $photography)
                                                    <tr>
                                                        <td> Photography </td>
                                                        @if($photography->estimate_total == '')
                                                        <td class="estimate-total"><span class="total-amount">0</span></td>
                                                        @else
                                                        <td class="estimate-total"><span class="total-amount">{{$photography->estimate_total}}</span></td>
                                                        @endif
                                                        @if($photography->actual_total == '')
                                                        <td class="actual-total"><span class="total-amount">0</span></td>
                                                        @else
                                                        <td class="actual-total"><span class="total-amount">{{$photography->actual_total}}</span></td>
                                                        @endif
                                                        @if($photography->paid_total == '')
                                                        <td class="paid-total"><span class="total-amount">0</span></td>
                                                        @else
                                                        <td class="paid-total"><span class="total-amount">{{$photography->paid_total}}</span></td>
                                                        @endif
                                                        @if($photography->pending_total == '')
                                                        <td class="pending-total"><span class="total-amount">0</span></td>
                                                        @else
                                                        <td class="pending-total"><span class="total-amount">{{$photography->pending_total}}</span></td>
                                                        @endif
                                                    </tr>
                                                    @endforeach
                                                    @foreach($printedmaterials as $printedmaterials)
                                                    <tr>
                                                        <td> printed Materials </td>
                                                        @if($printedmaterials->estimate_total == '')
                                                        <td class="estimate-total"><span class="total-amount">0</span></td>
                                                        @else
                                                        <td class="estimate-total"><span class="total-amount">{{$printedmaterials->estimate_total}}</span></td>
                                                        @endif
                                                        @if($printedmaterials->actual_total == '')
                                                        <td class="actual-total"><span class="total-amount">0</span></td>
                                                        @else
                                                        <td class="actual-total"><span class="total-amount">{{$printedmaterials->actual_total}}</span></td>
                                                        @endif
                                                        @if($printedmaterials->paid_total == '')
                                                        <td class="paid-total"><span class="total-amount">0</span></td>
                                                        @else
                                                        <td class="paid-total"><span class="total-amount">{{$printedmaterials->paid_total}}</span></td>
                                                        @endif
                                                        @if($printedmaterials->pending_total == '')
                                                        <td class="pending-total"><span class="total-amount">0</span></td>
                                                        @else
                                                        <td class="pending-total"><span class="total-amount">{{$printedmaterials->pending_total}}</span></td>
                                                        @endif
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="confirmguest" role="tabpanel" aria-labelledby="confirmguest-tab">
                                        <div class="card-body">
                                            <h3>Budget Details</h3>
                                            <p>This is the budget estimator for all your wedding expenses. By the help of this buget estimator you can calculate all your expenses.</p>
                                        </div>
                                        <div class="">
                                            <div class="budget-category-head d-flex align-items-center">
                                                <h3 class="budget-category-title mr-auto">Venue</h3>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="wedding-budget-event">Wedding Event</th>
                                                            <th class="wedding-budget-estimate">Estimate</th>
                                                            <th class="wedding-budget-actual">Actual</th>
                                                            <th class="wedding-budget-paid">Paid</th>
                                                            <th class="wedding-budget-pending">Pending</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="TextBoxContainer1">
                                                        <tr>
                                                            <td>
                                                                <input id="locationfees" name="locationfees" type="text" placeholder="Location Fees" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input id="locationfees_estimate" onchange="myFunction(this.value)" name="locationfees_estimate" type="text" value="0" placeholder="0" class="form-control form-control-sm venue-cost">
                                                            </td>
                                                            <td>
                                                                <input id="locationfees_actual" name="locationfees_actual" onchange="myFunction(this.value)" type="text" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input id="locationfees_paid" name="locationfees_paid" onchange="myFunction(this.value)" type="text" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input id="locationfees_pending" name="locationfees_pending" onchange="myFunction(this.value)" type="text" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input id="carexpense" name="carexpense" type="text" value="" placeholder="Car Expense" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input id="carexpense_estimate" onchange="myFunction(this.value)" name="carexpense_estimate" type="text" value="0" placeholder="0" class="form-control form-control-sm venue-cost">
                                                            </td>
                                                            <td>
                                                                <input id="carexpense_actual" name="carexpense_actual" onchange="myFunction(this.value)" type="text" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input id="carexpense_paid" name="carexpense_paid" onchange="myFunction(this.value)" type="text" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input id="carexpense_pending" name="carexpense_pending" onchange="myFunction(this.value)" type="text" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td> Total Cost of Venue</td>
                                                            <td class="estimate-total">Estimate Total <span id="estimate-total" class="total-amount">0</span></td>
                                                            <td class="actual-total"> Actual Total <span id="actual-total" class="total-amount">0</span></td>
                                                            <td class="paid-total"> Paid Total <span id="paid-total" class="total-amount">0</span></td>
                                                            <td class="pending-total"> Pending Total <span id="pending-total" class="total-amount">0</span></td>
                                                            <td></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- budget-ceremony -->
                                        <div class="budget-category-block">
                                            <div class="budget-category-head d-flex align-items-center">
                                                <h3 class="budget-category-title mr-auto">Ceremony</h3>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="wedding-budget-event">Wedding Event</th>
                                                            <th class="wedding-budget-estimate">Estimate</th>
                                                            <th class="wedding-budget-actual">Actual</th>
                                                            <th class="wedding-budget-paid">Paid</th>
                                                            <th class="wedding-budget-pending">Pending</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="TextBoxContainer2">
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="decorations" name="decorations" onchange="myFunction2(this.value)" class="form-control form-control-sm" placeholder="Decorations/accessories">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="decorations_estimate" name="decorations_estimate" onchange="myFunction2(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="decorations_actual" name="decorations_actual" onchange="myFunction2(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="decorations_paid" name="decorations_paid" onchange="myFunction2(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="decorations_pending" name="decorations_pending" onchange="myFunction2(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="locationfee" name="locationfee" class="form-control form-control-sm" placeholder="Location fee">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="locationfee_estimate" name="locationfee_estimate" onchange="myFunction2(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="locationfee_actual" name="locationfee_actual" onchange="myFunction2(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="locationfee_paid" name="locationfee_paid" onchange="myFunction2(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="locationfee_pending" name="locationfee_pending" onchange="myFunction2(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td> Total Cost of Ceremony</td>
                                                            <td class="estimate-total"> Estimate Total <span id="ceremony-estimate-total" class="total-amount">0</span></td>
                                                            <td class="actual-total"> Actual Total <span id="ceremony-actual-total" class="total-amount">0</span></td>
                                                            <td class="paid-total"> Paid Total <span id="ceremony-paid-total" class="total-amount">0</span></td>
                                                            <td class="pending-total"> Pending Total <span id="ceremony-pending-total" class="total-amount">0</span></td>
                                                            <td></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.budget-ceremony -->
                                        <!-- budget-hair-makeup -->
                                        <div class="budget-category-block">
                                            <div class="budget-category-head d-flex align-items-center">
                                                <h3 class="budget-category-title mr-auto">Hair & Makeup</h3>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="wedding-budget-event">Wedding Event</th>
                                                            <th class="wedding-budget-estimate">Estimate</th>
                                                            <th class="wedding-budget-actual">Actual</th>
                                                            <th class="wedding-budget-paid">Paid</th>
                                                            <th class="wedding-budget-pending">Pending</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="TextBoxContainer3">
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="hairandmakeup" name="hairandmakeup" class="form-control form-control-sm" placeholder="Hair makeup">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="hairandmakeup_estimate" name="hairandmakeup_estimate" onchange="myFunction3(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="hairandmakeup_actual" name="hairandmakeup_actual" onchange="myFunction3(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="hairandmakeup_paid" name="hairandmakeup_paid" onchange="myFunction3(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="hairandmakeup_pending" name="hairandmakeup_pending" onchange="myFunction3(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                            <tr>
                                                                <td> Total Cost of Hair/Makeup</td>
                                                                <td class="estimate-total"> Estimate Total <span id="hairandmakeup-estimate-total" class="total-amount">0</span></td>
                                                                <td class="actual-total"> Actual Total <span id="hairandmakeup-actual-total" class="total-amount">0</span></td>
                                                                <td class="paid-total"> Paid Total <span id="hairandmakeup-paid-total" class="total-amount">0</span></td>
                                                                <td class="pending-total"> Pending Total <span id="hairandmakeup-pending-total" class="total-amount">0</span></td>
                                                                <td></td>
                                                            </tr>
                                                        </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /. budget-hair-makeup -->
                                        <!-- budget-flowers -->
                                        <div class="budget-category-block">
                                            <div class="budget-category-head d-flex align-items-center">
                                                <h3 class="budget-category-title mr-auto">Flowers</h3>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="wedding-budget-event">Wedding Event</th>
                                                            <th class="wedding-budget-estimate">Estimate</th>
                                                            <th class="wedding-budget-actual">Actual</th>
                                                            <th class="wedding-budget-paid">Paid</th>
                                                            <th class="wedding-budget-pending">Pending</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="TextBoxContainer4">
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="bouquets" name="bouquets" class="form-control form-control-sm" placeholder="Bouquets">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="bouquets_estimate" name="bouquets_estimate" onchange="myFunction4(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="bouquets_actual" name="bouquets_actual" onchange="myFunction4(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="bouquets_paid" name="bouquets_paid" onchange="myFunction4(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="bouquets_pending" name="bouquets_pending" onchange="myFunction4(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="decorations2" name="decorations2" class="form-control form-control-sm" placeholder="Decorations/centerpieces">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="decorations2_estimate" name="decorations2_estimate" onchange="myFunction4(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="decorations2_actual" name="decorations2_actual" onchange="myFunction4(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="decorations2_paid" name="decorations2_paid" onchange="myFunction4(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="decorations2_pending" name="decorations2_pending" onchange="myFunction4(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                            <tr>
                                                                <td> Total of Category Venue</td>
                                                                <td class="estimate-total"> Estimate Total <span id="flowers-estimate-total" class="total-amount">0</span></td>
                                                                <td class="actual-total"> Actual Total <span id="flowers-actual-total" class="total-amount">0</span></td>
                                                                <td class="paid-total"> Paid Total <span id="flowers-paid-total" class="total-amount">0</span></td>
                                                                <td class="pending-total"> Pending Total <span id="flowers-pending-total" class="total-amount">0</span></td>
                                                                <td></td>
                                                            </tr>
                                                        </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /. budget-flowers -->
                                        <!-- budget-cake -->
                                        <div class="budget-category-block">
                                            <div class="budget-category-head d-flex align-items-center">
                                                <h3 class="budget-category-title mr-auto">Cake</h3>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="wedding-budget-event">Wedding Event</th>
                                                            <th class="wedding-budget-estimate">Estimate</th>
                                                            <th class="wedding-budget-actual">Actual</th>
                                                            <th class="wedding-budget-paid">Paid</th>
                                                            <th class="wedding-budget-pending">Pending</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="TextBoxContainer5">
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="cakecuttingfee" name="cakecuttingfee" class="form-control form-control-sm" placeholder="Cake + cutting fee">
                                                            </td>
                                                            <td>
                                                                <input type="text" onchange="myFunction5(this.value)" id="cakecuttingfee_estimate" name="cakecuttingfee_estimate" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" onchange="myFunction5(this.value)" id="cakecuttingfee_actual" name="cakecuttingfee_actual" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" onchange="myFunction5(this.value)" id="cakecuttingfee_paid" name="cakecuttingfee_paid" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" onchange="myFunction5(this.value)" id="cakecuttingfee_pending" name="cakecuttingfee_pending" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                      <tfoot>
                                                            <tr>
                                                                <td> Total Cost of Flowers</td>
                                                                <td class="estimate-total"> Estimate Total <span id="cakecuttingfee-estimate-total" class="total-amount">0</span></td>
                                                                <td class="actual-total"> Actual Total <span id="cakecuttingfee-actual-total" class="total-amount">0</span></td>
                                                                <td class="paid-total"> Paid Total <span id="cakecuttingfee-paid-total" class="total-amount">0</span></td>
                                                                <td class="pending-total"> Pending Total <span id="cakecuttingfee-pending-total" class="total-amount">0</span></td>
                                                                <td></td>
                                                            </tr>
                                                        </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /. budget-cake -->
                                        <!-- budget-photography -->
                                        <div class="budget-category-block">
                                            <div class="budget-category-head d-flex align-items-center">
                                                <h3 class="budget-category-title mr-auto">Photography</h3>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="wedding-budget-event">Wedding Event</th>
                                                            <th class="wedding-budget-estimate">Estimate</th>
                                                            <th class="wedding-budget-actual">Actual</th>
                                                            <th class="wedding-budget-paid">Paid</th>
                                                            <th class="wedding-budget-pending">Pending</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="TextBoxContainer6">
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="photographer" name="photographer" class="form-control form-control-sm" placeholder="Photographer">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="photographer_estimate" name="photographer_estimate" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="photographer_actual" name="photographer_actual" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="photographer_paid" name="photographer_paid" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="photographer_pending" name="photographer_pending" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="videographer" name="videographer" class="form-control form-control-sm" placeholder="Videographer">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="videographer_estimate" name="videographer_estimate" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="videographer_actual" name="videographer_actual" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="videographer_paid" name="videographer_paid" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="videographer_pending" name="videographer_pending" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="extraprints" name="extraprints" class="form-control form-control-sm" placeholder="Extra Prints">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="extraprints_estimate" value="0" name="extraprints_estimate" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="extraprints_actual" value="0" name="extraprints_actual" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="extraprints_paid" value="0" name="extraprints_paid" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="extraprints_pending" value="0" name="extraprints_pending" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                      <tfoot>
                                                            <tr>
                                                                <td> Total Cost of Photography</td>
                                                                <td class="estimate-total"> Estimate Total <span id="photographer-estimate-total" class="total-amount">0</span></td>
                                                                <td class="actual-total"> Actual Total <span id="photographer-actual-total" class="total-amount">0</span></td>
                                                                <td class="paid-total"> Paid Total <span id="photographer-paid-total" class="total-amount">0</span></td>
                                                                <td class="pending-total"> Pending Total <span id="photographer-pending-total" class="total-amount">0</span></td>
                                                                <td></td>
                                                            </tr>
                                                        </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /. budget-cake -->
                                        <!-- budget-printed -->
                                        <div class="budget-category-block">
                                            <div class="budget-category-head d-flex align-items-center">
                                                <h3 class="budget-category-title mr-auto">Printed Materials</h3>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="wedding-budget-event">Wedding Event</th>
                                                            <th class="wedding-budget-estimate">Estimate</th>
                                                            <th class="wedding-budget-actual">Actual</th>
                                                            <th class="wedding-budget-paid">Paid</th>
                                                            <th class="wedding-budget-pending">Pending</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="TextBoxContainer7">
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="savethedates" name="savethedates" class="form-control form-control-sm" placeholder="save the dates">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="savethedates_estimate" value="0" name="savethedates_estimate" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="savethedates_actual" value="0" name="savethedates_actual" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="savethedates_paid" value="0" name="savethedates_paid" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="savethedates_pending" value="0" name="savethedates_pending" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="invitations" name="invitations" value="" class="form-control form-control-sm" placeholder="Invitations">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="invitations_estimate" value="0" name="invitations_estimate" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="invitations_actual" value="0" name="invitations_actual" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="invitations_paid" value="0" name="invitations_paid" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="invitations_pending" value="0" name="invitations_pending" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="weddingprograms" name="weddingprograms" class="form-control form-control-sm" placeholder="Wedding programs">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="weddingprograms_estimate" name="weddingprograms_estimate" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="weddingprograms_actual" name="weddingprograms_actual" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="weddingprograms_paid" name="weddingprograms_paid" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="weddingprograms_pending" name="weddingprograms_pending" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                     <tfoot>
                                                            <tr>
                                                                <td> Total Cost of Printed Materials</td>
                                                                <td class="estimate-total"> Estimate Total <span id="printedmaterials-estimate-total" class="total-amount">0</span></td>
                                                                <td class="actual-total"> Actual Total <span id="printedmaterials-actual-total" class="total-amount">0</span></td>
                                                                <td class="paid-total"> Paid Total <span id="printedmaterials-paid-total" class="total-amount">0</span></td>
                                                                <td class="pending-total"> Pending Total <span id="printedmaterials-pending-total" class="total-amount">0</span></td>
                                                                <td></td>
                                                            </tr>
                                                        </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <button class="btn btn-default" id="addexpense" style="margin:1rem;">Add Budget Expensive</button>
                                            </div>
                                        </div>
                                        <!-- /. budget-printed -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /. budget-venue -->

                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/menumaker.min.js"></script>
        <script src="js/custom-script.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/offcanvas.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/fastclick.js"></script>
        <script src="js/jquery.slidereveal.js"></script>
        <script src="js/jquery.slimscroll.js"></script>
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script>
        jQuery(document).ready(function(){
            /* Delete action */
            jQuery('#delete').click(function(e){
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });             

              jQuery.ajax({
                url: "{{ url('delete-budget') }}",
                method: 'post',
                data:   {

                },
                cache:  false,                
                processData: false,
                contentType: false, 
                    success: function(result){
                        $("#deletesuccessmessage").css('display','block');
                        $("#deletesuccessmessage").html(result);
                    }
                });                                                            
            });
        });
        </script>
        <script type="text/javascript">
            jQuery(document).ready(function(){
                jQuery('#addexpense').click(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $("#budgetsuccess").css('display','none');
                $("#budgetdanger").css('display','none');

                if ($.trim($("#locationfees").val()) === "" || $.trim($("#carexpense").val()) === ""
                    || $.trim($("#decorations").val()) === "" || $.trim($("#locationfee").val()) === ""
                    || $.trim($("#hairandmakeup").val()) === "" || $.trim($("#bouquets").val()) === ""
                    || $.trim($("#decorations2").val()) === "" || $.trim($("#cakecuttingfee").val()) === ""
                    || $.trim($("#photographer").val()) === "" || $.trim($("#videographer").val()) === ""
                    || $.trim($("#extraprints").val()) === "" || $.trim($("#savethedates").val()) === ""
                    || $.trim($("#invitations").val()) === "" || $.trim($("#weddingprograms").val()) === "")
                    {
                        $("#budgetdanger").css('display','block');
                        $("#budgetdanger").html('All Fields required. Make sure you fill up all fields');
                        return false;
                    }else{         
                                jQuery.ajax({
                                url: "{{ url('save-budget') }}",
                                method: 'post',
                                data: {
                                    locationfees: jQuery('#locationfees').val(),
                                    locationfees_estimate: jQuery('#locationfees_estimate').val(),
                                    locationfees_actual: jQuery('#locationfees_actual').val(),
                                    locationfees_paid: jQuery('#locationfees_paid').val(),
                                    locationfees_pending: jQuery('#locationfees_pending').val(),
                                    carexpense: jQuery('#carexpense').val(),
                                    carexpense_estimate: jQuery('#carexpense_estimate').val(),
                                    carexpense_actual: jQuery('#carexpense_actual').val(),
                                    carexpense_paid: jQuery('#carexpense_paid').val(),
                                    carexpense_pending: jQuery('#carexpense_pending').val(),
                                    decorations: jQuery('#decorations').val(),
                                    decorations_estimate: jQuery('#decorations_estimate').val(),
                                    decorations_actual: jQuery('#decorations_actual').val(),
                                    decorations_paid: jQuery('#decorations_paid').val(),
                                    decorations_pending: jQuery('#decorations_pending').val(),
                                    locationfee: jQuery('#locationfee').val(),
                                    locationfee_estimate: jQuery('#locationfee_estimate').val(),
                                    locationfee_actual: jQuery('#locationfee_actual').val(),
                                    locationfee_paid: jQuery('#locationfee_paid').val(),
                                    locationfee_pending: jQuery('#locationfee_pending').val(),
                                    hairandmakeup: jQuery('#hairandmakeup').val(),
                                    hairandmakeup_estimate: jQuery('#hairandmakeup_estimate').val(),
                                    hairandmakeup_actual: jQuery('#hairandmakeup_actual').val(),
                                    hairandmakeup_paid: jQuery('#hairandmakeup_paid').val(),
                                    hairandmakeup_pending: jQuery('#hairandmakeup_pending').val(),
                                    bouquets: jQuery('#bouquets').val(),
                                    bouquets_estimate: jQuery('#bouquets_estimate').val(),
                                    bouquets_actual: jQuery('#bouquets_actual').val(),
                                    bouquets_paid: jQuery('#bouquets_paid').val(),
                                    bouquets_pending: jQuery('#bouquets_pending').val(),
                                    decorations2: jQuery('#decorations2').val(),
                                    decorations2_estimate: jQuery('#decorations2_estimate').val(),
                                    decorations2_actual: jQuery('#decorations2_actual').val(),
                                    decorations2_paid: jQuery('#decorations2_paid').val(),
                                    decorations2_pending: jQuery('#decorations2_pending').val(),
                                    cakecuttingfee: jQuery('#cakecuttingfee').val(),
                                    cakecuttingfee_estimate: jQuery('#cakecuttingfee_estimate').val(),
                                    cakecuttingfee_actual: jQuery('#cakecuttingfee_actual').val(),
                                    cakecuttingfee_paid: jQuery('#cakecuttingfee_paid').val(),
                                    cakecuttingfee_pending: jQuery('#cakecuttingfee_pending').val(),
                                    cakecuttingfee_estimate_total: jQuery('#cakecuttingfee-estimate-total').text(),
                                    cakecuttingfee_actual_total: jQuery('#cakecuttingfee-actual-total').text(),
                                    cakecuttingfee_paid_total: jQuery('#cakecuttingfee-paid-total').text(),
                                    cakecuttingfee_pending_total: jQuery('#cakecuttingfee-pending-total').text(),
                                    photographer: jQuery('#photographer').val(),
                                    photographer_estimate: jQuery('#photographer_estimate').val(),
                                    photographer_actual: jQuery('#photographer_actual').val(),
                                    photographer_paid: jQuery('#photographer_paid').val(),
                                    photographer_pending: jQuery('#photographer_pending').val(),
                                    videographer: jQuery('#videographer').val(),
                                    videographer_estimate: jQuery('#videographer_estimate').val(),
                                    videographer_actual: jQuery('#videographer_actual').val(),
                                    videographer_paid: jQuery('#videographer_paid').val(),
                                    videographer_pending: jQuery('#videographer_pending').val(),
                                    extraprints: jQuery('#extraprints').val(),
                                    extraprints_estimate: jQuery('#extraprints_estimate').val(),
                                    extraprints_actual: jQuery('#extraprints_actual').val(),
                                    extraprints_paid: jQuery('#extraprints_paid').val(),
                                    extraprints_pending: jQuery('#extraprints_pending').val(),
                                    savethedates: jQuery('#savethedates').val(),
                                    savethedates_estimate: jQuery('#savethedates_estimate').val(),
                                    savethedates_actual: jQuery('#savethedates_actual').val(),
                                    savethedates_paid: jQuery('#savethedates_paid').val(),
                                    savethedates_pending: jQuery('#savethedates_pending').val(),
                                    invitations: jQuery('#invitations').val(),
                                    invitations_estimate: jQuery('#invitations_estimate').val(),
                                    invitations_actual: jQuery('#invitations_actual').val(),
                                    invitations_paid: jQuery('#invitations_paid').val(),
                                    invitations_pending: jQuery('#invitations_pending').val(),
                                    weddingprograms: jQuery('#weddingprograms').val(),
                                    weddingprograms_estimate: jQuery('#weddingprograms_estimate').val(),
                                    weddingprograms_actual: jQuery('#weddingprograms_actual').val(),
                                    weddingprograms_paid: jQuery('#weddingprograms_paid').val(),
                                    weddingprograms_pending: jQuery('#weddingprograms_pending').val()
                                },
                                    success: function(result){
                                        $("#budgetsuccess").css('display','block');
                                        $("#budgetsuccess").html(result);
                                    },
                            });
                        }                    
                    });
                });
        </script>
        <script>
            function myFunction(val) 
            {
                var locationfees_estimate = document.getElementById("locationfees_estimate").value;
                var carexpense_estimate = document.getElementById("carexpense_estimate").value;

                var estimatetotal = +locationfees_estimate + +carexpense_estimate;
                document.getElementById("estimate-total").innerHTML = estimatetotal;

                var locationfees_actual = document.getElementById("locationfees_actual").value;
                var carexpense_actual = document.getElementById("carexpense_actual").value;

                var actualtotal = +locationfees_actual + +carexpense_actual;
                document.getElementById("actual-total").innerHTML = actualtotal;

                var locationfees_paid = document.getElementById("locationfees_paid").value;
                var carexpense_paid = document.getElementById("carexpense_paid").value;

                var paidtotal = +locationfees_paid + +carexpense_paid;
                document.getElementById("paid-total").innerHTML = paidtotal; 

                var locationfees_pending = document.getElementById("locationfees_pending").value;
                var carexpense_pending = document.getElementById("carexpense_pending").value;

                var pendingtotal = +locationfees_pending + +carexpense_pending;
                document.getElementById("pending-total").innerHTML = pendingtotal;
            }

            function myFunction2(val) 
            {
                var decorations_estimate = document.getElementById("decorations_estimate").value;
                var locationfee_estimate = document.getElementById("locationfee_estimate").value;

                var estimatetotal = +decorations_estimate + +locationfee_estimate;
                document.getElementById("ceremony-estimate-total").innerHTML = estimatetotal;

                var decorations_actual = document.getElementById("decorations_actual").value;
                var locationfee_actual = document.getElementById("locationfee_actual").value;

                var actualtotal = +decorations_actual + +locationfee_actual;
                document.getElementById("ceremony-actual-total").innerHTML = actualtotal;

                var decorations_paid = document.getElementById("decorations_paid").value;
                var locationfee_paid = document.getElementById("locationfee_paid").value;

                var paidtotal = +decorations_paid + +locationfee_paid;
                document.getElementById("ceremony-paid-total").innerHTML = paidtotal; 

                var decorations_pending = document.getElementById("decorations_pending").value;
                var locationfee_pending = document.getElementById("locationfee_pending").value;

                var pendingtotal = +decorations_pending + +locationfee_pending;
                document.getElementById("ceremony-pending-total").innerHTML = pendingtotal;
            }

            function myFunction3(val) 
            {
                var hairandmakeup_estimate = document.getElementById("hairandmakeup_estimate").value;                
                document.getElementById("hairandmakeup-estimate-total").innerHTML = hairandmakeup_estimate;

                var hairandmakeup_actual = document.getElementById("hairandmakeup_actual").value;                
                document.getElementById("hairandmakeup-actual-total").innerHTML = hairandmakeup_actual;

                var hairandmakeup_paid = document.getElementById("hairandmakeup_paid").value;                
                document.getElementById("hairandmakeup-paid-total").innerHTML = hairandmakeup_paid; 

                var hairandmakeup_pending = document.getElementById("hairandmakeup_pending").value;                
                document.getElementById("hairandmakeup-pending-total").innerHTML = hairandmakeup_pending;
            }

            function myFunction4(val) 
            {
                var bouquets_estimate = document.getElementById("bouquets_estimate").value;
                var decorations2_estimate = document.getElementById("decorations2_estimate").value;

                var estimatetotal = +bouquets_estimate + +decorations2_estimate;
                document.getElementById("flowers-estimate-total").innerHTML = estimatetotal;

                var bouquets_actual = document.getElementById("bouquets_actual").value;
                var decorations2_actual = document.getElementById("decorations2_actual").value;

                var actualtotal = +bouquets_actual + +decorations2_actual;
                document.getElementById("flowers-actual-total").innerHTML = actualtotal;

                var bouquets_paid = document.getElementById("bouquets_paid").value;
                var decorations2_paid = document.getElementById("decorations2_paid").value;

                var paidtotal = +bouquets_paid + +decorations2_paid;
                document.getElementById("flowers-paid-total").innerHTML = paidtotal; 

                var bouquets_pending = document.getElementById("bouquets_pending").value;
                var decorations2_pending = document.getElementById("decorations2_pending").value;

                var pendingtotal = +bouquets_pending + +decorations2_pending;
                document.getElementById("flowers-pending-total").innerHTML = pendingtotal;
            }

            function myFunction5(val) 
            {
                var cakecuttingfee_estimate = document.getElementById("cakecuttingfee_estimate").value;                
                document.getElementById("cakecuttingfee-estimate-total").innerHTML = cakecuttingfee_estimate;

                var cakecuttingfee_actual = document.getElementById("cakecuttingfee_actual").value;                
                document.getElementById("cakecuttingfee-actual-total").innerHTML = cakecuttingfee_actual;

                var cakecuttingfee_paid = document.getElementById("cakecuttingfee_paid").value;                
                document.getElementById("cakecuttingfee-paid-total").innerHTML = cakecuttingfee_paid; 

                var cakecuttingfee_pending = document.getElementById("cakecuttingfee_pending").value;                
                document.getElementById("cakecuttingfee-pending-total").innerHTML = cakecuttingfee_pending;
            }

            function myFunction6(val) 
            {
                var photographer_estimate = document.getElementById("photographer_estimate").value;
                var videographer_estimate = document.getElementById("videographer_estimate").value;
                var extraprints_estimate = document.getElementById("extraprints_estimate").value;

                var estimatetotal = +photographer_estimate + +videographer_estimate + +extraprints_estimate;
                document.getElementById("photographer-estimate-total").innerHTML = estimatetotal;

                var photographer_actual = document.getElementById("photographer_actual").value;
                var videographer_actual = document.getElementById("videographer_actual").value;
                var extraprints_actual = document.getElementById("extraprints_actual").value;

                var actualtotal = +photographer_actual + +videographer_actual + +extraprints_actual;
                document.getElementById("photographer-actual-total").innerHTML = actualtotal;

                var photographer_paid = document.getElementById("photographer_paid").value;
                var videographer_paid = document.getElementById("videographer_paid").value;
                var extraprints_paid = document.getElementById("extraprints_paid").value;

                var paidtotal = +photographer_paid + +videographer_paid + +extraprints_paid;
                document.getElementById("photographer-paid-total").innerHTML = paidtotal; 

                var photographer_pending = document.getElementById("photographer_pending").value;
                var videographer_pending = document.getElementById("videographer_pending").value;
                var extraprints_pending = document.getElementById("extraprints_pending").value;

                var pendingtotal = +photographer_pending + +videographer_pending + +extraprints_pending;
                document.getElementById("photographer-pending-total").innerHTML = pendingtotal;
            }

            function myFunction7(val) 
            {
                var savethedates_estimate = document.getElementById("savethedates_estimate").value;
                var invitations_estimate = document.getElementById("invitations_estimate").value;
                var weddingprograms_estimate = document.getElementById("weddingprograms_estimate").value;

                var estimatetotal = +savethedates_estimate + +invitations_estimate + +weddingprograms_estimate;
                document.getElementById("printedmaterials-estimate-total").innerHTML = estimatetotal;

                var savethedates_actual = document.getElementById("savethedates_actual").value;
                var invitations_actual = document.getElementById("invitations_actual").value;
                var weddingprograms_actual = document.getElementById("weddingprograms_actual").value;

                var actualtotal = +savethedates_actual + +invitations_actual + +weddingprograms_actual;
                document.getElementById("printedmaterials-actual-total").innerHTML = actualtotal;

                var savethedates_paid = document.getElementById("savethedates_paid").value;
                var invitations_paid = document.getElementById("invitations_paid").value;
                var weddingprograms_paid = document.getElementById("weddingprograms_paid").value;

                var paidtotal = +savethedates_paid + +invitations_paid + +weddingprograms_paid;
                document.getElementById("printedmaterials-paid-total").innerHTML = paidtotal; 

                var savethedates_pending = document.getElementById("savethedates_pending").value;
                var invitations_pending = document.getElementById("invitations_pending").value;
                var weddingprograms_pending = document.getElementById("weddingprograms_pending").value;

                var pendingtotal = +savethedates_pending + +invitations_pending + +weddingprograms_pending;
                document.getElementById("printedmaterials-pending-total").innerHTML = pendingtotal;
            }
        </script>
        <script type="text/javascript">
        $(function() {
            $("#venue-btn").bind("click", function() {
                var div = $("<tr />");
                div.html(GetDynamicTextBox(""));
                $("#TextBoxContainer1").append(div);
            });
            $("#ceremony-btn").bind("click", function() {
                var div = $("<tr />");
                div.html(GetDynamicTextBox(""));
                $("#TextBoxContainer2").append(div);
            });
            $("#hair-btn").bind("click", function() {
                var div = $("<tr />");
                div.html(GetDynamicTextBox(""));
                $("#TextBoxContainer3").append(div);
            });
            $("#flower-btn").bind("click", function() {
                var div = $("<tr />");
                div.html(GetDynamicTextBox(""));
                $("#TextBoxContainer4").append(div);
            });
            $("#cake-btn").bind("click", function() {
                var div = $("<tr />");
                div.html(GetDynamicTextBox(""));
                $("#TextBoxContainer5").append(div);
            });
            $("#photography-btn").bind("click", function() {
                var div = $("<tr />");
                div.html(GetDynamicTextBox(""));
                $("#TextBoxContainer6").append(div);
            });
            $("#print-btn").bind("click", function() {
                var div = $("<tr />");
                div.html(GetDynamicTextBox(""));
                $("#TextBoxContainer7").append(div);
            });
            $("body").on("click", ".remove", function() {

                $(this).closest("tr").remove();

            });
        });

        function GetDynamicTextBox(value) {
            return '<td><input name ="DynamicTextBox" type="text" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="DynamicTextBox" type="text" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="DynamicTextBox" type="text" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="DynamicTextBox" type="text" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="DynamicTextBox" type="text" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><a href="javascript:void(0)" class="btn btn-outline-pink btn-xs remove">delete</a></td>'
        }
        </script>
</body>
</html>