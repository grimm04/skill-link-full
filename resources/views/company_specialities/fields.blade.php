<div class="form-group col-sm-6">
    {!! Form::label('companyid', 'Company:') !!}
	 <select class="form-control" name="companyid">
	 		<option></option>
			@foreach ($company as $comp)
    		<option value="{{ $comp->id}}" {{ $companyid == $comp->id ? 'selected="selected"' : '' }}>{{ $comp->name}}</option>
			@endforeach
	</select> 
   
</div>

<div class="form-group col-sm-6">
    {!! Form::label('specialityid', 'Nama Produk:') !!}
	 <select class="form-control" name="specialityid">
			<option></option>
			@foreach ($speciality as $spe)
    		<option value="{{ $spe->id}}" {{ $specialityid == $spe->id ? 'selected="selected"' : '' }}>{{ $spe->name}}</option>
			@endforeach
	</select> 
   
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('companySpecialities.index') !!}" class="btn btn-default">Cancel</a>
</div>
