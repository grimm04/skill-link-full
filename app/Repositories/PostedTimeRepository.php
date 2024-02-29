<?php

namespace App\Repositories;

use App\Models\PostedTime;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PostedTimeRepository
 * @package App\Repositories
 * @version July 26, 2018, 7:32 am UTC
 *
 * @method PostedTime findWithoutFail($id, $columns = ['*'])
 * @method PostedTime find($id, $columns = ['*'])
 * @method PostedTime first($columns = ['*'])
*/
class PostedTimeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PostedTime::class;
    }
}
