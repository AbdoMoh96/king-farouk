<?php

namespace App\Http\Controllers\Dashboard;

use App\Custom\Traits\FileTrait;
use App\Custom\Traits\ImageTrait;
use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\languages\Branch_lang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BranchController extends Controller
{
    use ImageTrait , FileTrait;

    public function index(){
      $branches = Branch::orderBy('branches.created_at' , 'desc')->with('branch_ar')->get();
      return view('dashboard.branches.index' , compact('branches'));
    }

    public function create(){
     return view('dashboard.branches.create');
    }

    public function store(Request $request){
        try {
            DB::beginTransaction();

            $branch = new Branch();

            if ($request->hasFile('first_image')) {
                $branch->first_image = $this->uploadImage($request->file('first_image'));
            }

            if ($request->hasFile('second_image')) {
                $branch->second_image = $this->uploadImage($request->file('second_image'));
            }

            if ($request->hasFile('pdf')) {
                $file = $this->uploadFile($request->file('pdf'));
                $branch->menu_name = $file['name'];
                $branch->menu = $file['path'] ;
            }

            $branch->slug = Str::slug($request['title_en'] , '-');
            $branch->map = $request['map'];
            $branch->phone = $request['phone'];
            $branch->alt_phone = $request['alt_phone'];
            $branch->landline = $request['landline'];

            DB::transaction(function () use ($branch){
                $branch->save();
            });

            $branchEN = new Branch_lang;
            $branchEN->branch_id = $branch->id;
            $branchEN->lang = 'en';
            $branchEN->address = $request['address_en'];
            $branchEN->title = $request['title_en'];
            $branchEN->description = $request['description_en'];

            $branchAR = new Branch_lang;
            $branchAR->branch_id = $branch->id;
            $branchAR->lang = 'ar';
            $branchAR->address = $request['address_ar'];
            $branchAR->title = $request['title_ar'];
            $branchAR->description = $request['description_ar'];

            DB::transaction(function () use ($branchEN , $branchAR){
                $branchEN->save();
                $branchAR->save();
            });

            DB::commit();
            return redirect()->route('admin.branches.index')->with('success' , 'branch created successfully!!');
        }catch (\Exception $e){
            File::delete($this->imageDirArr);
            File::delete($this->fileDirArr);
            DB::rollBack();
            return redirect()->route('admin.branches.index')->with('danger', 'DataBase Error please contact Be.Solutions!!');
        }
    }

    public function edit(Branch $branch){
        $branch->load('branch_en' , 'branch_ar');
        return view('dashboard.branches.edit', compact('branch'));
    }

    public function update(Request $request , Branch $branch){
        try {
            DB::beginTransaction();


            if ($request->hasFile('first_image')) {
                array_push($this->oldImageDirArr , $branch->first_image);
                $branch->first_image = $this->uploadImage($request->file('first_image'));
            }

            if ($request->hasFile('second_image')) {
                array_push($this->oldImageDirArr , $branch->second_image);
                $branch->second_image = $this->uploadImage($request->file('second_image'));
            }

            if ($request->hasFile('pdf')) {
                array_push($this->oldFileDirArr , $branch->menu );
                $file = $this->uploadFile($request->file('pdf'));
                $branch->menu_name = $file['name'];
                $branch->menu = $file['path'] ;
            }

            $branch->slug = Str::slug($request['slug'] , '-');
            $branch->map = $request['map'];
            $branch->phone = $request['phone'];
            $branch->alt_phone = $request['alt_phone'];
            $branch->landline = $request['landline'];

            DB::transaction(function () use ($branch){
                $branch->update();
            });

            $branchEN = $branch->branch_en ;
            //$branchEN->branch_id = $branch->id;
            //$branchEN->lang = 'en';
            $branchEN->address = $request['address_en'];
            $branchEN->title = $request['title_en'];
            $branchEN->description = $request['description_en'];

            $branchAR = $branch->branch_ar ;
            //$branchAR->branch_id = $branch->id;
            //$branchAR->lang = 'ar';
            $branchAR->address = $request['address_ar'];
            $branchAR->title = $request['title_ar'];
            $branchAR->description = $request['description_ar'];

            DB::transaction(function () use ($branchEN , $branchAR){
                $branchEN->update();
                $branchAR->update();
            });

            File::delete($this->oldImageDirArr);
            File::delete($this->oldFileDirArr);
            DB::commit();
            return redirect()->route('admin.branches.index')->with('success' , 'branch updated successfully!!');
        }catch (\Exception $e){
            File::delete($this->imageDirArr);
            File::delete($this->fileDirArr);
            DB::rollBack();
            return redirect()->route('admin.branches.index')->with('danger', 'DataBase Error please contact Be.Solutions!!');
        }
    }

    public function destroy(Branch $branch){
        try {
            DB::beginTransaction();

            DB::transaction(function () use ($branch){
                $branch->branch_en->delete();
                $branch->branch_ar->delete();
                $branch->delete();
            });

            File::delete($branch->first_image);
            File::delete($branch->second_image);
            File::delete($branch->menu);
            DB::commit();
            return redirect()->route('admin.branches.index' )->with('success' , 'Branch deleted Successfully!!');
        }catch (\Exception $e){
            return redirect()->route('admin.branches.index' )->with('danger', 'DataBase Error please contact Be.Solutions!!');
        }
    }
}
