<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $table = 'messages';

    protected $fillable = ['name', 'email' , 'phone' ,'subject' ,'message'];

    public function showMessage(){
        return route('admin.messages.show' , $this->id);
    }

    public function  deleteMessage(){
        return route('admin.messages.destroy' , $this->id);
    }
}
