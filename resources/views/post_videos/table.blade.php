<table class="table table-responsive" id="postVideos-table">
    <thead>
        <tr>
            <th>Id Post</th>
        <th>Video</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($postVideos as $postVideo)
        <tr>
            <td>{!! $postVideo->id_post !!}</td>
            <td>{!! $postVideo->video !!}</td>
            <td>
                {!! Form::open(['route' => ['postVideos.destroy', $postVideo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('postVideos.show', [$postVideo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('postVideos.edit', [$postVideo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>