<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{csrf_token()}}" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RealWed | Wedding Vendor & Supplier Directory HTML Template - Forgot Password</title>
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
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <!-- header -->
    <div class="header">
        <!-- header-top -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-6 col-6 d-none d-xl-block d-lg-block d-md-block">
                        <div class="header-text">
                            <p class="wlecome-text">Welcome to Wedding Directory HTML Template.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-12 col-12">
                        <div class="header-text text-right">
                            <p>Are You Vendor?<a href="/signin" class="text-white">List Your Business</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.header-top -->
    <!-- /.header -->
    <div class="content" id="form1">
        <div class="container">
            <div class="row">
                <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="mb30 card">
                        <div class="card-body">
                            <h1>Lost Password</h1>
                            <p>Follow these simple steps to reset your account:</p>
                            <ul class="list-unstyled mb30">
                                <li>1. Enter your username , email address and phone.</li>
                                <li>2. Wait for your recovery details to be sent.</li>
                                <li>3. Follow as given instructions in your mail account.</li>
                            </ul>
                            <form id="form1id">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="alert alert-danger text-center" id="email-danger" style="width:100%;display:none;">
                                        <!-- -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="alert alert-info text-center" id="processing" style="width:100%;display:none;">
                                        Processing your request ....
                                    </div>
                                </div>
                                <div class="forgot-form">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Username</label>
                                        <input id="username" type="text" name="username" placeholder="Username" class="form-control" required>
                                        <br/>
                                        <label class="control-label" for="email">Email</label>
                                        <input id="email" type="email" name="email" placeholder="Email" class="form-control" required>
                                        <br/>
                                        <label class="control-label" for="email">Contact</label>
                                        <input id="phone" type="number" name="phone" placeholder="Contact" class="form-control" required>
                                    </div>
                                    <button id="submitform1" name="singlebutton" class="btn btn-default btn-block">Get Email</button>
                                </div>
                            </form>
                            <div class="mt30">
                                <a href="/signin" class="btn-primary-link mr-3">Login</a><a href="/register" class="btn-primary-link">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content" id="form2" style="display:none;">
        <div class="container">
            <div class="row">
                <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="mb30 card">
                        <div class="card-body">
                            <h1>Enter Recieved OTP</h1>
                            <p>Follow these simple steps to reset your account:</p>
                            <ul class="list-unstyled mb30">
                                <li>1. Find OTP in your email inbox</li>
                                <li>2. If you have not found any email please check your spam emails.</li>
                                <li>3. Enter the OTP in the below field.</li>
                            </ul>
                            <form id="form2id">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="alert alert-success text-center" id="otp-success" style="width:100%;display:none;">
                                        <!-- -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="alert alert-danger text-center" id="otp-danger" style="width:100%;display:none;">
                                        <!-- -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="alert alert-info text-center" id="processing2" style="width:100%;display:none;">
                                        Processing your request ....
                                    </div>
                                </div>
                                <div class="row">
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    <strong>OTP </strong> has been sent to your email address please check your inbox.
                                    If you don't find any email in inbox please check in spam emails.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                </div>
                                <div class="forgot-form">
                                    <div class="form-group">
                                        <label class="control-label" for="email">OTP</label>
                                        <input id="otp" type="number" name="otp" placeholder="OTP" class="form-control" required>
                                    </div>
                                    <button id="submitform2" name="singlebutton" class="btn btn-default btn-block">Get New Password</button>
                                </div>
                            </form>
                            <div class="mt30">
                                <a href="/signin" class="btn-primary-link mr-3">Login</a><a href="/register" class="btn-primary-link">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <a href="#"><img src="images/footer-logo.png" alt="" class="mb20"></a>
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
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.min.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/return-to-top.js"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
        jQuery(document).ready(function(){
            jQuery('#submitform1').click(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

            if ($.trim($("#username").val()) === "" || $.trim($("#email").val()) === ""
                || $.trim($("#phone").val()) === ""){

                    $("#email-danger").css('display','block');
                    $("#email-danger").html('All Fields required. Make sure you fill up all fields');
                    return false;
            }else{                      
                    $("#processing").css('display','block');
                    $("#email-danger").css('display','none');
                        
                        jQuery.ajax({
                        url: "{{ url('email-validate') }}",
                        method: "post",
                        dataType: "json",
                        
                        data: {
                            username: jQuery('#username').val(),
                            email: jQuery('#email').val(),
                            phone: jQuery('#phone').val()
                        },
                            success: function(data){
                                if(!$.isEmptyObject(data)){
                                    $("#processing").css('display','none');
                                    $("#form1").css('display','none');
                                    $("#form2").css('display','block');
                                }else{
                                    $("#processing").css('display','none');
                                    $("#email-danger").css('display','block');
                                    $("#email-danger").html('One or more details are incorrect . Please check the provide information again .');
                                }
                            }
                    });                    
                }
            });
        });
</script>
<script>
        jQuery(document).ready(function(){
            jQuery('#submitform2').click(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

            if ($.trim($("#username").val()) === "" || $.trim($("#email").val()) === ""
                || $.trim($("#phone").val()) === "" || $.trim($("#otp").val()) === ""){

                    $("#otp-danger").css('display','block');
                    $("#otp-danger").html('All Fields required. Make sure you fill up all fields');
                    return false;
            }else{                      
                    $("#processing2").css('display','block');
                    $("#otp-danger").css('display','none');
                    $("#otp-success").css('display','none');
                        
                        jQuery.ajax({
                        url: "{{ url('otp-validation') }}",
                        method: "post",
                        dataType: "json",
                        
                        data: {
                            username: jQuery('#username').val(),
                            email: jQuery('#email').val(),
                            phone: jQuery('#phone').val(),
                            otp: jQuery('#otp').val()
                        },
                            success: function(data){
                                if(!$.isEmptyObject(data)){
                                    $("#processing2").css('display','none');
                                    $("#otp-success").css('display','block');
                                    $("#otp-success").html('OTP matched');
                                    window.location.replace("myprofile");
                                }else{
                                    $("#processing2").css('display','none');
                                    $("#otp-danger").css('display','block');
                                    $("#otp-danger").html('OTP is incorrect . Please enter the correct OTP.');
                                }
                            }
                    });                    
                }
            });
        });
</script>
</body>
</html>