<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{

   protected $guarded = [];


   protected static function boot()
    {
        parent::boot();

        static::creating(function($category){

         $category->slug = str_slug($category->name);

        });

    }
  
   public function parents_category()
   {
   	return $this->belongsTo(__CLASS__);
   }
    public function child_category()
   {
   	return $this->hasMany(__CLASS__);
   }
   public function product()
   {
   	return $this->hasMany(Product::class);
   }
}
