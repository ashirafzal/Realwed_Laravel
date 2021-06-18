@extends('layouts.couple_dashboard_layout')

@section('content')
<div class="dashboard-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="dashboard-page-header">
                    <h3 class="dashboard-page-title">Couple Dashboard</h3>
                    <p>Welcome couple. You can check and manage your wishlist, checklist, budget and guestlist overview.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card summary-block summary-vendor-wishlist">
                    <div class=" card-body summary-content">
                        <h3 class="summary-title ">Vendors Wishlist</h3>
                        @if($wishlist = 0)
                        <div class="summary-count">0</div>
                        @else
                        <div class="summary-count">{{ $wishlist }}</div>
                        @endif
                        <p class="summary-text">Compare & Finalize</p>
                    </div>
                    <div class="card-footer text-center"><a href="#">View All</a></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card summary-block summary-table-seating">
                    <div class="card-body summary-content">
                        <h3 class="summary-title ">Table Seating</h3>
                        @if($tableseatingtotal = 0)
                        <div class="summary-count">0</div>
                        @else
                        <div class="summary-count">{{ $tableseatingtotal }}</div>
                        @endif
                        <p class="summary-text"><span class="text-primary">15</span> Seat remain</p>
                    </div>
                    <div class="card-footer text-center"><a href="#">View All</a></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card summary-block summary-guest-list">
                    <div class="card-body summary-content">
                        <h3 class="summary-title ">Guest List</h3>
                        @if($guestlisttotal = 0)
                        <div class="summary-count">0</div>
                        @else
                        <div class="summary-count">{{ $guestlisttotal }}</div>
                        @endif
                        <p class="summary-text">0 Accepted <span class="ml5">0 Declined</span></p>
                    </div>
                    <div class="card-footer text-center"><a href="#">View All</a></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card summary-block summary-budget">
                    <div class=" card-body summary-content">
                        <h3 class="summary-title ">Budget</h3>
                        <div class="summary-count">$12000</div>
                        <p class="summary-text">Spent $ 2000 out of $10,000 so far.</p>
                    </div>
                    <div class="card-footer text-center"><a href="#">View All</a></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card summary-block summary-todo">
                    <div class="card-body summary-content">
                        <h3 class="summary-title ">Total To Do</h3>
                        <div class="summary-count">12</div>
                        <p class="summary-text">5 Complete <span class="ml5">7 remain</span></p>
                    </div>
                    <div class="card-footer text-center"><a href="#">View All</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection