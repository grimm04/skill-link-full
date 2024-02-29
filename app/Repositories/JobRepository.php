<?php

namespace App\Repositories;

use App\Models\Job;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobRepository
 * @package App\Repositories
 * @version March 15, 2018, 7:10 pm UTC
 *
 * @method Job findWithoutFail($id, $columns = ['*'])
 * @method Job find($id, $columns = ['*'])
 * @method Job first($columns = ['*'])
*/
class JobRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'companyid',
        'userid',
        'description',
        'relocate',
        'employmentstatusid',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Job::class;
    }
}
