<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Problem;
use App\Description;
use App\Solution;
use DB;
class ContactUsController extends Controller
{
    public function index(){
        $services= Service::all();
        $problems= Problem::all();
        $descriptions= Description::all();
        $solutions= Solution::all();
        return view('contact.index')->with('services',$services)->with('problems',$problems);
    }

    public function show(){
        // dd($_SERVER['REQUEST_URI'])
        $services= Service::all();
        $problems= Problem::all();
        $url= $_SERVER['REQUEST_URI'];
        $pro_id= trim($_SERVER['REQUEST_URI'],'/contactus/show?no=');
        $data=DB::table('descriptions')->where('problem_id', $pro_id)->get();
        return view('contact.index')->with('data',$data)->with('services',$services)->with('problems',$problems);
        
    }
    public function phone(){

        return view('contact.phone');

    }
    public function email(){

        return view('contact.email');

    }
}
