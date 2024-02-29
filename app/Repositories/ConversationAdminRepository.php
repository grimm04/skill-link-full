<?php

namespace App\Repositories;

use App\Models\ConversationAdmin;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ConversationAdminRepository
 * @package App\Repositories
 * @version July 16, 2018, 3:07 am UTC
 *
 * @method ConversationAdmin findWithoutFail($id, $columns = ['*'])
 * @method ConversationAdmin find($id, $columns = ['*'])
 * @method ConversationAdmin first($columns = ['*'])
*/
class ConversationAdminRepository extends BaseRepository
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
        return ConversationAdmin::class;
    }
}
