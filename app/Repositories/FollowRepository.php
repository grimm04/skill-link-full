<?php

namespace App\Repositories;

use App\Models\Follow;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FollowRepository
 * @package App\Repositories
 * @version February 19, 2018, 1:43 pm UTC
 *
 * @method Follow findWithoutFail($id, $columns = ['*'])
 * @method Follow find($id, $columns = ['*'])
 * @method Follow first($columns = ['*'])
*/
class FollowRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'followid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Follow::class;
    }
}
