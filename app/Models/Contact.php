<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';


    protected $fillable = ['email',
        'email_alt',
        'phone',
        'phone_alt',
        'address_en',
        'alt_address_en',
        'address_ar',
        'alt_address_ar',
        'location',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'linked_in',
        'snapchat',
        'whatsapp',
        'google_plus',
        'pintrest',
        'behance'];


    public function editContact(){
        return route('admin.contact.edit' , $this->id);
    }

    public function updateContact(){
        return route('admin.contact.update' , $this->id);
    }
}
