<?php

namespace App\Repositories;

use App\Models\PackagePrice;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PackagePriceRepository
 * @package App\Repositories
 * @version May 8, 2018, 5:01 am UTC
 *
 * @method PackagePrice findWithoutFail($id, $columns = ['*'])
 * @method PackagePrice find($id, $columns = ['*'])
 * @method PackagePrice first($columns = ['*'])
*/
class PackagePriceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_package',
        'id_package_detail',
        'price',
        'status',
        'item',
        'type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PackagePrice::class;
    }
}
