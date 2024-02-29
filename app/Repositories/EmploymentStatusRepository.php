<?php

namespace App\Repositories;

use App\Models\EmploymentStatus;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EmploymentStatusRepository
 * @package App\Repositories
 * @version March 15, 2018, 6:45 pm UTC
 *
 * @method EmploymentStatus findWithoutFail($id, $columns = ['*'])
 * @method EmploymentStatus find($id, $columns = ['*'])
 * @method EmploymentStatus first($columns = ['*'])
*/
class EmploymentStatusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return EmploymentStatus::class;
    }
}
