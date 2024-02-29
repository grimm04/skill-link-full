@extends('dashboard_layouts.appsearchnomenu')
@section('title') 	
	<title>Advance Search - Skill Link </title>
@endsection  
@section('content')  
<div class="row">
	<div class="col-md-9">
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
		      <div class="panel-heading">
		        <h4 class="panel-title">
		          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Profile Search Setting</a>
		        </h4>
		      </div>
		       <div id="collapse1" class="panel-collapse collapse in ">
			    <div class=" bg-blue-dark yellow" style="border-bottom: 1px solid #fff;padding: 5px 5px 0px 20px;">
			      	<label class="input-checkbox">
	                  	<p>Same Interest</p>
	                  	<input type="checkbox" value="interest" onclick="profilesearch(this);" id="interest" @if($profilesetting->interest == 1) checked="" @endif>
	                  	<span class="checkmark border-all-radius"></span>
	               	</label>
               	</div>
			    <div class=" bg-blue-dark yellow" style="border-bottom: 1px solid #fff;padding: 5px 5px 0px 20px;">
			      	<label class="input-checkbox">
	                  	<p>Same Location</p>
	                  	<input type="checkbox" value="location" onclick="profilesearch(this);" id="location" @if($profilesetting->location == 1) checked="" @endif>
	                  	<span class="checkmark border-all-radius"></span>
	               	</label>
               	</div>
			    <div class=" bg-blue-dark yellow" style="border-bottom: 1px solid #fff;padding: 5px 5px 0px 20px;">
			      	<label class="input-checkbox">
	                  	<p>Same Company</p>
	                  	<input type="checkbox" value="company" onclick="profilesearch(this);"  id="company" @if($profilesetting->company == 1) checked="" @endif>
	                  	<span class="checkmark border-all-radius"></span>
	               	</label>
               	</div>
			    <div class=" bg-blue-dark yellow" style="border-bottom: 1px solid #fff;padding: 5px 5px 0px 20px;">
			      	<label class="input-checkbox">
	                  	<p>Same Industries</p>
	                  	<input type="checkbox" value="industries" onclick="profilesearch(this);"  id="industries" @if($profilesetting->industries == 1) checked="" @endif>
	                  	<span class="checkmark border-all-radius"></span>
	               	</label>
               	</div>
               	<div class=" bg-blue-dark yellow" style="border-bottom: 1px solid #fff;padding: 5px 5px 0px 20px;">
			      	<label class="input-checkbox">
	                  	<p>Same School</p>
	                  	<input type="checkbox" value="school" onclick="profilesearch(this);"  id="school" @if($profilesetting->school == 1) checked="" @endif>
	                  	<span class="checkmark border-all-radius"></span>
	               	</label>
               	</div>
		      </div>
		    </div>
		    <div class="panel panel-default">
		      <div class="panel-heading">
		        <h4 class="panel-title">
		          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Job Search Setting</a>
		        </h4>
		      </div>
		      <div id="collapse2" class="panel-collapse collapse">
		         <div class="panel-body">
		        	{{-- <form method="post" id="multiple_select_form"> --}}
			        	<div class="box-header with-border">
						</div>
						<span class="box-title"><b>What job titles are you looking for?</b></span>
						<div class="row">
							<form method="post" id="form-titles">
							{!! csrf_field() !!} 
							<div class="col-xs-8 col-sm-8 col-md-9">
							    <select name="titles[]" class="form-control selectpicker" data-live-search="true" multiple>
							    	@foreach ($chtrade as $ch) 
							    		<option value="{{  $ch->id}}" @if(in_array($ch->id, $titlesid)) selected="" @endif >{{ str_limit($ch->name,20) }}</option> 
							    	@endforeach
							    </select> 
							</div>
							<div class="col-xs-4 col-sm-4 col-md-3">
				     			<button type="button" class="btn bg-blue-dark yellow" onclick="titless(this);">save</button>
							</div>
							</form>
						</div> 
			        	<div class="box-header with-border">
						</div>
						<span class="box-title"><b>What location are you open to?</b></span>
						<div class="row">
							<form method="post" id="form-location">
							{!! csrf_field() !!} 
							<div class="col-xs-8 col-sm-8 col-md-9">
							   <select name="locationid[]" id="locationid" class="form-control selectpicker" data-live-search="true" multiple>
							    	@foreach ($province as $pro) 
							    		<option value="{{  $pro->id}}" @if(in_array($pro->id, $locationid)) selected="" @endif >{{  $pro->name}}</option> 
							    	@endforeach
							    </select>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-3">
				     			<button type="button" class="btn bg-blue-dark yellow" onclick="locations(this);">save</button>
							</div>
							</form>
						</div> 
			        	<div class="box-header with-border">
						</div>
						<span class="box-title"><b>Company</b></span>
						<div class="row">
							<form method="post" id="form-company">
							{!! csrf_field() !!} 
							<div class="col-xs-8 col-sm-8 col-md-9">
							    <select name="company[]" id="company" class="form-control selectpicker" data-live-search="true" multiple>
							    @foreach ($companiesall as $com) 
							    		<option value="{{  $com->id}}" @if(in_array($com->id, $companyid)) selected="" @endif >{{  $com->name}}</option> 
							    @endforeach
							    </select>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-3">
				     			<button type="button" class="btn bg-blue-dark yellow" onclick="companies(this);">save</button>
							</div>
							</form>
						</div> 
						<div class="box-header with-border">
						</div>
						<span class="box-title"><b>Date Posted</b></span>
						<div class="row">
							<form method="post" id="form-posted">
							{!! csrf_field() !!} 
							@foreach ($postedtime as $pos) 
					    		<div class="col-xs-6 col-sm-6 col-md-6">
									<label class="input-checkbox">
					                  <p>{{ $pos->name}}</p>
					                  <input type="radio" name="posteid" value="{{ $pos->id }}" onclick="postedtime(this)" id="posteid" @if($pos->id== $jobsetting->postedtimeid) checked="" @endif >
					                  <span class="checkmark border-all-radius"></span>
					                </label>
								</div>
					    	@endforeach 
					   		</form>
						</div> 
						<div class="box-header with-border">
						</div>
						<span class="box-title"><b>What type of job are you considering</b></span>
						<div class="row">
							<form method="post" id="form-type">
							{!! csrf_field() !!} 
							@foreach ($jobtype as $type) 
					    		<div class="col-xs-6 col-sm-6 col-md-6">
									<label class="input-checkbox">
					                  <p>{{ $type->name}}</p>
					                  <input type="checkbox" name="typejob" value="{{ $type->id}}" onclick="jobtype(this)" id="posteid-{{ $type->id}}" @if(in_array($type->id, $typejobid)) checked="" @endif>
					                  <span class="checkmark border-all-radius"></span>
					                </label>
								</div>
					    	@endforeach 
					    	</form> 
						</div> 
				    {{-- </form> --}}
				</div>
		      </div>
		    </div>
		</div>
	</div>
