<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Post
 * @package App\Models
 * @version September 26, 2018, 8:34 pm UTC
 *
 * @property string title_pl
 * @property string title_en
 * @property string text_pl
 * @property string text_en
 * @property string photo_link
 * @property integer section_id
 */
class Post extends Model
{
    use SoftDeletes;

    public $table = 'posts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'title_pl',
        'title_en',
        'text_pl',
        'text_en',
        'photo_link',
        'section_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title_pl' => 'string',
        'title_en' => 'string',
        'text_pl' => 'string',
        'text_en' => 'string',
        'photo_link' => 'string',
        'section_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
