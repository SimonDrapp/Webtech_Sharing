<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;

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

