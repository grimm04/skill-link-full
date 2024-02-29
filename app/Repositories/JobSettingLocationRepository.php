<?php

namespace App\Repositories;

use App\Models\JobSettingLocation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobSettingLocationRepository
 * @package App\Repositories
 * @version March 16, 2018, 11:23 am UTC
 *
 * @method JobSettingLocation findWithoutFail($id, $columns = ['*'])
 * @method JobSettingLocation find($id, $columns = ['*'])
 * @method JobSettingLocation first($columns = ['*'])
*/
class JobSettingLocationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jobsettingid',
        'locationid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobSettingLocation::class;
    }
}
