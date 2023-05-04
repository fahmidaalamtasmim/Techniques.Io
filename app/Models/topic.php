<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    //realtion with category
    function rel_to_category(){
        return $this->belongsTo(categoryModel::class,'category_id');
    }

    
}
