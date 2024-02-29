<table class="table table-responsive" id="duties-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Description</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($duties as $duty)
        <tr>
            <td>{!! $duty->title !!}</td>
            <td>{!! $duty->description !!}</td>
            <td>
                {!! Form::open(['route' => ['duties.destroy', $duty->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('duties.show', [$duty->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('duties.edit', [$duty->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>