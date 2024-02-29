<table class="table table-responsive" id="experiences-table">
    <thead>
        <tr>
            <th>Userid</th>
        <th>Company</th>
        <th>Title</th>
        <th>Locationid</th>
        <th>Start Date</th>
        <th>Present</th>
        <th>Work Status</th>
        <th>Description</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($experiences as $experience)
        <tr>
            <td>{!! $experience->userid !!}</td>
            <td>{!! $experience->company !!}</td>
            <td>{!! $experience->title !!}</td>
            <td>{!! $experience->locationid !!}</td>
            <td>{!! $experience->start_date !!}</td>
            <td>{!! $experience->present !!}</td>
            <td>{!! $experience->work_status !!}</td>
            <td>{!! $experience->description !!}</td>
            <td>
                {!! Form::open(['route' => ['experiences.destroy', $experience->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('experiences.show', [$experience->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('experiences.edit', [$experience->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>