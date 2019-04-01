<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Phone;
class CallersController extends Controller
{
    /**
     * For Authentication
     */
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * View All Callers
     */
    public function index(){
        $callers = Phone::orderBy('id','desc')->paginate(7);
        return view('Administrator.Caller.index')->with('callers',$callers);
    }
    /**
     * Modify all callers
     * Like to delete if they have been answered
     */
    public function destroy(Phone $phone){
        $phone->delete();
        return back()->with('success','DELETED!');
    }
}//00923244626638
//Just send me Hi on whatsapp i will respond when am online
//LOl--Okay--Bye
