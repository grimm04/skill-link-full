<!-- Userid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('userid', 'Userid:') !!}
    {!! Form::text('userid', null, ['class' => 'form-control']) !!}
</div>

<!-- Postedtimeid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('postedtimeid', 'Postedtimeid:') !!}
    {!! Form::text('postedtimeid', null, ['class' => 'form-control']) !!}
</div>

<!-- Typejobid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('typejobid', 'Typejobid:') !!}
    {!! Form::text('typejobid', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jobSearchSettings.index') !!}" class="btn btn-default">Cancel</a>
</div>
