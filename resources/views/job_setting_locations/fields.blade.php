<div class="form-group col-sm-6">
    {!! Form::label('jobsettingid', 'Jobsettingid:') !!}
    {!! Form::number('jobsettingid', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('locationid', 'Locationid:') !!}
    {!! Form::number('locationid', null, ['class' => 'form-control']) !!}
</div>
 


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jobSettingLocations.index') !!}" class="btn btn-default">Cancel</a>
</div>
