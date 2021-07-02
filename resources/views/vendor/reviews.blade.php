@extends('layouts.vendor_dashboard_layout')

@section('content')
<div class="dashboard-content">
    <div class="container-fluid">
        <div class="dashboard-page-header">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="dashboard-page-title">Reviews</h3>
                    <p>Check your latest reviews.</p>
                </div>
            </div>
        </div>
        <!--
                <div class="dashboard-filter-row mb20">
                    <div class="row">
                        <div class="offset-xl-9 col-xl-3">
                            <select class="form-control wide" id="exampleFormControlSelect1">
                                <option>Select Your Listing</option>
                                <option>Select Your Listing #1</option>
                                <option>Select Your Listing #2</option>
                                <option>Select Your Listing #3</option>
                                <option>Select Your Listing #4</option>
                            </select>
                        </div>
                    </div>
                </div>
                -->
        <div class="row ">
            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-6 col-12">
                <div class="card card-rating">
                    <div class="card-body">
                        <h5 class="mb30">Average Ratings</h5>
                        <div class="review-total">{{ number_format($overallrating,1)/5 }}</div>
                        <div class="review-text">Reviews</div>
                        @if($overallrating >= 25)
                        <span class="rated">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa  fa-star"></i>
                            <i class="fa  fa-star"></i>
                        </span>
                        @elseif($overallrating >= 20 && $overallrating < 25) <span class="rated">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa  fa-star"></i>
                            <i class="fa  fa-star-half"></i>
                            </span>
                            @elseif($overallrating >= 20)
                            <span class="rated">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa  fa-star"></i>
                                <i class="far  fa-star"></i>
                            </span>
                            @elseif($overallrating >= 15 && $overallrating < 20) <span class="rated">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa  fa-star-half"></i>
                                <i class="far  fa-star"></i>
                                </span>
                                @elseif($overallrating >= 15)
                                <span class="rated">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far  fa-star"></i>
                                    <i class="far  fa-star"></i>
                                </span>
                                @elseif($overallrating >= 10 && $overallrating < 15) <span class="rated">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="far  fa-star"></i>
                                    <i class="far  fa-star"></i>
                                    </span>
                                    @elseif($overallrating >= 10)
                                    <span class="rated">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far  fa-star"></i>
                                        <i class="far  fa-star"></i>
                                    </span>
                                    @elseif($overallrating >= 5 && $overallrating < 10) <span class="rated">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far  fa-star"></i>
                                        <i class="far  fa-star"></i>
                                        </span>
                                        @elseif($overallrating >= 10)
                                        <span class="rated">
                                            <i class="fa fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far  fa-star"></i>
                                            <i class="far  fa-star"></i>
                                        </span>
                                        @elseif($overallrating >= 5 && $overallrating < 10) <span class="rated">
                                            <i class="fa fa-star-half"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far  fa-star"></i>
                                            <i class="far  fa-star"></i>
                                            </span>
                                            @else
                                            <span class="rated">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far  fa-star"></i>
                                                <i class="far  fa-star"></i>
                                            </span>
                                            @endif
                                            <small>{{ number_format($overallrating,1)/5 }} average based on {{$listing_review_count}} ratings.</small>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-6 col-12">
                <div class="card card-review-summary">
                    <div class="card-body">
                        <h5 class="mb30">Reviews Summary</h5>
                        <div class="row mb-2">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                <h5 class="mb0 text-right">Quality Service</h5>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                <div class="progress mt10">
                                    @if($qualityservices >= 4.9)
                                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    @elseif($qualityservices >= 4.5 && $qualityservices < 5) <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                </div>
                                @elseif($qualityservices >= 4)
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                @elseif($qualityservices >= 3.5 && $qualityservices < 4) <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                            @elseif($qualityservices >= 3)
                            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            @elseif($qualityservices >= 2.5 && $qualityservices < 3) <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        </div>
                        @elseif($qualityservices >= 2)
                        <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        @elseif($qualityservices >= 1.5 && $qualityservices < 2) <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    </div>
                    @elseif($qualityservices >= 1)
                    <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    @elseif($qualityservices >= 0.5 && $qualityservices < 1) <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                </div>
                @else
                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                @endif
            </div>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-3  col-sm-12 col-12 text-right">
            <h6 class="text-dark mb0">{{ number_format($qualityservices,1) }}</h6>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
            <h5 class="mb0 text-right">Facilities</h5>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
            <div class="progress mt10">
                @if($faciliteis >= 4.9)
                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                @elseif($faciliteis >= 4.5 && $faciliteis < 5) <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
            </div>
            @elseif($faciliteis >= 4)
            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            @elseif($faciliteis >= 3.5 && $faciliteis < 4) <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
        </div>
        @elseif($faciliteis >= 3)
        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        @elseif($faciliteis >= 2.5 && $faciliteis < 3) <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
    </div>
    @elseif($faciliteis >= 2)
    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
    @elseif($faciliteis >= 1.5 && $faciliteis < 2) <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
