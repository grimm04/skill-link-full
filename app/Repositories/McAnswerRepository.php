<?php

namespace App\Repositories;

use App\Models\McAnswer;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class McAnswerRepository
 * @package App\Repositories
 * @version April 24, 2018, 5:50 am UTC
 *
 * @method McAnswer findWithoutFail($id, $columns = ['*'])
 * @method McAnswer find($id, $columns = ['*'])
 * @method McAnswer first($columns = ['*'])
*/
class McAnswerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_user_survey',
        'id_mc',
        'answer'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return McAnswer::class;
    }
}
