<!-- Jobid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jobid', 'Jobid:') !!}
    {!! Form::text('jobid', null, ['class' => 'form-control']) !!}
</div>

<!-- Skillneedid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('skillneedid', 'Skillneedid:') !!}
    {!! Form::text('skillneedid', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jobSkills.index') !!}" class="btn btn-default">Cancel</a>
</div>
