<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;

class PagesController extends Controller
{
    private $pagetitle = array("ACASA","DESPRE NOI","CONTACTE");
    private $companyTitle = " : Techno-Total";
    public function main(){
        $title = 'ACASA : Techno-Total';
        return view('main')->with('title',$this->pagetitle[0].$this->companyTitle);
    }
    public function about(){
        $title = 'DESPRE NOI : Techno-Total';
        return view('about')->with('title',$this->pagetitle[1].$this->companyTitle);
    }
    public function contactus(){
        $title = 'CONTACTE : Techno-Total';
        return view('contactus')->with('title',$this->pagetitle[2].$this->companyTitle);
    }
    public function sendcontact(Request $request){
        $this->validate($request,['name'=>'bail|required|min:3|max:40',
                                  'email'=>'required|email',
                                  'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
                                  'msg'=>'required|min:10|max:500']);
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'bodymessage' => $request->msg
        );
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('viliici@yahoo.com');
            $message->subject('ATENTIE!! UN MESAJ DIRECT DE PE TECHNOTOTAL.MD');
        });
        Session::flash('message', "Multumim pentru mesajul Dmvs! In scurt timp v-om lua legatura.");
        
        return redirect()->back();
    }
}
