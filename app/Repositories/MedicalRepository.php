<?php

namespace App\Repositories;

use App\Models\Medical;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MedicalRepository
 * @package App\Repositories
 * @version April 10, 2018, 5:07 am UTC
 *
 * @method Medical findWithoutFail($id, $columns = ['*'])
 * @method Medical find($id, $columns = ['*'])
 * @method Medical first($columns = ['*'])
*/
class MedicalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'condition',
        'level',
        'form'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Medical::class;
    }
}
