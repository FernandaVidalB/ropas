<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ropa
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $price
 * @property $stock
 * @property $size
 * @property $color
 * @property $brand
 * @property $gender
 * @property $release_date
 * @property $is_active
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ropa extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'description', 'price', 'stock', 'size', 'color', 'brand', 'gender', 'release_date', 'is_active'];


}
