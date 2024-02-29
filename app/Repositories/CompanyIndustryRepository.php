<?php

namespace App\Repositories;

use App\Models\CompanyIndustry;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CompanyIndustryRepository
 * @package App\Repositories
 * @version March 15, 2018, 6:18 pm UTC
 *
 * @method CompanyIndustry findWithoutFail($id, $columns = ['*'])
 * @method CompanyIndustry find($id, $columns = ['*'])
 * @method CompanyIndustry first($columns = ['*'])
*/
class CompanyIndustryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'companyid',
        'industryid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CompanyIndustry::class;
    }
}
