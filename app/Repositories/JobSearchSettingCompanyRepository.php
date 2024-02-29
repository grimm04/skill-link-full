<?php

namespace App\Repositories;

use App\Models\JobSearchSettingCompany;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobSearchSettingCompanyRepository
 * @package App\Repositories
 * @version July 27, 2018, 4:10 am UTC
 *
 * @method JobSearchSettingCompany findWithoutFail($id, $columns = ['*'])
 * @method JobSearchSettingCompany find($id, $columns = ['*'])
 * @method JobSearchSettingCompany first($columns = ['*'])
*/
class JobSearchSettingCompanyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jobsearchid',
        'companyid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobSearchSettingCompany::class;
    }
}
