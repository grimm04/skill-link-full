<table class="table table-responsive" id="trades-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Descriprion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($trades as $trade)
        <tr>
            <td>{!! $trade->name !!}</td>
            <td>{!! $trade->descriprion !!}</td>
            <td>
                {!! Form::open(['route' => ['trades.destroy', $trade->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('trades.show', [$trade->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('trades.edit', [$trade->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>