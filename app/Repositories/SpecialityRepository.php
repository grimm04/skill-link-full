<?php

namespace App\Repositories;

use App\Models\Speciality;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SpecialityRepository
 * @package App\Repositories
 * @version March 15, 2018, 3:50 pm UTC
 *
 * @method Speciality findWithoutFail($id, $columns = ['*'])
 * @method Speciality find($id, $columns = ['*'])
 * @method Speciality first($columns = ['*'])
*/
class SpecialityRepository extends BaseRepository
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
        return Speciality::class;
    }
}
