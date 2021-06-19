@extends('layouts.couple_dashboard_layout')

@section('content')
<div class="dashboard-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-8 col-sm-12 col-12">
                <div class="dashboard-page-header">
                    <h3 class="dashboard-page-title">Add New Guest</h3>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="single-guest-tab" data-toggle="tab" href="#single-guest" role="tab" aria-controls="single-guest" aria-selected="true">Single Guest</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="couple-guest-tab" data-toggle="tab" href="#couple-guest" role="tab" aria-controls="couple-guest" aria-selected="false">Couple </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="household-tab" data-toggle="tab" href="#household" role="tab" aria-controls="household" aria-selected="false">Household</a>
                    </li>
                </ul>
            </div>
            <div class="">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="single-guest" role="tabpanel" aria-labelledby="single-guest-tab">
                        <form id="single_guest">
                            <div class="alert alert-danger alert-block" id="danger_msg" style="display:none;">
                            </div>
                            <div class="alert alert-success alert-block" id="success_msg" style="display:none;">
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h4>Guest Information</h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="fname">First Name</label>
                                            <input id="fname" name="fname" type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="lname">Last Name</label>
                                            <input id="lname" name="lname" type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h4>Relation with couple</h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="family">Group/Family</label>
                                            <select class="wide" name="family" id="family">
                                                <option value="Groom Sister">Groom Sister</option>
                                                <option value="Bride Friend">Bride Friend</option>
                                                <option value="Groom Friend">Groom Friend</option>
                                                <option value="Bride Family">Bride Family</option>
                                                <option value="Groom Family">Groom Family</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h4>Contact Information</h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="address1">Address Line 1</label>
                                            <input id="address" name="address" type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="address2">Address Line 2</label>
                                            <input id="address2" name="address2" type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="email">Email</label>
                                            <input id="email" name="email" type="email" placeholder="" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="city1">City</label>
                                            <select class="wide" name="city" id="city">
                                                <option value="Karachi">Karachi</option>
                                                <option value="Lahore">Lahore</option>
                                                <option value="Islamabad">Islamabad</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="country">Country</label>
                                            <select class="wide" name="country" id="country">
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="UK">UK</option>
                                                <option value="US">US</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="postcode">Postcode</label>
                                            <input id="postcode" name="postcode" type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <button type="submit" name="singlebutton" class="btn btn-default">Save Guest Details</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="couple-guest" role="tabpanel" aria-labelledby="couple-guest-tab">
                        <form id="couple_guest">
                            <div class="alert alert-danger alert-block" id="couple_danger_msg" style="display:none;">
                            </div>
                            <div class="alert alert-success alert-block" id="couple_success_msg" style="display:none;">
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Guest Information</h3>
                                        <hr>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="firstname">First Name</label>
                                            <input id="couple_firstname" name="couple_firstname" type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="lastname">Last Name</label>
                                            <input id="couple_lastname" name="couple_lastname" type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="partnerfname">Partner First Name</label>
                                            <input id="couple_partnerfname" name="couple_partnerfname" type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="partnerlname">Partner Last Name</label>
                                            <input id="couple_partnerlname" name="couple_partnerlname" type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" id="family2">Group/Family</label>
                                            <select class="wide" id="couple_group" name="couple_group" for="family2">
                                                <option value="Groom Sister">Groom Sister</option>
                                                <option value="Bride Friend">Bride Friend</option>
                                                <option value="Groom Friend">Groom Friend</option>
                                                <option value="Bride Family">Bride Family</option>
                                                <option value="Groom Family">Groom Family</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Contact Information</h3>
                                        <hr>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="address3">Address Line 1</label>
                                            <input id="couple_address" name="couple_address" type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="address4">Address Line 2</label>
                                            <input id="couple_address2" name="couple_address2" type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="emailsecond">Email</label>
                                            <input id="couple_email" name="couple_email" type="email" placeholder="" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="city1">City</label>
                                            <select class="wide" name="couple_city" id="couple_city">
                                                <option value="Karachi">Karachi</option>
                                                <option value="Lahore">Lahore</option>
                                                <option value="Islamabad">Islamabad</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="country">Country</label>
                                            <select class="wide" name="couple_country" id="couple_country">
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="UK">UK</option>
                                                <option value="US">US</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="postcode1">Postcode</label>
                                            <input id="couple_postcode" name="couple_postcode" type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <button type="submit" name="singlebutton" class="btn btn-default">Save Guest Details</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="household" role="tabpanel" aria-labelledby="household-tab">
                        <form id="household_guest">
                            <div class="alert alert-danger alert-block" id="household_danger_msg" style="display:none;">
                            </div>
                            <div class="alert alert-success alert-block" id="household_success_msg" style="display:none;">
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Guest Information</h3>
                                        <hr>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="fname">First Name</label>
                                                    <input id="household_fname" name="household_fname" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="lname">Last Name</label>
                                                    <input id="household_lname" name="household_lname" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <!--
                                                    <div class="col-xl-2">
                                                        <button class="btn btn-primary mt30"> Delete</button>
                                                    </div>
                                                    -->
                                        </div>
                                    </div>
                                    <!--
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <a href="#" class="btn btn-default">Add New Row</a>
                                            </div>
                                            -->
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mt30 mb30">
                                        <div class="form-group">
                                            <label class="control-label" for="family">Group/Family</label>
                                            <select class="wide" name="household_family" id="household_family">
                                                <option value="Groom Sister">Groom Sister</option>
                                                <option value="Bride Friend">Bride Friend</option>
                                                <option value="Groom Friend">Groom Friend</option>
                                                <option value="Bride Family">Bride Family</option>
                                                <option value="Groom Family">Groom Family</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Contact Information</h3>
                                        <hr>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="address">Address Line 1</label>
                                            <input id="household_address" name="household_address" type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="address6">Address Line 2</label>
                                            <input id="household_address2" name="household_address2" type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="email">Email</label>
                                            <input id="household_email" name="household_email" type="email" placeholder="" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="city">City</label>
                                            <select class="wide" name="household_city" id="household_city">
                                                <option value="Karachi">Karachi</option>
                                                <option value="Lahore">Lahore</option>
                                                <option value="Islamabad">Islamabad</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="country">Country</label>
                                            <select class="wide" name="household_country" id="household_country">
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="UK">UK</option>
                                                <option value="US">US</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="postcode">Postcode</label>
                                            <input id="household_postcode" name="household_postcode" type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <button type="submit" name="singlebutton" class="btn btn-default">Save Guest Details</button>
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
@endsection