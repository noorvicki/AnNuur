<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Post
 * @package App\Models
 * @version April 11, 2020, 12:28 am UTC
 *
 * @property string judul
 * @property integer kategori
 * @property integer tag
 * @property string gambar
 * @property string body
 */
class Post extends Model
{
    use SoftDeletes;

    public $table = 'posts';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'judul',
        'kategori',
        'tag',
        'gambar',
        'body'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'judul' => 'string',
        'kategori' => 'integer',
        'tag' => 'integer',
        'gambar' => 'string',
        'body' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'judul' => 'required',
        'kategori' => 'required',
        'gambar' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        'body' => 'required'
    ];


}
