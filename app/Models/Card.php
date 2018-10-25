<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use SoftDeletes;

    public $table = 'cards';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];
    public $fillable = [
        'title_pl',
        'title_en',
        'desc_pl',
        'desc_en',
        'section_id',
        'img_link'
    ];
    protected $casts = [
        'id' => 'integer',
        'title_pl' => 'string',
        'title_en' => 'string',
        'desc_pl' => 'string',
        'desc_en' => 'string',
        'section_id' => 'integer',
        'img_link'=>'string'
    ];
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
