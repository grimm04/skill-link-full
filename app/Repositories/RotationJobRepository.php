<?php

namespace App\Repositories;

use App\Models\RotationJob;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RotationJobRepository
 * @package App\Repositories
 * @version July 10, 2018, 4:29 am UTC
 *
 * @method RotationJob findWithoutFail($id, $columns = ['*'])
 * @method RotationJob find($id, $columns = ['*'])
 * @method RotationJob first($columns = ['*'])
*/
class RotationJobRepository extends BaseRepository
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
        return RotationJob::class;
    }
}
