<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Country;
use App\Http\Requests\CountryRequest;

class CountriesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $countries= Country::orderBy('id','desc')->paginate(6);
        return view('Administrator.Country.index')->with('countries',$countries);
    }
    public function create(){
        return view('Administrator.Country.create');
    }
    
    public function store(CountryRequest $request){
        Country::create([
            'name'=> request('country'),
            'shortCode'=> request('shortCode')
        ]);
        return back()->with('success','Country info added successfully!');
    }
    public function destroy(Country $country){
        $country->delete();
        return back()->with('success','Deleted!');
    }
}
