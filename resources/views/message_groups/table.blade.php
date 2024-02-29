<table class="table table-responsive" id="messageGroups-table">
    <thead>
        <tr>
            <th>Groupid</th>
        <th>Userid</th>
        <th>Msg</th>
        <th>Status</th>
        <th>Images</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($messageGroups as $messageGroup)
        <tr>
            <td>{!! $messageGroup->groupid !!}</td>
            <td>{!! $messageGroup->userid !!}</td>
            <td>{!! $messageGroup->msg !!}</td>
            <td>{!! $messageGroup->status !!}</td>
            <td>{!! $messageGroup->images !!}</td>
            <td>
                {!! Form::open(['route' => ['messageGroups.destroy', $messageGroup->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('messageGroups.show', [$messageGroup->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('messageGroups.edit', [$messageGroup->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>