<table class="table table-responsive" id="jobSettingTypes-table">
    <thead>
        <tr>
            <th>Jobsettingid</th>
        <th>Typejobid</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobSettingTypes as $jobSettingType)
        <tr>
            <td>{!! $jobSettingType->jobsettingid !!}</td>
            <td>{!! $jobSettingType->typejobid !!}</td>
            <td>
                {!! Form::open(['route' => ['jobSettingTypes.destroy', $jobSettingType->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jobSettingTypes.show', [$jobSettingType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jobSettingTypes.edit', [$jobSettingType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>