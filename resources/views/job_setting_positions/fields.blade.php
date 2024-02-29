<!-- Jobrelocate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jobsettingid', 'Jobsettingid:') !!}
    {!! Form::number('jobsettingid', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('positionjobid', 'Positionjobid:') !!}
    {!! Form::number('positionjobid', null, ['class' => 'form-control']) !!}
</div>
 

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jobSettingPositions.index') !!}" class="btn btn-default">Cancel</a>
</div>
