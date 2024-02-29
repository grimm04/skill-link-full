<?php

namespace App\Repositories;

use App\Models\EssaySurvey;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EssaySurveyRepository
 * @package App\Repositories
 * @version April 16, 2018, 6:09 am UTC
 *
 * @method EssaySurvey findWithoutFail($id, $columns = ['*'])
 * @method EssaySurvey find($id, $columns = ['*'])
 * @method EssaySurvey first($columns = ['*'])
*/
class EssaySurveyRepository extends BaseRepository
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
        return EssaySurvey::class;
    }
}
