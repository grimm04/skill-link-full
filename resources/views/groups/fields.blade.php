<!-- Group Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('group_name', 'Group Name:') !!}
    {!! Form::text('group_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Ref Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ref_number', 'Ref Number:') !!}
    {!! Form::text('ref_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>

<!-- Group Info Field -->
<div class="form-group col-sm-6">
    {!! Form::label('group_info', 'Group Info:') !!}
    {!! Form::text('group_info', null, ['class' => 'form-control']) !!}
</div>

<!-- Group Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('group_image', 'Group Image:') !!}
    {!! Form::text('group_image', null, ['class' => 'form-control']) !!}
</div>

<!-- Website Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website', 'Website:') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_size', 'Company Size:') !!}
    {!! Form::text('company_size', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('groups.index') !!}" class="btn btn-default">Cancel</a>
</div>
