<?php

namespace App\Http\Controllers;
use App\Country;
use Illuminate\Http\Request;
use App\Service;
use App\Problem;
use App\Description;
use App\Solution;
use DB;
use App\Link;
use App\Caller;
class ContactUsController extends Controller
{
    /**
     * For Authentication
     */
    public function __constrct(){

        $this->middleware('auth');

    }
    /**
     * Showing the service and the links in the view directly from the database
     */
    public function index(){
        $services= Service::orderBy('id','asc')->paginate(3);
        $links= Link::orderBy('id','desc')->paginate(10);
        return view('contact.index')->with('services',$services)->with('links',$links);
        
    }
    /**
     * Fetch the problem related to the service selected
     */
    public function secondContent(Request $request){
        $serv_id= $request->n1; //Fetches the id of the service in the url address
        $services= Service::where('id',$serv_id)->pluck('issues');
        $problem= Problem::select('problem_type','id')->where('service_id', $serv_id)->get();
        $problems= $problem->toArray();
        return view('content.secondContent')->with('problems', $problems)->with('services',$services);

    }
    /**
     * Fetch the description related to the selected value
     */
    public function thirdContent(Request $request){

        $desc_id= $request->n2;
        $descriptions= Description::select('description','id')->where('id', $desc_id)->get();
        return view('content.thirdContent')->with('descriptions',$descriptions);

    }
    /**
     * Fetch the solution related to the selected value
     */
    public function forthContent(Request $request){
        $description_id= $request->n3;
        // dd($description_id);
        $solutions= Solution::select('id','solution')->where('description_id', $description_id)->get();

        return view('content.forthContent')->with('solutions',$solutions);

    }
    /**
     * The callers page where they can select out of the the 
     */
    public function phone(){
    
        $countries= Country::all();
        $links= Link::orderBy('id','desc')->paginate(10);
        return view('contact.phone')->with('countries',$countries)->with('links',$links);

    }
    
    /**
     * Page for the user to be able to send mail to us is the can't find help throught the web help app
     */
    public function email(){

        $links= Link::orderBy('id','desc')->paginate(10);
        return view('contact.email')->with('links',$links);

    }
    /**
     * Save callers number and detaills to the db for the admin to get through them
     */
    public function caller(){

        request()->validate([

            'f-number' => ['required','min:3'],
            's-number' => ['required','min:3'],
            't-number' => ['required','min:4'],
            'country' => 'required'

        ]);
        $f_number= request('f-number');
        $s_number= request('s-number');
        $t_number= request('t-number');
        $ext= request('extra');
        $country_name= request('country');
        $country_db= Country::select('name','shortCode')->where('name',$country_name)->get();
        $countries= $country_db->toArray();
        foreach($countries as $country){
       
            $phone= $country['shortCode']." ".$f_number.$s_number.$t_number;
            Caller::create([

                'country' => $country['name'],
                'phone' => $phone

            ]);
        }   

        return back()->with('success','Your request has been Processed');

    }


}