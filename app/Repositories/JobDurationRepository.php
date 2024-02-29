<?php

namespace App\Repositories;

use App\Models\JobDuration;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobDurationRepository
 * @package App\Repositories
 * @version July 10, 2018, 3:31 am UTC
 *
 * @method JobDuration findWithoutFail($id, $columns = ['*'])
 * @method JobDuration find($id, $columns = ['*'])
 * @method JobDuration first($columns = ['*'])
*/
class JobDurationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobDuration::class;
    }
}
