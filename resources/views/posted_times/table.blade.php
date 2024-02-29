<table class="table table-responsive" id="postedTimes-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($postedTimes as $postedTime)
        <tr>
            <td>{!! $postedTime->name !!}</td>
            <td>
                {!! Form::open(['route' => ['postedTimes.destroy', $postedTime->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('postedTimes.show', [$postedTime->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('postedTimes.edit', [$postedTime->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>