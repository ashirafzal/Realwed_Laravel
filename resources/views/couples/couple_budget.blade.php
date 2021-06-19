@extends('layouts.couple_dashboard_layout')

@section('content')
<div class="dashboard-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="dashboard-page-header">
                    <h3 class="dashboard-page-title">Budget planner</h3>
                    <p>Start your wedding budget with the Wedding budget planner estimator tool.</p>
                </div>
            </div>
        </div>
        <div id="budgetsuccess" class="alert alert-info alert-block" style="display:none;">
        </div>
        <div id="budgetdanger" class="alert alert-danger alert-block" style="display:none;">
        </div>
        <div class="budget-board">
            <div class="row">
                <!-- budget-venue -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" id="allguest-tab" data-toggle="tab" href="#allguest" role="tab" aria-controls="allguest" aria-selected="true">Budget</a> </li>
                                <li class="nav-item"> <a class="nav-link" id="confirmguest-tab" data-toggle="tab" href="#confirmguest" role="tab" aria-controls="confirmguest" aria-selected="false">Budget Details</a> </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="allguest" role="tabpanel" aria-labelledby="allguest-tab">
                                <div class="card-body">
                                    <h3>Budget estimator</h3>
                                    <p>This is the budget estimator for all your wedding expenses. By the help of this buget estimator you can calculate all your expenses.</p>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <button onclick="editbudget()" style="height:100%; font-size:0.9rem;" class="btn btn-outline-violate btn-xs mr10">Edit Budget</button>
                                            <button style="height:100%; font-size:0.9rem;" onclick="opendeletebudget()" class="btn btn-outline-pink btn-xs">Delete Budget</button>
                                        </div>
                                    </div>
                                    <br />
                                    <div style="display:none;" id="deletediv">
                                        <!-- Delete success message -->
                                        <div id="deletesuccessmessage" class="alert alert-info alert-block" style="display:none;"></div>
                                        <!-- Delete success message end -->
                                        <p>Are you sure you want to delete budget ?</p>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <button style="height:100%;font-size:1rem;" onclick="closedeletebudget()" class="btn btn-block btn-outline-violate btn-xs mr10">No</button>
                                            </div>
                                            <div class="col-xl-6">
                                                <button id="delete" style="height:100%;font-size:1rem;" class="btn btn-block btn-outline-pink btn-xs">Yes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="wedding-budget-event">Wedding Event</th>
                                                <th class="wedding-budget-estimate">Estimate</th>
                                                <th class="wedding-budget-actual">Actual</th>
                                                <th class="wedding-budget-paid">Paid</th>
                                                <th class="wedding-budget-pending">Pending</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($venue as $venue)
                                            <tr>
                                                <td> Venue </td>
                                                @if($venue->estimate_total == '')
                                                <td class="estimate-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="estimate-total"><span class="total-amount">{{$venue->estimate_total}}</span></td>
                                                @endif
                                                @if($venue->actual_total == '')
                                                <td class="actual-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="actual-total"><span class="total-amount">{{$venue->actual_total}}</span></td>
                                                @endif
                                                @if($venue->paid_total == '')
                                                <td class="paid-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="paid-total"><span class="total-amount">{{$venue->paid_total}}</span></td>
                                                @endif
                                                @if($venue->pending_total == '')
                                                <td class="pending-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="pending-total"><span class="total-amount">{{$venue->pending_total}}</span></td>
                                                @endif
                                            </tr>
                                            @endforeach
                                            @foreach($ceremony as $ceremony)
                                            <tr>
                                                <td> Ceremony </td>
                                                @if($ceremony->estimate_total == '')
                                                <td class="estimate-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="estimate-total"><span class="total-amount">{{$ceremony->estimate_total}}</span></td>
                                                @endif
                                                @if($ceremony->actual_total == '')
                                                <td class="actual-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="actual-total"><span class="total-amount">{{$ceremony->actual_total}}</span></td>
                                                @endif
                                                @if($ceremony->paid_total == '')
                                                <td class="paid-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="paid-total"><span class="total-amount">{{$ceremony->paid_total}}</span></td>
                                                @endif
                                                @if($ceremony->pending_total == '')
                                                <td class="pending-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="pending-total"><span class="total-amount">{{$ceremony->pending_total}}</span></td>
                                                @endif
                                            </tr>
                                            @endforeach
                                            @foreach($hairandmakeup as $hairandmakeup)
                                            <tr>
                                                <td> Hair & Makeup </td>
                                                @if($hairandmakeup->estimate_total == '')
                                                <td class="estimate-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="estimate-total"><span class="total-amount">{{$hairandmakeup->estimate_total}}</span></td>
                                                @endif
                                                @if($hairandmakeup->actual_total == '')
                                                <td class="actual-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="actual-total"><span class="total-amount">{{$hairandmakeup->actual_total}}</span></td>
                                                @endif
                                                @if($hairandmakeup->paid_total == '')
                                                <td class="paid-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="paid-total"><span class="total-amount">{{$hairandmakeup->paid_total}}</span></td>
                                                @endif
                                                @if($hairandmakeup->pending_total == '')
                                                <td class="pending-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="pending-total"><span class="total-amount">{{$hairandmakeup->pending_total}}</span></td>
                                                @endif
                                            </tr>
                                            @endforeach
                                            @foreach($flowers as $flowers)
                                            <tr>
                                                <td> Flowers </td>
                                                @if($flowers->estimate_total == '')
                                                <td class="estimate-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="estimate-total"><span class="total-amount">{{$flowers->estimate_total}}</span></td>
                                                @endif
                                                @if($flowers->actual_total == '')
                                                <td class="actual-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="estimate-total"><span class="total-amount">{{$flowers->actual_total}}</span></td>
                                                @endif
                                                @if($flowers->paid_total == '')
                                                <td class="paid-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="estimate-total"><span class="total-amount">{{$flowers->paid_total}}</span></td>
                                                @endif
                                                @if($flowers->pending_total == '')
                                                <td class="pending-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="estimate-total"><span class="total-amount">{{$flowers->pending_total}}</span></td>
                                                @endif
                                            </tr>
                                            @endforeach
                                            @foreach($cake as $cake)
                                            <tr>
                                                <td> Cake </td>
                                                @if($cake->estimate_total == '')
                                                <td class="estimate-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="estimate-total"><span class="total-amount">{{$cake->estimate_total}}</span></td>
                                                @endif
                                                @if($cake->actual_total == '')
                                                <td class="actual-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="actual-total"><span class="total-amount">{{$cake->actual_total}}</span></td>
                                                @endif
                                                @if($cake->paid_total == '')
                                                <td class="paid-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="paid-total"><span class="total-amount">{{$cake->paid_total}}</span></td>
                                                @endif
                                                @if($cake->pending_total == '')
                                                <td class="pending-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="pending-total"><span class="total-amount">{{$cake->pending_total}}</span></td>
                                                @endif
                                            </tr>
                                            @endforeach
                                            @foreach($photography as $photography)
                                            <tr>
                                                <td> Photography </td>
                                                @if($photography->estimate_total == '')
                                                <td class="estimate-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="estimate-total"><span class="total-amount">{{$photography->estimate_total}}</span></td>
                                                @endif
                                                @if($photography->actual_total == '')
                                                <td class="actual-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="actual-total"><span class="total-amount">{{$photography->actual_total}}</span></td>
                                                @endif
                                                @if($photography->paid_total == '')
                                                <td class="paid-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="paid-total"><span class="total-amount">{{$photography->paid_total}}</span></td>
                                                @endif
                                                @if($photography->pending_total == '')
                                                <td class="pending-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="pending-total"><span class="total-amount">{{$photography->pending_total}}</span></td>
                                                @endif
                                            </tr>
                                            @endforeach
                                            @foreach($printedmaterials as $printedmaterials)
                                            <tr>
                                                <td> printed Materials </td>
                                                @if($printedmaterials->estimate_total == '')
                                                <td class="estimate-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="estimate-total"><span class="total-amount">{{$printedmaterials->estimate_total}}</span></td>
                                                @endif
                                                @if($printedmaterials->actual_total == '')
                                                <td class="actual-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="actual-total"><span class="total-amount">{{$printedmaterials->actual_total}}</span></td>
                                                @endif
                                                @if($printedmaterials->paid_total == '')
                                                <td class="paid-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="paid-total"><span class="total-amount">{{$printedmaterials->paid_total}}</span></td>
                                                @endif
                                                @if($printedmaterials->pending_total == '')
                                                <td class="pending-total"><span class="total-amount">0</span></td>
                                                @else
                                                <td class="pending-total"><span class="total-amount">{{$printedmaterials->pending_total}}</span></td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="confirmguest" role="tabpanel" aria-labelledby="confirmguest-tab">
                                <div class="card-body">
                                    <h3>Budget Details</h3>
                                    <p>This is the budget estimator for all your wedding expenses. By the help of this buget estimator you can calculate all your expenses.</p>
                                </div>
                                <div class="">
                                    <div class="budget-category-head d-flex align-items-center">
                                        <h3 class="budget-category-title mr-auto">Venue</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="wedding-budget-event">Wedding Event</th>
                                                    <th class="wedding-budget-estimate">Estimate</th>
                                                    <th class="wedding-budget-actual">Actual</th>
                                                    <th class="wedding-budget-paid">Paid</th>
                                                    <th class="wedding-budget-pending">Pending</th>
                                                </tr>
                                            </thead>
                                            <tbody id="TextBoxContainer1">
                                                <tr>
                                                    <td>
                                                        <input id="locationfees" name="locationfees" type="text" placeholder="Location Fees" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input id="locationfees_estimate" onchange="myFunction(this.value)" name="locationfees_estimate" type="text" value="0" placeholder="0" class="form-control form-control-sm venue-cost">
                                                    </td>
                                                    <td>
                                                        <input id="locationfees_actual" name="locationfees_actual" onchange="myFunction(this.value)" type="text" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input id="locationfees_paid" name="locationfees_paid" onchange="myFunction(this.value)" type="text" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input id="locationfees_pending" name="locationfees_pending" onchange="myFunction(this.value)" type="text" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input id="carexpense" name="carexpense" type="text" value="" placeholder="Car Expense" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input id="carexpense_estimate" onchange="myFunction(this.value)" name="carexpense_estimate" type="text" value="0" placeholder="0" class="form-control form-control-sm venue-cost">
                                                    </td>
                                                    <td>
                                                        <input id="carexpense_actual" name="carexpense_actual" onchange="myFunction(this.value)" type="text" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input id="carexpense_paid" name="carexpense_paid" onchange="myFunction(this.value)" type="text" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input id="carexpense_pending" name="carexpense_pending" onchange="myFunction(this.value)" type="text" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td> Total Cost of Venue</td>
                                                    <td class="estimate-total">Estimate Total <span id="estimate-total" class="total-amount">0</span></td>
                                                    <td class="actual-total"> Actual Total <span id="actual-total" class="total-amount">0</span></td>
                                                    <td class="paid-total"> Paid Total <span id="paid-total" class="total-amount">0</span></td>
                                                    <td class="pending-total"> Pending Total <span id="pending-total" class="total-amount">0</span></td>
                                                    <td></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <!-- budget-ceremony -->
                                <div class="budget-category-block">
                                    <div class="budget-category-head d-flex align-items-center">
                                        <h3 class="budget-category-title mr-auto">Ceremony</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="wedding-budget-event">Wedding Event</th>
                                                    <th class="wedding-budget-estimate">Estimate</th>
                                                    <th class="wedding-budget-actual">Actual</th>
                                                    <th class="wedding-budget-paid">Paid</th>
                                                    <th class="wedding-budget-pending">Pending</th>
                                                </tr>
                                            </thead>
                                            <tbody id="TextBoxContainer2">
                                                <tr>
                                                    <td>
                                                        <input type="text" id="decorations" name="decorations" onchange="myFunction2(this.value)" class="form-control form-control-sm" placeholder="Decorations/accessories">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="decorations_estimate" name="decorations_estimate" onchange="myFunction2(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="decorations_actual" name="decorations_actual" onchange="myFunction2(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="decorations_paid" name="decorations_paid" onchange="myFunction2(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="decorations_pending" name="decorations_pending" onchange="myFunction2(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" id="locationfee" name="locationfee" class="form-control form-control-sm" placeholder="Location fee">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="locationfee_estimate" name="locationfee_estimate" onchange="myFunction2(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="locationfee_actual" name="locationfee_actual" onchange="myFunction2(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="locationfee_paid" name="locationfee_paid" onchange="myFunction2(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="locationfee_pending" name="locationfee_pending" onchange="myFunction2(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td> Total Cost of Ceremony</td>
                                                    <td class="estimate-total"> Estimate Total <span id="ceremony-estimate-total" class="total-amount">0</span></td>
                                                    <td class="actual-total"> Actual Total <span id="ceremony-actual-total" class="total-amount">0</span></td>
                                                    <td class="paid-total"> Paid Total <span id="ceremony-paid-total" class="total-amount">0</span></td>
                                                    <td class="pending-total"> Pending Total <span id="ceremony-pending-total" class="total-amount">0</span></td>
                                                    <td></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.budget-ceremony -->
                                <!-- budget-hair-makeup -->
                                <div class="budget-category-block">
                                    <div class="budget-category-head d-flex align-items-center">
                                        <h3 class="budget-category-title mr-auto">Hair & Makeup</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="wedding-budget-event">Wedding Event</th>
                                                    <th class="wedding-budget-estimate">Estimate</th>
                                                    <th class="wedding-budget-actual">Actual</th>
                                                    <th class="wedding-budget-paid">Paid</th>
                                                    <th class="wedding-budget-pending">Pending</th>
                                                </tr>
                                            </thead>
                                            <tbody id="TextBoxContainer3">
                                                <tr>
                                                    <td>
                                                        <input type="text" id="hairandmakeup" name="hairandmakeup" class="form-control form-control-sm" placeholder="Hair makeup">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="hairandmakeup_estimate" name="hairandmakeup_estimate" onchange="myFunction3(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="hairandmakeup_actual" name="hairandmakeup_actual" onchange="myFunction3(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="hairandmakeup_paid" name="hairandmakeup_paid" onchange="myFunction3(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="hairandmakeup_pending" name="hairandmakeup_pending" onchange="myFunction3(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td> Total Cost of Hair/Makeup</td>
                                                    <td class="estimate-total"> Estimate Total <span id="hairandmakeup-estimate-total" class="total-amount">0</span></td>
                                                    <td class="actual-total"> Actual Total <span id="hairandmakeup-actual-total" class="total-amount">0</span></td>
                                                    <td class="paid-total"> Paid Total <span id="hairandmakeup-paid-total" class="total-amount">0</span></td>
                                                    <td class="pending-total"> Pending Total <span id="hairandmakeup-pending-total" class="total-amount">0</span></td>
                                                    <td></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <!-- /. budget-hair-makeup -->
                                <!-- budget-flowers -->
                                <div class="budget-category-block">
                                    <div class="budget-category-head d-flex align-items-center">
                                        <h3 class="budget-category-title mr-auto">Flowers</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="wedding-budget-event">Wedding Event</th>
                                                    <th class="wedding-budget-estimate">Estimate</th>
                                                    <th class="wedding-budget-actual">Actual</th>
                                                    <th class="wedding-budget-paid">Paid</th>
                                                    <th class="wedding-budget-pending">Pending</th>
                                                </tr>
                                            </thead>
                                            <tbody id="TextBoxContainer4">
                                                <tr>
                                                    <td>
                                                        <input type="text" id="bouquets" name="bouquets" class="form-control form-control-sm" placeholder="Bouquets">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="bouquets_estimate" name="bouquets_estimate" onchange="myFunction4(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="bouquets_actual" name="bouquets_actual" onchange="myFunction4(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="bouquets_paid" name="bouquets_paid" onchange="myFunction4(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="bouquets_pending" name="bouquets_pending" onchange="myFunction4(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" id="decorations2" name="decorations2" class="form-control form-control-sm" placeholder="Decorations/centerpieces">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="decorations2_estimate" name="decorations2_estimate" onchange="myFunction4(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="decorations2_actual" name="decorations2_actual" onchange="myFunction4(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="decorations2_paid" name="decorations2_paid" onchange="myFunction4(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="decorations2_pending" name="decorations2_pending" onchange="myFunction4(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td> Total of Category Venue</td>
                                                    <td class="estimate-total"> Estimate Total <span id="flowers-estimate-total" class="total-amount">0</span></td>
                                                    <td class="actual-total"> Actual Total <span id="flowers-actual-total" class="total-amount">0</span></td>
                                                    <td class="paid-total"> Paid Total <span id="flowers-paid-total" class="total-amount">0</span></td>
                                                    <td class="pending-total"> Pending Total <span id="flowers-pending-total" class="total-amount">0</span></td>
                                                    <td></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <!-- /. budget-flowers -->
                                <!-- budget-cake -->
                                <div class="budget-category-block">
                                    <div class="budget-category-head d-flex align-items-center">
                                        <h3 class="budget-category-title mr-auto">Cake</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="wedding-budget-event">Wedding Event</th>
                                                    <th class="wedding-budget-estimate">Estimate</th>
                                                    <th class="wedding-budget-actual">Actual</th>
                                                    <th class="wedding-budget-paid">Paid</th>
                                                    <th class="wedding-budget-pending">Pending</th>
                                                </tr>
                                            </thead>
                                            <tbody id="TextBoxContainer5">
                                                <tr>
                                                    <td>
                                                        <input type="text" id="cakecuttingfee" name="cakecuttingfee" class="form-control form-control-sm" placeholder="Cake + cutting fee">
                                                    </td>
                                                    <td>
                                                        <input type="text" onchange="myFunction5(this.value)" id="cakecuttingfee_estimate" name="cakecuttingfee_estimate" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" onchange="myFunction5(this.value)" id="cakecuttingfee_actual" name="cakecuttingfee_actual" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" onchange="myFunction5(this.value)" id="cakecuttingfee_paid" name="cakecuttingfee_paid" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" onchange="myFunction5(this.value)" id="cakecuttingfee_pending" name="cakecuttingfee_pending" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td> Total Cost of Flowers</td>
                                                    <td class="estimate-total"> Estimate Total <span id="cakecuttingfee-estimate-total" class="total-amount">0</span></td>
                                                    <td class="actual-total"> Actual Total <span id="cakecuttingfee-actual-total" class="total-amount">0</span></td>
                                                    <td class="paid-total"> Paid Total <span id="cakecuttingfee-paid-total" class="total-amount">0</span></td>
                                                    <td class="pending-total"> Pending Total <span id="cakecuttingfee-pending-total" class="total-amount">0</span></td>
                                                    <td></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <!-- /. budget-cake -->
                                <!-- budget-photography -->
                                <div class="budget-category-block">
                                    <div class="budget-category-head d-flex align-items-center">
                                        <h3 class="budget-category-title mr-auto">Photography</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="wedding-budget-event">Wedding Event</th>
                                                    <th class="wedding-budget-estimate">Estimate</th>
                                                    <th class="wedding-budget-actual">Actual</th>
                                                    <th class="wedding-budget-paid">Paid</th>
                                                    <th class="wedding-budget-pending">Pending</th>
                                                </tr>
                                            </thead>
                                            <tbody id="TextBoxContainer6">
                                                <tr>
                                                    <td>
                                                        <input type="text" id="photographer" name="photographer" class="form-control form-control-sm" placeholder="Photographer">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="photographer_estimate" name="photographer_estimate" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="photographer_actual" name="photographer_actual" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="photographer_paid" name="photographer_paid" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="photographer_pending" name="photographer_pending" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" id="videographer" name="videographer" class="form-control form-control-sm" placeholder="Videographer">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="videographer_estimate" name="videographer_estimate" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="videographer_actual" name="videographer_actual" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="videographer_paid" name="videographer_paid" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="videographer_pending" name="videographer_pending" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" id="extraprints" name="extraprints" class="form-control form-control-sm" placeholder="Extra Prints">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="extraprints_estimate" value="0" name="extraprints_estimate" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="extraprints_actual" value="0" name="extraprints_actual" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="extraprints_paid" value="0" name="extraprints_paid" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="extraprints_pending" value="0" name="extraprints_pending" onchange="myFunction6(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td> Total Cost of Photography</td>
                                                    <td class="estimate-total"> Estimate Total <span id="photographer-estimate-total" class="total-amount">0</span></td>
                                                    <td class="actual-total"> Actual Total <span id="photographer-actual-total" class="total-amount">0</span></td>
                                                    <td class="paid-total"> Paid Total <span id="photographer-paid-total" class="total-amount">0</span></td>
                                                    <td class="pending-total"> Pending Total <span id="photographer-pending-total" class="total-amount">0</span></td>
                                                    <td></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <!-- /. budget-cake -->
                                <!-- budget-printed -->
                                <div class="budget-category-block">
                                    <div class="budget-category-head d-flex align-items-center">
                                        <h3 class="budget-category-title mr-auto">Printed Materials</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="wedding-budget-event">Wedding Event</th>
                                                    <th class="wedding-budget-estimate">Estimate</th>
                                                    <th class="wedding-budget-actual">Actual</th>
                                                    <th class="wedding-budget-paid">Paid</th>
                                                    <th class="wedding-budget-pending">Pending</th>
                                                </tr>
                                            </thead>
                                            <tbody id="TextBoxContainer7">
                                                <tr>
                                                    <td>
                                                        <input type="text" id="savethedates" name="savethedates" class="form-control form-control-sm" placeholder="save the dates">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="savethedates_estimate" value="0" name="savethedates_estimate" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="savethedates_actual" value="0" name="savethedates_actual" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="savethedates_paid" value="0" name="savethedates_paid" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="savethedates_pending" value="0" name="savethedates_pending" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" id="invitations" name="invitations" value="" class="form-control form-control-sm" placeholder="Invitations">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="invitations_estimate" value="0" name="invitations_estimate" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="invitations_actual" value="0" name="invitations_actual" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="invitations_paid" value="0" name="invitations_paid" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="invitations_pending" value="0" name="invitations_pending" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" id="weddingprograms" name="weddingprograms" class="form-control form-control-sm" placeholder="Wedding programs">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="weddingprograms_estimate" name="weddingprograms_estimate" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="weddingprograms_actual" name="weddingprograms_actual" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="weddingprograms_paid" name="weddingprograms_paid" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="weddingprograms_pending" name="weddingprograms_pending" onchange="myFunction7(this.value)" value="0" placeholder="0" class="form-control form-control-sm">
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td> Total Cost of Printed Materials</td>
                                                    <td class="estimate-total"> Estimate Total <span id="printedmaterials-estimate-total" class="total-amount">0</span></td>
                                                    <td class="actual-total"> Actual Total <span id="printedmaterials-actual-total" class="total-amount">0</span></td>
                                                    <td class="paid-total"> Paid Total <span id="printedmaterials-paid-total" class="total-amount">0</span></td>
                                                    <td class="pending-total"> Pending Total <span id="printedmaterials-pending-total" class="total-amount">0</span></td>
                                                    <td></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <button class="btn btn-default" id="addexpense" style="margin:1rem;">Add Budget Expensive</button>
                                    </div>
                                </div>
                                <!-- /. budget-printed -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. budget-venue -->

            </div>
        </div>
    </div>
</div>
@endsection