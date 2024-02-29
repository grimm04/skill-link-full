<?php

namespace App\Repositories;

use App\Models\Employeskill;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EmployeskillRepository
 * @package App\Repositories
 * @version April 10, 2018, 4:50 am UTC
 *
 * @method Employeskill findWithoutFail($id, $columns = ['*'])
 * @method Employeskill find($id, $columns = ['*'])
 * @method Employeskill first($columns = ['*'])
*/
class EmployeskillRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'levelid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Employeskill::class;
    }
}
