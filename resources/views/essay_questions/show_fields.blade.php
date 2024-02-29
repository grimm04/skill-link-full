<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $essayQuestion->id !!}</p>
</div>

<!-- Id Survey Field -->
<div class="form-group">
    {!! Form::label('id_survey', 'Id Survey:') !!}
    <p>{!! $essayQuestion->id_survey !!}</p>
</div>

<!-- Question Field -->
<div class="form-group">
    {!! Form::label('question', 'Question:') !!}
    <p>{!! $essayQuestion->question !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $essayQuestion->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $essayQuestion->updated_at !!}</p>
</div>

