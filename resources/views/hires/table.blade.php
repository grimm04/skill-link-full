<table class="table table-responsive" id="hires-table">
    <thead>
        <tr>
            <th>Employeeid</th>
        <th>Companyid</th>
        <th>Childtradeid</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($hires as $hire)
        <tr>
            <td>{!! $hire->employeeid !!}</td>
            <td>{!! $hire->companyid !!}</td>
            <td>{!! $hire->childtradeid !!}</td>
            <td>
                {!! Form::open(['route' => ['hires.destroy', $hire->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('hires.show', [$hire->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('hires.edit', [$hire->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>