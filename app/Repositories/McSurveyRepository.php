<?php

namespace App\Repositories;

use App\Models\McSurvey;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class McSurveyRepository
 * @package App\Repositories
 * @version April 16, 2018, 6:10 am UTC
 *
 * @method McSurvey findWithoutFail($id, $columns = ['*'])
 * @method McSurvey find($id, $columns = ['*'])
 * @method McSurvey first($columns = ['*'])
*/
class McSurveyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_question',
        'question'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return McSurvey::class;
    }
}
