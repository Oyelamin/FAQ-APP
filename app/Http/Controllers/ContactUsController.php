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
use App\Phone;
use App\Appname;
use App\Http\Requests\CallersRequest;
/**
 * Includes of the url from database
 */
//========================
use App\Home;
use App\Phonepage;
use App\Emailpage;

//=================================
class ContactUsController extends Controller
{
    /**
     * For Authentication
     * 
     */
    public function __constrct(){
        $this->middleware('auth');
    }
    /**
     * Showing the service and the links in the view directly from the database
     * 
     */
    public function index(){
        $appName= Appname::latest()->first();
        $homePage= Home::latest()->first(); //The link to the homepage
        $phone= Phonepage::latest()->first();   //The link to the phone contact page
        $emailPage = EmailPage::latest()->first();  //The page to the Email page
        $services= Service::orderBy('id','asc')->paginate(3);   //All services by three
        $links= Link::orderBy('id','desc')->paginate(10);   //Extra links at the right side
        return view('contact.index')
                ->with('services',$services)
                ->with('links',$links)
                ->with('phone',$phone)
                ->with('homePage',$homePage)
                ->with('emailPage',$emailPage)
                ->with('appName',$appName);
        
    }
    /**
     * Fetch the problem related to the service selected
     */
    public function secondContent(Request $request){
        $serv_id= $request->n1; //Fetches the id of the service in the url address
        $services= Service::where('id',$serv_id)->pluck('issues');
        $problems= Problem::select('problem_type','id')->where('service_id', $serv_id)->get()->toArray();
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
        $solutions= Solution::select('id','solution')->where('description_id', $description_id)->get()->toArray();
        return view('content.forthContent')->with('solutions',$solutions);
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
    public function phoneNumber(CallersRequest $request){
        $f_number= request('first_digit');
        $s_number= request('second_digit');
        $t_number= request('third_digit');
        $extra= request('extra');
        $country_name= request('country');
        $countries= Country::select('name','shortCode')->where('name',$country_name)->get()->toArray();
        if(request('country') !== "Other"){
        foreach($countries as $country){
            $phone= $country['shortCode']." ".$f_number.$s_number.$t_number;
            if(isset($extra)){
                Phone::create([
                    'country' => $country['name'],
                    'phone' => $extra
                ]);
            } 
            Phone::create([
                'country' => $country['name'],
                'phone' => $phone
            ]);
        } 
        return back()->with('success','Your request has been Processed');
        }else{
            return redirect()->back()
                ->with(
                    'error',
                    'Please we dont accept any call from other countries 
                    except from the ones listed above. You can send us an Email 
                    Message and we will reply you immediately. Thanks!'
                );
        }
    }

}