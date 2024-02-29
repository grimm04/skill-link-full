<?php

namespace App\Repositories;

use App\Models\Endorsment;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EndorsmentRepository
 * @package App\Repositories
 * @version April 10, 2018, 4:50 am UTC
 *
 * @method Endorsment findWithoutFail($id, $columns = ['*'])
 * @method Endorsment find($id, $columns = ['*'])
 * @method Endorsment first($columns = ['*'])
*/
class EndorsmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Endorsment::class;
    }
}
