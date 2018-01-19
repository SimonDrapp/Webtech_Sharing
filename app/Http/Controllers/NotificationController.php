<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use DB;
use App\autovermietung;
use App\fahrradvermietung;
use Session;

class NotificationController extends Controller
{
    public function validateAndSave(Request $request)
    {
        $contact = new Notification;
        $contact->firstname = $request->firstname;
        $contact->lastname = $request->lastname;
        $contact->email = $request->email;
        $contact->mobile = $request->mobile;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        if ($contact->save()) {

            return view('notification.thankyou', ['contact' => $contact]);
        } else {
            return view('welcome', ['contact' => $contact]);
        }
    }

        public function showAllContacts(Request $request)
    {
        $contacts = Notification::all();
        return view('notification.showAllContacts', ['contacts' => $contacts]);
    }


        public function showContact(Request $request, $id)
    {
        $contact = Notification::where('id',$id)->first();
        return view('notification.showContact', ['contact' => $contact]);
    }

    public function postNachricht(Request $request){
        $nachrichten = new Notification;
        $nachrichten->firstname = $request->firstname;
        $nachrichten->lastname = $request->lastname;
        $nachrichten->email = $request->email;
        $nachrichten->mobile = $request->mobile;
        $nachrichten->subject = $request->subject;
        $nachrichten->message = $request->message;

        $request->session()->put('firstname', $request->firstname);
        $request->session()->put('lastname', $request->lastname);
        $request->session()->put('email', $request->email);
        $request->session()->put('mobile', $request->mobile);
        $request->session()->put('subject', $request->subject);
        $request->session()->put('message', $request->message);

        $nachrichten = new Notification;
        $nachrichten->firstname = $request->session()->get('firstname');
        $nachrichten->lastname = $request->session()->get('lastname');
        $nachrichten->email = $request->session()->get('email');
        $nachrichten->mobile = $request->session()->get('mobile');
        $nachrichten->subject = $request->session()->get('subject');
        $nachrichten->message = $request->session()->get('message');

        DB::table('notifications')->insert(['firstname'=>$nachrichten->firstname,'lastname'=>$nachrichten->lastname,
            'email'=>$nachrichten->email, 'mobile'=>$nachrichten->mobile, 'subject'=>$nachrichten->subject,
            'message'=>$nachrichten->message,]);

        $aAdresses = autovermietung::all();
        $fAdresses = fahrradvermietung::all();
        return view('welcome',['aAdresses' => $aAdresses, 'fAdresses' => $fAdresses]);


    }

    public function getNachricht(){
        $nachricht = Notification::all();
        return view('nachrichten',['nachricht'=>$nachricht]);
    }




        /*$errMsg = $this->validateContact($contact);

         if (!empty($errMsg)) {
              return view('welcome', ["errMsg" => $errMsg,'contact' => $contact]);
          } else {
              $contact->save();
              return view('notification.thankyou', ['contact' => $contact]);
          }*/

        /*
             public function showAllContacts(Request $request)
             {
                 $contacts = Notification::all();
                 return view('notification.showAllContacts', ['contacts' => $contacts]);
             }


             public function showContact(Request $request, $id)
             {
                 $contact = Notification::where('id',$id)->first();
                 return view('notification.showContact', ['contact' => $contact]);
             }

        */

            }

