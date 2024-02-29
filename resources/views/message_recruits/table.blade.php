<table class="table table-responsive" id="messageRecruits-table">
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
    @foreach($messageRecruits as $messageRecruit)
        <tr>
            <td>{!! $messageRecruit->userfrom !!}</td>
            <td>{!! $messageRecruit->userto !!}</td>
            <td>{!! $messageRecruit->conversationid !!}</td>
            <td>{!! $messageRecruit->msg !!}</td>
            <td>{!! $messageRecruit->images !!}</td>
            <td>{!! $messageRecruit->status !!}</td>
            <td>
                {!! Form::open(['route' => ['messageRecruits.destroy', $messageRecruit->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('messageRecruits.show', [$messageRecruit->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('messageRecruits.edit', [$messageRecruit->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>