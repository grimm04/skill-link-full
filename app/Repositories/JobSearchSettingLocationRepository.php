<?php

namespace App\Repositories;

use App\Models\JobSearchSettingLocation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobSearchSettingLocationRepository
 * @package App\Repositories
 * @version July 27, 2018, 4:08 am UTC
 *
 * @method JobSearchSettingLocation findWithoutFail($id, $columns = ['*'])
 * @method JobSearchSettingLocation find($id, $columns = ['*'])
 * @method JobSearchSettingLocation first($columns = ['*'])
*/
class JobSearchSettingLocationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jobsearchid',
        'locationid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobSearchSettingLocation::class;
    }
}