</div>
@endsection 
@section('script')
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
	<script type="text/javascript"> 

		function profilesearch(i) { 
			var id = $(i).val(); 
			if($('#'+id).is(':checked')){ 
		         var status = '1';
			}else { 
		         var status = '0';
			} 
			// console.log(status);
			// return false;
			$.ajax({
            type: 'POST',
            url: "{{ route('interests_search_save') }}",
            data: {
                '_token': $('meta[name="csrf-token"]').attr('content'),
                'value': id,
                'status': status
            },
            success: function(data) {  
            	console.log(data.data);
                if ((data.errors)) {
                        setTimeout(function () { 
                            toastr.error('Error!', {timeOut: 1000});
                        }, 500);  
                } else {
                	toastr.success('Profile Search Setting Updated', {timeOut: 5000});  
                }
            }
        });
			
		} 

		function titless(i) {
			form = $('#form-titles').serialize(); 
				$.ajax({
	            type: 'POST',
	            url: "{{ route('titlessearch_save') }}",
	            data: form,
	            success: function(data) {  
	            	console.log(data.data);
	                if ((data.errors)) {
	                        setTimeout(function () { 
	                            toastr.error('Error!', {timeOut: 1000});
	                        }, 500);  
	                } else {
	                	toastr.success('Profile Search Setting Updated', {timeOut: 5000});  
	                }
	            }
			});
		}
		function locations(i) {
			form = $('#form-location').serialize(); 
			// console.log(form);return false;
				$.ajax({
	            type: 'POST',
	            url: "{{ route('locationsearch_save') }}",
	            data: form,
	            success: function(data) {  
	            	console.log(data.data);
	                if ((data.errors)) {
	                        setTimeout(function () { 
	                            toastr.error('Error!', {timeOut: 1000});
	                        }, 500);  
	                } else {
	                	toastr.success('Profile Search Setting Updated', {timeOut: 5000});  
	                }
	            }
			});
		}

		function companies(i) {
			form = $('#form-company').serialize(); 
			// console.log(form);return false;
				$.ajax({
	            type: 'POST',
	            url: "{{ route('companysearch_save') }}",
	            data: form,
	            success: function(data) {  
	            	console.log(data.data);
	                if ((data.errors)) {
	                        setTimeout(function () { 
	                            toastr.error('Error!', {timeOut: 1000});
	                        }, 500);  
	                } else {
	                	toastr.success('Profile Search Setting Updated', {timeOut: 5000});  
	                }
	            }
			});
		}


		function postedtime(i) { 
			var id = $(i).val();  
			// console.log(id);
			// return false;
			$.ajax({
            type: 'POST',
            url: "{{ route('datepostedsearch_save') }}",
            data: {
                '_token': $('meta[name="csrf-token"]').attr('content'),
                'value': id
            },
            success: function(data) {  
            	console.log(data.data);
                if ((data.errors)) {
                        setTimeout(function () { 
                            toastr.error('Error!', {timeOut: 1000});
                        }, 500);  
                } else {
                	toastr.success('Profile Search Setting Updated', {timeOut: 5000});  
                }
            }
        });
			
		} 


		function jobtype(i) { 
			var id = $(i).val();  
			if($('#posteid-'+id).is(':checked')){ 
		         var status = '1';
			}else { 
		         var status = '0';
			} 
			// console.log(status);
			// return false;
			$.ajax({
            type: 'POST',
            url: "{{ route('typesearch_save') }}",
            data: {
                '_token': $('meta[name="csrf-token"]').attr('content'),
                'value': id,
                'status':status
            },
            success: function(data) {  
            	console.log(data.data);
                if ((data.errors)) {
                        setTimeout(function () { 
                            toastr.error('Error!', {timeOut: 1000});
                        }, 500);  
                } else {
                	toastr.success('Profile Search Setting Updated', {timeOut: 5000});  
                }
            }
        });
			
		} 
	</script>
@endsection 