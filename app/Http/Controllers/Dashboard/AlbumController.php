<?php

namespace App\Http\Controllers\Dashboard;

use App\Custom\Traits\ImageTrait;
use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AlbumController extends Controller
{
    use ImageTrait;

    public function index(){
        $albums = Album::orderBy('albums.created_at' , 'desc')->with('album_en' , 'album_ar' )->get();
        return view('dashboard.albums.index' , compact('albums'));
    }

    public function gallery(Album $album){
        $album->load('images');
        return view('dashboard.albums.gallery' , compact('album'));
    }


    public function create(){

    }

    public function store(){

    }

    public function uploadView(Album $album){
        return view('dashboard.albums.upload' , compact('album'));
    }

    public function upload( Request $request , Album $album){
        try {
            DB::beginTransaction();
            if ($request->hasFile('images')) {
                $this->uploadImages($request->file('images'), $album->id, 'album');
            }else{
                return redirect()->back()->with('danger', 'please select files to upload!!');
            }
            DB::commit();
            return redirect()->route('admin.albums.index')->with('success' , 'Album Images Uploaded Successfully!!');
        }catch (\Exception $e){
            File::delete($this->imageDirArr);
            DB::rollBack();
            return redirect()->route('admin.albums.index')->with('danger', 'DataBase Error please contact Be.Solutions!!');
        }
    }


}
