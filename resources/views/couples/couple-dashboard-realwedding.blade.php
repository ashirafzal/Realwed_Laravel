@extends('layouts.couple_dashboard_layout')

@section('content')
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
                                <input type="file" class="custom-file-input" name="featured_image" id="featured_image">
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
@endsection