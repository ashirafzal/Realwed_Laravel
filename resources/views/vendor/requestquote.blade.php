@extends('layouts.vendor_dashboard_layout')

@section('content')
    <div class="dashboard-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="dashboard-page-header">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h3 class="dashboard-page-title">Request List</h3>
                                <p>Check your request quote.</p>
                            </div>
                        </div>
                    </div>
                    <!--
                            <div class="dashboard-filter-row mb20">
                                <div class="row">
                                    <div class="col-xl-3">
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
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    <br>
                    @endif
                    <div class="card request-list-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Wedding Date</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($requestquote as $requestquote)
                                <tr>
                                    <td class="requester-name">{{ $requestquote->name }}</td>
                                    <td class="wedding-date">{{ $requestquote->weddingdate }}</td>
                                    <td class="requester-id">{{ $requestquote->email }}</td>
                                    <td class="requester-phone">{{ $requestquote->phone }}</td>
                                    <td class="requester-action"><a href="delete-requestquote/{{$requestquote->id}}" class="btn btn-outline-pink btn-xs">delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection