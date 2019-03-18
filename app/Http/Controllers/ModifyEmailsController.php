<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Email;
class ModifyEmailsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $emails= Email::orderBy('id','desc')->paginate(4);
        return view('Administrator.Email.index')->with('emails',$emails);
    }
    public function destroy(Email $email){
        $email->delete();
        return back()->with('success','Deleted Successfully');
    }
}
