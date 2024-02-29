<table class="table table-responsive" id="rotationJobs-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($rotationJobs as $rotationJob)
        <tr>
            <td>{!! $rotationJob->name !!}</td>
            <td>
                {!! Form::open(['route' => ['rotationJobs.destroy', $rotationJob->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rotationJobs.show', [$rotationJob->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rotationJobs.edit', [$rotationJob->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>