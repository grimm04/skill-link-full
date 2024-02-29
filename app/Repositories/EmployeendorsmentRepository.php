<?php

namespace App\Repositories;

use App\Models\Employeendorsment;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EmployeendorsmentRepository
 * @package App\Repositories
 * @version April 10, 2018, 4:52 am UTC
 *
 * @method Employeendorsment findWithoutFail($id, $columns = ['*'])
 * @method Employeendorsment find($id, $columns = ['*'])
 * @method Employeendorsment first($columns = ['*'])
*/
class EmployeendorsmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'endorsmentid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Employeendorsment::class;
    }
}
