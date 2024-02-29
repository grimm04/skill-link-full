<?php

namespace App\Repositories;

use App\Models\MessageGroup;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MessageGroupRepository
 * @package App\Repositories
 * @version April 30, 2018, 9:06 am UTC
 *
 * @method MessageGroup findWithoutFail($id, $columns = ['*'])
 * @method MessageGroup find($id, $columns = ['*'])
 * @method MessageGroup first($columns = ['*'])
*/
class MessageGroupRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'groupid',
        'userid',
        'msg',
        'status',
        'images'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MessageGroup::class;
    }
}
