<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Caller;

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

        $callers= Caller::orderBy('id','desc')->paginate(7);
        return view('Administrator.Caller.index')->with('callers',$callers);

    }
 
    /**
     * Modify all callers
     * Like to delete if they have been answered
     */
    public function destroy(Caller $caller){

        $caller->delete();
        return back()->with('success','DELETED!');

    }

}
