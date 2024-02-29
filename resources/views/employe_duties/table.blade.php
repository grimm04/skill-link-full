<table class="table table-responsive" id="employeDuties-table">
    <thead>
        <tr>
            <th>Fitdutyid</th>
        <th>Userid</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($employeDuties as $employeDuty)
        <tr>
            <td>{!! $employeDuty->fitdutyid !!}</td>
            <td>{!! $employeDuty->userid !!}</td>
            <td>
                {!! Form::open(['route' => ['employeDuties.destroy', $employeDuty->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('employeDuties.show', [$employeDuty->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('employeDuties.edit', [$employeDuty->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>