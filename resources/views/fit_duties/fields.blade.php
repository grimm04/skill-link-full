<!-- Titile Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titile', 'Titile:') !!}
    {!! Form::text('titile', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('fitDuties.index') !!}" class="btn btn-default">Cancel</a>
</div>
