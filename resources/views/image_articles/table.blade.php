<table class="table table-responsive" id="imageArticles-table">
    <thead>
        <tr>
            <th>Id Post</th>
        <th>Image</th>
        <th>Thumbnail</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($imageArticles as $imageArticle)
        <tr>
            <td>{!! $imageArticle->id_post !!}</td>
            <td>{!! $imageArticle->image !!}</td>
            <td>{!! $imageArticle->thumbnail !!}</td>
            <td>
                {!! Form::open(['route' => ['imageArticles.destroy', $imageArticle->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('imageArticles.show', [$imageArticle->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('imageArticles.edit', [$imageArticle->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>