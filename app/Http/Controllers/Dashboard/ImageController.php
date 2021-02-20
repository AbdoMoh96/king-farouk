<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Resources\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function destroy(Image $image){
        try {
            DB::beginTransaction();
            DB::transaction(function () use ($image){
                $image->delete();
            });
            File::delete($image->path);
            DB::commit();
            return redirect()->back()->with('success' , 'image deleted successfully!!');
        }catch (\Throwable $e){
            DB::rollBack();
            return redirect()->back()->with('danger', 'DataBase Error please contact Be.Solutions!!');
        }
    }
}
