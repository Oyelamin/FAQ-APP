<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Home;
use App\Phonepage;
use App\Emailpage;
use App\Http\Requests\ChangeIndexPageRequest;
use App\Http\Requests\ChangePhonePageRequest;
use App\Http\Requests\ChangeEmailPageRequest;

class AppAddressesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function change_index_page(){

        return view('Add_App_Address.home');

    }
    public function store_index_page(ChangeIndexPageRequest $request){
        Home::create([
            'name' => request('name')
        ]);
        return back()->with('success','URL Address Changed Successfully');
    }
    public function change_phone_page(){
        return view('Add_App_Address.phone');
    }
    public function store_phone_page(ChangePhonePageRequest $request){
        Phonepage::create([
            'name' => request('name')
        ]);
        return back()->with('success','URL Address Changed Successfully');
    }
    public function change_email_page(){
        return view('Add_App_Address.email');
    }
    public function store_email_page(ChangeEmailPageRequest $request){
        Emailpage::create([
            'name' => request('name')
        ]);
        return back()->with('success','URL Address Changed Successfully');
    }
}
