<table class="table table-responsive" id="essayAnswers-table">
    <thead>
        <tr>
            <th>User Survey</th>
            <th>Question</th>
            <th>Answer</th>
        </tr>
    </thead>
    <tbody>
    @foreach($question as $essayAnswer)
        <tr>
            <td>{!! $essayAnswer->getModelUserSurvey->email !!}</td>
            <td>{!! $essayAnswer->getModelEssayQuestion->question !!}</td>
            <td>{!! $essayAnswer->answer !!}</td>
            <td>
                {!! Form::open(['route' => ['essayAnswers.destroy', $essayAnswer->id], 'method' => 'delete']) !!}
                <!--<div class='btn-group'>
                    <a href="{!! route('essayAnswers.show', [$essayAnswer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('essayAnswers.edit', [$essayAnswer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>-->
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