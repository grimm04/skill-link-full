<?php

namespace App\Repositories;

use App\Models\JobSearchSettingTitle;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobSearchSettingTitleRepository
 * @package App\Repositories
 * @version July 27, 2018, 3:54 am UTC
 *
 * @method JobSearchSettingTitle findWithoutFail($id, $columns = ['*'])
 * @method JobSearchSettingTitle find($id, $columns = ['*'])
 * @method JobSearchSettingTitle first($columns = ['*'])
*/
class JobSearchSettingTitleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jobsearchid',
        'chtradeid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobSearchSettingTitle::class;
    }
}
