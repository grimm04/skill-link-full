<table class="table table-responsive" id="groupLevels-table">
    <thead>
        <tr>
            <th>Level Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($groupLevels as $groupLevels)
        <tr>
            <td>{!! $groupLevels->level_name !!}</td>
            <td>
                {!! Form::open(['route' => ['groupLevels.destroy', $groupLevels->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('groupLevels.show', [$groupLevels->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('groupLevels.edit', [$groupLevels->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>