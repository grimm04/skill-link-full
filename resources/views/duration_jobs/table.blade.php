<table class="table table-responsive" id="durationJobs-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($durationJobs as $durationJob)
        <tr>
            <td>{!! $durationJob->name !!}</td>
            <td>
                {!! Form::open(['route' => ['durationJobs.destroy', $durationJob->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('durationJobs.show', [$durationJob->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('durationJobs.edit', [$durationJob->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>