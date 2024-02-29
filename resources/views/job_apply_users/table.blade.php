<table class="table table-responsive" id="jobApplyUsers-table">
    <thead>
        <tr>
            <th>Userid</th>
        <th>Jobid</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobApplyUsers as $jobApplyUser)
        <tr>
            <td>{!! $jobApplyUser->userid !!}</td>
            <td>{!! $jobApplyUser->jobid !!}</td>
            <td>{!! $jobApplyUser->status !!}</td>
            <td>
                {!! Form::open(['route' => ['jobApplyUsers.destroy', $jobApplyUser->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jobApplyUsers.show', [$jobApplyUser->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jobApplyUsers.edit', [$jobApplyUser->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>