<table class="table table-responsive" id="packageDetails-table">
    <thead>
        <tr>
            <th>Id Package</th>
        <th>Description</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($packageDetails as $packageDetail)
        <tr>
            <td>{!! $packageDetail->id_package !!}</td>
            <td>{!! $packageDetail->description !!}</td>
            <td>
                {!! Form::open(['route' => ['packageDetails.destroy', $packageDetail->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('packageDetails.show', [$packageDetail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('packageDetails.edit', [$packageDetail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>