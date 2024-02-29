<table class="table table-responsive" id="medicals-table">
    <thead>
        <tr>
            <th>Condition</th>
        <th>Level</th>
        <th>Form</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($medicals as $medical)
        <tr>
            <td>{!! $medical->condition !!}</td>
            <td>{!! $medical->level !!}</td>
            <td>{!! $medical->form !!}</td>
            <td>
                {!! Form::open(['route' => ['medicals.destroy', $medical->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('medicals.show', [$medical->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('medicals.edit', [$medical->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>