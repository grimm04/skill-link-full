<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $groupType->id !!}</p>
</div>

<!-- Type Name Field -->
<div class="form-group">
    {!! Form::label('type_name', 'Type Name:') !!}
    <p>{!! $groupType->type_name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $groupType->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $groupType->updated_at !!}</p>
</div>

