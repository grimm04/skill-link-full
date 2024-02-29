<?php

namespace App\Repositories;

use App\Models\Subcribe;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SubcribeRepository
 * @package App\Repositories
 * @version March 6, 2018, 5:02 am UTC
 *
 * @method Subcribe findWithoutFail($id, $columns = ['*'])
 * @method Subcribe find($id, $columns = ['*'])
 * @method Subcribe first($columns = ['*'])
*/
class SubcribeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fname',
        'email'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Subcribe::class;
    }
}
