<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
// use Illuminate\Http\UploadedFile;
// use Session;
// use Image;
// use Storage;

use App\Email;
use Auth;
use Illuminate\Support\Facades\Storage;

// use Illuminate\Http\File;
use App\Http\Requests\SendMailValidation;
// use App\Http\Requests\ReplyMailRequests;
class SendMailController extends Controller
{
    public function index(SendMailValidation $request){
        if($request->hasfile('a_file'))
        {
            $files = $request->file('a_file');
            foreach($files as $file)
            {
                $name = $file->getClientOriginalName();
                Storage::putFileAs('public', $file,$name);
                $data[] = $name;
                foreach( $data as $file_names ){
                    Email::create([
                        'address' => request('mailAddress'),
                        'subject' => request('subject'),
                        'description' => request('message'),
                        'attachment'=> $file_names
                    ]);
                }
                
            }
        }else{
        Email::create([
            'address' => request('mailAddress'),
            'subject' => request('subject'),
            'description' => request('message'),
            'attachment'=> 'No Attachments Found'
        ]);
        }
        $data= array(
            'to' => 'blessingcodephp@gmail.com',
            'subject' => request('subject'),
            'bodyMessage' => request('message'),
            'from' => request('mailAddress'),
            'a_file' => request('a_file')
        );
        Mail::send('send.index', $data, function($message) use ($data){
            $message->from('blessingcodephp@gmail.com',"Blessing");
            $message->to($data['to']);
            $message->subject($data['subject']);
            if(isset($data['a_file'])){
                    foreach($data['a_file'] as $file){
                        $message->attach($file->getRealPath(),array(
                            'as' => 'a_file.'.$file->getClientOriginalExtension(),
                            'mime' => $file->getMimeType()
                            )
                        );
                    }
            }
        });
        return redirect()->back()->with('success','Thanks! Email Sent, check your mail inbox after 5mins');
    }
    //Reply Mail Messages
    public function reply(Request $request){
        request()->validate([
            'reply' => ['required','min:10']
        ]);
        $id = $request->id;
        $email_messg = Email::select('description','address','subject','id','created_at')->where('id', $id)->get()->toArray();
        $email_message = $email_messg[0];
        $address= $email_message['address'];
        $subject= "Re: ".$email_message['subject'];
        $reply= request('reply');
        $description = $email_message['description'];
        $date = $email_message['created_at'];
        $data= array(
            'to' => $address,
            'subject' => $subject,
            'bodyMessage' => $reply,
            'replyTo_address' => $address,
            'replyTo_name' => "Client",
            'body_mess' => $description,
            'date' => $date,
            'pathToFile' => public_path().'/img/inits-logo.png'
            // 'a_file' => request('a_file')
        );
        Mail::send('Administrator.Email.send_reply', $data, function($message) use ($data)
        {
            $message->to($data['to']);
            $message->replyTo($data['replyTo_address'], $data['replyTo_name']);
            $message->subject($data['subject']);
            // if(isset($data['a_file'])){
            //     $message->attach($data['a_file']->getRealPath(),array(
            //         'as' => 'a_file.'.$data['a_file']->getClientOriginalExtension(),
            //         'mime' => $data['a_file']->getMimeType()
            //         )
            //     );
            // }
        });
        return redirect()->back()->with('success','Mail Sent!');
        
    }
   
}