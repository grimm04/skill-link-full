<?php

namespace App\Repositories;

use App\Models\EssayQuestion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EssayQuestionRepository
 * @package App\Repositories
 * @version April 24, 2018, 5:55 am UTC
 *
 * @method EssayQuestion findWithoutFail($id, $columns = ['*'])
 * @method EssayQuestion find($id, $columns = ['*'])
 * @method EssayQuestion first($columns = ['*'])
*/
class EssayQuestionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_survey',
        'question',
        'image',
        'sort'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return EssayQuestion::class;
    }
}
