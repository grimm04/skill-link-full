<table class="table table-responsive" id="reportArticles-table">
    <thead>
        <tr>
            <th>Userid</th>
        <th>Postid</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($reportArticles as $reportArticle)
        <tr>
            <td>{!! $reportArticle->userid !!}</td>
            <td>{!! $reportArticle->postid !!}</td>
            <td>
                {!! Form::open(['route' => ['reportArticles.destroy', $reportArticle->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('reportArticles.show', [$reportArticle->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('reportArticles.edit', [$reportArticle->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>