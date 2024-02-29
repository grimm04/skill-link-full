<?php

namespace App\Repositories;

use App\Models\ProfileSearchSetting;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProfileSearchSettingRepository
 * @package App\Repositories
 * @version July 27, 2018, 3:21 am UTC
 *
 * @method ProfileSearchSetting findWithoutFail($id, $columns = ['*'])
 * @method ProfileSearchSetting find($id, $columns = ['*'])
 * @method ProfileSearchSetting first($columns = ['*'])
*/
class ProfileSearchSettingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'interst',
        'location',
        'company',
        'industries',
        'school'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProfileSearchSetting::class;
    }
}
