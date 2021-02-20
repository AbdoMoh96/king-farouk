<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function edit(Contact $contact){
        return view('dashboard.contact.edit' , compact('contact'));
    }

    public function update(Request $request , Contact $contact){

        $contact->update([
            'email' => $request['email'],
            'email_alt' => $request['email_alt'],
            'phone' => $request['phone'],
            'phone_alt' => $request['phone_alt'],
            'address_en' => $request['address_en'],
            'alt_address_en' => $request['alt_address_en'],
            'address_ar' => $request['address_ar'],
            'alt_address_ar' => $request['alt_address_ar'],
            'location' => $request['location'],
            'facebook' => $request['facebook'],
            'twitter' => $request['twitter'],
            'instagram' => $request['instagram'],
            'youtube' => $request['youtube'],
            'linked_in' => $request['linkedin'],
            'snapchat' => $request['snapchat'],
            'whatsapp' => $request['whatsapp'],
            'google_plus' => $request['google_plus'],
            'pintrest' => $request['pintrest'],
            'behance' => $request['behance']
        ]);
        return redirect()->back()->with('success' , 'Contact Updated Successfully!');
    }
}
