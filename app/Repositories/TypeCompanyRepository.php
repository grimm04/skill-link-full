<?php

namespace App\Repositories;

use App\Models\TypeCompany;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TypeCompanyRepository
 * @package App\Repositories
 * @version March 15, 2018, 4:06 pm UTC
 *
 * @method TypeCompany findWithoutFail($id, $columns = ['*'])
 * @method TypeCompany find($id, $columns = ['*'])
 * @method TypeCompany first($columns = ['*'])
*/
class TypeCompanyRepository extends BaseRepository
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
        return TypeCompany::class;
    }
}
