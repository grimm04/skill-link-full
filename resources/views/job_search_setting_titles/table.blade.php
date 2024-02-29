<table class="table table-responsive" id="jobSearchSettingTitles-table">
    <thead>
        <tr>
            <th>Jobsearchid</th>
        <th>Chtradeid</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobSearchSettingTitles as $jobSearchSettingTitle)
        <tr>
            <td>{!! $jobSearchSettingTitle->jobsearchid !!}</td>
            <td>{!! $jobSearchSettingTitle->chtradeid !!}</td>
            <td>
                {!! Form::open(['route' => ['jobSearchSettingTitles.destroy', $jobSearchSettingTitle->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jobSearchSettingTitles.show', [$jobSearchSettingTitle->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jobSearchSettingTitles.edit', [$jobSearchSettingTitle->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>