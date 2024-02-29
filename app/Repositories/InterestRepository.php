<?php

namespace App\Repositories;

use App\Models\Interest;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InterestRepository
 * @package App\Repositories
 * @version April 10, 2018, 5:08 am UTC
 *
 * @method Interest findWithoutFail($id, $columns = ['*'])
 * @method Interest find($id, $columns = ['*'])
 * @method Interest first($columns = ['*'])
*/
class InterestRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Interest::class;
    }
}
