<table class="table table-responsive" id="jobs-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Companyid</th>
        <th>Userid</th>
        <th>Description</th>
        <th>Relocate</th>
        <th>Employmentstatusid</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobs as $job)
        <tr>
            <td>{!! $job->name !!}</td>
            <td>{!! $job->companyid !!}</td>
            <td>{!! $job->userid !!}</td>
            <td>{!! $job->description !!}</td>
            <td>{!! $job->relocate !!}</td>
            <td>{!! $job->employmentstatusid !!}</td>
            <td>{!! $job->status !!}</td>
            <td>
                {!! Form::open(['route' => ['jobs.destroy', $job->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jobs.show', [$job->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jobs.edit', [$job->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>