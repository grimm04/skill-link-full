<?php

namespace App\Repositories;

use App\Models\Education;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EducationRepository
 * @package App\Repositories
 * @version April 10, 2018, 4:56 am UTC
 *
 * @method Education findWithoutFail($id, $columns = ['*'])
 * @method Education find($id, $columns = ['*'])
 * @method Education first($columns = ['*'])
*/
class EducationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'institution',
        'major',
        'location',
        'form',
        'until'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Education::class;
    }
}
