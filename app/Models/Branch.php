<?php

namespace App\Models;


use App\Models\languages\Branch_lang;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';

    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function branch_en(){
        return $this->hasOne(Branch_lang::class , 'branch_id' , '')->where('lang' , 'en');
    }

    public function branch_ar(){
        return $this->hasOne(Branch_lang::class , 'branch_id' , 'id')->where('lang' , 'ar');
    }

    public function firstImage(){
        return $this->first_image;
    }

    public function secondImage(){
        return $this->second_image;
    }


    public function editBranch()
    {
        return route('admin.branches.edit', $this->slug);
    }

    public function updateBranch()
    {
        return route('admin.branches.update', $this->slug);
    }

    public function webShowBranch(){
        return route('branch.show', $this->slug);
    }

    public function webDownloadBranch(){
        return route('branch.download', $this->slug);
    }


    public function deleteBranch()
    {
        return route('admin.branches.destroy', $this->slug);
    }
}
