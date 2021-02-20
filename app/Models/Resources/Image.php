<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class Image extends Model
{
    protected $table = 'images';

    public function deleteImage(){
       return route('admin.image.destroy' , $this->id);
    }
}
