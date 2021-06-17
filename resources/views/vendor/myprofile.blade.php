@extends('layouts.vendor_dashboard_layout')

@section('content')
    <div class="dashboard-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="dashboard-page-header">
                        <h3 class="dashboard-page-title ">My Profile</h3>
                        <p>Change your profile image and information edit and save.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Password Change</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Email Notifications</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Delete Account</a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="card">
                                <div class="card-header">Profile</div>
                                <div class="card-body">
                                    <div class="alert alert-info alert-block" style="display:none;">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong></strong>
                                    </div>
                                    <div class="alert alert-danger alert-block" style="display:none;">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong></strong>
                                    </div>
                                    
                                    <form id="userupdateform" action="{{ url('updateuser') }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('POST') }}
                                        @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        <br>
                                        @endif
                                        <!-- Form Name -->
                                        <div class="profile-upload-img">
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                    <div id="image-preview">
                                                        <img src="userimage/{{ $user->userimage }}" alt="" class="rounded-circle">
                                                    </div>
                                                    <input type="file" name="image" id="image" class="upload-profile-input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="personal-form-info">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <input id="vendorid" name="vendorid" type="hidden" placeholder="" value="{{ $user->id }}" class="form-control ">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <input id="vendorpass" name="vendorpass" type="hidden" placeholder="" value="{{ $user->password }}" class="form-control ">
                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label class="control-label" for="vendorname">Vendor Name</label>
                                                        <input id="vendorname" name="vendorname" type="text" placeholder="" value="{{ $user->name }}" class="form-control ">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label class="control-label" for="email">Email</label>
                                                        <input id="email" name="email" type="email" placeholder="" value="{{ $user->email }}" class="form-control ">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label class="control-label" for="phone">Phone</label>
                                                        <input id="phone" name="phone" type="text" placeholder="" value="{{$user->phone}}" class="form-control ">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label class="control-label" for="summernote">Descriptions </label>
                                                        <textarea class="form-control" id="editordata" name="editordata" rows="6" placeholder="Write Descriptions for your venue">{{$user->description}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="social-form-info mb-0">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <h3>Social Media </h3>
                                                    <div class="dashboard-section-line">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label class="control-label" for="facebook">Facebook</label>
                                                        <input id="facebook" name="facebook" value="{{$user->facebook}}" type="url" placeholder="https://www.facebook.com" class="form-control ">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label class="control-label" for="twitter">Twitter</label>
                                                        <input id="twitter" name="twitter" value="{{$user->twitter}}" type="url" placeholder="https://www.twitter.com" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label class="control-label" for="instagram">Instagram</label>
                                                        <input id="instagram" name="instagram" value="{{$user->instagram}}" type="url" placeholder="https://www.instagram.com" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label class="control-label" for="youtube">Youtube</label>
                                                        <input id="youtube" name="youtube" value="{{$user->youtube}}" type="url" placeholder="https://www.youtube.com" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <button class="btn btn-default" id="submit_profile" type="submit">Update profile</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="card">
                                <div class="card-header">Password Change</div>
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                                <br>
                                @endif
                                <div class="card-body">
                                    <form id="passwordupdate" action="updatepassword" class="row" method="POST">
                                        {{ csrf_field() }}
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label" for="currentpassword">Current Password</label>
                                                <input id="currentpassword" name="currentpassword" type="password" placeholder="" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label" for="newpassword">New Password</label>
                                                <input id="newpassword" name="newpassword" type="password" placeholder="" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label" for="retypepassword">Retype Password</label>
                                                <input id="retypepassword" name="retypepassword" type="password" placeholder="" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <button class="btn btn-default" type="submit">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="card">
                                <div class="card-header">Email Notifications</div>
                                <div class="">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">Email Notifications List #1
                                            <div class="switch-notification">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">Email Notifications List #2
                                            <div class="switch-notification">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">Email Notifications List #3
                                            <div class="switch-notification">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="card">
                                <div class="card-header">Account Delete</div>
                                <div class="card-body">
                                    <p>In the fields below, enter your new password.</p>
                                    <form>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Delete my account and data listing also.</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Delete my account only.</label>
                                        </div>
                                        <button class="btn btn-primary mt30" type="submit">Delete My Account</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection