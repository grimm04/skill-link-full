<?php

namespace App\Repositories;

use App\Models\JobApplyUser;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobApplyUserRepository
 * @package App\Repositories
 * @version March 16, 2018, 10:36 am UTC
 *
 * @method JobApplyUser findWithoutFail($id, $columns = ['*'])
 * @method JobApplyUser find($id, $columns = ['*'])
 * @method JobApplyUser first($columns = ['*'])
*/
class JobApplyUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'jobid',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobApplyUser::class;
    }
}
