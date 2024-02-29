<!-- Jobsearchid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jobsearchid', 'Jobsearchid:') !!}
    {!! Form::text('jobsearchid', null, ['class' => 'form-control']) !!}
</div>

<!-- Companyid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('companyid', 'Companyid:') !!}
    {!! Form::text('companyid', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jobSearchSettingCompanies.index') !!}" class="btn btn-default">Cancel</a>
</div>
