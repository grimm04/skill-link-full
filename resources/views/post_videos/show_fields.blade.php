<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $postVideo->id !!}</p>
</div>

<!-- Id Post Field -->
<div class="form-group">
    {!! Form::label('id_post', 'Id Post:') !!}
    <p>{!! $postVideo->id_post !!}</p>
</div>

<!-- Video Field -->
<div class="form-group">
    {!! Form::label('video', 'Video:') !!}
    <p>{!! $postVideo->video !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $postVideo->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $postVideo->updated_at !!}</p>
</div>

