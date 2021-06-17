@extends('layouts.vendor_dashboard_layout')

@section('content')
    <div class="dashboard-content">
        <div class="container-fluid">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            <br>
            @endif
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="dashboard-page-header">
                        <h3 class="dashboard-page-title">My Listing</h3>
                        <p>Lists present multiple line items vertically as a single continuous element.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right mb20">
                    <a href="/dashboardaddlisting" class="btn btn-default btn-sm">add new Listing</a>
                </div>
            </div>
            <div class="dashboard-vendor-list">
                <ul class="list-unstyled">
                    @foreach ($listing as $listing)
                    <li>
                        <div class="dashboard-list-block">
                            <div class="row">
                                <div class="col-xl-2 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="dashboard-list-img">
                                        <a href="list-detail/{{$listing->id }}"><img style="height:150px;" src="userimage/{{$listing->filebutton}}" alt="Listing image" class="img-fluid"></a>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-5 col-md-6 col-sm-12 col-12 ">
                                    <div class="dashboard-list-content">
                                        <h3 class="mb0"><a href="list-detail/{{$listing->id }}" class="title">{{ $listing->title }}</a></h3>
                                        <p>{{ $listing->editordata }}</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="dashboard-list-btn">
                                        <a href="editlisting/{{$listing->id }}" class="btn btn-outline-violate btn-xs mr10">edit</a>
                                        <a href="deletelisting/{{$listing->id }}" class="btn btn-outline-pink btn-xs ">delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection