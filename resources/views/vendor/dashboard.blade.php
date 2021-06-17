@extends('layouts.vendor_dashboard_layout')

@section('content')
    <div class="dashboard-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-10 col-md-9 col-sm-12 col-12">
                    <div class="dashboard-page-header">

                        <h3 class="dashboard-page-title">Hi, Vendor.</h3>
                        <p class="d-block">Here’s what’s happening with your wedding venue business today.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="card card-summary">
                        <div class="card-body">
                            <div class="float-left">
                                <div class="summary-count">{{ $listing }}</div>
                                <p>Total Listed Item</p>
                            </div>
                            <div class="summary-icon"><i class="icon-051-wedding-arch"></i></div>

                        </div>
                        <div class="card-footer text-center"><a href="mylisting">View All</a></div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="card card-summary">
                        <div class="card-body">
                            <div class="float-left">
                                <div class="summary-count">{{ $requestquote_count }}</div>
                                <p>Request Quote</p>
                            </div>
                            <div class="summary-icon"><i class="icon-021-love-1"></i></div>
                        </div>
                        <div class="card-footer text-center"><a href="requestquote-view">View All</a></div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="card card-summary">
                        <div class="card-body">
                            <div class="float-left">
                                <div class="summary-count">{{ $listing_review_count }}</div>
                                <p>Your Reviews</p>
                            </div>
                            <div class="summary-icon"><i class="icon-004-chat"></i></div>
                        </div>
                        <div class="card-footer text-center"><a href="Reviews">View All</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection