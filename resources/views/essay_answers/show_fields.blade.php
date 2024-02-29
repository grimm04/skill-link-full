<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $essayAnswer->id !!}</p>
</div>

<!-- Id User Survey Field -->
<div class="form-group">
    {!! Form::label('id_user_survey', 'Id User Survey:') !!}
    <p>{!! $essayAnswer->id_user_survey !!}</p>
</div>

<!-- Id Essay Field -->
<div class="form-group">
    {!! Form::label('id_essay', 'Id Essay:') !!}
    <p>{!! $essayAnswer->id_essay !!}</p>
</div>

<!-- Answer Field -->
<div class="form-group">
    {!! Form::label('answer', 'Answer:') !!}
    <p>{!! $essayAnswer->answer !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $essayAnswer->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $essayAnswer->updated_at !!}</p>
</div>

