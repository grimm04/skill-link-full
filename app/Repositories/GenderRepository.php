<?php

namespace App\Repositories;

use App\Models\Gender;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GenderRepository
 * @package App\Repositories
 * @version December 26, 2017, 8:15 am UTC
 *
 * @method Gender findWithoutFail($id, $columns = ['*'])
 * @method Gender find($id, $columns = ['*'])
 * @method Gender first($columns = ['*'])
*/
class GenderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'descriprion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Gender::class;
    }
}
