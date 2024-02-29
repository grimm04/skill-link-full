<table class="table table-responsive" id="postArticles-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Post</th>
        <th>View</th>
        <th>Status</th>
        <th>Id User</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($postArticles as $postArticle)
        <tr>
            <td>{!! $postArticle->title !!}</td>
            <td>{!! $postArticle->post !!}</td>
            <td>{!! $postArticle->view !!}</td>
            <td>{!! $postArticle->status !!}</td>
            <td>{!! $postArticle->id_user !!}</td>
            <td>
                {!! Form::open(['route' => ['postArticles.destroy', $postArticle->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('postArticles.show', [$postArticle->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('postArticles.edit', [$postArticle->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>