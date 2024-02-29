<?php

namespace App\Repositories;

use App\Models\ImageSurvey;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ImageSurveyRepository
 * @package App\Repositories
 * @version April 26, 2018, 5:17 pm UTC
 *
 * @method ImageSurvey findWithoutFail($id, $columns = ['*'])
 * @method ImageSurvey find($id, $columns = ['*'])
 * @method ImageSurvey first($columns = ['*'])
*/
class ImageSurveyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_question',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ImageSurvey::class;
    }
}
