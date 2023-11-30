<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\t_request;

use App\Models\t_feedback;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function view_request()
    {
        $t_request = t_request::all();
        return view('admin.manage_request',compact('t_request'));
    }

    public function view_feedback()
    {
        $t_feedback = t_feedback::all();
        return view('admin.view_feedback',compact('t_feedback'));

    }
    public function delete($id)
    {
        $apply=t_request::find($id);

        $apply->delete();

        return redirect()->back();
    }
    public function addWorker()
    {
        return view('admin.add_user');
    }
    public function add_worker(Request $request)
    {

        $worker=new user;

      $worker->name = $request->name;

      $worker->email = $request->email;

      $worker->phone = $request->phone;

      $worker->usertype = 2;

      $worker->password = 123456678;

      $worker->save();

      return redirect()->back();
    }
}
