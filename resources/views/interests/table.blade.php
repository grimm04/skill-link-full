<table class="table table-responsive" id="interests-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($interests as $interest)
        <tr>
            <td>{!! $interest->name !!}</td>
            <td>{!! $interest->description !!}</td>
            <td>
                {!! Form::open(['route' => ['interests.destroy', $interest->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('interests.show', [$interest->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('interests.edit', [$interest->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>