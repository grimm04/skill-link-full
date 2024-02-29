<?php

namespace App\Repositories;

use App\Models\LikeArticle;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LikeArticleRepository
 * @package App\Repositories
 * @version February 14, 2018, 1:53 pm UTC
 *
 * @method LikeArticle findWithoutFail($id, $columns = ['*'])
 * @method LikeArticle find($id, $columns = ['*'])
 * @method LikeArticle first($columns = ['*'])
*/
class LikeArticleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_post',
        'id_user'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return LikeArticle::class;
    }
}
