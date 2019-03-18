<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Solution;
use App\Description;
class SolutionsController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }
    // Show all Solutions in descrnding order of 7 values
    public function index(){
        $solutions= Solution::orderBy('id','desc')->paginate(7);
        return view('Administrator.Solutions.index')->with('solutions',$solutions);
    }
    // Create new solution to the description selected
    public function create(){
        $descriptions= Description::all();
        return view('Administrator.Solutions.create')->with('descriptions',$descriptions);
    }
    // Store the solution
    public function store(){
        request()->validate([
            'description'=>'required',
            'solution'=>['required','min:5']
        ]);

        $description= request('description'); //Services
        $solution= request('solution'); //Problems
        
        $desc_id= Description::select('id')->where('description',$description)->get();
        $description_id= $desc_id->toArray();
        foreach($description_id as $id){
        
            Solution::create([
                'description_id' => $id['id'],
                'solution' => $solution
            ]);
            return back()->with('success','Stored Successfully');
        }

    }
    // Delete the solution from the id
    public function destroy(Solution $solution){
        $solution->delete();
        return back()->with('success','Deleted Successfully');
    }
}
