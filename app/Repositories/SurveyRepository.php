<?php

namespace App\Repositories;

use App\Models\Survey;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SurveyRepository
 * @package App\Repositories
 * @version April 16, 2018, 5:51 am UTC
 *
 * @method Survey findWithoutFail($id, $columns = ['*'])
 * @method Survey find($id, $columns = ['*'])
 * @method Survey first($columns = ['*'])
*/
class SurveyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'sort'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Survey::class;
    }
}
