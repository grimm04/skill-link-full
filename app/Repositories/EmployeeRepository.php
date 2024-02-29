<?php

namespace App\Repositories;

use App\Models\Employee;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EmployeeRepository
 * @package App\Repositories
 * @version January 5, 2018, 8:34 am UTC
 *
 * @method Employee findWithoutFail($id, $columns = ['*'])
 * @method Employee find($id, $columns = ['*'])
 * @method Employee first($columns = ['*'])
*/
class EmployeeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fname',
        'lname',
        'email',
        'phone',
        'address',
        'birth',
        'photo',
        'emergency_contact_1',
        'emergency_contact_2',
        'certifiction_number',
        'provinceid',
        'genderid',
        'tradeid',
        'child_tradeid',
        'maritialid',
        'certifictionoriginid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Employee::class;
    }
}
