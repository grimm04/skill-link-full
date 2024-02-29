<?php

namespace App\Repositories;

use App\Models\Martial;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MartialRepository
 * @package App\Repositories
 * @version December 27, 2017, 6:40 am UTC
 *
 * @method Martial findWithoutFail($id, $columns = ['*'])
 * @method Martial find($id, $columns = ['*'])
 * @method Martial first($columns = ['*'])
*/
class MartialRepository extends BaseRepository
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
        return Martial::class;
    }
}
