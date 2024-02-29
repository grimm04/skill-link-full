@extends('dashboard_layouts.app_create')
@section('title') 	
	<title>Groups - Skill Link </title>
@endsection 
@section('content')  
<div class="row">
		<div class="col-md-9">
			<div class="box border-all-radius margin-15">
				<span class="box-title"><b>Create Group</b></span>
				<form action="{{ route('create_group') }}" method="post" style="margin-top: 15px;" enctype="multipart/form-data">
					{!! csrf_field() !!} 
					<div class="row">
						<div class="col-md-4 {{ $errors->has('group_name') ? ' has-error' : '' }}">
							<div class="input-group margin-15-responsive" style="width: 100% !important;">
								<input type="text" class="form-control" name="group_name" value="{{ old('group_name') }}" id="group_name" placeholder="Group Name" style="width: 100% !important;">
								@if ($errors->has('group_name')) 
									<div class="help-block" data-validation="">{{ $errors->first('group_name') }}</div> 
								@endif
								<p class="errorGroup_name text-center alert alert-danger hidden"></p>
							</div>
						</div>
						<div class="col-md-4 {{ $errors->has('group_type') ? ' has-error' : '' }}">
							<div class="input-group margin-15-responsive" style="width: 100% !important;">
								<select class="form-control" style="width: 100%;" name="group_type" id="group_type">
									<option value="">Group Type</option>
									@foreach ($grouptype as $gt) 
										<option value="{!! $gt->id !!}">{!! $gt->type_name !!}</option>
									@endforeach 
								</select>
							</div>
							@if ($errors->has('group_type')) 
								<div class="help-block" data-validation="">{{ $errors->first('group_type') }}</div> 
							@endif
							<p class="errorGroup_type text-center alert alert-danger hidden"></p>
						</div>
						<div class="col-md-4 margin-15-responsive {{ $errors->has('location') ? ' has-error' : '' }}">
							<div class="input-group" style="width: 100% !important;">
								<input type="text" name="location" id="location" class="form-control" value="{{ old('location') }}" placeholder="Location" style="width: 100% !important;">
								<p class="errorLocation text-center alert alert-danger hidden"></p>
								@if ($errors->has('location')) 
									<div class="help-block" data-validation="">{{ $errors->first('location') }}</div> 
								@endif
							</div>
						</div><br><br>
						<div class="col-md-12 {{ $errors->has('group_info') ? ' has-error' : '' }}">
							<div class="input-group" style="width: 100% !important;">
								<textarea class="form-control" name="group_info" id="group_info" style="width: 100%;height: 200px;" placeholder="Group Info">{{ old('group_info') }}</textarea>
								<p class="errorGroup_info text-center alert alert-danger hidden"></p>
								@if ($errors->has('group_info')) 
									<div class="help-block" data-validation="">{{ $errors->first('group_info') }}</div> 
								@endif
							</div>
						</div>
						<div class="align-right col-md-2"><br>
							<label for="">Upload Picture</label>
							<input type="file" name="group_image" id="group_image">
							<p class="errorGroup_image text-center alert alert-danger hidden"></p>
						</div>
						<div class="align-right col-md-offset-8 col-md-2">
							<button class="btn bg-yellow form-control add" type="submit" style="margin-top: 40px;">Create Group</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
@section('script') 
<script type="text/javascript">   
	$(document).ready(function(){ 
		$('#form-group').on('submit',function(e){  
			e.preventDefault();     
            // return false;
            $('#create-group').prop('disabled',true); 
            $.ajax({
                type: 'POST', 
                url: "{{ route('group_createpost') }}",
                data: {
                    '_token': $('input[name=_token]').val(),
                    'group_name': $("#group_name").val(),
                    'group_type': $('#group_type').val(),
                    'location': $('#location').val(), 
                    'group_info': $('#group_info').val(), 
                    'group_image': $('#group_image').val() 
                },
                success: function(data) {
                	if ((data.errors)) {
                        setTimeout(function () { 
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);  
                        if (data.errors.group_name) {
                            $('.errorGroup_name').removeClass('hidden');
                            $('.errorGroup_name').text(data.errors.group_name);
                        }
                        if (data.errors.group_type) {
                            $('.errorGroup_type').removeClass('hidden');
                            $('.errorGroup_type').text(data.errors.group_type);
                        }
                        if (data.errors.location) {
                            $('.errorLocation').removeClass('hidden');
                            $('.errorLocation').text(data.errors.location);
                        }
                    }  
                    else {
                    	toastr.success('Successfully Created Group!', 'Success Alert', {timeOut: 5000});
                    	$('#create-group').prop('disabled',false); 
                		// console.log(data.id);
                		window.location = ""+data.ref_n; 

                    }
                	
                },
            });
        }); 
    }); 
</script> 
@endsection
