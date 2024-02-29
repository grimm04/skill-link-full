<?php

namespace App\Repositories;

use App\Models\Grader;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GraderRepository
 * @package App\Repositories
 * @version July 20, 2018, 8:45 am UTC
 *
 * @method Grader findWithoutFail($id, $columns = ['*'])
 * @method Grader find($id, $columns = ['*'])
 * @method Grader first($columns = ['*'])
*/
class GraderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'employeeid',
        'userid',
        'grade'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Grader::class;
    }
}
