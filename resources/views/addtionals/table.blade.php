<table class="table table-responsive" id="addtionals-table">
    <thead>
        <tr>
            <th>Userid</th>
        <th>Userid</th>
        <th>Interestid</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($addtionals as $addtional)
        <tr>
            <td>{!! $addtional->userid !!}</td>
            <td>{!! $addtional->userid !!}</td>
            <td>{!! $addtional->interestid !!}</td>
            <td>
                {!! Form::open(['route' => ['addtionals.destroy', $addtional->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('addtionals.show', [$addtional->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('addtionals.edit', [$addtional->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>