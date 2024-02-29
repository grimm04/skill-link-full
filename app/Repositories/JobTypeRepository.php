<?php

namespace App\Repositories;

use App\Models\JobType;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobTypeRepository
 * @package App\Repositories
 * @version March 15, 2018, 7:20 pm UTC
 *
 * @method JobType findWithoutFail($id, $columns = ['*'])
 * @method JobType find($id, $columns = ['*'])
 * @method JobType first($columns = ['*'])
*/
class JobTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jobid',
        'typejobid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobType::class;
    }
}
