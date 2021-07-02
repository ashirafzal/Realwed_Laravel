<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{csrf_token()}}" />
    <meta name="description" content="wedding vendor directory HTML template">
    <title>RealWed - Couple Dashboard</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('fontello/css/fontello.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/summernote-bs4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magicsuggest.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/offcanvas.css') }}">
</head>

<body class="body-bg">
    <!--- /************************ */ Couple Budget Scripts /************************ */ --->
    <script>
        function opendeletebudget() {
            document.getElementById("deletesuccessmessage").style.display = "none";
            document.getElementById("deletediv").style.display = "block";
        }

        function closedeletebudget() {
            document.getElementById("deletesuccessmessage").style.display = "none";
            document.getElementById("deletediv").style.display = "none";
        }
    </script>
    <!--- /************************ */ Couple Budget Scripts Ends /************************ */ --->
    <!--- /************************ */ Couple Table Planner Scripts /************************ */ --->
    <!--- Script One --->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script>
    <!--- Script One Ends --->
    <!--- Script Two --->
    <script>
        jQuery(document).ready(function() {
            /* 4 Seat Edit */
            jQuery('#4seatedit').submit(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $(".alert-danger").css('display', 'none');
                $("#4seatalertinfo").css('display', 'none');

                if ($.trim($("#4seattablename").val()) === "") {
                    $(".alert-danger").css('display', 'block');
                    $(".alert-danger").html('Text feilds cannot be blank');
                } else {
                    var formData = new FormData($('#4seatedit')[0]);

                    jQuery.ajax({
                        url: "{{ url('four-seat-edit') }}",
                        method: 'post',
                        data: formData,
                        cache: false,

                        processData: false,
                        contentType: false,
                        success: function(result) {
                            $("#4seatalertinfo").css('display', 'block');
                            $("#4seatalertinfo").html('Table seating edited successfully');
                        }
                    });
                }
            });
        });
    </script>
    <!--- Script Two Ends --->
    <!--- Script Three --->
    <script>
        jQuery(document).ready(function() {
            /* 8 Seat Edit */
            jQuery('#8seatedit').submit(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $("#8seatalertdanger").css('display', 'none');
                $("#8seatalertinfo").css('display', 'none');

                if ($.trim($("#8seattablename").val()) === "") {
                    $("#8seatalertdanger").css('display', 'block');
                    $("#8seatalertdanger").html('Text feilds cannot be blank');
                } else {
                    var formData = new FormData($('#8seatedit')[0]);

                    jQuery.ajax({
                        url: "{{ url('eight-seat-edit') }}",
                        method: 'post',
                        data: formData,
                        cache: false,

                        processData: false,
                        contentType: false,
                        success: function(result) {
                            $("#8seatalertinfo").css('display', 'block');
                            $("#8seatalertinfo").html('Table seating edited successfully');
                        }
                    });
                }
            });
        });
    </script>
    <!--- Script Three Ends --->
    <!--- Script Four --->
    <script>
        jQuery(document).ready(function() {
            /* 12 Seat Edit */
            jQuery('#12seatedit').submit(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $("#12seatalertdanger").css('display', 'none');
                $("#12seatalertinfo").css('display', 'none');

                if ($.trim($("#12seattablename").val()) === "") {
                    $("#12seatalertdanger").css('display', 'block');
                    $("#12seatalertdanger").html('Text feilds cannot be blank');
                } else {
                    var formData = new FormData($('#12seatedit')[0]);

                    jQuery.ajax({
                        url: "{{ url('twelve-seat-edit') }}",
                        method: 'post',
                        data: formData,
                        cache: false,

                        processData: false,
                        contentType: false,
                        success: function(result) {
                            $("#12seatalertinfo").css('display', 'block');
                            $("#12seatalertinfo").html('Table seating edited successfully');
                        }
                    });
                }
            });
        });
    </script>
    <!--- Script Four Ends --->
    <!--- Script Five --->
    <script>
        jQuery(document).ready(function() {
            /* Single Guest */
            jQuery('#createtable').submit(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $(".alert-danger").css('display', 'none');
                $(".alert-success").css('display', 'none');

                if ($.trim($("#tablename").val()) === "") {
                    $(".alert-danger").css('display', 'block');
                    $(".alert-danger").html('Text feilds cannot be blank');
                    alert("Text feilds cannot be blank");
                } else {
                    var formData = new FormData($('#createtable')[0]);

                    jQuery.ajax({
                        url: "{{ url('create-table') }}",
                        method: 'post',
                        data: formData,
                        cache: false,

                        processData: false,
                        contentType: false,
                        success: function(result) {
                            alert(result);
                            $(".alert-success").css('display', 'block');
                            $(".alert-success").html('Table created successful.');
                        }
                    });
                }
            });
        });
    </script>
    <!--- Script Five Ends --->
    <!--- /************************ */ Couple Table Planner Scripts Ends /************************ */ --->
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
                                            <img src="images/dashboard-profile.jpg" alt="" class="rounded-circle mb10">
                                        </span>
                                        <span class="user-vendor-name">{{ Auth::user()->name }}</span>
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
                    <img src="images/dashboard-profile.jpg" alt="" class="rounded-circle mb10">
                </div>
                <h3 class="vendor-profile-name">{{ Auth::user()->name }}</h3>
                <a href="#" class="edit-link">edit profile</a>
            </div>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li><a href="/coupledashboard"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
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
        <main class="py-4">
            @yield('content')
        </main>
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
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/fastclick.js') }}"></script>
    <script src="{{ asset('js/magicsuggest.js') }}"></script>
    <!--- /************************ */ Wish List Scripts /************************ */ --->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery('#wishlistcancel').click(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                jQuery.ajax({
                    url: "{{ url('listdetail-wishlist-cancel') }}",
                    method: 'post',
                    data: {
                        wishlistid: jQuery('#wishlistid').val(),
                    },
                    success: function(result) {
                        $("#alertsuccess1").css('display', 'block');
                        $("#alertsuccess1").html("List has been removed from wishlist");
                    }
                });

            });
        });
    </script>
    <!--- /************************ */ Wish List Scripts end /************************ */  --->
    <!--- /************************ */ Todo List Scripts /************************ */ --->
    <!--- Script One --->
    <script type="text/javascript">
        function edittask() {

            var checkboxlength = $("#check-tab1:checked").length;

            if (checkboxlength > 1) {
                document.getElementById("edittask_danger").style.display = "block";
                document.getElementById("edittask_js_error").innerHTML = "Cannot select more than one task to edit at a time";
            } else if (checkboxlength < 1) {
                document.getElementById("edittask_danger").style.display = "block";
                document.getElementById("edittask_js_error").innerHTML = "select task to edit";
            } else {

                document.getElementById("edittaskblock").style.display = "block";

                var table1 = document.getElementById("table1");

                var edittaskid = document.getElementById("edittaskid");
                var edittasktittle = document.getElementById("edittasktittle");
                var edittaskdate = document.getElementById("edittaskdate");
                var edittaskstatus = document.getElementById("edittaskstatus");

                checkboxes = document.getElementsByName("check-tab1");

                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].checked) {
                        alert(document.getElementById("edittaskid").value);
                        document.getElementById("edittaskid").value = table1.rows[i + 1].cells[1].innerHTML;
                        document.getElementById("edittasktitle").value = table1.rows[i + 1].cells[2].innerHTML;
                        document.getElementById("edittaskdate").value = table1.rows[i + 1].cells[3].innerHTML;
                        var checkstatus = table1.rows[i + 1].cells[4].innerHTML;

                        if (checkstatus.indexOf('Completed') > -1) {
                            document.getElementById("edittaskstatus").value = "Completed";
                        } else {
                            document.getElementById("edittaskstatus").value = "Due";
                        }
                    }
                }
            }

        }
    </script>
    <!--- Script One Ends --->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!--- Script Two --->
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#submit_edittask').click(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                if ($.trim($("#edittasktitle").val()) === "" || $.trim($("#edittaskdate").val()) === "" ||
                    $.trim($("#edittaskstatus").val()) === "") {
                    $("#edittaskdanger").css('display', 'block');
                    $("#edittask_danger_msg").html('All Fields required. Make sure you fill up all fields');
                    return false;
                } else {
                    var edittaskid = jQuery('#edittaskid').val();
                    jQuery.ajax({
                        url: "{{ url('edit-task') }}" + "/" + edittaskid,
                        method: 'post',
                        data: {
                            edittaskid: jQuery('#edittaskid').val(),
                            edittasktitle: jQuery('#edittasktitle').val(),
                            edittaskdate: jQuery('#edittaskdate').val(),
                            edittaskstatus: jQuery('#edittaskstatus').val()
                        },
                        success: function(result) {
                            $('#edittaskid').val("");
                            $('#edittasktitle').val("");
                            $('#edittaskdate').val("");
                            $('#edittaskstatus').val("");
                            $("#edittasksuccess").css('display', 'block');
                            $("edittask_success_msg").html(result);
                        }
                    });
                }
            });
        });
    </script>
    <!--- Script Two Ends --->
    <!--- Script Three --->
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#submittask').click(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $(".alert-danger").css('display', 'none');
                $(".alert-success").css('display', 'none');

                if ($.trim($("#tasktitle").val()) === "" || $.trim($("#taskdate").val()) === "" ||
                    $.trim($("#taskstatus").val()) === "") {
                    $(".alert-danger").css('display', 'block');
                    $(".alert-danger").html('All Fields required. Make sure you fill up all fields');
                    return false;
                } else {
                    jQuery.ajax({
                        url: "{{ url('add-task') }}",
                        method: 'post',
                        data: {
                            tasktitle: jQuery('#tasktitle').val(),
                            taskdate: jQuery('#taskdate').val(),
                            taskstatus: jQuery('#taskstatus').val(),
                        },
                        success: function(result) {
                            $('#tasktitle').val("");
                            $('#taskdate').val("");
                            $('#taskstatus').val("");
                            $(".alert-success").css('display', 'block');
                            $(".alert-success").html(result);
                        }
                    });
                }
            });
        });
    </script>
    <!--- Script Three Ends --->
    <!--- /************************ */ Todo Lost Scripts ends /************************ */ --->
    <!--- /************************ */ Couple Budget Scripts /************************ */ --->
    <!--- Script One --->
    <script>
        jQuery(document).ready(function() {
            /* Delete action */
            jQuery('#delete').click(function(e) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                jQuery.ajax({
                    url: "{{ url('delete-budget') }}",
                    method: 'post',
                    data: {

                    },
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(result) {
                        $("#deletesuccessmessage").css('display', 'block');
                        $("#deletesuccessmessage").html(result);
                    }
                });
            });
        });
    </script>
    <!--- Script One Ends --->
    <!--- Script Two --->
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#addexpense').click(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $("#budgetsuccess").css('display', 'none');
                $("#budgetdanger").css('display', 'none');

                if ($.trim($("#locationfees").val()) === "" || $.trim($("#carexpense").val()) === "" ||
                    $.trim($("#decorations").val()) === "" || $.trim($("#locationfee").val()) === "" ||
                    $.trim($("#hairandmakeup").val()) === "" || $.trim($("#bouquets").val()) === "" ||
                    $.trim($("#decorations2").val()) === "" || $.trim($("#cakecuttingfee").val()) === "" ||
                    $.trim($("#photographer").val()) === "" || $.trim($("#videographer").val()) === "" ||
                    $.trim($("#extraprints").val()) === "" || $.trim($("#savethedates").val()) === "" ||
                    $.trim($("#invitations").val()) === "" || $.trim($("#weddingprograms").val()) === "") {
                    $("#budgetdanger").css('display', 'block');
                    $("#budgetdanger").html('All Fields required. Make sure you fill up all fields');
                    return false;
                } else {
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
                        success: function(result) {
                            $("#budgetsuccess").css('display', 'block');
                            $("#budgetsuccess").html(result);
                        },
                    });
                }
            });
        });
    </script>
    <!--- Script Two Ends --->
    <!--- Script Three --->
    <script>
        function myFunction(val) {
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

        function myFunction2(val) {
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

        function myFunction3(val) {
            var hairandmakeup_estimate = document.getElementById("hairandmakeup_estimate").value;
            document.getElementById("hairandmakeup-estimate-total").innerHTML = hairandmakeup_estimate;

            var hairandmakeup_actual = document.getElementById("hairandmakeup_actual").value;
            document.getElementById("hairandmakeup-actual-total").innerHTML = hairandmakeup_actual;

            var hairandmakeup_paid = document.getElementById("hairandmakeup_paid").value;
            document.getElementById("hairandmakeup-paid-total").innerHTML = hairandmakeup_paid;

            var hairandmakeup_pending = document.getElementById("hairandmakeup_pending").value;
            document.getElementById("hairandmakeup-pending-total").innerHTML = hairandmakeup_pending;
        }

        function myFunction4(val) {
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

        function myFunction5(val) {
            var cakecuttingfee_estimate = document.getElementById("cakecuttingfee_estimate").value;
            document.getElementById("cakecuttingfee-estimate-total").innerHTML = cakecuttingfee_estimate;

            var cakecuttingfee_actual = document.getElementById("cakecuttingfee_actual").value;
            document.getElementById("cakecuttingfee-actual-total").innerHTML = cakecuttingfee_actual;

            var cakecuttingfee_paid = document.getElementById("cakecuttingfee_paid").value;
            document.getElementById("cakecuttingfee-paid-total").innerHTML = cakecuttingfee_paid;

            var cakecuttingfee_pending = document.getElementById("cakecuttingfee_pending").value;
            document.getElementById("cakecuttingfee-pending-total").innerHTML = cakecuttingfee_pending;
        }

        function myFunction6(val) {
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

        function myFunction7(val) {
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
    <!--- Script Three Ends --->
    <!--- Script Four --->
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
    <!--- Script four Ends --->
    <!--- /************************ */ Couple Budget Scripts ends /************************ */ --->
    <!--- /************************ */ Couple Website Scripts /************************ */ --->
    <!--- Script One --->
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image')
                        .attr('src', e.target.result)
                        .width("100%")
                        .height(500);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image2')
                        .attr('src', e.target.result)
                        .width("100%")
                        .height(350);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image3')
                        .attr('src', e.target.result)
                        .width("100%")
                        .height(350);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image4')
                        .attr('src', e.target.result)
                        .width("100%")
                        .height(350);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <!--- Script One Ends --->
    <!--- Script Two --->
    <script>
        jQuery(document).ready(function() {
            jQuery('#rsvp-form').submit(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $(".alert-danger").css('display', 'none');

                if ($('#filebutton').get(0).files.length === 0) {
                    $(".alert-danger").css('display', 'block');
                    $(".alert-danger").html('Header image required');
                } else {
                    if ($('#filebutton2').get(0).files.length === 0 ||
                        $('#filebutton3').get(0).files.length === 0 ||
                        $('#filebutton4').get(0).files.length === 0) {
                        $(".alert-danger").css('display', 'block');
                        $(".alert-danger").html('Wedding gallery images required');
                    } else {
                        if ($.trim($("#couplename").val()) === "" || $.trim($("#weddingdate").val()) === "" ||
                            $.trim($("#weddingplace").val()) === "" || $.trim($("#weddingaddress").val()) === "" ||
                            $.trim($("#contactemail").val()) === "" || $.trim($("#contactnumber").val()) === "" ||
                            $.trim($("#whatsapp").val()) === "" || $.trim($("#yourstory").val()) === "" ||
                            $.trim($("#yourproposal").val()) === "") {
                            $(".alert-danger").css('display', 'block');
                            $(".alert-danger").html('Text feilds cannot be blank');
                            return false;
                        } else {
                            var formData = new FormData($('#rsvp-form')[0]);

                            jQuery.ajax({
                                url: "{{ url('submit-website') }}",
                                method: 'post',
                                data: formData,
                                cache: false,
                                processData: false,
                                contentType: false,
                                success: function(result) {
                                    alert(result);
                                }
                            });
                        }
                    }
                }
            });
        });
    </script>
    <!--- Script Two Ends --->
    <!--- /************************ */ Couple Website Scripts end /************************ */ --->
    <!--- /************************ */ Couple Profile Scripts /************************ */ --->
    <script>
        $(document).ready(function() {
            $.uploadPreview({
                input_field: "#image-upload", // Default: .image-upload
                preview_box: "#image-preview", // Default: .image-preview
                label_field: "#image-label", // Default: .image-label
                label_default: "Choose File", // Default: Choose File
                label_selected: "Change File", // Default: Change File
                no_label: false // Default: false
            });
        });
    </script>
    <!--- /************************ */ Couple Profile Scripts ends /************************ */ --->
    <!--- /************************ */ Real Wedding Scripts /************************ */ --->
    <!--- Script One --->
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image')
                        .attr('src', e.target.result)
                        .width(400)
                        .height(250);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image2')
                        .attr('src', e.target.result)
                        .width(400)
                        .height(250);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image3')
                        .attr('src', e.target.result)
                        .width(400)
                        .height(250);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image4')
                        .attr('src', e.target.result)
                        .width(400)
                        .height(250);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL5(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image5')
                        .attr('src', e.target.result)
                        .width(400)
                        .height(250);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL6(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image6')
                        .attr('src', e.target.result)
                        .width(400)
                        .height(250);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <!--- Script One ends --->
    <!--- Script Two --->
    <script type="text/javascript">
        jQuery(document).ready(function() {
            $("#showprivate").click(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $("#success").css('display', 'none');
                $("#info_success").css('display', 'none');

                if ($(this).is(":checked")) {
                    var checked = "checked";
                    jQuery.ajax({
                        url: "{{ url('show-realwedding') }}",
                        method: 'post',
                        data: {
                            checked: checked,
                        },
                        success: function(result) {
                            $("#success").css('display', 'block');
                            $("#success_msg").html("Real wedding will be shown");
                        }
                    });
                } else {
                    var checked = "not checked";
                    jQuery.ajax({
                        url: "{{ url('dont-show-realwedding') }}",
                        method: 'post',
                        data: {
                            checked: checked,
                        },
                        success: function(result) {
                            $("#info_success").css('display', 'block');
                            $("#info_success_msg").html("Real wedding will not be shown");
                        }
                    });
                }
            });
        });
    </script>
    <!--- Script Two ends --->
    <!--- Script Three --->
    <script>
        jQuery(document).ready(function() {
            jQuery('#RealWedding').submit(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $(".alert-danger").css('display', 'none');

                if ($('#featured_image').get(0).files.length === 0) {
                    $(".alert-danger").css('display', 'block');
                    $(".alert-danger").html('Featured image required');
                } else {
                    if ($('#filebutton').get(0).files.length === 0 ||
                        $('#filebutton2').get(0).files.length === 0 || $('#filebutton3').get(0).files.length === 0 ||
                        $('#filebutton4').get(0).files.length === 0 || $('#filebutton5').get(0).files.length === 0 ||
                        $('#filebutton6').get(0).files.length === 0) {
                        $(".alert-danger").css('display', 'block');
                        $(".alert-danger").html('Wedding gallery images required');
                    } else {
                        if ($.trim($("#textarea").val()) === "") {
                            $(".alert-danger").css('display', 'block');
                            $(".alert-danger").html('Text cannot be blank');
                            return false;
                        } else {

                            if ($('#inlineRadio1').is(":checked") || $('#inlineRadio2').is(":checked") ||
                                $('#inlineRadio3').is(":checked")) {
                                var formData = new FormData($('#RealWedding')[0]);

                                jQuery.ajax({
                                    url: "{{ url('save-real-wedding') }}",
                                    method: 'post',
                                    data: formData,
                                    cache: false,

                                    processData: false,
                                    contentType: false,
                                    success: function(result) {
                                        alert(result);
                                    }
                                });
                            } else {
                                $(".alert-danger").css('display', 'block');
                                $(".alert-danger").html('Please check atleast one of the given options in the form');
                            }
                        }
                    }
                }

            });
        });
    </script>
    <!--- Script Three ends --->
    <!--- Script Four --->
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
    <!--- Script Four ends --->
    <!--- Script Five --->
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
    <!--- Script Five ends --->
    <!--- /************************ */ Real Wedding Scripts ends /************************ */ --->
    <!--- /************************ */ Guest List Scripts /************************ */ --->
    <!--- Script One --->
    <script>
        jQuery(document).ready(function() {
            /* Single Guest */
            jQuery('#single_guest').submit(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $(".alert-danger").css('display', 'none');
                $(".alert-success").css('display', 'none');

                if ($.trim($("#fname").val()) === "" || $.trim($("#lname").val()) === "" ||
                    $.trim($("#address").val()) === "" || $.trim($("#email").val()) === "" ||
                    $.trim($("#city").val()) === "" || $.trim($("#country").val()) === "" ||
                    $.trim($("#postcode").val()) === "") {
                    $(".alert-danger").css('display', 'block');
                    $(".alert-danger").html('Text feilds cannot be blank');
                } else {
                    var formData = new FormData($('#single_guest')[0]);

                    jQuery.ajax({
                        url: "{{ url('single-guestlist-submit') }}",
                        method: 'post',
                        data: formData,
                        cache: false,

                        processData: false,
                        contentType: false,
                        success: function(result) {
                            $(".alert-success").css('display', 'block');
                            $(".alert-success").html('Guest list submitted successful.');
                        }
                    });
                }
            });
        });
    </script>
    <!--- Script One ends --->
    <!--- Script Two --->
    <script>
        jQuery(document).ready(function() {
            /* Couple Guest */
            jQuery('#couple_guest').submit(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $("#couple_danger_msg").css('display', 'none');
                $("#couple_success_msg").css('display', 'none');

                if ($.trim($("#couple_firstname").val()) === "" || $.trim($("#couple_lastname").val()) === "" ||
                    $.trim($("#couple_partnerfname").val()) === "" || $.trim($("#couple_partnerlname").val()) === "" ||
                    $.trim($("#couple_group").val()) === "" || $.trim($("#couple_address").val()) === "" ||
                    $.trim($("#couple_email").val()) === "" || $.trim($("#couple_city").val()) === "" ||
                    $.trim($("#couple_country").val()) === "" || $.trim($("#couple_postcode").val()) === "") {
                    $("#couple_danger_msg").css('display', 'block');
                    $("#couple_danger_msg").html('Text feilds cannot be blank');
                } else {
                    var formData = new FormData($('#couple_guest')[0]);

                    jQuery.ajax({
                        url: "{{ url('couple-guestlist-submit') }}",
                        method: 'post',
                        data: formData,
                        cache: false,

                        processData: false,
                        contentType: false,
                        success: function(result) {
                            $("#couple_success_msg").css('display', 'block');
                            $("#couple_success_msg").html('Couple guest list submitted successful.');
                        }
                    });
                }
            });
        });
    </script>
    <!--- Script Two ends --->
    <!--- Script Three --->
    <script>
        jQuery(document).ready(function() {
            /* Household Guest */
            jQuery('#household_guest').submit(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $("#household_danger_msg").css('display', 'none');
                $("#household_success_msg").css('display', 'none');

                if ($.trim($("#household_fname").val()) === "" || $.trim($("#household_lname").val()) === "" ||
                    $.trim($("#household_family").val()) === "" || $.trim($("#household_address").val()) === "" ||
                    $.trim($("#household_email").val()) === "" || $.trim($("#household_city").val()) === "" ||
                    $.trim($("#household_country").val()) === "" || $.trim($("#household_postcode").val()) === "") {
                    $("#household_danger_msg").css('display', 'block');
                    $("#household_danger_msg").html('Text feilds cannot be blank');
                } else {
                    var formData = new FormData($('#household_guest')[0]);

                    jQuery.ajax({
                        url: "{{ url('household-guestlist-submit') }}",
                        method: 'post',
                        data: formData,
                        cache: false,

                        processData: false,
                        contentType: false,
                        success: function(result) {
                            $("#household_success_msg").css('display', 'block');
                            $("#household_success_msg").html('Household guest list submitted successful.');
                        }
                    });
                }
            });
        });
    </script>
    <!--- Script Three ends --->
    <!--- /************************ */ Guest List Scripts ends /************************ */ --->
    <!--- /************************ */ Couple Table Planner Scripts /************************ */ --->
    <script src="{{ asset('js/custom-magicsuggest.js') }}"></script>
    <!-- - <script type="text/javascript" src="{{ asset('js/custom-seating.js') }}"></script> -->
    <!--- /************************ */ Couple Table Planner Scripts Ends /************************ */ --->
</body>

</html>