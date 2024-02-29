<table class="table table-responsive" id="groupTypes-table">
    <thead>
        <tr>
            <th>Type Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($groupTypes as $groupType)
        <tr>
            <td>{!! $groupType->type_name !!}</td>
            <td>
                {!! Form::open(['route' => ['groupTypes.destroy', $groupType->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('groupTypes.show', [$groupType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('groupTypes.edit', [$groupType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>