<table class="table table-responsive" id="mcSurveys-table">
    <thead>
        <tr>
            <th>Question</th>
            <th>Choice</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($question as $mcSurvey)
        <tr>
            <td>{!! $mcSurvey->getModelQuestion2->title !!}</td>
            <td>{!! $mcSurvey->question !!}</td>
            <td>
                {!! Form::open(['route' => ['mcSurveys.destroy', $mcSurvey->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('mcSurveys.show', [$mcSurvey->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('mcSurveys.edit', [$mcSurvey->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
        <tr>
            <td colspan="8">
                {!! $question->render() !!}
            </td>
        </tr>
    </tbody>
</table>