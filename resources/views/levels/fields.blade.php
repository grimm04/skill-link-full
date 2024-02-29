<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Descriprion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descriprion', 'Descriprion:') !!}
    {!! Form::text('descriprion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('levels.index') !!}" class="btn btn-default">Cancel</a>
</div>

<div class="form-group col-sm-12">
    <label>Date:</label>

    <div class="input-group date"> 
      <input type="text" class="form-control pull-right" id="datepicker">
    </div>
    <!-- /.input group -->
  </div>