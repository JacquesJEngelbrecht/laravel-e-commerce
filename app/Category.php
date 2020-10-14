<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubCategory;

class Category extends Model
{
    protected $fillable = ['name','slug','description','image'];

    public function subcategory(){
        return $this->hasMany(SubCategory::class);
    }
}
