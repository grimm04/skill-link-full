<table class="table table-responsive" id="education-table">
    <thead>
        <tr>
            <th>Userid</th>
        <th>Institution</th>
        <th>Major</th>
        <th>Location</th>
        <th>Form</th>
        <th>Until</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($education as $education)
        <tr>
            <td>{!! $education->userid !!}</td>
            <td>{!! $education->institution !!}</td>
            <td>{!! $education->major !!}</td>
            <td>{!! $education->location !!}</td>
            <td>{!! $education->form !!}</td>
            <td>{!! $education->until !!}</td>
            <td>
                {!! Form::open(['route' => ['education.destroy', $education->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('education.show', [$education->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('education.edit', [$education->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>