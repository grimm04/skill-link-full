<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $medical->id !!}</p>
</div>

<!-- Condition Field -->
<div class="form-group">
    {!! Form::label('condition', 'Condition:') !!}
    <p>{!! $medical->condition !!}</p>
</div>

<!-- Level Field -->
<div class="form-group">
    {!! Form::label('level', 'Level:') !!}
    <p>{!! $medical->level !!}</p>
</div>

<!-- Form Field -->
<div class="form-group">
    {!! Form::label('form', 'Form:') !!}
    <p>{!! $medical->form !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $medical->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $medical->updated_at !!}</p>
</div>

