<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryModel extends Model
{
    use HasFactory;
    // function rel_to_topic(){
    //     return $this->belongsTo(categoryModel::class,'category_id');
    // }
    function rel_to_topic(){
        return $this->hasMany(topic::class,'category_id');
    }
}
