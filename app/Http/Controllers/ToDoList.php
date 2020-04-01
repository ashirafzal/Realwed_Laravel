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
            return view('todo-list',['users'=>$users]); 
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

}