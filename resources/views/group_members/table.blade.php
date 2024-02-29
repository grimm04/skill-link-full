<table class="table table-responsive" id="groupMembers-table">
    <thead>
        <tr>
            <th>Groupid</th>
        <th>Userid</th>
        <th>Levelid</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($groupMembers as $groupMember)
        <tr>
            <td>{!! $groupMember->groupid !!}</td>
            <td>{!! $groupMember->userid !!}</td>
            <td>{!! $groupMember->levelid !!}</td>
            <td>
                {!! Form::open(['route' => ['groupMembers.destroy', $groupMember->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('groupMembers.show', [$groupMember->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('groupMembers.edit', [$groupMember->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>