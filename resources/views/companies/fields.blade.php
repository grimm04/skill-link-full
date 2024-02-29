<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('headquarter', 'Headquarter :') !!}
    {!! Form::text('headquarter', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('typecompanyid', 'Type Company:') !!}
    {!! Form::text('typecompanyid', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_size', 'Company Size:') !!}
    {!! Form::text('company_size', null, ['class' => 'form-control']) !!}
</div>

<!-- Website Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website', 'Website:') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<!-- Founded Field -->
<div class="form-group col-sm-6">
    {!! Form::label('founded', 'Founded:') !!}
    {!! Form::date('founded', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Fb Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fb', 'Fb:') !!}
    {!! Form::text('fb', null, ['class' => 'form-control']) !!}
</div>

<!-- Ig Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ig', 'Ig:') !!}
    {!! Form::text('ig', null, ['class' => 'form-control']) !!}
</div>

<!-- Twitter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('twitter', 'Twitter:') !!}
    {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
</div>

<!-- Yt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('yt', 'Yt:') !!}
    {!! Form::text('yt', null, ['class' => 'form-control']) !!}
</div>

<!-- Avatar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('avatar', 'Avatar:') !!}
    {!! Form::file('avatar') !!}
</div>
<div class="clearfix"></div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('companies.index') !!}" class="btn btn-default">Cancel</a>
</div>
