<table class="table table-responsive" id="jobSettingLocations-table">
    <thead>
        <tr>
            <th>Jobsettingid</th>
        <th>Locationid</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobSettingLocations as $jobSettingLocation)
        <tr>
            <td>{!! $jobSettingLocation->jobsettingid !!}</td>
            <td>{!! $jobSettingLocation->locationid !!}</td>
            <td>
                {!! Form::open(['route' => ['jobSettingLocations.destroy', $jobSettingLocation->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jobSettingLocations.show', [$jobSettingLocation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jobSettingLocations.edit', [$jobSettingLocation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>