<?php

namespace App\Repositories;

use App\Models\Message;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MessageRepository
 * @package App\Repositories
 * @version April 26, 2018, 5:15 pm UTC
 *
 * @method Message findWithoutFail($id, $columns = ['*'])
 * @method Message find($id, $columns = ['*'])
 * @method Message first($columns = ['*'])
*/
class MessageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userfrom',
        'userto',
        'conversationid',
        'msg',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Message::class;
    }
}
