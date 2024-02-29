<?php

namespace App\Repositories;

use App\Models\ConversationRecruit;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ConversationRecruitRepository
 * @package App\Repositories
 * @version July 12, 2018, 4:26 am UTC
 *
 * @method ConversationRecruit findWithoutFail($id, $columns = ['*'])
 * @method ConversationRecruit find($id, $columns = ['*'])
 * @method ConversationRecruit first($columns = ['*'])
*/
class ConversationRecruitRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'useradmin',
        'useremployee',
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ConversationRecruit::class;
    }
}
