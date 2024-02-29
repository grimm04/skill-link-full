<?php

namespace App\Repositories;

use App\Models\Province;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProvinceRepository
 * @package App\Repositories
 * @version December 27, 2017, 6:45 am UTC
 *
 * @method Province findWithoutFail($id, $columns = ['*'])
 * @method Province find($id, $columns = ['*'])
 * @method Province first($columns = ['*'])
*/
class ProvinceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'country',
        'abbreviation',
        'type',
        'sort'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Province::class;
    }
}
