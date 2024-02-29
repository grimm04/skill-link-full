<?php

namespace App\Repositories;

use App\Models\UserSurvey;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserSurveyRepository
 * @package App\Repositories
 * @version April 24, 2018, 5:46 am UTC
 *
 * @method UserSurvey findWithoutFail($id, $columns = ['*'])
 * @method UserSurvey find($id, $columns = ['*'])
 * @method UserSurvey first($columns = ['*'])
*/
class UserSurveyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email',
        'name',
        'company',
        'company_size',
        'job_title'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserSurvey::class;
    }
}
