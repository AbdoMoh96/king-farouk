<?php

namespace App\Models;

use App\Models\languages\Album_lang;
use App\Models\Resources\Image;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function album_en(){
        return $this->hasOne(Album_lang::class , 'album_id' ,'id')->where('lang' , 'en');
    }

    public function album_ar(){
        return $this->hasOne(Album_lang::class , 'album_id' ,'id')->where('lang' , 'ar');
    }

    public function image(){
        return $this->image_path;
    }

    public function images(){
        return $this->hasMany(Image::class , 'album_id' , 'id');
    }


    public function albumGallery(){
        return route('admin.album.gallery' , $this->slug);
    }

    public function uploadView(){
        return route('admin.album.upload.view' , $this->slug);
    }

    public function upload(){
        return route('admin.album.upload' , $this->slug);
    }

    public function editAlbum(){
        return route('admin.albums.edit' , $this->slug);
    }

    public function updateAlbum(){
        return route('admin.albums.update' , $this->slug);
    }

    public function deleteAlbum(){
        return route('admin.albums.destroy' , $this->slug);
    }
}
