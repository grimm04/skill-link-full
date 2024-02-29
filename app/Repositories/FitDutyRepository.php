<?php

namespace App\Repositories;

use App\Models\FitDuty;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FitDutyRepository
 * @package App\Repositories
 * @version April 10, 2018, 5:10 am UTC
 *
 * @method FitDuty findWithoutFail($id, $columns = ['*'])
 * @method FitDuty find($id, $columns = ['*'])
 * @method FitDuty first($columns = ['*'])
*/
class FitDutyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dutyid',
        'titile',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return FitDuty::class;
    }
}
