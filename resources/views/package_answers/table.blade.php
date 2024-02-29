<table class="table table-responsive" id="packageAnswers-table">
    <thead>
        <tr>
            <th>Id User Survey</th>
        <th>Answer</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($packageAnswers as $packageAnswer)
        <tr>
            <td>{!! $packageAnswer->id_user_survey !!}</td>
            <td>{!! $packageAnswer->answer !!}</td>
            <td>
                {!! Form::open(['route' => ['packageAnswers.destroy', $packageAnswer->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('packageAnswers.show', [$packageAnswer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('packageAnswers.edit', [$packageAnswer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>