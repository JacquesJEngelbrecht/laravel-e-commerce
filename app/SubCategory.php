<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class SubCategory extends Model
{
    protected $fillable = ['name','category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
