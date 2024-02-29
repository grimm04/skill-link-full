<?php

namespace App\Repositories;

use App\Models\JobSkill;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobSkillRepository
 * @package App\Repositories
 * @version March 18, 2018, 3:56 pm UTC
 *
 * @method JobSkill findWithoutFail($id, $columns = ['*'])
 * @method JobSkill find($id, $columns = ['*'])
 * @method JobSkill first($columns = ['*'])
*/
class JobSkillRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jobid',
        'skillneedid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobSkill::class;
    }
}
