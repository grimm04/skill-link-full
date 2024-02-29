<?php

namespace App\Repositories;

use App\Models\JobSettingUser;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobSettingUserRepository
 * @package App\Repositories
 * @version March 16, 2018, 11:20 am UTC
 *
 * @method JobSettingUser findWithoutFail($id, $columns = ['*'])
 * @method JobSettingUser find($id, $columns = ['*'])
 * @method JobSettingUser first($columns = ['*'])
*/
class JobSettingUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'employmentstatusid',
        'jobrelocate',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobSettingUser::class;
    }
}
