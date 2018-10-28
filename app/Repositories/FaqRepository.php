<?php

namespace App\Repositories;

use App\Models\Faq;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FaqRepository
 * @package App\Repositories
 * @version October 28, 2018, 9:56 pm UTC
 *
 * @method Faq findWithoutFail($id, $columns = ['*'])
 * @method Faq find($id, $columns = ['*'])
 * @method Faq first($columns = ['*'])
*/
class FaqRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'question_pl',
        'question_pl_en',
        'answer_pl',
        'answer_en',
        'section_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Faq::class;
    }
}
