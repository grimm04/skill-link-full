<table class="table table-responsive" id="subcribes-table">
    <thead>
        <tr>
            <th>Fname</th>
        <th>Email</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($subcribes as $subcribe)
        <tr>
            <td>{!! $subcribe->fname !!}</td>
            <td>{!! $subcribe->email !!}</td>
            <td>
                {!! Form::open(['route' => ['subcribes.destroy', $subcribe->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('subcribes.show', [$subcribe->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('subcribes.edit', [$subcribe->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>