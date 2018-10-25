<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Badge extends Model {

    use SoftDeletes;

    public $table = 'badges';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];
    public $fillable = [
        'icon_link',
        'title_pl',
        'title_en',
        'section_id'
    ];
    protected $casts = [
        'id' => 'integer',
        'icon_link'=>'string',
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
