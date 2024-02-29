<?php

namespace App\Repositories;

use App\Models\Trade;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TradeRepository
 * @package App\Repositories
 * @version December 26, 2017, 8:02 am UTC
 *
 * @method Trade findWithoutFail($id, $columns = ['*'])
 * @method Trade find($id, $columns = ['*'])
 * @method Trade first($columns = ['*'])
*/
class TradeRepository extends BaseRepository
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
        return Trade::class;
    }
}
