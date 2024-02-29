<?php

namespace App\Repositories;

use App\Models\PackageDetail;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PackageDetailRepository
 * @package App\Repositories
 * @version May 8, 2018, 4:56 am UTC
 *
 * @method PackageDetail findWithoutFail($id, $columns = ['*'])
 * @method PackageDetail find($id, $columns = ['*'])
 * @method PackageDetail first($columns = ['*'])
*/
class PackageDetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_package',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PackageDetail::class;
    }
}
