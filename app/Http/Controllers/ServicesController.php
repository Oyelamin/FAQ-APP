<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;
use App\Http\Requests\ServiceRequests;
class ServicesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $services= Service::orderBy('id','desc')->paginate(7);
        return view('Administrator.Services.index')->with('services',$services);
    }

    public function create(){
        return view('Administrator.Services.create');
    }

    public function store(ServiceRequests $request){
        Service::create([
            'issues'=>request('service')
        ]);
        return back()->with('success','Stored Successfully');
    }

    public function destroy(Service $service){
        $service->delete();
        return back()->with('success','Deleted Successfully');

    }
}
