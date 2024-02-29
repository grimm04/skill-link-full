<?php

namespace App\Repositories;

use App\Models\JobSearchSettingType;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobSearchSettingTypeRepository
 * @package App\Repositories
 * @version August 1, 2018, 7:16 am UTC
 *
 * @method JobSearchSettingType findWithoutFail($id, $columns = ['*'])
 * @method JobSearchSettingType find($id, $columns = ['*'])
 * @method JobSearchSettingType first($columns = ['*'])
*/
class JobSearchSettingTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jobsearchid',
        'typejob'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobSearchSettingType::class;
    }
}
