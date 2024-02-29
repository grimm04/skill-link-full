<table class="table table-responsive" id="typeGraders-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($typeGraders as $typeGrader)
        <tr>
            <td>{!! $typeGrader->name !!}</td>
            <td>
                {!! Form::open(['route' => ['typeGraders.destroy', $typeGrader->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('typeGraders.show', [$typeGrader->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('typeGraders.edit', [$typeGrader->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>