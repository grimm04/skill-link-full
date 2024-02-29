<table class="table table-responsive" id="typeJobs-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($typeJobs as $typeJob)
        <tr>
            <td>{!! $typeJob->name !!}</td>
            <td>{!! $typeJob->description !!}</td>
            <td>
                {!! Form::open(['route' => ['typeJobs.destroy', $typeJob->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('typeJobs.show', [$typeJob->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('typeJobs.edit', [$typeJob->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>