<?php

namespace App\Repositories;

use App\Models\GroupType;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GroupTypeRepository
 * @package App\Repositories
 * @version February 17, 2018, 8:47 am UTC
 *
 * @method GroupType findWithoutFail($id, $columns = ['*'])
 * @method GroupType find($id, $columns = ['*'])
 * @method GroupType first($columns = ['*'])
*/
class GroupTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return GroupType::class;
    }
}
