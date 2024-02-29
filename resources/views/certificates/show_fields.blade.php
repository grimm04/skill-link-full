<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $certificate->id !!}</p>
</div>

<!-- Userid Field -->
<div class="form-group">
    {!! Form::label('userid', 'Userid:') !!}
    <p>{!! $certificate->userid !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $certificate->title !!}</p>
</div>

<!-- Photo Field -->
<div class="form-group">
    {!! Form::label('photo', 'Photo:') !!}
    <p>{!! $certificate->photo !!}</p>
</div>

<!-- Institution Field -->
<div class="form-group">
    {!! Form::label('institution', 'Institution:') !!}
    <p>{!! $certificate->institution !!}</p>
</div>

<!-- Location Field -->
<div class="form-group">
    {!! Form::label('location', 'Location:') !!}
    <p>{!! $certificate->location !!}</p>
</div>

<!-- Expiry Date Field -->
<div class="form-group">
    {!! Form::label('expiry_date', 'Expiry Date:') !!}
    <p>{!! $certificate->expiry_date !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $certificate->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $certificate->updated_at !!}</p>
</div>

