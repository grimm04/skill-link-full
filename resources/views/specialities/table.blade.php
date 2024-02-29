<table class="table table-responsive" id="specialities-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($specialities as $speciality)
        <tr>
            <td>{!! $speciality->name !!}</td>
            <td>
                {!! Form::open(['route' => ['specialities.destroy', $speciality->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('specialities.show', [$speciality->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('specialities.edit', [$speciality->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>