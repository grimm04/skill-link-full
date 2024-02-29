<table class="table table-responsive" id="graders-table">
    <thead>
        <tr>
            <th>Employeeid</th>
        <th>Userid</th>
        <th>Grade</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($graders as $grader)
        <tr>
            <td>{!! $grader->employeeid !!}</td>
            <td>{!! $grader->userid !!}</td>
            <td>{!! $grader->grade !!}</td>
            <td>
                {!! Form::open(['route' => ['graders.destroy', $grader->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('graders.show', [$grader->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('graders.edit', [$grader->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>