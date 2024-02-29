<!-- Jobsearchid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jobsearchid', 'Jobsearchid:') !!}
    {!! Form::text('jobsearchid', null, ['class' => 'form-control']) !!}
</div>

<!-- Typejob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('typejob', 'Typejob:') !!}
    {!! Form::text('typejob', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jobSearchSettingTypes.index') !!}" class="btn btn-default">Cancel</a>
</div>
