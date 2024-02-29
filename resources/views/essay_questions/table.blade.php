<table class="table table-responsive" id="essayQuestions-table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Question</th>
            <th>Sort</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($survey as $essayQuestion)
        <tr>
            <td>{!! $essayQuestion->getModelSurvey->name !!}</td>
            <td>{!! $essayQuestion->question !!}</td>
            <td>{!! $essayQuestion->sort !!}</td>
            <td>
                {!! Form::open(['route' => ['essayQuestions.destroy', $essayQuestion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('essayQuestions.show', [$essayQuestion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('essayQuestions.edit', [$essayQuestion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
        <tr>
            <td colspan="8">
                {!! $survey->render() !!}
            </td>
        </tr>
    </tbody>
</table>