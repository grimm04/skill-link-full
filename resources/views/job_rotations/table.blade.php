<table class="table table-responsive" id="jobRotations-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobRotations as $jobRotation)
        <tr>
            <td>{!! $jobRotation->name !!}</td>
            <td>
                {!! Form::open(['route' => ['jobRotations.destroy', $jobRotation->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jobRotations.show', [$jobRotation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jobRotations.edit', [$jobRotation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>