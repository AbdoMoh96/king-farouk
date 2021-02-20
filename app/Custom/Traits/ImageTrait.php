<?php


namespace App\Custom\Traits;
use App\Models\Resources\Image;
use Illuminate\Support\Facades\DB;

trait ImageTrait
{
    private $directory = 'dashboardImages/images';
    private $oldImageDirArr = [];
    private $imageDirArr = [];


    private function uploadImage ($file){
        $fileName = time().$file->getClientOriginalName();
        $file->move( $this->directory , $fileName);
        $filePath = $this->directory.'/'.$fileName;
        array_push($this->imageDirArr , $filePath );
        return $filePath;
    }



    private function uploadImages($files , $id , $type )  {

        foreach ($files as $file ){
            $fileName = time().$file->getClientOriginalName();
            $file->move( $this->directory , $fileName);
            $filePath = $this->directory.'/'.$fileName;
            array_push($this->imageDirArr , $filePath );
            $imgs = new Image();
            $imgs->title = 'King Farouk Restaurant';
            $imgs->name = $fileName;
            $imgs->path = $filePath;
            if ($type === 'album'){
                $imgs->album_id = $id;
            }else if($type === 'meal'){
                $imgs->meal_id = $id;
            }
            $imgs->alt = 'image is not available!!';
            DB::transaction(function() use ($imgs){
                $imgs->save();
            });
        }


    }

}
