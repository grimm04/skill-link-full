@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>Jobs Setting | Skill Link </title>
@endsection  
@section('style') 
<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-tagsinput-latest/dist/bootstrap-tagsinput.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/selectize.css') }}">
<style type="text/css">
	.label  {
		color:red !important;
	}
	 
</style>
	
@endsection 
@section('header')  
	@include('dashboard_layouts.headermenu')   
	<header class="header-responsive">
	<div class="container-fluid">
		<div class="back-responsive">
			<a onclick="goBack()"> 
				<img src="{{ asset('dashboard_assets/images/icon/left.png') }}" alt="">
			</a>
		</div>
		<div class="navbar-sl">
			<h4 class="yellow" style="margin:15px 15px;">Job Setting</h4>
		</div>
	</div>
</header> 
@endsection  
@section('right')  
@endsection 
@section('content')   
 	<div class="row">
		<div class="col-md-9">
			<div class="row">
				<form method="post"  id="form-setting" >
					{!! csrf_field() !!} 
				<div class="col-md-4">
					<div class="box border-all-radius" style="margin-bottom: 15px;">
						<div class="box-header with-border">
							<span class="box-title"><b>Employment Status</b></span>
						</div>
						<select name="employmentstatusid" id="employmentstatusid" class="form-control">
							<option value="">Select Employment</option> 
							@foreach ($employmentstatus as $es)
								<option value="{{ $es->id }}"   {{ $es->id == $setting->employmentstatusid ? 'selected="selected"' : '' }}>{!! $es->name !!}</option> 
							@endforeach
						</select>
					</div>
				</div> 
				<div class="col-md-4">
					<div class="box border-all-radius" style="margin-bottom: 15px;">
						<div class="box-header with-border">
							<span class="box-title"><b>What job possition intersted ?</b></span>
						</div> 
						<div class="row tab-pane" style="margin-top: 10px;" id="tabposition" name="Location">
							<div class="col-xs-12 col-sm-12 col-md-12">
								{{-- <input type="text" placeholder="Possition" class="form-control" id="position" class="form-control" name="positionid" size="12">  --}} 
								<div class="col-xs-8 col-sm-8 col-md-12">
								    <select name="position[]" class="form-control selectpicker" data-live-search="true" multiple> 
								    		@foreach ($trade as $pos) 
									    		<option value="{{  $pos->id}}" @if(in_array($pos->id, $settingpos)) selected="" @endif >{{  $pos->name}}</option> 
									    	@endforeach
								    </select> 
								</div>  
							</div> 
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box border-all-radius" style="margin-bottom: 15px;">
						<div class="box-header with-border">
							<span class="box-title"><b>What location interst you ?</b></span>
						</div> 
						<div class="row tab-pane" style="margin-top: 10px;" id="TabCareerInfo" name="Location">
							<div class="col-xs-12 col-sm-12 col-md-12">

								{{-- <input type="text" placeholder="Location" id="location" class="form-control" name="locationid" size="12" > --}}
						 
								<div class="col-xs-8 col-sm-8 col-md-12">
								    <select name="location[]" class="form-control selectpicker" data-live-search="true" multiple>
								    	@foreach ($location as $loc) 
								    	<option value="{{  $loc->id}}" @if(in_array($loc->id, $settinglocid)) selected="" @endif >{{ str_limit($loc->name,20) }}</option> 
						    			@endforeach   
								    </select> 
								</div>  
							</div> 
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="box border-all-radius" style="margin-bottom: 15px;">
						<div class="box-header with-border">
							<span class="box-title"><b>What type of job are you considering</b></span>
						</div>
						<div class="row">
							@foreach ($typejob as $tj)
								{{-- <option value="{{ $tj->id }}">{!! $es->name !!}</option> --}}
								<div class="col-xs-6 col-sm-6 col-md-4">
								<label class="input-checkbox">
				                  <p>{!! $tj->name !!}</p>
				                  <input type="checkbox" name="typejob[]" value="{{ $tj->id }}" @if(in_array($tj->id, $type)) checked="" @endif>
				                  <span class="checkmark border-all-radius"></span>
				                </label>
							</div> 
							@endforeach   
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="box border-all-radius" style="margin-bottom: 15px;">
						<div class="box-header with-border">
							<span class="box-title"><b>Would you be willing to relocate</b></span>
						</div>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-4">
								<label class="input-checkbox">
				                  <p>Yes</p>
				                  <input type="radio" name="jobrelocate" value="1"  {{ $setting->jobrelocate == '1' ? 'checked' : '' }}>
				                  <span class="checkmark border-all-radius"></span>
				                </label>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4">
								<label class="input-checkbox">
				                  <p>No</p>
				                  <input type="radio" name="jobrelocate" value="0" {{ $setting->jobrelocate == '0' ? 'checked' : '' }}>
				                  <span class="checkmark border-all-radius"></span>
				                </label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<button class="btn bg-yellow" type="button" onclick="setting(this)">Save setting</button>
					{{-- <button class="btn bg-yellow" type="submit">Save setting</button> --}}
				</div>
				</form>
			</div>
		</div>
	</div>
