<?php

namespace App\Repositories;

use App\Models\Duty;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DutyRepository
 * @package App\Repositories
 * @version April 10, 2018, 5:08 am UTC
 *
 * @method Duty findWithoutFail($id, $columns = ['*'])
 * @method Duty find($id, $columns = ['*'])
 * @method Duty first($columns = ['*'])
*/
class DutyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Duty::class;
    }
}
