<table class="table table-responsive" id="martials-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($martials as $martial)
        <tr>
            <td>{!! $martial->name !!}</td>
            <td>{!! $martial->description !!}</td>
            <td>
                {!! Form::open(['route' => ['martials.destroy', $martial->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('martials.show', [$martial->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('martials.edit', [$martial->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>