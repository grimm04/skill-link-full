<table class="table table-responsive" id="follows-table">
    <thead>
        <tr>
            <th>Userid</th>
        <th>Followid</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($follows as $follow)
        <tr>
            <td>{!! $follow->userid !!}</td>
            <td>{!! $follow->followid !!}</td>
            <td>
                {!! Form::open(['route' => ['follows.destroy', $follow->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('follows.show', [$follow->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('follows.edit', [$follow->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>