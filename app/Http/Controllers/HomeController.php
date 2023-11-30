<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\t_request;

use App\Models\t_feedback;

class HomeController extends Controller
{
    public function redirect()
    {

    if(Auth::id())
    {
      if(Auth::user()->usertype=='0')
      {
        return view('user.home');
      }
      else
      {
        $wok = User::where('usertype', 2)->get();

        return view('admin.home',compact('wok'));
      }
    }
    else
    {
        return redirect()->back();
    }
    }

    public function index()
    {
        return view('user.home');
    }
    public function upload(Request $request)
    {
      $service=new t_request;

      $service->student_id=$request->student_id;

      $service->name = $request->name;

      $service->phone = $request->phone;

      $service->date = $request->date;

      $service->type = $request->type;

      $service->save();

      return redirect()->back();

    }
    public function upload_feedback(Request $request)
    {
      $feedbacks=new t_feedback;

      $feedbacks->student_id=$request->student_id;

      $feedbacks->name = $request->name;

      $feedbacks->date = $request->date;

      $feedbacks->message = $request->message;

      

      $feedbacks->save();

      return redirect()->back();
    }
}
