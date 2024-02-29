<table class="table table-responsive" id="endorsments-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($endorsments as $endorsment)
        <tr>
            <td>{!! $endorsment->name !!}</td>
            <td>{!! $endorsment->description !!}</td>
            <td>
                {!! Form::open(['route' => ['endorsments.destroy', $endorsment->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('endorsments.show', [$endorsment->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('endorsments.edit', [$endorsment->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>