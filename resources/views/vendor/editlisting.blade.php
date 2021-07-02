@extends('layouts.vendor_dashboard_layout')

@section('content')
<div class="dashboard-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">Add New Listing</h3>
                            <p>Lists present multiple line items vertically as a single continuous element.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header"> <h4 class="mb0">About Listing</h4></div>
                    <div class="">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        <br>
                        @endif                   
                        <form id="addlistingform" action="{{ url('updatelisting') }}" enctype="multipart/form-data" method="post">
                            {{ csrf_field() }}
                            @foreach ($listing as $listing)
                            <!-- Form Name -->
                            <div class="venue-form-info card-body">
                                <div class="row">
                                    <!-- Text input-->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <input id="title" name="listid" value="{{ $listing->id }}" type="hidden" placeholder="" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="title">Title</label>
                                            <input id="title" name="title" value="{{ $listing->title }}" type="text" placeholder="Title" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="control-label" for="Category">Category</label>
                                            <select class="wide" name="Category" id="Category">
                                                <option value="{{ $listing->Category }}">{{ $listing->Category }}</option>
                                                <option value="Hotel">Hotel</option>
                                                <option value="Restaurant">Restaurant</option>
                                                <option value="Castle">Castle</option>
                                                <option value="Barns">Barns</option>
                                                <option value="Resort">Resort</option>
                                                <option value="Church">Church</option>
                                                <option value="In Door">In Door</option>
                                                <option value="Florist">Florist</option>
                                                <option value="Dj">Dj</option>
                                                <option value="Cake">Cake</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="seat">Seat Capacity</label>
                                            <input id="seat" name="seat" value="{{ $listing->seat }}" type="number" placeholder="e.g. 50" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="price">Price <small>(Start From)</small></label>
                                            <input id="price" name="price" value="{{ $listing->price }}" type="text" placeholder="Price" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="address">Address </label>
                                            <input id="address" name="address" value="{{ $listing->address }}" type="text" placeholder="Street address" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="city">City</label>
                                            <select class="wide" name="city" id="city">
                                                <option value="Karachi">Karachi</option>
                                                <option value="Hyderabad">Hyderabad</option>
                                                <option value="Quetta">Quetta</option>
                                                <option value="Peshawar">Peshawar</option>
                                                <option value="Multan">Multan</option>
                                                <option value="Islamabad">Islamabad</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="postcode">Postcode</label>
                                            <input id="postcode" name="postcode" value="{{ $listing->postcode }}" type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="control-label" for="state">Select Province</label>
                                            <select class="wide" name="state" id="state">
                                                <option value="Select State">Select Province</option>
                                                <option value="Sindh">Sindh</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Balochistan">Balochistan</option>
                                                <option value="KPK">KPK</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="control-label" for="country">Select Country</label>
                                            <select class="wide" name="country" id="country">
                                                <option value="Select Country">Select Country</option>
                                                <option value="Paksitan">Paksitan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="summernote">Descriptions </label>
                                            <textarea class="form-control" id="editordata" name="editordata" rows="6" placeholder="Write Descriptions for your venue">{{ $listing->editordata }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-location-map card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h4>Location Map</h4>
                                       
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="control-label" for="latitude">Latitude</label>
                                            <input id="latitude" name="latitude" value="{{ $listing->latitude }}" type="number" placeholder="23.0732195" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="longitude">Longitude</label>
                                            <input id="longitude" name="longitude" value="{{ $listing->longitude }}" type="number" placeholder="72.5646902" class="form-control ">
                                        </div>
                                    </div>
                                    <!--
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="well-box">
                                            <div id="map"></div>
                                        </div>
                                    </div>
                                    -->
                                </div>
                            </div>
                            <div class="aminities-form-info card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Amenities</h3>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="">
                                            @if($listing->groomlounge === 'true')
                                            <input type="checkbox" id="groomlounge" name="groomlounge" class="" id="customCheck1" checked>
                                            @else
                                            <input type="checkbox" id="groomlounge" name="groomlounge" class="" id="customCheck1">
                                            @endif
                                            <label class="" for="customCheck1"> Groom Lounge</label>
                                        </div>
                                        <div class="">
                                            @if($listing->bridalsuite === 'true')
                                            <input type="checkbox" id="bridalsuite" name="bridalsuite" class="" id="customCheck2" checked>
                                            @else
                                            <input type="checkbox" id="bridalsuite" name="bridalsuite" class="" id="customCheck2">
                                            @endif
                                            <label class="" for="customCheck2"> Bridal Suite</label>
                                        </div>
                                        <div class="">
                                            @if($listing->tableandchairs === 'true')
                                            <input type="checkbox" id="tableandchairs" name="tableandchairs" class="" id="customCheck3" checked>
                                            @else
                                            <input type="checkbox" id="tableandchairs" name="tableandchairs" class="" id="customCheck3">
                                            @endif
                                            <label class="" for="customCheck3">Table and chairs</label>
                                        </div>
                                        <div class="">
                                            @if($listing->getreadyrooms === 'true')
                                            <input type="checkbox" id="getreadyrooms" name="getreadyrooms" class="" id="customCheck4" checked>
                                            @else
                                            <input type="checkbox" id="getreadyrooms" name="getreadyrooms" class="" id="customCheck4">
                                            @endif
                                            <label class="" for="customCheck4"> Get Ready Rooms</label>
                                        </div>
                                        <div class="">
                                            @if($listing->eventrentals === 'true')
                                            <input type="checkbox" id="eventrentals" name="eventrentals" class="" id="customCheck5" checked>
                                            @else
                                            <input type="checkbox" id="eventrentals" name="eventrentals" class="" id="customCheck5">
                                            @endif
                                            <label class="" for="customCheck5">Event Rentals</label>
                                        </div>
                                        <div class="">
                                            @if($listing->outsidevendors === 'true')
                                            <input type="checkbox" id="outsidevendors" name="outsidevendors" class="" id="customCheck6" checked>
                                            @else
                                            <input type="checkbox" id="outsidevendors" name="outsidevendors" class="" id="customCheck6">
                                            @endif
                                            <label class="" for="customCheck6">Outside Vendors</label>
                                        </div>
                                        <div class="">
                                            @if($listing->barservices === 'true')
                                            <input type="checkbox" id="barservices" name="barservices" class="" id="customCheck7" checked>
                                            @else
                                            <input type="checkbox" id="barservices" name="barservices" class="" id="customCheck7">
                                            @endif
                                            <label class="" for="customCheck7"> Bar Services</label>
                                        </div>
                                        <div class="">
                                            @if($listing->cateringservices === 'true')
                                            <input type="checkbox" id="cateringservices" name="cateringservices" class="" id="customCheck8" checked>
                                            @else
                                            <input type="checkbox" id="cateringservices" name="cateringservices" class="" id="customCheck8">
                                            @endif
                                            <label class="" for="customCheck8"> Catering Services</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="">
                                            @if($listing->cleanup === 'true')
                                            <input type="checkbox" id="cleanup" name="cleanup" class="" id="customCheck9" checked>
                                            @else
                                            <input type="checkbox" id="cleanup" name="cleanup" class="" id="customCheck9">
                                            @endif
                                            <label class="" for="customCheck9"> Clean Up</label>
                                        </div>
                                        <div class="">
                                            @if($listing->eventplanner === 'true')
                                            <input type="checkbox" id="eventplanner" name="eventplanner" class="" id="customCheck10" checked>
                                            @else
                                            <input type="checkbox" id="eventplanner" name="eventplanner" class="" id="customCheck10">
                                            @endif
                                            <label class="" for="customCheck10">Event Planner</label>
                                        </div>
                                        <div class="">
                                            @if($listing->wifi === 'true')
                                            <input type="checkbox" id="wifi" name="wifi" class="" id="customCheck11" checked>
                                            @else
                                            <input type="checkbox" id="wifi" name="wifi" class="" id="customCheck11">
                                            @endif
                                            <label class="l" for="customCheck11">Wifi</label>
                                        </div>
                                        <div class="">
                                            @if($listing->petfriendly === 'true')
                                            <input type="checkbox" id="petfriendly" name="petfriendly" class="" id="customCheck12" checked>
                                            @else
                                            <input type="checkbox" id="petfriendly" name="petfriendly" class="" id="customCheck12">
                                            @endif
                                            <label class="" for="customCheck12">Pet Friendly</label>
                                        </div>
                                        <div class="">
                                            @if($listing->accommodations === 'true')
                                            <input type="checkbox" id="accommodations" name="accommodations" class="" id="customCheck13" checked>
                                            @else
                                            <input type="checkbox" id="accommodations" name="accommodations" class="" id="customCheck13">
                                            @endif
                                            <label class="" for="customCheck13">Accommodations</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-venue-gallery card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Add Gallery Of Venue</h3>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <!-- File Button -->
                                        <div class="form-group">
                                            <label class="control-label" for="filebutton">Browse Images | Select upto 6 images</label>
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
                            <div class="dashboard-venue-video card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Add Video</h3>
                                         
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="video">Video</label>
                                            <input id="video" name="video" value="{{ $listing->video }}" type="url" placeholder="https://www.youtube.com/watch?v=VQWgez89JlM" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="social-form-info card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Social Media </h3>
                                        
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="facebook">Facebook</label>
                                            <input id="facebook" name="facebook" value="{{ $listing->facebook }}" type="url" placeholder="https://www.facebook.com" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="twitter">Twitter</label>
                                            <input id="twitter" name="twitter" value="{{ $listing->twitter }}" type="url" placeholder="https://www.twitter.com" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="instagram">Instagram</label>
                                            <input id="instagram" name="instagram" value="{{ $listing->instagram }}" type="url" placeholder="https://www.instagram.com" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="youtube">Youtube</label>
                                            <input id="youtube" name="youtube" value="{{ $listing->youtube }}" type="url" placeholder="https://www.youtube.com" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button class="btn btn-default" type="submit" name="update">Submit New Item</button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection