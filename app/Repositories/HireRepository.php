<?php

namespace App\Repositories;

use App\Models\Hire;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class HireRepository
 * @package App\Repositories
 * @version July 31, 2018, 8:12 am UTC
 *
 * @method Hire findWithoutFail($id, $columns = ['*'])
 * @method Hire find($id, $columns = ['*'])
 * @method Hire first($columns = ['*'])
*/
class HireRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'employeeid',
        'companyid',
        'childtradeid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Hire::class;
    }
}
