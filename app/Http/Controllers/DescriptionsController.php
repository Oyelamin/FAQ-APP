<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Description;
use App\Problem;
use App\Http\Requests\DescriptionRequests;
class DescriptionsController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }
    public function index(){
        $descriptions= Description::orderBy('id','desc')->paginate(7);
        return view('Administrator.Descriptions.index')->with('descriptions',$descriptions);
    }
    public function create(){
        $problems= Problem::all();
        return view('Administrator.Descriptions.create')->with('problems',$problems);
    }
    public function store(DescriptionRequests $request){
    
        $problem= request('problem'); //Services
        $description= request('description'); //Problems
        $pro_id= Problem::select('id')->where('problem_type',$problem)->get();
        $problem_id= $pro_id->toArray();
        foreach($problem_id as $id){
            Description::create([
                'problem_id' => $id['id'],
                'description' => $description
            ]);
        }
        return back()->with('success','Stored Successfully!');
    }
    public function destroy(Description $description){
       
        $description->delete();
        return back()->with('success','Deleted Successfully');
    }
}
