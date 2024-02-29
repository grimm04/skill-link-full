<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $mcAnswer->id !!}</p>
</div>

<!-- Id User Survey Field -->
<div class="form-group">
    {!! Form::label('id_user_survey', 'Id User Survey:') !!}
    <p>{!! $mcAnswer->id_user_survey !!}</p>
</div>

<!-- Id Mc Field -->
<div class="form-group">
    {!! Form::label('id_mc', 'Id Mc:') !!}
    <p>{!! $mcAnswer->id_mc !!}</p>
</div>

<!-- Answer Field -->
<div class="form-group">
    {!! Form::label('answer', 'Answer:') !!}
    <p>{!! $mcAnswer->answer !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $mcAnswer->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $mcAnswer->updated_at !!}</p>
</div>

