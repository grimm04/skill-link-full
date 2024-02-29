<!-- Userid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('userid', 'Userid:') !!}
    {!! Form::text('userid', null, ['class' => 'form-control']) !!}
</div>

<!-- Interst Field -->
<div class="form-group col-sm-6">
    {!! Form::label('interst', 'Interst:') !!}
    {!! Form::text('interst', null, ['class' => 'form-control']) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>

<!-- Industries Field -->
<div class="form-group col-sm-6">
    {!! Form::label('industries', 'Industries:') !!}
    {!! Form::text('industries', null, ['class' => 'form-control']) !!}
</div>

<!-- School Field -->
<div class="form-group col-sm-6">
    {!! Form::label('school', 'School:') !!}
    {!! Form::text('school', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('profileSearchSettings.index') !!}" class="btn btn-default">Cancel</a>
</div>
