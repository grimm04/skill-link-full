<!-- Fname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fname', 'Fname:') !!}
    {!! Form::text('fname', null, ['class' => 'form-control']) !!}
</div>

<!-- Lname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lname', 'Lname:') !!}
    {!! Form::text('lname', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Birth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('birth', 'Birth:') !!}
    {!! Form::date('birth', null, ['class' => 'form-control']) !!}
</div>

<!-- Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo', 'Photo:') !!}
    {!! Form::file('photo') !!}
</div>
<div class="clearfix"></div>

<!-- Emergency Contact 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emergency_contact_1', 'Emergency Contact 1:') !!}
    {!! Form::text('emergency_contact_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Emergency Contact 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emergency_contact_2', 'Emergency Contact 2:') !!}
    {!! Form::text('emergency_contact_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Certifiction Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('certifiction_number', 'Certifiction Number:') !!}
    {!! Form::text('certifiction_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('employees.index') !!}" class="btn btn-default">Cancel</a>
</div>
