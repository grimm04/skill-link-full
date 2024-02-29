<table class="table table-responsive" id="jobSearchSettingLocations-table">
    <thead>
        <tr>
            <th>Jobsearchid</th>
        <th>Locationid</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobSearchSettingLocations as $jobSearchSettingLocation)
        <tr>
            <td>{!! $jobSearchSettingLocation->jobsearchid !!}</td>
            <td>{!! $jobSearchSettingLocation->locationid !!}</td>
            <td>
                {!! Form::open(['route' => ['jobSearchSettingLocations.destroy', $jobSearchSettingLocation->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jobSearchSettingLocations.show', [$jobSearchSettingLocation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jobSearchSettingLocations.edit', [$jobSearchSettingLocation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>