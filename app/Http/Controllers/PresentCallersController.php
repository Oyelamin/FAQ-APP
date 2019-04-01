<?php

namespace App\Http\Controllers;
use App\Phone;
use Illuminate\Http\Request;

class PresentCallersController extends Controller
{
    public function index(){
        $date = date('Y-m-d');
       $callers= Phone::Where('created_at', 'Like', '%' . $date . '%')->get()->toArray();
        return view('Administrator.Caller.today')->with('callers',$callers);


    }
}
