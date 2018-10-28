<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Faq
 * @package App\Models
 * @version October 28, 2018, 9:56 pm UTC
 *
 * @property string question_pl
 * @property string question_pl_en
 * @property string answer_pl
 * @property string answer_en
 * @property string section_id
 */
class Faq extends Model
{
    use SoftDeletes;

    public $table = 'faq';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'question_pl',
        'question_pl_en',
        'answer_pl',
        'answer_en',
        'section_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'question_pl' => 'string',
        'question_pl_en' => 'string',
        'answer_pl' => 'string',
        'answer_en' => 'string',
        'section_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
