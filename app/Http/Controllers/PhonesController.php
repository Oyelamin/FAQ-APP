<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Home;
use App\Link;
use App\Http\Requests\CallersRequest;
use App\Phone;
use App\customer_prefer_numbers;
use App\customer_prefer_international_numbers;
class PhonesController extends Controller
{
    // public function index(){
    //     //
    // }
    public function index(){
        $customer_p_i_number= customer_prefer_international_numbers::latest()->first();
        $customer_p_number = customer_prefer_numbers::latest()->first();
        $homePage= Home::latest()->first();
        $countries= Country::all();
        $links= Link::orderBy('id','desc')->paginate(10);
        return view('contact.phone')
                ->with('countries',$countries)
                ->with('links',$links)
                ->with('homePage',$homePage)
                ->with('customer_p_number',$customer_p_number)
                ->with('customer_p_i_number',$customer_p_i_number);
    }
    public function store(CallersRequest $request){
        
        $f_number= request('first_digit');
        $s_number= request('second_digit');
        $t_number= request('third_digit');
        $extra= request('extra');
        $country_name= request('country');
        $country_db= Country::select('name','shortCode')->where('name',$country_name)->get();
        $countries= $country_db->toArray();
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
            return back()
                ->with(
                    'error',
                    'Please we dont accept any call from other countries 
                    except from the ones listed above. You can send us an Email 
                    Message and we will reply you immediately. Thanks!'
                );
        }
    }
}
