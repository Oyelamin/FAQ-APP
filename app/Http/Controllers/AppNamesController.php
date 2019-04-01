<?php

namespace App\Http\Controllers;
use App\Appname;
use Illuminate\Http\Request;
use App\Http\Requests\AppNameRequests;
class AppNamesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //Create New App Name
    public function create(){
        return view('Add_App_Address.App_name');
    }
    //Store the requested app name
    public function store(AppNameRequests $request){

        Appname::create([
            'name' => request('name')
        ]);
        return back()->with('success','Success! App name changed');

    }

}