@endsection 
@section('script')  
	<script src="{{asset('bootstrap-tagsinput-latest/dist/bootstrap-tagsinput.min.js')}}"></script>
	<!-- Type aheaed -->
	<script src="{{ asset('/js/typeahead/dist/typeahead.bundle.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/js/typeahead/dist/bloodhound.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('dashboard_assets/css/selectize.js') }}" type="text/javascript"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		    var elt = $('#location'); 
			var location = new Bloodhound({
			      datumTokenizer: Bloodhound.tokenizers.obj.whitespace('id'),
			      queryTokenizer: Bloodhound.tokenizers.whitespace,
			      remote: {
			            url: '{!!url("/")!!}' + '/api/find?keyword=%QUERY%',
			            wildcard: '%QUERY%',                
			      }
			});
			location.initialize(); 

			var elt = $('#position'); 
			var position = new Bloodhound({
			      datumTokenizer: Bloodhound.tokenizers.obj.whitespace('id'),
			      queryTokenizer: Bloodhound.tokenizers.whitespace,
			      remote: {
			            url: '{!!url("/")!!}' + '/api/findjob?keyword=%QUERY%',
			            wildcard: '%QUERY%',                
			      }
			});
			position.initialize();

			$('#location').tagsinput({
			      itemValue : 'id',
			      itemText  : 'name',
			      maxChars: 10,
			      trimValue: true,
			      allowDuplicates : false,   
			      freeInput: false,
			      focusClass: 'form-control',
			      tagClass: function(item) {
			          if(item.name)
			             return 'btn bg-blue-dark yellow label-' + item.name;
			          else
			              return 'btn bg-blue-dark yellow';

			      },
			      onTagExists: function(item, $tag) {
			          $tag.hide().fadeIn();
			      },
			      typeaheadjs: [{
			                hint: false,
			                        highlight: true
			                    },
			                    {
			                    name: 'location',
			                    itemValue: 'id',
			                    displayKey: 'name',
			                    source: location.ttAdapter(),
			                    templates: {
			                        empty: [
			                            '<ul class="list-group"><li class="list-group-item">Nothing found.</li></ul>'
			                        ],
			                        header: [
			                            '<ul class="list-group">'
			                        ],
			                        suggestion: function (data) {
			                            return '<li class="list-group-item">' + data.name + '</li>'
			                        }
			                    }
			        }]         
			});	  

			$('#position').tagsinput({
			      itemValue : 'id',
			      itemText  : 'name',
			      maxChars: 10,
			      trimValue: true,
			      allowDuplicates : false,   
			      freeInput: false,
			      focusClass: 'form-control',
			      tagClass: function(item) {
			          if(item.name)
			             return 'btn bg-blue-dark yellow label-' + item.name;
			          else
			              return 'btn bg-blue-dark yellow';

			      },
			      onTagExists: function(item, $tag) {
			          $tag.hide().fadeIn();
			      },
			      typeaheadjs: [{
			                hint: false,
			                        highlight: true
			                    },
			                    {
			                    name: 'position',
			                    itemValue: 'id',
			                    displayKey: 'name',
			                    source: position.ttAdapter(),
			                    templates: {
			                        empty: [
			                            '<ul class="list-group"><li class="list-group-item">Nothing found.</li></ul>'
			                        ],
			                        header: [
			                            '<ul class="list-group">'
			                        ],
			                        suggestion: function (data) {
			                            return '<li class="list-group-item">' + data.name + '</li>'
			                        }
			                    }
			        }]         
			});	    
		}); 
		
		function setting(i) { 
	        	form = $('#form-setting').serialize();
	        	console.log(form);
	        	// return false;
		            $.ajax({
		                type: 'POST',
		                url: "{{ route('jobsetting_save') }}",
		                data:form,
		                success: function(data) {  
		                    if ((data.errors)) {
		                         
		                    } else {
		                        alert('success');
		                    }
		                },
		            });
	        }
	        $('#position').selectize({
			    maxItems: 3
			});
	</script>
@endsection
