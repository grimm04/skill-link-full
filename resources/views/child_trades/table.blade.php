<table class="table table-responsive" id="childTrades-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Descriprion</th>
        <th>Tradeid</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($childTrades as $childTrade)
        <tr>
            <td>{!! $childTrade->name !!}</td>
            <td>{!! $childTrade->descriprion !!}</td>
            <td>{!! $childTrade->trade !!}</td>
            <td>
                {!! Form::open(['route' => ['childTrades.destroy', $childTrade->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('childTrades.show', [$childTrade->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('childTrades.edit', [$childTrade->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
   
    </tbody>
</table>