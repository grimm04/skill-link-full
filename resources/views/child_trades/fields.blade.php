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

<div class="form-group col-sm-6">
    {!! Form::label('tradeid', 'Nama Produk:') !!}
    	 <select class="form-control" name="tradeid">
   				@foreach ($trade as $element)
		    		<option value="{{ $element->id}}" {{ $tradeid == $element->id ? 'selected="selected"' : '' }}>{{ $element->name}}</option>
    			@endforeach
		</select> 
   
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('childTrades.index') !!}" class="btn btn-default">Cancel</a>
</div> 
