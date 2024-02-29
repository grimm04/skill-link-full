<?php

namespace App\Repositories;

use App\Models\PostArticle;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PostArticleRepository
 * @package App\Repositories
 * @version February 14, 2018, 1:33 pm UTC
 *
 * @method PostArticle findWithoutFail($id, $columns = ['*'])
 * @method PostArticle find($id, $columns = ['*'])
 * @method PostArticle first($columns = ['*'])
*/
class PostArticleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'post',
        'view',
        'status',
        'id_user'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PostArticle::class;
    }
}
