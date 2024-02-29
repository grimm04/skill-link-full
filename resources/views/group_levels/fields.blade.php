<!-- Level Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('level_name', 'Level Name:') !!}
    {!! Form::text('level_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('groupLevels.index') !!}" class="btn btn-default">Cancel</a>
</div>
