<?php

namespace App\Repositories;

use App\Models\JobSettingPosition;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobSettingPositionRepository
 * @package App\Repositories
 * @version March 16, 2018, 11:22 am UTC
 *
 * @method JobSettingPosition findWithoutFail($id, $columns = ['*'])
 * @method JobSettingPosition find($id, $columns = ['*'])
 * @method JobSettingPosition first($columns = ['*'])
*/
class JobSettingPositionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jobsettingid',
        'positionjobid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobSettingPosition::class;
    }
}
