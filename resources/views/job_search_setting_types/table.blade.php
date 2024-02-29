<table class="table table-responsive" id="jobSearchSettingTypes-table">
    <thead>
        <tr>
            <th>Jobsearchid</th>
        <th>Typejob</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobSearchSettingTypes as $jobSearchSettingType)
        <tr>
            <td>{!! $jobSearchSettingType->jobsearchid !!}</td>
            <td>{!! $jobSearchSettingType->typejob !!}</td>
            <td>
                {!! Form::open(['route' => ['jobSearchSettingTypes.destroy', $jobSearchSettingType->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jobSearchSettingTypes.show', [$jobSearchSettingType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jobSearchSettingTypes.edit', [$jobSearchSettingType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>