<?php

namespace App\Repositories;

use App\Models\Conversation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ConversationRepository
 * @package App\Repositories
 * @version April 26, 2018, 10:50 am UTC
 *
 * @method Conversation findWithoutFail($id, $columns = ['*'])
 * @method Conversation find($id, $columns = ['*'])
 * @method Conversation first($columns = ['*'])
*/
class ConversationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userone',
        'usertwo',
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Conversation::class;
    }
}
