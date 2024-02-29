<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $packageAnswer->id !!}</p>
</div>

<!-- Id User Survey Field -->
<div class="form-group">
    {!! Form::label('id_user_survey', 'Id User Survey:') !!}
    <p>{!! $packageAnswer->id_user_survey !!}</p>
</div>

<!-- Answer Field -->
<div class="form-group">
    {!! Form::label('answer', 'Answer:') !!}
    <p>{!! $packageAnswer->answer !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $packageAnswer->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $packageAnswer->updated_at !!}</p>
</div>

