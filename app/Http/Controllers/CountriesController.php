<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Country;


class CountriesController extends Controller
{
    public function index(){

        $countries= Country::orderBy('id','desc')->paginate(6);
        return view('Administrator.Country.index')->with('countries',$countries);

    }
    public function create(){
        return view('Administrator.Country.create');
    }
    public function store(){
        request()->validate([
            'country'=>['required','min:3'],
            'shortCode'=>['required','min:3']
        ]);
        Country::create([
            'name'=> request('country'),
            'shortCode'=> request('shortCode')
        ]);
        return back()->with('success','Done!');
    }
    public function destroy(Country $country){
        $country->delete();
        return back()->with('success','Deleted!');
    }
}
