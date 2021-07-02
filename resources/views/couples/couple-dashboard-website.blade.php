@extends('layouts.couple_dashboard_layout')

@section('content')
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
                                    <a href="{{ url('/couple-website') }}/{{ $couplewebsite->id }}">{{ url('/couple-website') }}/{{ $couplewebsite->id }}</a>
                                    <br />
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
                                    <br />
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
@endsection