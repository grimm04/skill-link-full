<?php

namespace App\Repositories;

use App\Models\TypeJob;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TypeJobRepository
 * @package App\Repositories
 * @version March 15, 2018, 6:42 pm UTC
 *
 * @method TypeJob findWithoutFail($id, $columns = ['*'])
 * @method TypeJob find($id, $columns = ['*'])
 * @method TypeJob first($columns = ['*'])
*/
class TypeJobRepository extends BaseRepository
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
        return TypeJob::class;
    }
}
