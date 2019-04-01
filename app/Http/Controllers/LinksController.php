<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Link;
use App\Http\Requests\LinkRequests;
class LinksController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $links= Link::orderBy('id','desc')->paginate(7);
        return view('Administrator.Links.index')->with('links',$links);
    }
    public function create(){
        return view('Administrator.Links.create');
    }
    public function store(LinkRequests $request){
        Link::create([
            'name'=> request('name'),
            'address'=>request('address')
        ]);

        return back()->with('success','Link Stored Successfully');

    }
    public function destroy(Link $link){
        $link->delete();
        return back()->with('success','Deleted Successfully');
    }

}
