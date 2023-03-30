<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string  $name
 * @property string  $description
 * @property string  $name
 * @property string  $description
 * @property string  $name
 * @property string  $description
 * @property float   $price
 * @property float   $price
 * @property float   $price
 * @property boolean $status
 * @property boolean $status
 * @property boolean $status
 * @property int     $created_at
 * @property int     $updated_at
 * @property int     $deleted_at
 * @property int     $created_at
 * @property int     $updated_at
 * @property int     $deleted_at
 * @property int     $created_at
 * @property int     $updated_at
 * @property int     $deleted_at
 */
class Products extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sku', 'name', 'description', 'price', 'quantity', 'status', 'created_at', 'updated_at', 'deleted_at', 'sku', 'name', 'description', 'price', 'quantity', 'status', 'created_at', 'updated_at', 'deleted_at', 'sku', 'name', 'description', 'price', 'quantity', 'status', 'created_at', 'updated_at', 'deleted_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string', 'description' => 'string', 'price' => 'double', 'status' => 'boolean', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'deleted_at' => 'timestamp', 'name' => 'string', 'description' => 'string', 'price' => 'double', 'status' => 'boolean', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'deleted_at' => 'timestamp', 'name' => 'string', 'description' => 'string', 'price' => 'double', 'status' => 'boolean', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'deleted_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at', 'deleted_at', 'created_at', 'updated_at', 'deleted_at', 'created_at', 'updated_at', 'deleted_at'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...

    // Functions ...

    // Relations ...
}
