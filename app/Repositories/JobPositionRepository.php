<?php

namespace App\Repositories;

use App\Models\JobPosition;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobPositionRepository
 * @package App\Repositories
 * @version March 15, 2018, 7:20 pm UTC
 *
 * @method JobPosition findWithoutFail($id, $columns = ['*'])
 * @method JobPosition find($id, $columns = ['*'])
 * @method JobPosition first($columns = ['*'])
*/
class JobPositionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jobid',
        'positionjobid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobPosition::class;
    }
}
