<table class="table table-responsive" id="jobSettingPositions-table">
    <thead>
        <tr>
            <th>Jobsettingid</th>
        <th>Positionjobid</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobSettingPositions as $jobSettingPosition)
        <tr>
            <td>{!! $jobSettingPosition->jobsettingid !!}</td>
            <td>{!! $jobSettingPosition->positionjobid !!}</td>
            <td>
                {!! Form::open(['route' => ['jobSettingPositions.destroy', $jobSettingPosition->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jobSettingPositions.show', [$jobSettingPosition->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jobSettingPositions.edit', [$jobSettingPosition->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>