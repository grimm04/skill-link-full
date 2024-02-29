<table class="table table-responsive" id="essaySurveys-table">
    <thead>
        <tr>
            <th>Id Question</th>
        <th>Question</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($essaySurveys as $essaySurvey)
        <tr>
            <td>{!! $essaySurvey->id_question !!}</td>
            <td>{!! $essaySurvey->question !!}</td>
            <td>
                {!! Form::open(['route' => ['essaySurveys.destroy', $essaySurvey->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('essaySurveys.show', [$essaySurvey->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('essaySurveys.edit', [$essaySurvey->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>