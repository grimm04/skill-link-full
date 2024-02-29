<table class="table table-responsive" id="timelines-table">
    <thead>
        <tr>
            <th>Userid</th>
        <th>Jobid</th>
        <th>Type</th>
        <th>Start Date</th>
        <th>End Date</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($timelines as $timeline)
        <tr>
            <td>{!! $timeline->userid !!}</td>
            <td>{!! $timeline->jobid !!}</td>
            <td>{!! $timeline->type !!}</td>
            <td>{!! $timeline->start_date !!}</td>
            <td>{!! $timeline->end_date !!}</td>
            <td>
                {!! Form::open(['route' => ['timelines.destroy', $timeline->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('timelines.show', [$timeline->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('timelines.edit', [$timeline->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>