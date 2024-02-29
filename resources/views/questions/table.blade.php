<table class="table table-responsive" id="questions-table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Question</th>
            <th>Sort</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($survey as $question)
        <tr>
            <td>{!! $question->getModelSurvey->name !!}</td>
            <td>{!! $question->title !!}</td>
            <td>{!! $question->sort !!}</td>
            <td>
                {!! Form::open(['route' => ['questions.destroy', $question->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('questions.show', [$question->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('questions.edit', [$question->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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