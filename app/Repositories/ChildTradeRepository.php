<?php

namespace App\Repositories;

use App\Models\ChildTrade;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ChildTradeRepository
 * @package App\Repositories
 * @version December 26, 2017, 8:06 am UTC
 *
 * @method ChildTrade findWithoutFail($id, $columns = ['*'])
 * @method ChildTrade find($id, $columns = ['*'])
 * @method ChildTrade first($columns = ['*'])
*/
class ChildTradeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'descriprion',
        'tradeid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ChildTrade::class;
    }
}
