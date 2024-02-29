<table class="table table-responsive" id="commentArticles-table">
    <thead>
        <tr>
            <th>Comment</th>
        <th>Id Post</th>
        <th>Id User</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($commentArticles as $commentArticle)
        <tr>
            <td>{!! $commentArticle->comment !!}</td>
            <td>{!! $commentArticle->id_post !!}</td>
            <td>{!! $commentArticle->id_user !!}</td>
            <td>
                {!! Form::open(['route' => ['commentArticles.destroy', $commentArticle->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('commentArticles.show', [$commentArticle->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('commentArticles.edit', [$commentArticle->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>