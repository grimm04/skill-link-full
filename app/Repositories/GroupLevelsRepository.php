<?php

namespace App\Repositories;

use App\Models\GroupLevels;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GroupLevelsRepository
 * @package App\Repositories
 * @version February 17, 2018, 2:54 am UTC
 *
 * @method GroupLevels findWithoutFail($id, $columns = ['*'])
 * @method GroupLevels find($id, $columns = ['*'])
 * @method GroupLevels first($columns = ['*'])
*/
class GroupLevelsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'level_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return GroupLevels::class;
    }
}
