<?php

namespace App\Repositories;

use App\Models\HideArticle;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class HideArticleRepository
 * @package App\Repositories
 * @version February 14, 2018, 1:55 pm UTC
 *
 * @method HideArticle findWithoutFail($id, $columns = ['*'])
 * @method HideArticle find($id, $columns = ['*'])
 * @method HideArticle first($columns = ['*'])
*/
class HideArticleRepository extends BaseRepository
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
        return HideArticle::class;
    }
}
