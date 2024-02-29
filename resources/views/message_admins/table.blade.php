<table class="table table-responsive" id="messageAdmins-table">
    <thead>
        <tr>
            <th>Userfrom</th>
        <th>Userto</th>
        <th>Conversationid</th>
        <th>Msg</th>
        <th>Images</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($messageAdmins as $messageAdmin)
        <tr>
            <td>{!! $messageAdmin->userfrom !!}</td>
            <td>{!! $messageAdmin->userto !!}</td>
            <td>{!! $messageAdmin->conversationid !!}</td>
            <td>{!! $messageAdmin->msg !!}</td>
            <td>{!! $messageAdmin->images !!}</td>
            <td>{!! $messageAdmin->status !!}</td>
            <td>
                {!! Form::open(['route' => ['messageAdmins.destroy', $messageAdmin->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('messageAdmins.show', [$messageAdmin->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('messageAdmins.edit', [$messageAdmin->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>