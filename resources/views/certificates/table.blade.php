<table class="table table-responsive" id="certificates-table">
    <thead>
        <tr>
            <th>Userid</th>
        <th>Title</th>
        <th>Photo</th>
        <th>Institution</th>
        <th>Location</th>
        <th>Expiry Date</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($certificates as $certificate)
        <tr>
            <td>{!! $certificate->userid !!}</td>
            <td>{!! $certificate->title !!}</td>
            <td>{!! $certificate->photo !!}</td>
            <td>{!! $certificate->institution !!}</td>
            <td>{!! $certificate->location !!}</td>
            <td>{!! $certificate->expiry_date !!}</td>
            <td>
                {!! Form::open(['route' => ['certificates.destroy', $certificate->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('certificates.show', [$certificate->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('certificates.edit', [$certificate->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>