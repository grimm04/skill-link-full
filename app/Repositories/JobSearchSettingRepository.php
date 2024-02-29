<?php

namespace App\Repositories;

use App\Models\JobSearchSetting;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobSearchSettingRepository
 * @package App\Repositories
 * @version July 27, 2018, 3:41 am UTC
 *
 * @method JobSearchSetting findWithoutFail($id, $columns = ['*'])
 * @method JobSearchSetting find($id, $columns = ['*'])
 * @method JobSearchSetting first($columns = ['*'])
*/
class JobSearchSettingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'postedtimeid',
        'typejobid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobSearchSetting::class;
    }
}
