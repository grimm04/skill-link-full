<?php

namespace App\Repositories;

use App\Models\MessageAdmin;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MessageAdminRepository
 * @package App\Repositories
 * @version July 16, 2018, 3:36 am UTC
 *
 * @method MessageAdmin findWithoutFail($id, $columns = ['*'])
 * @method MessageAdmin find($id, $columns = ['*'])
 * @method MessageAdmin first($columns = ['*'])
*/
class MessageAdminRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userfrom',
        'userto',
        'conversationid',
        'msg',
        'images',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MessageAdmin::class;
    }
}
