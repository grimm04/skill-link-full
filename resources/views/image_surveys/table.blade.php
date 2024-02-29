<table class="table table-responsive" id="imageSurveys-table">
    <thead>
        <tr>
            <th>Question</th>
            <th>Image</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($question as $imageSurvey)
        <tr>
            <td>{!! $imageSurvey->getModelQuestion->title !!}</td>
            <td><img src="{!!asset('survey_image/'.$imageSurvey->image)!!}" class="image_surveys_admin"></td>
            <td>
                {!! Form::open(['route' => ['imageSurveys.destroy', $imageSurvey->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('imageSurveys.show', [$imageSurvey->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('imageSurveys.edit', [$imageSurvey->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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