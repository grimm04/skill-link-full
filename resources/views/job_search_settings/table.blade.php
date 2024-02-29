<table class="table table-responsive" id="jobSearchSettings-table">
    <thead>
        <tr>
            <th>Userid</th>
        <th>Postedtimeid</th>
        <th>Typejobid</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobSearchSettings as $jobSearchSetting)
        <tr>
            <td>{!! $jobSearchSetting->userid !!}</td>
            <td>{!! $jobSearchSetting->postedtimeid !!}</td>
            <td>{!! $jobSearchSetting->typejobid !!}</td>
            <td>
                {!! Form::open(['route' => ['jobSearchSettings.destroy', $jobSearchSetting->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jobSearchSettings.show', [$jobSearchSetting->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jobSearchSettings.edit', [$jobSearchSetting->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>