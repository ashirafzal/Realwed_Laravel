<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class ToDoList extends Controller
{
    public function index(Request $request){

        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');

        if(!$request->session()->has('userid')) {
            return Redirect::route('signintocontinue');
        }else{
            
            $users = DB::table('appusers')->where('id',$userid)->get();
            $addtask = DB::table('addtask')->where('coupleid',$userid)->get();
            $addtask_due = DB::table('addtask')->where('taskstatus','Completed')->get();
            $addtask_due = count($addtask_due);
            $addtask_completed = DB::table('addtask')->where('taskstatus','Due')->get();
            $addtask_completed = count($addtask_completed);
            $addtask_total = DB::table('addtask')->where('coupleid', $userid)->get();
            $addtask_total = count($addtask_total);
            return view('todo-list',['users'=>$users ,'addtask'=>$addtask ,'addtask_total'=>$addtask_total
            , 'addtask_completed'=>$addtask_completed ,'addtask_due'=>$addtask_due]); 
        }
    }

    public function addtask(Request $request){

        request()->validate([
            'tasktitle' => 'required',
            'taskdate' => 'required',
            'taskstatus' => 'required',
        ]);

        $userid = Session::get('userid');
        $tasktitle = $request->input('tasktitle');
        $taskdate = $request->input('taskdate');
        $taskstatus = $request->input('taskstatus');

        DB::table('addtask')->insert(
            array(
                   'coupleid' => $userid,
                   'tasktitle' => $tasktitle,
                   'taskdate' => $taskdate,
                   'taskstatus' => $taskstatus
                   )
           );

           echo json_encode(['success'=>'Task added successfully']);
    }


    public function Edit(Request $request){
        request()->validate([
            'edittaskid' => 'required',
            'edittasktitle' => 'required',
            'edittaskdate' => 'required',
            'edittaskstatus' => 'required',
        ]);

        $userid = Session::get('userid');
        $edittaskid = $request->input('edittaskid');
        $edittasktitle = $request->input('edittasktitle');
        $edittaskdate = $request->input('edittaskdate');
        $edittaskstatus = $request->input('edittaskstatus');

        DB::table('addtask')->where('id',$edittaskid)->update(array(
            'coupleid'=>$userid,
            'tasktitle'=>$edittasktitle,
            'taskdate'=>$edittaskdate,
            'taskstatus'=>$edittaskstatus
            ));

            echo json_encode(['success'=>'Task Edited successfully']);
    }

    public function Delete($id){
        DB::table('addtask')->where('id',$id)->delete();
        return Redirect::to("todo-list")->withError('Task deleted successfully');
    }

}