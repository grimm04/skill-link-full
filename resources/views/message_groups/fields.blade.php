<!-- Msg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('msg', 'Msg:') !!}
    {!! Form::text('msg', null, ['class' => 'form-control']) !!}
</div>

<!-- Images Field -->
<div class="form-group col-sm-6">
    {!! Form::label('images', 'Images:') !!}
    {!! Form::file('images') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('messageGroups.index') !!}" class="btn btn-default">Cancel</a>
</div>
