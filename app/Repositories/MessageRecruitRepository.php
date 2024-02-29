<?php

namespace App\Repositories;

use App\Models\MessageRecruit;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MessageRecruitRepository
 * @package App\Repositories
 * @version July 12, 2018, 4:48 am UTC
 *
 * @method MessageRecruit findWithoutFail($id, $columns = ['*'])
 * @method MessageRecruit find($id, $columns = ['*'])
 * @method MessageRecruit first($columns = ['*'])
*/
class MessageRecruitRepository extends BaseRepository
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
        return MessageRecruit::class;
    }
}
