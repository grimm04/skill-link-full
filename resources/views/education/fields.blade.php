<!-- Institution Field -->
<div class="form-group col-sm-6">
    {!! Form::label('institution', 'Institution:') !!}
    {!! Form::text('institution', null, ['class' => 'form-control']) !!}
</div>

<!-- Major Field -->
<div class="form-group col-sm-6">
    {!! Form::label('major', 'Major:') !!}
    {!! Form::text('major', null, ['class' => 'form-control']) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>

<!-- Form Field -->
<div class="form-group col-sm-6">
    {!! Form::label('form', 'Form:') !!}
    {!! Form::date('form', null, ['class' => 'form-control']) !!}
</div>

<!-- Until Field -->
<div class="form-group col-sm-6">
    {!! Form::label('until', 'Until:') !!}
    {!! Form::date('until', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('education.index') !!}" class="btn btn-default">Cancel</a>
</div>
