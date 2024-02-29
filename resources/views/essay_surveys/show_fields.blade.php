<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $essaySurvey->id !!}</p>
</div>

<!-- Id Question Field -->
<div class="form-group">
    {!! Form::label('id_question', 'Id Question:') !!}
    <p>{!! $essaySurvey->id_question !!}</p>
</div>

<!-- Question Field -->
<div class="form-group">
    {!! Form::label('question', 'Question:') !!}
    <p>{!! $essaySurvey->question !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $essaySurvey->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $essaySurvey->updated_at !!}</p>
</div>

