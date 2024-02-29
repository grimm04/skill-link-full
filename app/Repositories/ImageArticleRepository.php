<?php

namespace App\Repositories;

use App\Models\ImageArticle;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ImageArticleRepository
 * @package App\Repositories
 * @version February 14, 2018, 1:45 pm UTC
 *
 * @method ImageArticle findWithoutFail($id, $columns = ['*'])
 * @method ImageArticle find($id, $columns = ['*'])
 * @method ImageArticle first($columns = ['*'])
*/
class ImageArticleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_post',
        'image',
        'thumbnail'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ImageArticle::class;
    }
}
