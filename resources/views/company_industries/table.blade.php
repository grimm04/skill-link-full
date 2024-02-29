<table class="table table-responsive" id="companyIndustries-table">
    <thead>
        <tr>
            <th>Companyid</th>
        <th>Industryid</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($companyIndustries as $companyIndustry)
        <tr>
            <td>{!! $companyIndustry->companyid !!}</td>
            <td>{!! $companyIndustry->industryid !!}</td>
            <td>
                {!! Form::open(['route' => ['companyIndustries.destroy', $companyIndustry->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('companyIndustries.show', [$companyIndustry->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('companyIndustries.edit', [$companyIndustry->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>