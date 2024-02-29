<table class="table table-responsive" id="mcAnswers-table">
    <thead>
        <tr>
            <th>Id User Survey</th>
        <th>Id Mc</th>
        <th>Answer</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($mcAnswers as $mcAnswer)
        <tr>
            <td>{!! $mcAnswer->id_user_survey !!}</td>
            <td>{!! $mcAnswer->id_mc !!}</td>
            <td>{!! $mcAnswer->answer !!}</td>
            <td>
                {!! Form::open(['route' => ['mcAnswers.destroy', $mcAnswer->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('mcAnswers.show', [$mcAnswer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('mcAnswers.edit', [$mcAnswer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>