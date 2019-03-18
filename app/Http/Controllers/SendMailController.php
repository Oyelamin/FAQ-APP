<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

use Session;
use Image;
use Storage;
use App\MailFile;
use App\Email;
use Auth;
class SendMailController extends Controller
{
    public function index(Request $request){

        request()->validate([
            'fro' => 'required|email',
            'subject'=> 'min:3',
            'message' => 'min:10',
            'to'  => 'blessingcodephp@gmail.com'
            // 'a_file' => 'mimes: jpg,gif,svg,txt,pdf,ppt,docx,doc,xls'
        ]);
        Email::create([
            'address' => request('fro'),
            'subject' => request('subject'),
            'description' => request('message')
        ]);
        $data= array(

            'to' => 'blessingcodephp@gmail.com',
            'subject' => request('subject'),
            'bodyMessage' => request('message'),
            'from' => request('fro'),
            'a_file' => request('a_file')

        );
        $attach= request('a_file');
        Mail::send('send.index', $data, function($message) use ($data){
            $message->from('blessingcodephp@gmail.com',"Blessing");
            $message->to($data['to']);
            $message->subject($data['subject']);
           
            if(isset($data['a_file'])){
            $message->attach($data['a_file']->getRealPath(),array(

                'as' => 'a_file.'.$data['a_file']->getClientOriginalExtension(),
                'mime' => $data['a_file']->getMimeType()
                
            )

            );
        }
            
        });
        return redirect('/contactus')->with('success','Thanks! Email Sent, We will get back to you soon');
    }
   
}
