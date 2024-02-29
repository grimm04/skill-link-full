<table class="table table-responsive" id="companies-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Headquarter</th>
        <th>Company Size</th>
        <th>Website</th>
        <th>Founded</th>
        <th>Email</th>
        <th>Fb</th>
        <th>Ig</th>
        <th>Twitter</th>
        <th>Yt</th>
        <th>Avatar</th>
        <th>Location</th>
        <th>Typecompanyid</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($companies as $company)
        <tr>
            <td>{!! $company->name !!}</td>
            <td>{!! $company->headquarter !!}</td>
            <td>{!! $company->company_size !!}</td>
            <td>{!! $company->website !!}</td>
            <td>{!! $company->founded !!}</td>
            <td>{!! $company->email !!}</td>
            <td>{!! $company->fb !!}</td>
            <td>{!! $company->ig !!}</td>
            <td>{!! $company->twitter !!}</td>
            <td>{!! $company->yt !!}</td>
            <td>{!! $company->avatar !!}</td>
            <td>{!! $company->location !!}</td>
            <td>{!! $company->typecompanyid !!}</td>
            <td>{!! $company->status !!}</td>
            <td>
                {!! Form::open(['route' => ['companies.destroy', $company->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('companies.show', [$company->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('companies.edit', [$company->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>