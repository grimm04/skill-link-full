<table class="table table-responsive" id="typeCompanies-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($typeCompanies as $typeCompany)
        <tr>
            <td>{!! $typeCompany->name !!}</td>
            <td>
                {!! Form::open(['route' => ['typeCompanies.destroy', $typeCompany->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('typeCompanies.show', [$typeCompany->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('typeCompanies.edit', [$typeCompany->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>