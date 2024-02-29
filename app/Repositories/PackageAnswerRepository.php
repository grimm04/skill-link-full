<?php

namespace App\Repositories;

use App\Models\PackageAnswer;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PackageAnswerRepository
 * @package App\Repositories
 * @version May 8, 2018, 4:46 am UTC
 *
 * @method PackageAnswer findWithoutFail($id, $columns = ['*'])
 * @method PackageAnswer find($id, $columns = ['*'])
 * @method PackageAnswer first($columns = ['*'])
*/
class PackageAnswerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_user_survey',
        'answer'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PackageAnswer::class;
    }
}
