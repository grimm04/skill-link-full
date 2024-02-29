<?php

namespace App\Repositories;

use App\Models\DurationJob;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DurationJobRepository
 * @package App\Repositories
 * @version July 10, 2018, 4:26 am UTC
 *
 * @method DurationJob findWithoutFail($id, $columns = ['*'])
 * @method DurationJob find($id, $columns = ['*'])
 * @method DurationJob first($columns = ['*'])
*/
class DurationJobRepository extends BaseRepository
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
        return DurationJob::class;
    }
}
