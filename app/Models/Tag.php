<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tag
 * @package App\Models
 * @version April 11, 2020, 12:15 am UTC
 *
 * @property string tag
 */
class Tag extends Model
{
    use SoftDeletes;

    public $table = 'tags';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tag'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tag' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tag' => 'required'
    ];


}
