<?php

namespace App\Repositories;

use App\Models\TypeGrader;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TypeGraderRepository
 * @package App\Repositories
 * @version July 20, 2018, 8:51 am UTC
 *
 * @method TypeGrader findWithoutFail($id, $columns = ['*'])
 * @method TypeGrader find($id, $columns = ['*'])
 * @method TypeGrader first($columns = ['*'])
*/
class TypeGraderRepository extends BaseRepository
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
        return TypeGrader::class;
    }
}
