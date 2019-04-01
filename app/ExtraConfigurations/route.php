<?php
/**
 * Includes of the url from database
 */
//========================
use App\Home;
use App\Phonepage;
use App\Emailpage;
//=================================make the onliut hiid nfdfdf fdjfdfdjfdfwfhdfdf dfdfer
use App\Phone;
use App\Email;
use App\Appname;
class Change
{
    public static function index(){
        $name= Home::latest()->first();
        return  $name["name"];
    }
    public static function phone(){
        $phone= Phonepage::latest()->first();
        return  $phone["name"];
        
    }
    public static function email(){
        $email= Emailpage::latest()->first();
        return  $email["name"];
    }
    public static function callers_count_number(){
        $date= date('Y-m-d');
        $callers= Phone::Where('created_at', 'Like', '%' . $date . '%')->get()->toArray();
        $count_calls= count($callers);
        return $count_calls;

    }
    public static function email_count_number(){
        $date= date('Y-m-d');
        $emails= Email::Where('created_at', 'Like', '%' . $date . '%')->get()->toArray();
        $count_emails= count($emails);
        return $count_emails;
    }
    public static function title(){
        $title = Appname::latest()->first();
        return $title;
    }

}