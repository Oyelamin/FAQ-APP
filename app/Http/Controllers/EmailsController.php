<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;
class EmailsController extends Controller
{
 
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $emails= Email::orderBy('id','desc')->paginate(4);
        return view('Administrator.Email.index')->with('emails',$emails);
    }
    public function destroy(Email $email){
        $email->delete();
        return back()->with('success','Deleted Successfully');
    }
    public function reply(Request $request){
        $email_id = $request->id;
        $email = Email::select('subject')->where('id', $email_id)->get()->toArray();
        $subject= $email[0]['subject'];
        return view('Administrator.Email.reply')
                        ->with('email_id',$email_id)
                        ->with('subject',$subject);
    }
    public function showAttachment(Request $request){
        $id = $request->id;
        $attachments = Email::select('attachment')->where('id', $id)->get()->toArray();
        $attachment= $attachments[0]['attachment'];
        return view('Administrator.Email.attachment')->with('attachment',$attachment);
    }
    
}

