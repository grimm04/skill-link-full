<?php

namespace App\Repositories;

use App\Models\JobSettingType;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobSettingTypeRepository
 * @package App\Repositories
 * @version March 16, 2018, 11:23 am UTC
 *
 * @method JobSettingType findWithoutFail($id, $columns = ['*'])
 * @method JobSettingType find($id, $columns = ['*'])
 * @method JobSettingType first($columns = ['*'])
*/
class JobSettingTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jobsettingid',
        'typejobid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobSettingType::class;
    }
}
