<?php

namespace App\Repositories;

use App\Models\GroupMember;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GroupMemberRepository
 * @package App\Repositories
 * @version February 17, 2018, 8:54 am UTC
 *
 * @method GroupMember findWithoutFail($id, $columns = ['*'])
 * @method GroupMember find($id, $columns = ['*'])
 * @method GroupMember first($columns = ['*'])
*/
class GroupMemberRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'groupid',
        'userid',
        'levelid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return GroupMember::class;
    }
}
