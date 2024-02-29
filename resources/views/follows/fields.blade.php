<!-- Followid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('followid', 'Followid:') !!}
    {!! Form::text('followid', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('follows.index') !!}" class="btn btn-default">Cancel</a>
</div>
