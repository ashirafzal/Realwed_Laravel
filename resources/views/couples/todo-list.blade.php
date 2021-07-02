@extends('layouts.couple_dashboard_layout')

@section('content')
<div class="dashboard-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="dashboard-page-header">
                    <h3 class="dashboard-page-title">My To Do List</h3>
                    <p>Create and manage your wedding planning checklist. Its ultimate and real simple.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-xl-8 col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 text-right mb20">
                <div id='slide-panel' class="slide-panel-light">
                    <h3>Create Task</h3>
                    <form id="addtask" autocomplete="off">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="alert alert-success" style="display:none">
                            </div>
                            <div class="alert alert-danger" style="display:none">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <div class="form-group">
                                    <label class="control-label" for="tasktitle">Task Title</label>
                                    <input id="tasktitle" name="tasktitle" type="text" placeholder="Write task here" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="control-label" for="taskdate">Task Date</label>
                                    <input id="taskdate" name="taskdate" type="text" placeholder="Task Date" class="form-control">
                                    <div class="venue-form-calendar"><i class="far fa-calendar-alt"></i></div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="control-label" for="taskdate">Task Status (Due / Completed)</label>
                                    <input id="taskstatus" name="taskstatus" type="text" placeholder="Task status" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <button type="submit" id="submittask" name="submittask" class="btn btn-default">Submit to do </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <a href="#" class="btn btn-default" id='trigger'>Add New Task</a>
            </div>
        </div>
        <!-- Edit Task Form Start-->
        <div class="row" id="edittaskblock" style="display:none;">
            <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="card">
                            <div class="card-header">Edit Task</div>
                            <div class="card-body">
                                <form id="edittask">
                                    {{ csrf_field() }}
                                    {{ method_field('POST') }}
                                    <div id="edittasksuccess" class="alert alert-success alert-block" style="display:none;">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong id="edittask_success_msg">Task Edited successfully</strong>
                                    </div>
                                    <div id="edittaskdanger" class="alert alert-danger alert-block" style="display:none;">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong id="edittask_danger_msg">Error editing task</strong>
                                    </div>
                                    <!-- Form Name -->
                                    <div class="personal-form-info">
                                        <div class="row">
                                            <div style="display:none;" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <input id="edittaskid" name="edittaskid" type="hidden" value="" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="tasktitle">Task Tittle</label>
                                                    <input id="edittasktitle" name="edittasktitle" type="text" value="" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="taskdate">Task Date</label>
                                                    <input id="edittaskdate" name="edittaskdate" type="text" value="" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="taskstatus">Task Status (Due / Completed)</label>
                                                    <input id="edittaskstatus" name="edittaskstatus" type="text" value="" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="social-form-info mb-0">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <button class="btn btn-default" id="submit_edittask" type="submit">Edit Task</button>
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
    </div>
    <!--Edit Task Form Ends-->
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="card card-summary">
                <div class="card-body">
                    <div class="float-left">
                        <div class="summary-count">{{ $addtask_completed }}</div>
                        <p>Completed Task</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="card card-summary">
                <div class="card-body">
                    <div class="float-left">
                        <div class="summary-count">{{ $addtask_due }}</div>
                        <p>Due Task </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="card card-summary">
                <div class="card-body">
                    <div class="float-left">
                        <div class="summary-count">{{ $addtask_total }}</div>
                        <p>Total Task </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    <br>
    @endif
    <div class="alert alert-danger alert-block" id="edittask_danger" style="display:none;">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong id="edittask_js_error"></strong>
    </div>
    <!-- accordions -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div id="accordion" class="todo">
                <!-- accordion-card -->
                <div class="accordion-card card">
                    <div class="accordion-card-header" id="headingOne">
                        <h5 class="mb-0">
                            <a role="button" href="#" class="accordion-card-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                All Task<span class="fas fa-plus float-right"></span></a>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <div class="table-responsive text-nowrap">
                                <!--Table-->
                                <table id="table1" class="table table-bordered text-center">
                                    <!--Table head-->
                                    <thead>
                                        <tr>
                                            <th>Select Task</th>
                                            <th style="display:none;">Task ID</th>
                                            <th>Task Name</th>
                                            <th>Task Date</th>
                                            <th>Task Status</th>
                                            <th>Edit Task</th>
                                            <th>Delete Task</th>
                                        </tr>
                                    </thead>
                                    <!--Table head-->
                                    <!--Table body-->
                                    <tbody>
                                        @foreach($addtask as $addtask)
                                        @if($addtask->taskstatus == 'Completed')
                                        <tr>
                                            <td><input type="checkbox" id="check-tab1" name="check-tab1"></td>
                                            <td style="display:none;">{{ $addtask->id }}</td>
                                            <td>{{ $addtask->task_title }}</td>
                                            <td>{{ $addtask->task_date }}</td>
                                            <td><span class="to-do-status"><span class="badge badge-success">Completed</span></span></td>
                                            <td><a href="javascript:edittask()" onclick="edittask()" class="btn btn-outline-violate btn-xs">Edit</a></td>
                                            <td><a href="delete-task/{{$addtask->id}}" class="btn btn-outline-violate btn-xs">Delete</a></td>
                                        </tr>
                                        @else
                                        <tr>
                                            <td><input type="checkbox" id="check-tab1" name="check-tab1"></td>
                                            <td style="display:none;">{{ $addtask->id }}</td>
                                            <td>{{ $addtask->task_title }}</td>
                                            <td>{{ $addtask->task_date }}</td>
                                            <td><span class="to-do-status">
                                                @if($addtask->task_status === 'Due')
                                                <span class="badge badge-danger">Due</span>
                                                @else
                                                <span class="badge badge-success">Completed</span>
                                                @endif
                                            </span></td>
                                            <td><a href="javascript:edittask()" onclick="edittask()" class="btn btn-outline-violate btn-xs">Edit</a></td>
                                            <td><a href="delete-task/{{$addtask->id}}" class="btn btn-outline-violate btn-xs">Delete</a></td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                    <!--Table body-->
                                </table>
                                <!--Table-->
                            </div>
                            <!-- to do header -->

                        </div>
                    </div>
                </div>
                <!-- /.accordion-card -->
            </div>
        </div>
    </div>
    <!-- /.accordions -->
</div>
@endsection