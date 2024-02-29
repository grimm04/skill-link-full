<table class="table table-responsive" id="fitDuties-table">
    <thead>
        <tr>
            <th>Dutyid</th>
        <th>Titile</th>
        <th>Description</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($fitDuties as $fitDuty)
        <tr>
            <td>{!! $fitDuty->dutyid !!}</td>
            <td>{!! $fitDuty->titile !!}</td>
            <td>{!! $fitDuty->description !!}</td>
            <td>
                {!! Form::open(['route' => ['fitDuties.destroy', $fitDuty->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('fitDuties.show', [$fitDuty->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('fitDuties.edit', [$fitDuty->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>