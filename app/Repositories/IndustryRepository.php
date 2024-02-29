<?php

namespace App\Repositories;

use App\Models\Industry;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class IndustryRepository
 * @package App\Repositories
 * @version March 15, 2018, 4:02 pm UTC
 *
 * @method Industry findWithoutFail($id, $columns = ['*'])
 * @method Industry find($id, $columns = ['*'])
 * @method Industry first($columns = ['*'])
*/
class IndustryRepository extends BaseRepository
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
        return Industry::class;
    }
}
