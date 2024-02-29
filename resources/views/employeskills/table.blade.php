<table class="table table-responsive" id="employeskills-table">
    <thead>
        <tr>
            <th>Userid</th>
        <th>Levelid</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($employeskills as $employeskill)
        <tr>
            <td>{!! $employeskill->userid !!}</td>
            <td>{!! $employeskill->levelid !!}</td>
            <td>
                {!! Form::open(['route' => ['employeskills.destroy', $employeskill->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('employeskills.show', [$employeskill->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('employeskills.edit', [$employeskill->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>