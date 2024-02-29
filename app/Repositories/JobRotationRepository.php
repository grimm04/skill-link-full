<?php

namespace App\Repositories;

use App\Models\JobRotation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobRotationRepository
 * @package App\Repositories
 * @version July 10, 2018, 4:20 am UTC
 *
 * @method JobRotation findWithoutFail($id, $columns = ['*'])
 * @method JobRotation find($id, $columns = ['*'])
 * @method JobRotation first($columns = ['*'])
*/
class JobRotationRepository extends BaseRepository
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
        return JobRotation::class;
    }
}