</div>
@elseif($faciliteis >= 1)
<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
@elseif($faciliteis >= 0.5 && $faciliteis < 1) <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
    </div>
    @else
    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
    @endif
    </div>
    </div>
    <div class="col-xl-1 col-lg-1 col-md-3 col-sm-12 col-12 text-right">
        <h6 class="text-dark mb0">{{ number_format($faciliteis,1) }}</h6>
    </div>
    </div>
    <div class="row mb-2">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
            <h5 class="mb0 text-right">Staff</h5>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
            <div class="progress mt10">
                @if($staff >= 4.9)
                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                @elseif($staff >= 4.5 && $staff < 5) <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
            </div>
            @elseif($staff >= 4)
            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            @elseif($staff >= 3.5 && $staff < 4) <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
        </div>
        @elseif($staff >= 3)
        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        @elseif($staff >= 2.5 && $staff < 3) <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
    </div>
    @elseif($staff >= 2)
    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
    @elseif($staff >= 1.5 && $staff < 2) <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
        </div>
        @elseif($staff >= 1)
        <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        @elseif($staff >= 0.5 && $staff < 1) <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
            </div>
            @else
            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            @endif
            </div>
            </div>
            <div class="col-xl-1 col-lg-1 col-md-3 col-sm-12 col-12 text-right">
                <h6 class="text-dark mb0">{{ number_format($staff,1) }}</h6>
            </div>
            </div>
            <div class="row mb-2">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <h5 class="mb0 text-right">Flexibility</h5>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                    <div class="progress mt10">
                        @if($flexibility >= 4.9)
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        @elseif($flexibility >= 4.5 && $flexibility < 5) <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    </div>
                    @elseif($flexibility >= 4)
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    @elseif($flexibility >= 3.5 && $flexibility < 4) <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                </div>
                @elseif($flexibility >= 3)
                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                @elseif($flexibility >= 2.5 && $flexibility < 3) <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
            </div>
            @elseif($flexibility >= 2)
            <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            @elseif($flexibility >= 1.5 && $flexibility < 2) <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                </div>
                @elseif($flexibility >= 1)
                <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                @elseif($flexibility >= 0.5 && $flexibility < 1) <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    </div>
                    @else
                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    @endif
                    </div>
                    </div>
                    <div class="col-xl-1 col-lg-1 col-md-3 col-sm-12 col-12 text-right">
                        <h6 class="text-dark mb0">{{ number_format($flexibility,1) }}</h6>
                    </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                            <h5 class="mb0 text-right">Value of money</h5>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                            <div class="progress mt10">
                                @if($valueofmoney >= 4.9)
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                @elseif($valueofmoney >= 4.5 && $valueofmoney < 5) <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                            @elseif($valueofmoney >= 4)
                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            @elseif($valueofmoney >= 3.5 && $valueofmoney < 4) <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        </div>
                        @elseif($valueofmoney >= 3)
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        @elseif($valueofmoney >= 2.5 && $valueofmoney < 3) <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    </div>
                    @elseif($valueofmoney >= 2)
                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    @elseif($valueofmoney >= 1.5 && $valueofmoney < 2) <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        </div>
                        @elseif($valueofmoney >= 1)
                        <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        @elseif($valueofmoney >= 0.5 && $valueofmoney < 1) <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                            @else
                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            @endif
                            </div>
                            </div>
                            <div class="col-xl-1 col-lg-1 col-md-3 col-sm-12 col-12 text-right">
                                <h6 class="text-dark mb0">{{ number_format($valueofmoney,1) }}</h6>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card review-summary-table table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Rating</th>
                                                    <th>Email</th>
                                                    <th>Date</th>
                                                    <th>Detials</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($listing_review as $listing_review)
                                                <tr>
                                                    <td class="review-summary-name">{{ $listing_review->user_name }}</td>
                                                    <td class="review-summary-rating">
                                                        @if($listing_review->overall_rating == 25)
                                                        <span class="rated">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa  fa-star"></i>
                                                            <i class="fa  fa-star"></i>
                                                        </span>
                                                        @elseif($listing_review->overall_rating >= 20)
                                                        <span class="rated">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa  fa-star"></i>
                                                            <i class="far  fa-star"></i>
                                                        </span>
                                                        @elseif($listing_review->overall_rating >= 15)
                                                        <span class="rated">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="far  fa-star"></i>
                                                            <i class="far  fa-star"></i>
                                                        </span>
                                                        @elseif($listing_review->overall_rating >= 10)
                                                        <span class="rated">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far  fa-star"></i>
                                                            <i class="far  fa-star"></i>
                                                        </span>
                                                        @elseif($listing_review->overall_rating >= 5)
                                                        <span class="rated">
                                                            <i class="fa fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far  fa-star"></i>
                                                            <i class="far  fa-star"></i>
                                                        </span>
                                                        @else
                                                        <span class="rated">
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far  fa-star"></i>
                                                            <i class="far  fa-star"></i>
                                                        </span>
                                                        @endif
                                                        {{ number_format($listing_review->overall_rating/5,1) }}
                                                    </td>
                                                    <td class="review-summary-id">{{ $listing_review->user_email }}</td>
                                                    <td class="review-summary-time">{{ $listing_review->date }}</td>
                                                    <td class="review-summary-action"><a class="btn btn-outline-pink btn-xs" data-toggle="collapse" id="example-one" data-text-swap="close" data-text-original="Details" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">Details</a></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="12" class="expandable-info">
                                                        <div class="collapse expandable-collapse" id="collapseExample1">
                                                            <div class="row">
                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                    <!-- review-user -->
                                                                    <div class="review-user">
                                                                        <div class="user-img"> 
                                                                            @if($listing_review->user_image)
                                                                                <img style="width:50px;height:50px;" src="{{ asset('userimage') }}/{{$listing_review->user_image}}" alt="" class="rounded-circle">
                                                                            @else
                                                                                <img style="width:50px;height:50px;" src="{{ asset('images/dashboard-profile.jpg') }}" alt="" class="rounded-circle">
                                                                            @endif
                                                                        </div>
                                                                        <div class="user-meta">
                                                                            <span class="user-name">{{ $listing_review->user_name }}</span>
                                                                            <span class="user-review-date">Date : {{ $listing_review->date }}</span>
                                                                            <div class="given-review">
                                                                                @if($listing_review->overall_rating == 25)
                                                                                <span class="rated">
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa  fa-star"></i>
                                                                                    <i class="fa  fa-star"></i>
                                                                                </span>
                                                                                @elseif($listing_review->overall_rating >= 20)
                                                                                <span class="rated">
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa  fa-star"></i>
                                                                                    <i class="far  fa-star"></i>
                                                                                </span>
                                                                                @elseif($listing_review->overall_rating >= 15)
                                                                                <span class="rated">
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="far  fa-star"></i>
                                                                                    <i class="far  fa-star"></i>
                                                                                </span>
                                                                                @elseif($listing_review->overall_rating >= 10)
                                                                                <span class="rated">
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="far fa-star"></i>
                                                                                    <i class="far  fa-star"></i>
                                                                                    <i class="far  fa-star"></i>
                                                                                </span>
                                                                                @elseif($listing_review->overall_rating >= 5)
                                                                                <span class="rated">
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="far fa-star"></i>
                                                                                    <i class="far fa-star"></i>
                                                                                    <i class="far  fa-star"></i>
                                                                                    <i class="far  fa-star"></i>
                                                                                </span>
                                                                                @else
                                                                                <span class="rated">
                                                                                    <i class="far fa-star"></i>
                                                                                    <i class="far fa-star"></i>
                                                                                    <i class="far fa-star"></i>
                                                                                    <i class="far  fa-star"></i>
                                                                                    <i class="far  fa-star"></i>
                                                                                </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.review-user -->
                                                                    <!-- review-descripttions -->
                                                                    <div class="review-descriptions">
                                                                        <p>{{ $listing_review->review_text }}</p>
                                                                        <div class="row">
                                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                                                <!-- review-list -->
                                                                                <div class="review-list">
                                                                                    <div class="review-for">Quality Service</div>
                                                                                    <div class="review-rating">
                                                                                        @if($listing_review->quality_services == 5)
                                                                                        <span class="rated">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa  fa-star"></i>
                                                                                            <i class="fa  fa-star"></i>
                                                                                        </span>
                                                                                        @elseif($listing_review->quality_services >= 4.5 && $listing_review->quality_services < 5) <span class="rated">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa  fa-star"></i>
                                                                                            <i class="fa  fa-star-half"></i>
                                                                                            </span>
                                                                                            @elseif($listing_review->quality_services >= 4)
                                                                                            <span class="rated">
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa  fa-star"></i>
                                                                                                <i class="far  fa-star"></i>
                                                                                            </span>
                                                                                            @elseif($listing_review->quality_services >= 3.5 && $listing_review->quality_services < 4) <span class="rated">
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa  fa-star-half"></i>
                                                                                                <i class="far  fa-star"></i>
                                                                                                </span>
                                                                                                @elseif($listing_review->quality_services >= 3)
                                                                                                <span class="rated">
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="far  fa-star"></i>
                                                                                                    <i class="far  fa-star"></i>
                                                                                                </span>
                                                                                                @elseif($listing_review->quality_services >= 2.5 && $listing_review->quality_services < 3) <span class="rated">
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="fa fa-star-half"></i>
                                                                                                    <i class="far  fa-star"></i>
                                                                                                    <i class="far  fa-star"></i>
                                                                                                    </span>
                                                                                                    @elseif($listing_review->quality_services >= 2)
                                                                                                    <span class="rated">
                                                                                                        <i class="fa fa-star"></i>
                                                                                                        <i class="fa fa-star"></i>
                                                                                                        <i class="far fa-star"></i>
                                                                                                        <i class="far  fa-star"></i>
                                                                                                        <i class="far  fa-star"></i>
                                                                                                    </span>
                                                                                                    @elseif($listing_review->quality_services >= 1.5 && $listing_review->quality_services < 2) <span class="rated">
                                                                                                        <i class="fa fa-star"></i>
                                                                                                        <i class="fa fa-star-half"></i>
                                                                                                        <i class="far fa-star"></i>
                                                                                                        <i class="far  fa-star"></i>
                                                                                                        <i class="far  fa-star"></i>
                                                                                                        </span>
                                                                                                        @elseif($listing_review->quality_services >= 1)
                                                                                                        <span class="rated">
                                                                                                            <i class="fa fa-star"></i>
                                                                                                            <i class="far fa-star"></i>
                                                                                                            <i class="far fa-star"></i>
                                                                                                            <i class="far  fa-star"></i>
                                                                                                            <i class="far  fa-star"></i>
                                                                                                        </span>
                                                                                                        @elseif($listing_review->quality_services >= 0.5 && $listing_review->quality_services < 1) <span class="rated">
                                                                                                            <i class="fa fa-star-half"></i>
                                                                                                            <i class="far fa-star"></i>
                                                                                                            <i class="far fa-star"></i>
                                                                                                            <i class="far  fa-star"></i>
                                                                                                            <i class="far  fa-star"></i>
                                                                                                            </span>
                                                                                                            @else
                                                                                                            <span class="rated">
                                                                                                                <i class="far fa-star"></i>
                                                                                                                <i class="far fa-star"></i>
                                                                                                                <i class="far fa-star"></i>
                                                                                                                <i class="far  fa-star"></i>
                                                                                                                <i class="far  fa-star"></i>
                                                                                                            </span>
                                                                                                            @endif
                                                                                    </div>
                                                                                    <div class="review-number">{{ number_format($listing_review->qualityservices,1) }}</div>
                                                                                </div>
                                                                                <!-- /.review-list -->
                                                                                <!-- review-list -->
                                                                                <div class="review-list">
                                                                                    <div class="review-for">Facilities</div>
                                                                                    <div class="review-rating">
                                                                                        @if($listing_review->faciliteis == 5)
                                                                                        <span class="rated">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa  fa-star"></i>
                                                                                            <i class="fa  fa-star"></i>
                                                                                        </span>
                                                                                        @elseif($listing_review->faciliteis >= 4.5 && $listing_review->faciliteis < 5) <span class="rated">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa  fa-star"></i>
                                                                                            <i class="fa  fa-star-half"></i>
                                                                                            </span>
                                                                                            @elseif($listing_review->faciliteis >= 4)
                                                                                            <span class="rated">
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa  fa-star"></i>
                                                                                                <i class="far  fa-star"></i>
                                                                                            </span>
                                                                                            @elseif($listing_review->faciliteis >= 3.5 && $listing_review->faciliteis < 4) <span class="rated">
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa  fa-star-half"></i>
                                                                                                <i class="far  fa-star"></i>
                                                                                                </span>
                                                                                                @elseif($listing_review->faciliteis >= 3)
                                                                                                <span class="rated">
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="far  fa-star"></i>
                                                                                                    <i class="far  fa-star"></i>
                                                                                                </span>
                                                                                                @elseif($listing_review->faciliteis >= 2.5 && $listing_review->faciliteis < 3) <span class="rated">
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="fa fa-star-half"></i>
                                                                                                    <i class="far  fa-star"></i>
                                                                                                    <i class="far  fa-star"></i>
                                                                                                    </span>
                                                                                                    @elseif($listing_review->faciliteis >= 2)
                                                                                                    <span class="rated">
                                                                                                        <i class="fa fa-star"></i>
                                                                                                        <i class="fa fa-star"></i>
                                                                                                        <i class="far fa-star"></i>
                                                                                                        <i class="far  fa-star"></i>
                                                                                                        <i class="far  fa-star"></i>
                                                                                                    </span>
                                                                                                    @elseif($listing_review->faciliteis >= 1.5 && $listing_review->faciliteis < 2) <span class="rated">
                                                                                                        <i class="fa fa-star"></i>
                                                                                                        <i class="fa fa-star-half"></i>
                                                                                                        <i class="far fa-star"></i>
                                                                                                        <i class="far  fa-star"></i>
                                                                                                        <i class="far  fa-star"></i>
                                                                                                        </span>
                                                                                                        @elseif($listing_review->faciliteis >= 1)
                                                                                                        <span class="rated">
                                                                                                            <i class="fa fa-star"></i>
                                                                                                            <i class="far fa-star"></i>
                                                                                                            <i class="far fa-star"></i>
                                                                                                            <i class="far  fa-star"></i>
                                                                                                            <i class="far  fa-star"></i>
                                                                                                        </span>
                                                                                                        @elseif($listing_review->faciliteis >= 0.5 && $listing_review->faciliteis < 1) <span class="rated">
                                                                                                            <i class="fa fa-star-half"></i>
                                                                                                            <i class="far fa-star"></i>
                                                                                                            <i class="far fa-star"></i>
                                                                                                            <i class="far  fa-star"></i>
                                                                                                            <i class="far  fa-star"></i>
                                                                                                            </span>
                                                                                                            @else
                                                                                                            <span class="rated">
                                                                                                                <i class="far fa-star"></i>
                                                                                                                <i class="far fa-star"></i>
                                                                                                                <i class="far fa-star"></i>
                                                                                                                <i class="far  fa-star"></i>
                                                                                                                <i class="far  fa-star"></i>
                                                                                                            </span>
                                                                                                            @endif
                                                                                    </div>
                                                                                    <div class="review-number">{{ number_format($listing_review->faciliteis,1) }}</div>
                                                                                </div>
                                                                                <!-- /.review-list -->
                                                                                <!-- review-list -->
                                                                                <div class="review-list">
                                                                                    <div class="review-for">Staff</div>
                                                                                    <div class="review-rating">
                                                                                        @if($listing_review->staff == 5)
                                                                                        <span class="rated">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa  fa-star"></i>
                                                                                            <i class="fa  fa-star"></i>
                                                                                        </span>
                                                                                        @elseif($listing_review->staff >= 4.5 && $listing_review->staff < 5) <span class="rated">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa  fa-star"></i>
                                                                                            <i class="fa  fa-star-half"></i>
                                                                                            </span>
                                                                                            @elseif($listing_review->staff >= 4)
                                                                                            <span class="rated">
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa  fa-star"></i>
                                                                                                <i class="far  fa-star"></i>
                                                                                            </span>
                                                                                            @elseif($listing_review->staff >= 3.5 && $listing_review->staff < 4) <span class="rated">
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa  fa-star-half"></i>
                                                                                                <i class="far  fa-star"></i>
                                                                                                </span>
                                                                                                @elseif($listing_review->staff >= 3)
                                                                                                <span class="rated">
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="far  fa-star"></i>
                                                                                                    <i class="far  fa-star"></i>
                                                                                                </span>
                                                                                                @elseif($listing_review->staff >= 2.5 && $listing_review->staff < 3) <span class="rated">
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="fa fa-star-half"></i>
                                                                                                    <i class="far  fa-star"></i>
                                                                                                    <i class="far  fa-star"></i>
                                                                                                    </span>
                                                                                                    @elseif($listing_review->staff >= 2)
                                                                                                    <span class="rated">
                                                                                                        <i class="fa fa-star"></i>
                                                                                                        <i class="fa fa-star"></i>
                                                                                                        <i class="far fa-star"></i>
                                                                                                        <i class="far  fa-star"></i>
                                                                                                        <i class="far  fa-star"></i>
                                                                                                    </span>
                                                                                                    @elseif($listing_review->staff >= 1.5 && $listing_review->staff < 2) <span class="rated">
                                                                                                        <i class="fa fa-star"></i>
                                                                                                        <i class="fa fa-star-half"></i>
                                                                                                        <i class="far fa-star"></i>
                                                                                                        <i class="far  fa-star"></i>
                                                                                                        <i class="far  fa-star"></i>
                                                                                                        </span>
                                                                                                        @elseif($listing_review->staff >= 1)
                                                                                                        <span class="rated">
                                                                                                            <i class="fa fa-star"></i>
                                                                                                            <i class="far fa-star"></i>
                                                                                                            <i class="far fa-star"></i>
                                                                                                            <i class="far  fa-star"></i>
                                                                                                            <i class="far  fa-star"></i>
                                                                                                        </span>
                                                                                                        @elseif($listing_review->staff >= 0.5 && $listing_review->staff < 1) <span class="rated">
                                                                                                            <i class="fa fa-star-half"></i>
                                                                                                            <i class="far fa-star"></i>
                                                                                                            <i class="far fa-star"></i>
                                                                                                            <i class="far  fa-star"></i>
                                                                                                            <i class="far  fa-star"></i>
                                                                                                            </span>
                                                                                                            @else
                                                                                                            <span class="rated">
                                                                                                                <i class="far fa-star"></i>
                                                                                                                <i class="far fa-star"></i>
                                                                                                                <i class="far fa-star"></i>
                                                                                                                <i class="far  fa-star"></i>
                                                                                                                <i class="far  fa-star"></i>
                                                                                                            </span>
                                                                                                            @endif
                                                                                    </div>
                                                                                    <div class="review-number">{{ number_format($listing_review->staff,1) }}</div>
                                                                                </div>
                                                                                <!-- /.review-list -->
                                                                                <!-- review-list -->
                                                                                <div class="review-list">
                                                                                    <div class="review-for">Flexibility</div>
                                                                                    <div class="review-rating">
                                                                                        @if($listing_review->flexibility == 5)
                                                                                        <span class="rated">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa  fa-star"></i>
                                                                                            <i class="fa  fa-star"></i>
                                                                                        </span>
                                                                                        @elseif($listing_review->flexibility >= 4.5 && $listing_review->flexibility < 5) <span class="rated">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa  fa-star"></i>
                                                                                            <i class="fa  fa-star-half"></i>
                                                                                            </span>
                                                                                            @elseif($listing_review->flexibility >= 4)
                                                                                            <span class="rated">
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa  fa-star"></i>
                                                                                                <i class="far  fa-star"></i>
                                                                                            </span>
                                                                                            @elseif($listing_review->flexibility >= 3.5 && $listing_review->flexibility < 4) <span class="rated">
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa  fa-star-half"></i>
                                                                                                <i class="far  fa-star"></i>
                                                                                                </span>
                                                                                                @elseif($listing_review->flexibility >= 3)
                                                                                                <span class="rated">
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="far  fa-star"></i>
                                                                                                    <i class="far  fa-star"></i>
                                                                                                </span>
                                                                                                @elseif($listing_review->flexibility >= 2.5 && $listing_review->flexibility < 3) <span class="rated">
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="fa fa-star-half"></i>
                                                                                                    <i class="far  fa-star"></i>
                                                                                                    <i class="far  fa-star"></i>
                                                                                                    </span>
                                                                                                    @elseif($listing_review->flexibility >= 2)
                                                                                                    <span class="rated">
                                                                                                        <i class="fa fa-star"></i>
                                                                                                        <i class="fa fa-star"></i>
                                                                                                        <i class="far fa-star"></i>
                                                                                                        <i class="far  fa-star"></i>
                                                                                                        <i class="far  fa-star"></i>
                                                                                                    </span>
                                                                                                    @elseif($listing_review->flexibility >= 1.5 && $listing_review->flexibility < 2) <span class="rated">
                                                                                                        <i class="fa fa-star"></i>
                                                                                                        <i class="fa fa-star-half"></i>
                                                                                                        <i class="far fa-star"></i>
                                                                                                        <i class="far  fa-star"></i>
                                                                                                        <i class="far  fa-star"></i>
                                                                                                        </span>
                                                                                                        @elseif($listing_review->flexibility >= 1)
                                                                                                        <span class="rated">
                                                                                                            <i class="fa fa-star"></i>
                                                                                                            <i class="far fa-star"></i>
                                                                                                            <i class="far fa-star"></i>
                                                                                                            <i class="far  fa-star"></i>
                                                                                                            <i class="far  fa-star"></i>
                                                                                                        </span>
                                                                                                        @elseif($listing_review->flexibility >= 0.5 && $listing_review->flexibility < 1) <span class="rated">
                                                                                                            <i class="fa fa-star-half"></i>
                                                                                                            <i class="far fa-star"></i>
                                                                                                            <i class="far fa-star"></i>
                                                                                                            <i class="far  fa-star"></i>
                                                                                                            <i class="far  fa-star"></i>
                                                                                                            </span>
                                                                                                            @else
                                                                                                            <span class="rated">
                                                                                                                <i class="far fa-star"></i>
                                                                                                                <i class="far fa-star"></i>
                                                                                                                <i class="far fa-star"></i>
                                                                                                                <i class="far  fa-star"></i>
                                                                                                                <i class="far  fa-star"></i>
                                                                                                            </span>
                                                                                                            @endif
                                                                                    </div>
                                                                                    <div class="review-number">{{ number_format($listing_review->flexibility,1) }}</div>
                                                                                </div>
                                                                                <!-- /.review-list -->
                                                                                <!-- review-list -->
                                                                                <div class="review-list">
                                                                                    <div class="review-for">Value of money</div>
                                                                                    <div class="review-rating">
                                                                                        @if($listing_review->value_of_money == 5)
                                                                                        <span class="rated">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa  fa-star"></i>
                                                                                            <i class="fa  fa-star"></i>
                                                                                        </span>
                                                                                        @elseif($listing_review->value_of_money >= 4.5 && $listing_review->value_of_money < 5) <span class="rated">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa  fa-star"></i>
                                                                                            <i class="fa  fa-star-half"></i>
                                                                                            </span>
                                                                                            @elseif($listing_review->value_of_money >= 4)
                                                                                            <span class="rated">
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa  fa-star"></i>
                                                                                                <i class="far  fa-star"></i>
                                                                                            </span>
                                                                                            @elseif($listing_review->value_of_money >= 3.5 && $listing_review->value_of_money < 4) <span class="rated">
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa  fa-star-half"></i>
                                                                                                <i class="far  fa-star"></i>
                                                                                                </span>
                                                                                                @elseif($listing_review->value_of_money >= 3)
                                                                                                <span class="rated">
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="far  fa-star"></i>
                                                                                                    <i class="far  fa-star"></i>
                                                                                                </span>
                                                                                                @elseif($listing_review->value_of_money >= 2.5 && $listing_review->value_of_money < 3) <span class="rated">
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="fa fa-star"></i>
                                                                                                    <i class="fa fa-star-half"></i>
                                                                                                    <i class="far  fa-star"></i>
                                                                                                    <i class="far  fa-star"></i>
                                                                                                    </span>
                                                                                                    @elseif($listing_review->value_of_money >= 2)
                                                                                                    <span class="rated">
                                                                                                        <i class="fa fa-star"></i>
                                                                                                        <i class="fa fa-star"></i>
                                                                                                        <i class="far fa-star"></i>
                                                                                                        <i class="far  fa-star"></i>
                                                                                                        <i class="far  fa-star"></i>
                                                                                                    </span>
                                                                                                    @elseif($listing_review->value_of_money >= 1.5 && $listing_review->value_of_money < 2) <span class="rated">
                                                                                                        <i class="fa fa-star"></i>
                                                                                                        <i class="fa fa-star-half"></i>
                                                                                                        <i class="far fa-star"></i>
                                                                                                        <i class="far  fa-star"></i>
                                                                                                        <i class="far  fa-star"></i>
                                                                                                        </span>
                                                                                                        @elseif($listing_review->value_of_money >= 1)
                                                                                                        <span class="rated">
                                                                                                            <i class="fa fa-star"></i>
                                                                                                            <i class="far fa-star"></i>
                                                                                                            <i class="far fa-star"></i>
                                                                                                            <i class="far  fa-star"></i>
                                                                                                            <i class="far  fa-star"></i>
                                                                                                        </span>
                                                                                                        @elseif($listing_review->value_of_money >= 0.5 && $listing_review->value_of_money < 1) <span class="rated">
                                                                                                            <i class="fa fa-star-half"></i>
                                                                                                            <i class="far fa-star"></i>
                                                                                                            <i class="far fa-star"></i>
                                                                                                            <i class="far  fa-star"></i>
                                                                                                            <i class="far  fa-star"></i>
                                                                                                            </span>
                                                                                                            @else
                                                                                                            <span class="rated">
                                                                                                                <i class="far fa-star"></i>
                                                                                                                <i class="far fa-star"></i>
                                                                                                                <i class="far fa-star"></i>
                                                                                                                <i class="far  fa-star"></i>
                                                                                                                <i class="far  fa-star"></i>
                                                                                                            </span>
                                                                                                            @endif
                                                                                    </div>
                                                                                    <div class="review-number">{{ number_format($listing_review->value_of_money,1) }}</div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /.review-list -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.review-descripttions -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            @endsection