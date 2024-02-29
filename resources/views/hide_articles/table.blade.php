<table class="table table-responsive" id="hideArticles-table">
    <thead>
        <tr>
            <th>Id Post</th>
        <th>Id User</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($hideArticles as $hideArticle)
        <tr>
            <td>{!! $hideArticle->id_post !!}</td>
            <td>{!! $hideArticle->id_user !!}</td>
            <td>
                {!! Form::open(['route' => ['hideArticles.destroy', $hideArticle->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('hideArticles.show', [$hideArticle->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('hideArticles.edit', [$hideArticle->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>