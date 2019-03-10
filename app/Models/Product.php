<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Product extends Model Implements HasMedia
{
	use HasMediaTrait;
    protected $guarded = [];
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function($product){

        	$product->slug = str_slug($product->title);

        });
    }

    public function category()
    {
    	return $this->hasOne(Category::class)
    }
}
