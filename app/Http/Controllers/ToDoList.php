<?php

namespace App\Http\Controllers;

use App\AddTask;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ToDoList extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $addtask = AddTask::where('couple_id', $user->id)
            ->get();

        $addtask_due = AddTask::where('task_status', 'Completed')
            ->get();

        $addtask_due = count($addtask_due);

        $addtask_completed = AddTask::where('task_status', 'Due')
            ->get();

        $addtask_completed = count($addtask_completed);

        $addtask_total = AddTask::where('couple_id', $user->id)
            ->get();

        $addtask_total = count($addtask_total);

        return view(
            'couples.todo-list',
            [
                'users' => $user, 'addtask' => $addtask, 'addtask_total' => $addtask_total, 'addtask_completed' => $addtask_completed, 'addtask_due' => $addtask_due
            ]
        );
    }

    public function addtask(Request $request)
    {
        $tasktitle = $request->input('tasktitle');
        $taskdate = $request->input('taskdate');
        $taskstatus = $request->input('taskstatus');

        $AddTask = new AddTask();

        $AddTask->couple_id = Auth::user()->id;
        $AddTask->task_title = $tasktitle;
        $AddTask->task_date = $taskdate;
        $AddTask->task_status = $taskstatus;

        $AddTask->save();

        echo json_encode(['success' => 'Task added successfully']);
    }


    public function Edit(Request $request)
    {
        $edittaskid = $request->input('edittaskid');
        $edittasktitle = $request->input('edittasktitle');
        $edittaskdate = $request->input('edittaskdate');
        $edittaskstatus = $request->input('edittaskstatus');

        $AddTask = AddTask::where('id', $edittaskid)->get();
        
        $AddTask->couple_id = Auth::user()->id;
        $AddTask->task_title = $edittasktitle;
        $AddTask->task_date = $edittaskdate;
        $AddTask->task_status = $edittaskstatus;

        $AddTask->save();

        echo json_encode(['success' => 'Task Edited successfully']);
    }

    public function Delete($id)
    {
        AddTask::where('id', $id)->delete();
        return Redirect::to("todo-list")->withError('Task deleted successfully');
    }

}