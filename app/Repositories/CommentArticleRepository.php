<?php

namespace App\Repositories;

use App\Models\CommentArticle;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CommentArticleRepository
 * @package App\Repositories
 * @version February 14, 2018, 1:51 pm UTC
 *
 * @method CommentArticle findWithoutFail($id, $columns = ['*'])
 * @method CommentArticle find($id, $columns = ['*'])
 * @method CommentArticle first($columns = ['*'])
*/
class CommentArticleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'comment',
        'id_post',
        'id_user'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CommentArticle::class;
    }
}
