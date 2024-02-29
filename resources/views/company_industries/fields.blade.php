

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
    {!! Form::label('industryid', 'Industry:') !!}
	 <select class="form-control" name="industryid">
			<option></option>
			@foreach ($industry as $spe)
    		<option value="{{ $spe->id}}" {{ $industryid == $spe->id ? 'selected="selected"' : '' }}>{{ $spe->name}}</option>
			@endforeach
	</select> 
   
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('companyIndustries.index') !!}" class="btn btn-default">Cancel</a>
</div>
