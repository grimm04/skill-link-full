<?php

namespace App\Repositories;

use App\Models\Timeline;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TimelineRepository
 * @package App\Repositories
 * @version April 10, 2018, 5:01 am UTC
 *
 * @method Timeline findWithoutFail($id, $columns = ['*'])
 * @method Timeline find($id, $columns = ['*'])
 * @method Timeline first($columns = ['*'])
*/
class TimelineRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'jobid',
        'type',
        'start_date',
        'end_date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Timeline::class;
    }
}
