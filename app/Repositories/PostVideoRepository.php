<?php

namespace App\Repositories;

use App\Models\PostVideo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PostVideoRepository
 * @package App\Repositories
 * @version February 25, 2018, 4:41 pm UTC
 *
 * @method PostVideo findWithoutFail($id, $columns = ['*'])
 * @method PostVideo find($id, $columns = ['*'])
 * @method PostVideo first($columns = ['*'])
*/
class PostVideoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_post',
        'video'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PostVideo::class;
    }
}
