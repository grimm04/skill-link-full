<table class="table table-responsive" id="tickets-table">
    <thead>
        <tr>
            <th>Userid</th>
        <th>Title</th>
        <th>Institution</th>
        <th>Location</th>
        <th>Ticket Number</th>
        <th>Expiry Date</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tickets as $ticket)
        <tr>
            <td>{!! $ticket->userid !!}</td>
            <td>{!! $ticket->title !!}</td>
            <td>{!! $ticket->institution !!}</td>
            <td>{!! $ticket->location !!}</td>
            <td>{!! $ticket->ticket_number !!}</td>
            <td>{!! $ticket->expiry_date !!}</td>
            <td>
                {!! Form::open(['route' => ['tickets.destroy', $ticket->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tickets.show', [$ticket->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tickets.edit', [$ticket->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>