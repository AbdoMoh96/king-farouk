<?php


namespace App\Custom\Traits;


trait FileTrait
{

    private $fileDirectory = 'dashboardFiles/pdf';
    private $oldFileDirArr = [];
    private $fileDirArr = [];

    private function uploadFile ($file){
        $fileName = time().$file->getClientOriginalName();
        $file->move( $this->fileDirectory , $fileName);
        $filePath = $this->fileDirectory.'/'.$fileName;
        array_push($this->fileDirArr , $filePath );
        $fileArr = [
          'name' => $fileName,
          'path' => $filePath
        ];
        return $fileArr;
    }

}
