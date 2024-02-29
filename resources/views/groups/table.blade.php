<table class="table table-responsive" id="groups-table">
    <thead>
        <tr>
            <th>Group Name</th>
        <th>Ref Number</th>
        <th>Location</th>
        <th>Group Info</th>
        <th>Group Image</th>
        <th>Website</th>
        <th>Company Size</th>
        <th>Group Type Id</th>
        <th>Userid</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($groups as $groups)
        <tr>
            <td>{!! $groups->group_name !!}</td>
            <td>{!! $groups->ref_number !!}</td>
            <td>{!! $groups->location !!}</td>
            <td>{!! $groups->group_info !!}</td>
            <td>{!! $groups->group_image !!}</td>
            <td>{!! $groups->website !!}</td>
            <td>{!! $groups->company_size !!}</td>
            <td>{!! $groups->group_type_id !!}</td>
            <td>{!! $groups->userid !!}</td>
            <td>
                {!! Form::open(['route' => ['groups.destroy', $groups->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('groups.show', [$groups->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('groups.edit', [$groups->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>