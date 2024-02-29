<?php

namespace App\Repositories;

use App\Models\ReportArticle;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ReportArticleRepository
 * @package App\Repositories
 * @version February 21, 2018, 9:31 am UTC
 *
 * @method ReportArticle findWithoutFail($id, $columns = ['*'])
 * @method ReportArticle find($id, $columns = ['*'])
 * @method ReportArticle first($columns = ['*'])
*/
class ReportArticleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'postid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ReportArticle::class;
    }
}
