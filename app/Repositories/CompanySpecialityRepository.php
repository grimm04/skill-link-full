<?php

namespace App\Repositories;

use App\Models\CompanySpeciality;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CompanySpecialityRepository
 * @package App\Repositories
 * @version March 15, 2018, 6:08 pm UTC
 *
 * @method CompanySpeciality findWithoutFail($id, $columns = ['*'])
 * @method CompanySpeciality find($id, $columns = ['*'])
 * @method CompanySpeciality first($columns = ['*'])
*/
class CompanySpecialityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'companyid',
        'specialityid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CompanySpeciality::class;
    }
}
