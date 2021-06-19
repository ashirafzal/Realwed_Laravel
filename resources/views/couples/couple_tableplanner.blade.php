@extends('layouts.couple_dashboard_layout')

@section('content')
<div class="dashboard-content">
    <div class="container-fluid">
        <!-- 4 seat edit form -->
        <div class="row" id="row1" style="display:none;">
            <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="card">
                            <div class="card-header">Edit table seating</div>
                            <div class="card-body">
                                <div class="alert alert-info alert-block" id="4seatalertinfo" style="display:none;">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong></strong>
                                </div>
                                <div class="alert alert-danger alert-block" style="display:none;">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong></strong>
                                </div>
                                <form id="4seatedit" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="personal-form-info">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <input id="4seattableid" name="4seattableid" type="hidden" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <input id="4seatcoupleid" name="4seatcoupleid" type="hidden" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="4seattablename">Table Name</label>
                                                    <input id="4seattablename" name="4seattablename" type="text" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <input id="4seatcapacity" name="4seatcapacity" type="hidden" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="4seatguest1">Guest 1</label>
                                                    <input id="4seatguest1" name="4seatguest1" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="4seatguest2">Guest 2</label>
                                                    <input id="4seatguest2" name="4seatguest2" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="4seatguest3">Guest 3</label>
                                                    <input id="4seatguest3" name="4seatguest3" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="4seatguest4">Guest 4</label>
                                                    <input id="4seatguest4" name="4seatguest4" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <button class="btn btn-default btn-block">Edit table seating</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 4 seat edit end form -->
        <br />
        <!-- 8 seat edit form -->
        <div class="row" id="row2" style="display:none;">
            <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="card">
                            <div class="card-header">Edit table seating</div>
                            <div class="card-body">
                                <div class="alert alert-info alert-block" id="8seatalertinfo" style="display:none;">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong></strong>
                                </div>
                                <div class="alert alert-danger alert-block" id="8seatalertdanger" style="display:none;">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong></strong>
                                </div>
                                <form id="8seatedit" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="personal-form-info">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <input id="8seattableid" name="8seattableid" type="hidden" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <input id="8seatcoupleid" name="8seatcoupleid" type="hidden" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="8seattablename">Table Name</label>
                                                    <input id="8seattablename" name="8seattablename" type="text" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <input id="8seatcapacity" name="8seatcapacity" type="hidden" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="8seatguest1">Guest 1</label>
                                                    <input id="8seatguest1" name="8seatguest1" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="8seatguest2">Guest 2</label>
                                                    <input id="8seatguest2" name="8seatguest2" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="8seatguest3">Guest 3</label>
                                                    <input id="8seatguest3" name="8seatguest3" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="8seatguest4">Guest 4</label>
                                                    <input id="8seatguest4" name="8seatguest4" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="8seatguest5">Guest 5</label>
                                                    <input id="8seatguest5" name="8seatguest5" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="8seatguest6">Guest 6</label>
                                                    <input id="8seatguest6" name="8seatguest6" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="8seatguest7">Guest 7</label>
                                                    <input id="8seatguest7" name="8seatguest7" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="8seatguest8">Guest 8</label>
                                                    <input id="8seatguest8" name="8seatguest8" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <button class="btn btn-default btn-block">Edit table seating</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 8 seat edit end form -->
        <br />
        <!-- 12 seat edit form -->
        <div class="row" id="row3" style="display:none;">
            <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="card">
                            <div class="card-header">Edit table seating</div>
                            <div class="card-body">
                                <div class="alert alert-info alert-block" id="12seatalertinfo" style="display:none;">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong></strong>
                                </div>
                                <div class="alert alert-danger alert-block" id="12seatalertdanger" style="display:none;">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong></strong>
                                </div>
                                <form id="12seatedit" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="personal-form-info">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <input id="12seattableid" name="12seattableid" type="hidden" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <input id="12seatcoupleid" name="12seatcoupleid" type="hidden" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="12seattablename">Table Name</label>
                                                    <input id="12seattablename" name="12seattablename" type="text" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <input id="12seatcapacity" name="12seatcapacity" type="hidden" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="12seatguest1">Guest 1</label>
                                                    <input id="12seatguest1" name="12seatguest1" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="12seatguest2">Guest 2</label>
                                                    <input id="12seatguest2" name="12seatguest2" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="12seatguest3">Guest 3</label>
                                                    <input id="12seatguest3" name="12seatguest3" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="12seatguest4">Guest 4</label>
                                                    <input id="12seatguest4" name="12seatguest4" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="12seatguest5">Guest 5</label>
                                                    <input id="12seatguest5" name="12seatguest5" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="12seatguest6">Guest 6</label>
                                                    <input id="12seatguest6" name="12seatguest6" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="12seatguest7">Guest 7</label>
                                                    <input id="12seatguest7" name="12seatguest7" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="12seatguest8">Guest 8</label>
                                                    <input id="12seatguest8" name="12seatguest8" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="12seatguest9">Guest 9</label>
                                                    <input id="12seatguest9" name="12seatguest9" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="12seatguest10">Guest 10</label>
                                                    <input id="12seatguest10" name="12seatguest10" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="12seatguest11">Guest 11</label>
                                                    <input id="12seatguest11" name="12seatguest11" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="12seatguest12">Guest 12</label>
                                                    <input id="12seatguest12" name="12seatguest12" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <button class="btn btn-default btn-block">Edit table seating</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 12 seat edit end form -->
        <br />
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="dashboard-page-header">
                    <h3 class="dashboard-page-title">Table Seating Planner</h3>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-xl-8 col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 text-right mb20">
                <div id='slide-panel' class="slide-panel-light">
                    <h3>Create Table</h3>
                    <form id="createtable">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="control-label" for="tablename">Table Name</label>
                                    <input id="tablename" name="tablename" type="text" placeholder="Table name here" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="control-label" for="seating">Select seating capacity</label>
                                    <input id="ms2" name="seating_capacity" type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="control-label" for="seating">Select Guest</label>
                                    <input id="ms1" name="seating" type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Create Table</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <a href="#" class="btn btn-default" id='trigger'>Add new table</a>
            </div>
        </div>
        <div class="row">
            <!-- four seat loop-->
            @foreach($seatingfour as $seatingfour)
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card seating-table-list table-responsive">
                    <table class="table" id="table1{{$seatingfour->id}}">
                        <thead>
                            <tr>
                                <th colspan="2" class="seating-table-name">
                                    <span class="mb0">{{$seatingfour->tablename}}</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="display:none;" class="seating-guest-name">{{$seatingfour->id}}</td>
                                <td style="display:none;" class="seating-guest-name">{{$seatingfour->coupleid}}</td>
                                <td style="display:none;" class="seating-guest-name">{{$seatingfour->tablename}}</td>
                                <td style="display:none;" class="seating-guest-name">{{$seatingfour->seatingcapacity}}</td>
                                <td class="seating-guest-name">{{$seatingfour->guest1}}</td>
                                <td class="seating-guest-name">{{$seatingfour->guest2}}</td>
                                <td class="seating-guest-name">{{$seatingfour->guest3}}</td>
                                <td class="seating-guest-name">{{$seatingfour->guest4}}</td>
                                <td class="seating-table-action"><a href="javascript:edittask()" onclick="edittask1{{$seatingfour->id}}()" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @endforeach
            <!-- Eight seat loop -->
            @foreach($seatingeight as $seatingeight)
            <div class="col-xl-12">
                <div class="card seating-table-list table-responsive">
                    <table class="table" id="table2{{$seatingeight->id}}">
                        <thead>
                            <tr>
                                <th colspan="2" class="seating-table-name">
                                    <span class="mb0">{{$seatingeight->tablename}}</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="display:none;" class="seating-guest-name">{{$seatingeight->id}}</td>
                                <td style="display:none;" class="seating-guest-name">{{$seatingeight->coupleid}}</td>
                                <td style="display:none;" class="seating-guest-name">{{$seatingeight->tablename}}</td>
                                <td style="display:none;" class="seating-guest-name">{{$seatingeight->seatingcapacity}}</td>
                                <td class="seating-guest-name">{{$seatingeight->guest1}}</td>
                                <td class="seating-guest-name">{{$seatingeight->guest2}}</td>
                                <td class="seating-guest-name">{{$seatingeight->guest3}}</td>
                                <td class="seating-guest-name">{{$seatingeight->guest4}}</td>
                                <td class="seating-guest-name">{{$seatingeight->guest5}}</td>
                                <td class="seating-guest-name">{{$seatingeight->guest6}}</td>
                                <td class="seating-guest-name">{{$seatingeight->guest7}}</td>
                                <td class="seating-guest-name">{{$seatingeight->guest8}}</td>
                                <td class="seating-guest-name"><a href="javascript:edittask2()" onclick="edittask2{{$seatingeight->id}}()" class="btn btn-outline-violate btn-xs mr10">edit</a></td>
                                <td class="seating-guest-name"><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @endforeach
            <!-- Twelve seat loop -->
            @foreach($seatingtwelve as $seatingtwelve)
            <div class="col-xl-12">
                <div class="card seating-table-list table-responsive">
                    <table class="table" id="table3{{$seatingtwelve->id}}">
                        <thead>
                            <tr>
                                <th colspan="2" class="seating-table-name">
                                    <span class="mb0">{{$seatingtwelve->tablename}}</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="display:none;" class="seating-guest-name">{{$seatingtwelve->id}}</td>
                                <td style="display:none;" class="seating-guest-name">{{$seatingtwelve->coupleid}}</td>
                                <td style="display:none;" class="seating-guest-name">{{$seatingtwelve->tablename}}</td>
                                <td style="display:none;" class="seating-guest-name">{{$seatingtwelve->seatingcapacity}}</td>
                                <td class="seating-guest-name">{{$seatingtwelve->guest1}}</td>
                                <td class="seating-guest-name">{{$seatingtwelve->guest2}}</td>
                                <td class="seating-guest-name">{{$seatingtwelve->guest3}}</td>
                                <td class="seating-guest-name">{{$seatingtwelve->guest4}}</td>
                                <td class="seating-guest-name">{{$seatingtwelve->guest5}}</td>
                                <td class="seating-guest-name">{{$seatingtwelve->guest6}}</td>
                                <td class="seating-guest-name">{{$seatingtwelve->guest7}}</td>
                                <td class="seating-guest-name">{{$seatingtwelve->guest8}}</td>
                                <td class="seating-guest-name">{{$seatingtwelve->guest9}}</td>
                                <td class="seating-guest-name">{{$seatingtwelve->guest10}}</td>
                                <td class="seating-guest-name">{{$seatingtwelve->guest11}}</td>
                                <td class="seating-guest-name">{{$seatingtwelve->guest12}}</td>
                                <td class="seating-guest-name"><a href="javascript:edittask3()" onclick="edittask3{{$seatingtwelve->id}}()" class="btn btn-outline-violate btn-xs mr10">edit</a></td>
                                <td class="seating-guest-name"><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection