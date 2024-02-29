<?php

namespace App\Repositories;

use App\Models\EmployeDuty;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EmployeDutyRepository
 * @package App\Repositories
 * @version April 10, 2018, 5:11 am UTC
 *
 * @method EmployeDuty findWithoutFail($id, $columns = ['*'])
 * @method EmployeDuty find($id, $columns = ['*'])
 * @method EmployeDuty first($columns = ['*'])
*/
class EmployeDutyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fitdutyid',
        'userid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return EmployeDuty::class;
    }
}
