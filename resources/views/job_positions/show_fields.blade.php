<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $jobPosition->id !!}</p>
</div>

<!-- Jobid Field -->
<div class="form-group">
    {!! Form::label('jobid', 'Jobid:') !!}
    <p>{!! $jobPosition->jobid !!}</p>
</div>

<!-- Positionjobid Field -->
<div class="form-group">
    {!! Form::label('positionjobid', 'Positionjobid:') !!}
    <p>{!! $jobPosition->positionjobid !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $jobPosition->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $jobPosition->updated_at !!}</p>
</div>

