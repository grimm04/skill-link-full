<table class="table table-responsive" id="conversationAdmins-table">
    <thead>
        <tr>
            <th>Userone</th>
        <th>Usertwo</th>
        <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($conversationAdmins as $conversationAdmin)
        <tr>
            <td>{!! $conversationAdmin->userone !!}</td>
            <td>{!! $conversationAdmin->usertwo !!}</td>
            <td>{!! $conversationAdmin->name !!}</td>
            <td>
                {!! Form::open(['route' => ['conversationAdmins.destroy', $conversationAdmin->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('conversationAdmins.show', [$conversationAdmin->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('conversationAdmins.edit', [$conversationAdmin->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>