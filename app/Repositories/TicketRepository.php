<?php

namespace App\Repositories;

use App\Models\Ticket;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TicketRepository
 * @package App\Repositories
 * @version April 10, 2018, 5:06 am UTC
 *
 * @method Ticket findWithoutFail($id, $columns = ['*'])
 * @method Ticket find($id, $columns = ['*'])
 * @method Ticket first($columns = ['*'])
*/
class TicketRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'title',
        'institution',
        'location',
        'ticket_number',
        'expiry_date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ticket::class;
    }
}
