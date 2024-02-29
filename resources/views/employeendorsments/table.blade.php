<table class="table table-responsive" id="employeendorsments-table">
    <thead>
        <tr>
            <th>Userid</th>
        <th>Endorsmentid</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($employeendorsments as $employeendorsment)
        <tr>
            <td>{!! $employeendorsment->userid !!}</td>
            <td>{!! $employeendorsment->endorsmentid !!}</td>
            <td>
                {!! Form::open(['route' => ['employeendorsments.destroy', $employeendorsment->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('employeendorsments.show', [$employeendorsment->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('employeendorsments.edit', [$employeendorsment->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>