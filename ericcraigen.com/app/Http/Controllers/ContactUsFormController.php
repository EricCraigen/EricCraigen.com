<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;


class ContactUsFormController extends Controller {

    public function ContactUsForm(Request $request) {

        $this->validate($request, [
            'firstName' => 'required|string|min:2|max:255',
            'lastName' => 'required|string|min:2|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required'
         ]);

        Contact::create($request->all());
        
        $message = 'Message Successfully Sent!';
        $alertType = 'success';

        $notification = array(
            'message' => $message, 
            'alert-type' => $alertType
        );

        return back()->with($notification);
    }

}
