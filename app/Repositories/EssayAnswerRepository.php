<?php

namespace App\Repositories;

use App\Models\EssayAnswer;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EssayAnswerRepository
 * @package App\Repositories
 * @version April 24, 2018, 6:00 am UTC
 *
 * @method EssayAnswer findWithoutFail($id, $columns = ['*'])
 * @method EssayAnswer find($id, $columns = ['*'])
 * @method EssayAnswer first($columns = ['*'])
*/
class EssayAnswerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_user_survey',
        'id_essay',
        'answer'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return EssayAnswer::class;
    }
}
