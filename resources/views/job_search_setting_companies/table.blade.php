<table class="table table-responsive" id="jobSearchSettingCompanies-table">
    <thead>
        <tr>
            <th>Jobsearchid</th>
        <th>Companyid</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobSearchSettingCompanies as $jobSearchSettingCompany)
        <tr>
            <td>{!! $jobSearchSettingCompany->jobsearchid !!}</td>
            <td>{!! $jobSearchSettingCompany->companyid !!}</td>
            <td>
                {!! Form::open(['route' => ['jobSearchSettingCompanies.destroy', $jobSearchSettingCompany->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jobSearchSettingCompanies.show', [$jobSearchSettingCompany->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jobSearchSettingCompanies.edit', [$jobSearchSettingCompany->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>