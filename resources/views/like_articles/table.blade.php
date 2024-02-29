<table class="table table-responsive" id="likeArticles-table">
    <thead>
        <tr>
            <th>Id Post</th>
        <th>Id User</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($likeArticles as $likeArticle)
        <tr>
            <td>{!! $likeArticle->id_post !!}</td>
            <td>{!! $likeArticle->id_user !!}</td>
            <td>
                {!! Form::open(['route' => ['likeArticles.destroy', $likeArticle->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('likeArticles.show', [$likeArticle->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('likeArticles.edit', [$likeArticle->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>