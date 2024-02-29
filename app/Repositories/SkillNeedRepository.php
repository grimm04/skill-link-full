<?php

namespace App\Repositories;

use App\Models\SkillNeed;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SkillNeedRepository
 * @package App\Repositories
 * @version March 15, 2018, 6:36 pm UTC
 *
 * @method SkillNeed findWithoutFail($id, $columns = ['*'])
 * @method SkillNeed find($id, $columns = ['*'])
 * @method SkillNeed first($columns = ['*'])
*/
class SkillNeedRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SkillNeed::class;
    }
}
