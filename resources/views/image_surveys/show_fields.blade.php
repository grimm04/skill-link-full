<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $imageSurvey->id !!}</p>
</div>

<!-- Id Question Field -->
<div class="form-group">
    {!! Form::label('id_question', 'Id Question:') !!}
    <p>{!! $imageSurvey->id_question !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{!! $imageSurvey->image !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $imageSurvey->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $imageSurvey->updated_at !!}</p>
</div>

