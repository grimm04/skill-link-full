<table class="table table-responsive" id="jobSettingUsers-table">
    <thead>
        <tr>
            <th>Userid</th>
        <th>Employmentstatusid</th>
        <th>Jobrelocate</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobSettingUsers as $jobSettingUser)
        <tr>
            <td>{!! $jobSettingUser->userid !!}</td>
            <td>{!! $jobSettingUser->employmentstatusid !!}</td>
            <td>{!! $jobSettingUser->jobrelocate !!}</td>
            <td>{!! $jobSettingUser->status !!}</td>
            <td>
                {!! Form::open(['route' => ['jobSettingUsers.destroy', $jobSettingUser->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jobSettingUsers.show', [$jobSettingUser->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jobSettingUsers.edit', [$jobSettingUser->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>