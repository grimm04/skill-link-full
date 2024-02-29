<table class="table table-responsive" id="jobTypes-table">
    <thead>
        <tr>
            <th>Jobid</th>
        <th>Typejobid</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobTypes as $jobType)
        <tr>
            <td>{!! $jobType->jobid !!}</td>
            <td>{!! $jobType->typejobid !!}</td>
            <td>
                {!! Form::open(['route' => ['jobTypes.destroy', $jobType->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jobTypes.show', [$jobType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jobTypes.edit', [$jobType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>