<table class="table table-responsive" id="packagePrices-table">
    <thead>
        <tr>
            <th>Id Package</th>
        <th>Id Package Detail</th>
        <th>Price</th>
        <th>Status</th>
        <th>Item</th>
        <th>Type</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($packagePrices as $packagePrice)
        <tr>
            <td>{!! $packagePrice->id_package !!}</td>
            <td>{!! $packagePrice->id_package_detail !!}</td>
            <td>{!! $packagePrice->price !!}</td>
            <td>{!! $packagePrice->status !!}</td>
            <td>{!! $packagePrice->item !!}</td>
            <td>{!! $packagePrice->type !!}</td>
            <td>
                {!! Form::open(['route' => ['packagePrices.destroy', $packagePrice->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('packagePrices.show', [$packagePrice->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('packagePrices.edit', [$packagePrice->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>