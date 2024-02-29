<?php

namespace App\Repositories;

use App\Models\Addtional;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AddtionalRepository
 * @package App\Repositories
 * @version April 10, 2018, 5:14 am UTC
 *
 * @method Addtional findWithoutFail($id, $columns = ['*'])
 * @method Addtional find($id, $columns = ['*'])
 * @method Addtional first($columns = ['*'])
*/
class AddtionalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'userid',
        'interestid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Addtional::class;
    }
}
