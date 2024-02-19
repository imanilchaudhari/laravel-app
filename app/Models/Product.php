<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $sku
 * @property $title
 * @property $slug
 * @property $image
 * @property $content
 * @property $model
 * @property $price
 * @property $quantity
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    use HasFactory;

    static $rules = [
		'sku' => 'required',
		'title' => 'required',
		'slug' => 'required',
		'image' => 'required',
		'content' => 'required',
		'model' => 'required',
		'price' => 'required',
		'quantity' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sku','title','slug','image','content','model','price','quantity','status'];



}
