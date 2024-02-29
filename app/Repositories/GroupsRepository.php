<?php

namespace App\Repositories;

use App\Models\Groups;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GroupsRepository
 * @package App\Repositories
 * @version February 17, 2018, 8:51 am UTC
 *
 * @method Groups findWithoutFail($id, $columns = ['*'])
 * @method Groups find($id, $columns = ['*'])
 * @method Groups first($columns = ['*'])
*/
class GroupsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'group_name',
        'ref_number',
        'location',
        'group_info',
        'group_image',
        'website',
        'company_size',
        'group_type_id',
        'userid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Groups::class;
    }
}
