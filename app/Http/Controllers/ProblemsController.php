<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Problem;
use App\Service;

use App\Http\Requests\ProblemRequests;
class ProblemsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $problems= Problem::orderBy('id','desc')->paginate(7);
        return view('Administrator.Problems.index')->with('problems',$problems);
    }
    public function create(){
        $services= Service::all();
        return view('Administrator.Problems.create')->with('services',$services);
    }
    public function store(ProblemRequests $request){
        $service= request('service'); //Services
        $problem= request('problem'); //Problems
        $serv_id= Service::select('id')->where('issues',$service)->get();
        $service_id= $serv_id->toArray();
        foreach($service_id as $id){
            Problem::create([
                'service_id' => $id['id'],
                'problem_type'=>$problem
            ]);
            return back()->with('success','Stored Successfully');
        }
    }
    public function destroy(Problem $problem){
        $problem->delete();
        return back()->with('success','Deleted Successfully');
    }
}