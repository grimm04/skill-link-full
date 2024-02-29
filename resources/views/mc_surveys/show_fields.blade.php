<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $mcSurvey->id !!}</p>
</div>

<!-- Id Question Field -->
<div class="form-group">
    {!! Form::label('id_question', 'Id Question:') !!}
    <p>{!! $mcSurvey->id_question !!}</p>
</div>

<!-- Question Field -->
<div class="form-group">
    {!! Form::label('question', 'Question:') !!}
    <p>{!! $mcSurvey->question !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $mcSurvey->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $mcSurvey->updated_at !!}</p>
</div>

