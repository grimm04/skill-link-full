<?php

namespace App\Repositories;

use App\Models\Certificate;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CertificateRepository
 * @package App\Repositories
 * @version April 10, 2018, 4:55 am UTC
 *
 * @method Certificate findWithoutFail($id, $columns = ['*'])
 * @method Certificate find($id, $columns = ['*'])
 * @method Certificate first($columns = ['*'])
*/
class CertificateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'title',
        'photo',
        'institution',
        'location',
        'expiry_date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Certificate::class;
    }
}
