@extends('layouts.couple_dashboard_layout')

@section('content')
<div class="dashboard-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="dashboard-page-header">
                    <h3 class="dashboard-page-title">My Wishlist</h3>
                    <p>Hello Couple! The wishlist is great way to keep track your wedding vendor and their service availablity in your wishlist board.</p>
                </div>
            </div>
        </div>
        <div style="display:none;" class="alert alert-danger alert-block" id="alertsuccess1"></div>
        <div class="row">
            @foreach($wishlists as $wishlist)
            @foreach($wishlist->listings as $listdetails)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-4 col-12">
                <!-- /.Vendor thumbnail -->
                <div class="vendor-thumbnail">
                    <!-- Vendor thumbnail -->
                    <div class="vendor-img">
                        <!-- Vendor img -->
                        <input style="display:none;" id="wishlistid" name="wishlistid" type="text" value="{{$wishlist->id}}">
                        <a href="list-detail/{{$wishlist->listing_id}}"><img style="height:230px;" src="{{ asset('userimage') }}/{{$listdetails->filebutton}}" alt="" class="img-fluid"></a>
                        <div class="wishlist-sign"><button id="wishlistcancel" class="btn-wishlist"><i class="fa fa fa-times"></i></button></div>
                    </div>
                    <!-- /.Vendor img -->
                    <div class="vendor-content">
                        <!-- Vendor Content -->
                        <h2 class="vendor-title"><a href="list-detail/{{$wishlist->listing_id}}" class="title">{{$listdetails->title}}</a></h2>
                        <p class="vendor-address">{{$listdetails->city}}, {{$listdetails->state}}.</p>
                    </div>
                    <div class="vendor-meta">
                        <div class="vendor-meta-item vendor-meta-item-bordered">
                            <span class="vendor-price">
                                {{$listdetails->price}}
                            </span>
                            <span class="vendor-text">Start From</span>
                        </div>
                        <div class="vendor-meta-item vendor-meta-item-bordered">
                            <span class="vendor-guest">
                                {{$listdetails->seat}}
                            </span>
                            <span class="vendor-text">Guest</span>
                        </div>
                        <div class="vendor-meta-item vendor-meta-item-bordered">
                            <span class="vendor-guest">{{$count}}</span>
                            <span class="vendor-text">Reviews</span>
                        </div>
                    </div>
                    <!-- /.Vendor Content -->
                </div>
            </div>
            @endforeach
            @endforeach
        </div>
    </div>
</div>
@endsection