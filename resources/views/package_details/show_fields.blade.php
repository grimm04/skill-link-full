<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $packageDetail->id !!}</p>
</div>

<!-- Id Package Field -->
<div class="form-group">
    {!! Form::label('id_package', 'Id Package:') !!}
    <p>{!! $packageDetail->id_package !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $packageDetail->description !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $packageDetail->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $packageDetail->updated_at !!}</p>
</div>

