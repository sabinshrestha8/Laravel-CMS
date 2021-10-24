<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;

class ContactController extends Controller
{
    public function show() {
        $data['contacts'] = Contact::paginate(10);
        return view('admin.contacts', $data);
    }


    public function contact_store(Request $request) {
        $validator = Validator::make($request->all(), [
            'contact_email' => 'required',
        ]);
        if ($validator->fails()) {
            $success = 0;
            return back()->withErrors($validator)->withInput();
        } else {
            $data = array(
                    'name' => $request->contact_name,
                    'email' => $request->contact_email,
                    'message' => $request->contact_message,
            );
            $contact = Contact::create($data);
            if($contact) {
                return redirect('/contact');
            }
        }
    }
}
