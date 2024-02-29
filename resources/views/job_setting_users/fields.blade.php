<!-- Jobrelocate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jobrelocate', 'Jobrelocate:') !!}
    {!! Form::number('jobrelocate', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('userid', 'userid:') !!}
    {!! Form::number('userid', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('employmentstatusid', 'employmentstatusid:') !!}
    {!! Form::number('employmentstatusid', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::number('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jobSettingUsers.index') !!}" class="btn btn-default">Cancel</a>
</div>
