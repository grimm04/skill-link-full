@extends('dashboard_layouts.appsearch')
@section('title') 	
	<title>Advance Search - Skill Link </title>
@endsection  
@section('content')  
<div class="row">
	<div class="col-md-6">
		<div class="box-search bg-yellow margin-15 search-responsive">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="media">
						<div class="row">
							<div class="col-xs-8 col-sm-8 col-md-10">
								<div class="navbar-sl-responsive-2 media-left-2"   style="margin-top: 10px;">
									<ul class="navbar-search">
										<li class="btn-sm btn-search active"><a data-toggle="tab" class="btn-search-2" href="#all">All</a></li>
										<li class="btn-sm btn-search"><a data-toggle="tab" class="btn-search-2" href="#profile">Profile</a></li>
										<li class="btn-sm btn-search"><a data-toggle="tab" class="btn-search-2" href="#jobs">Jobs</a></li>
										<li class="btn-sm btn-search"><a data-toggle="tab" class="btn-search-2" href="#companies">Companies</a></li>
										<li class="btn-sm btn-search"><a data-toggle="tab" class="btn-search-2" href="#group">Group</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-2">
								<div class="media-right-2">
									<a href="#" class="btn btn-primary btn-user btn-sm bg-yellow">
										<i class="fa fa-gear blue-dark" style="font-size: 30px;margin-top: 5px;">	
										</i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="tab-content">
			<div class="box border-top-left-radius border-top-right-radius margin-15 tab-pane fade in active"  id="all">
				<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;margin-top:5px;">
				@if (isset($queryprofile)) 
					@foreach ($queryprofile as $profile)
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="media">
									<div class="row">
										<div class="col-xs-8 col-sm-8 col-md-10">
											<div class="media-left">
												<a href="{{ route('profile_about') }}" class="grey">
												@if (count($profile->photo) == 0)
													<div class="thumbnail img-user img-user-small" style="width: 80px !important; height: 80px !important; border: none;">
													<h2 style="color: #fff;" class="media-object">{{ mb_substr($profile->fname ,0,1)}}{{ mb_substr($profile->mdname ,0,1)}}{{ mb_substr($profile->lname ,0,1)}}</h2>
													</div>  
												@else  
													<img src="{{ asset('avatar/'.$profile->photo) }}" alt="" class="media-object" style="width: 80px; height: 80px;border-radius: 50%;">
												@endif  
												</a> 
											</div>
											<div class="media-body">
												<a href="{{ route('profile_about') }}" class="grey">
													<h5 class="media-heading-1">{{ $profile->fname }} {{ $profile->lname }}</h5>
													<i>{{ $profile->provinces }}, {{ $profile->country }}</i><br />
													<span>{{ $profile->follower}} Followers</span>
												</a>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-2">
											<div class="media-right-2">
												@if (in_array($profile->id, $folowid))
												@else 
													<button class="btn btn-primary btn-user btn-sm bg-yellow" type="button" data-id="{!! $profile->id !!}" style="margin-top: 20px;" id="follow"  onclick="follow(this)"><i class="fa fa-user-plus"></i></button>
												@endif 
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> 
						<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;margin-top:5px;">
					@endforeach  
				@endif
				@if (isset($queryjobs))
					@foreach ($queryjobs as $job)
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="media">
									<div class="row">
										<div class="col-xs-8 col-sm-8 col-md-10">
											<div class="media-left">
												<a href="{{ route('job_detail',$job->id) }}" class="grey">
												@if (count($job->avatar) == 0)
													<div class="thumbnail img-user img-user-small" style="width: 80px !important; height: 80px !important; border: none;">
													<h2 style="color: #fff;" class="media-object">{{ mb_substr($job->company ,0,1)}}</h2>
													</div>  
												@else  
													<img src="{{ asset('companies/avatars/'.$job->avatar) }}" alt="" class="media-object" style="width: 80px; height: 80px;border-radius: 50%;">
												@endif  
												</a>  
											</div>
											<div class="media-body">
												<a href="{{ route('job_detail',$job->id) }}" class="grey"> 
													<h5 class="media-heading-1">{{ $job->name}}</h5>
													<span>{{$job->company}}, {{$job->typecompany}}|@foreach ($industri as $key => $indus)
													    @if ($indus->companyid == $job->companyid) 
													    	@if($key >= 1),@endif {{ $indus->industry->name }}
													        @continue
													    @endif  
													@endforeach
														 </span><br />
													<i>{{$job->provinces}}, {{$job->country}} | {{ \Carbon\Carbon::parse($job->created_at)->diffForHumans() }}</i>
												</a>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-2">
											<div class="media-right-2">
												<a href="{{ route('job_detail',$job->id) }}" class="btn btn-primary btn-sm bg-yellow">Details
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;margin-top:5px;">
					@endforeach
				@endif 
				@if (isset($querycompanies))
					@foreach ($querycompanies as $company)
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="media">
									<div class="row">
										<div class="col-xs-8 col-sm-8 col-md-10">
											<div class="media-left">
												<a href="{{ route('job_profile', array('id' => $company->id, 'slug'=> $company->slug)) }}" class="grey">
												@if (count($company->avatar) == 0)
													<div class="thumbnail img-user img-user-small" style="width: 80px !important; height: 80px !important; border: none;">
													<h2 style="color: #fff;" class="media-object">{{ mb_substr($company->name ,0,1)}}</h2>
													</div>  
												@else  
													<img src="{{ asset('companies/avatars/'.$company->avatar) }}" alt="" class="media-object" style="width: 80px; height: 80px;border-radius: 50%;">
												@endif  
												</a>  
											</div>
											<div class="media-body">
												<a href="{{ route('job_profile', array('id' => $company->id, 'slug'=> $company->slug)) }}" class="grey">
													<h5 class="media-heading-1">{{ $company->name}}</h5>
													<span>{{$company->typecompany}} | |@foreach ($industri as $key => $indus)
													    @if ($indus->companyid == $company->id) 
													    	@if($key >= 1),@endif {{ $indus->industry->name }}
													        @continue
													    @endif  
													@endforeach </span><br />
													<i>{{$company->province}}, {{$company->country}}</i>
												</a>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-2">
											<div class="media-right-2">
												<a href="{{ route('job_profile', array('id' => $company->id, 'slug'=> $company->slug)) }}" class="btn btn-primary btn-sm bg-yellow">Details
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> 
						<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;margin-top:5px;">
					@endforeach  
				@endif  
				@if (isset($querygroup))
					@foreach ($querygroup as $group)
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="media">
									<div class="row">
										<div class="col-xs-8 col-sm-8 col-md-10">
											<div class="media-left">
												<a href="{{ route('group', $group->ref_number) }}" class="grey">
												@if (count($group->group_image) == 0)
													<div class="thumbnail img-user img-user-small" style="width: 80px !important; height: 80px !important; border: none;">
													<h2 style="color: #fff;" class="media-object">{{ mb_substr($group->group_name ,0,1)}}</h2>
													</div>  
												@else  
													<img src="{{ asset('group_image/'.$group->group_image) }}" alt="" class="media-object" style="width: 80px; height: 80px;border-radius: 50%;">
												@endif  
												</a>   
											</div>
											<div class="media-body">
												<a href="{{ route('group', $group->ref_number) }}" class="grey">
													<h5 class="media-heading-1">{{$group->group_name}}</h5>
													<span>{{$group->type}} </span><br />
													<i>{{$group->location}}</i>
												</a>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-2">
											<div class="media-right-2">
												@if (!in_array($group->id, $groupid))
													@if ($group->typeid ==1)
														<button class="btn btn-primary btn-sm bg-yellow" id="private" data-id="{!! $group->id !!}"  onclick="joingroup(this)">Request Join</button>
													@else 
														<button class="btn btn-primary btn-sm bg-yellow" id="public" data-id="{!! $group->id !!}"  onclick="joingroup(this)">Join</button>
													@endif
												@else
													<a href="{{ route('group', $group->ref_number) }}" class="btn btn-primary btn-sm bg-yellow">Details</a>
												@endif 
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;margin-top:5px;">
					@endforeach 
				@endif 
				<div class="clearfix"></div>
			</div>
			<div class="box border-top-left-radius border-top-right-radius margin-15 tab-pane fade" id="profile" >
				<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;margin-top:5px;">
				@if (isset($queryprofile)) 
					@foreach ($queryprofile as $profile)
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="media">
									<div class="row">
										<div class="col-xs-8 col-sm-8 col-md-10">
											<div class="media-left">
												<a href="{{ route('profile_about') }}" class="grey">
												@if (count($profile->photo) == 0)
													<div class="thumbnail img-user img-user-small" style="width: 80px !important; height: 80px !important; border: none;">
													<h2 style="color: #fff;" class="media-object">{{ mb_substr($profile->fname ,0,1)}}{{ mb_substr($profile->mdname ,0,1)}}{{ mb_substr($profile->lname ,0,1)}}</h2>
													</div>  
												@else  
													<img src="{{ asset('avatar/'.$profile->photo) }}" alt="" class="media-object" style="width: 80px; height: 80px;border-radius: 50%;">
												@endif  
												</a> 
											</div>
											<div class="media-body">
												<a href="{{ route('profile_about') }}" class="grey">
													<h5 class="media-heading-1">{{ $profile->fname }} {{ $profile->lname }}</h5>
													<i>{{ $profile->provinces }}, {{ $profile->country }}</i><br />
													<span>{{ $profile->follower}} Followers</span>
												</a>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-2">
											<div class="media-right-2">
												@if (in_array($profile->id, $folowid))
												@else 
													<button class="btn btn-primary btn-user btn-sm bg-yellow" type="button" data-id="{!! $profile->id !!}" style="margin-top: 20px;" id="follow"  onclick="follow(this)"><i class="fa fa-user-plus"></i></button>
												@endif
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> 
						<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;margin-top:5px;">
					@endforeach  
				@endif
				@if (!isset($queryprofile))
					<p>Not Found</p>
				@endif
				<div class="clearfix"></div>
			</div>
			<div class="box border-top-left-radius border-top-right-radius margin-15 tab-pane fade"  id="jobs">
				<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;margin-top:5px;">
				@if (isset($queryjobs))
					@foreach ($queryjobs as $job)
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="media">
									<div class="row">
										<div class="col-xs-8 col-sm-8 col-md-10">
											<div class="media-left">
												<a href="{{ route('job_detail',$job->id) }}" class="grey">
												@if (count($job->avatar) == 0)
													<div class="thumbnail img-user img-user-small" style="width: 80px !important; height: 80px !important; border: none;">
													<h2 style="color: #fff;" class="media-object">{{ mb_substr($job->company ,0,1)}}</h2>
													</div>  
												@else  
													<img src="{{ asset('companies/avatars/'.$job->avatar) }}" alt="" class="media-object" style="width: 80px; height: 80px;border-radius: 50%;">
												@endif  
												</a>  
											</div>
											<div class="media-body">
												<a href="{{ route('job_detail',$job->id) }}" class="grey"> 
													<h5 class="media-heading-1">{{ $job->name}}</h5>
													<span>{{$job->company}}, {{$job->typecompany}}|@foreach ($industri as $key => $indus)
													    @if ($indus->companyid == $job->companyid) 
													    	@if($key >= 1),@endif {{ $indus->industry->name }}
													        @continue
													    @endif  
													@endforeach
														 </span><br />
													<i>{{$job->provinces}}, {{$job->country}}</i>
												</a>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-2">
											<div class="media-right-2">
												<a href="{{ route('job_detail',$job->id) }}" class="btn btn-primary btn-sm bg-yellow">Details
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;margin-top:5px;">
					@endforeach 
				@endif  
				<div class="clearfix"></div>
			</div>
			<div class="box border-top-left-radius border-top-right-radius margin-15 tab-pane fade"  id="companies">
				<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;margin-top:5px;">
				@if (isset($querycompanies))
					@foreach ($querycompanies as $company)
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="media">
									<div class="row">
										<div class="col-xs-8 col-sm-8 col-md-10">
											<div class="media-left">
												<a href="{{ route('job_profile', array('id' => $company->id, 'slug'=> $company->slug)) }}" class="grey">
												@if (count($company->avatar) == 0)
													<div class="thumbnail img-user img-user-small" style="width: 80px !important; height: 80px !important; border: none;">
													<h2 style="color: #fff;" class="media-object">{{ mb_substr($company->name ,0,1)}}</h2>
													</div>  
												@else  
													<img src="{{ asset('companies/avatars/'.$company->avatar) }}" alt="" class="media-object" style="width: 80px; height: 80px;border-radius: 50%;">
												@endif  
												</a>  
											</div>
											<div class="media-body">
												<a href="{{ route('job_profile', array('id' => $company->id, 'slug'=> $company->slug)) }}" class="grey">
													<h5 class="media-heading-1">{{ $company->name}}</h5>
													<span>{{$company->typecompany}} | |@foreach ($industri as $key => $indus)
													    @if ($indus->companyid == $company->id) 
													    	@if($key >= 1),@endif {{ $indus->industry->name }}
													        @continue
													    @endif  
													@endforeach </span><br />
													<i>{{$company->province}}, {{$company->country}}</i>
												</a>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-2">
											<div class="media-right-2">
												<a href="{{ route('job_profile', array('id' => $company->id, 'slug'=> $company->slug)) }}" class="btn btn-primary btn-sm bg-yellow">Details
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> 
						<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;margin-top:5px;">
					@endforeach  
				@endif  
				<div class="clearfix"></div>
			</div>
			<div class="box border-top-left-radius border-top-right-radius margin-15 tab-pane fade"  id="group">
				<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;margin-top:5px;"> 
				@if (isset($querygroup))
					@foreach ($querygroup as $group)
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="media">
									<div class="row">
										<div class="col-xs-8 col-sm-8 col-md-10">
											<div class="media-left">
												<a href="{{ route('group', $group->ref_number) }}" class="grey">
												@if (count($group->group_image) == 0)
													<div class="thumbnail img-user img-user-small" style="width: 80px !important; height: 80px !important; border: none;">
													<h2 style="color: #fff;" class="media-object">{{ mb_substr($group->group_name ,0,1)}}</h2>
													</div>  
												@else  
													<img src="{{ asset('group_image/'.$group->group_image) }}" alt="" class="media-object" style="width: 80px; height: 80px;border-radius: 50%;">
												@endif  
												</a>   
											</div>
											<div class="media-body">
												<a href="{{ route('group', $group->ref_number) }}" class="grey">
													<h5 class="media-heading-1">{{$group->group_name}}</h5>
													<span>{{$group->type}} </span><br />
													<i>{{$group->location}}</i>
												</a>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-2">
											<div class="media-right-2">
												@if (!in_array($group->id, $groupid))
													@if ($group->typeid ==1)
														<button class="btn btn-primary btn-sm bg-yellow" id="private" data-id="{!! $group->id !!}"  onclick="joingroup(this)">Request Join</button>
													@else 
														<button class="btn btn-primary btn-sm bg-yellow" id="public" data-id="{!! $group->id !!}"  onclick="joingroup(this)">Join</button>
													@endif
												@else
													<a href="{{ route('group', $group->ref_number) }}" class="btn btn-primary btn-sm bg-yellow">Details</a>
												@endif 
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;margin-top:5px;">
					@endforeach 
				@endif 
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="col-md-3 search-responsive">
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
	                  	<input type="checkbox" value="interest" onclick="profilesearch(this);" id="interest" @if (count($profilesearchsetting)!= 0) @if($profilesearchsetting->interest == 1) checked="" @endif @endif>
	                  	<span class="checkmark border-all-radius"></span> 
	               	</label>
               	</div>
			    <div class=" bg-blue-dark yellow" style="border-bottom: 1px solid #fff;padding: 5px 5px 0px 20px;">
			      	<label class="input-checkbox">
	                  	<p>Same Location</p>
	                  	<input type="checkbox" value="location" onclick="profilesearch(this);" id="location" @if (count($profilesearchsetting)!= 0) @if($profilesearchsetting->location == 1) checked="" @endif @endif>
	                  	<span class="checkmark border-all-radius"></span>
	               	</label>
               	</div>
			    <div class=" bg-blue-dark yellow" style="border-bottom: 1px solid #fff;padding: 5px 5px 0px 20px;">
			      	<label class="input-checkbox">
	                  	<p>Same Company</p>
	                  	<input type="checkbox" value="company" onclick="profilesearch(this);"  id="company" @if (count($profilesearchsetting)!= 0)  @if($profilesearchsetting->company == 1) checked="" @endif @endif>
	                  	<span class="checkmark border-all-radius"></span>
	               	</label>
               	</div>
			    <div class=" bg-blue-dark yellow" style="border-bottom: 1px solid #fff;padding: 5px 5px 0px 20px;">
			      	<label class="input-checkbox">
	                  	<p>Same Industries</p>
	                  	<input type="checkbox" value="industries" onclick="profilesearch(this);"  id="industries" @if (count($profilesearchsetting)!= 0) @if($profilesearchsetting->industries == 1) checked="" @endif @endif>
	                  	<span class="checkmark border-all-radius"></span>
	               	</label>
               	</div>
               	<div class=" bg-blue-dark yellow" style="border-bottom: 1px solid #fff;padding: 5px 5px 0px 20px;">
			      	<label class="input-checkbox">
	                  	<p>Same School</p>
	                  	<input type="checkbox" value="school" onclick="profilesearch(this);"  id="school" @if (count($profilesearchsetting)!= 0)  @if($profilesearchsetting->school == 1) checked="" @endif @endif>
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
				                  <input type="radio" name="posteid" value="{{ $pos->id }}" onclick="postedtime(this)" id="posteid" @if (count($profilesearchsetting)!= 0) @if($pos->id== $jobsearchsetting->postedtimeid) checked="" @endif  @endif >
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
				</div>
		      </div>
		    </div>
		</div>
	</div>
		@include('dashboard_layouts.right')
</div>
@endsection 
@section('script')
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
	<script type="text/javascript">
	//	function settingsearch(i){
			// alert('tes');

	//	}

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

		 function joingroup(i) {
			id = $(i).data('id');   
			var kelas = $(i).attr('id'); 
			if(kelas == 'public'){ 
				var type ='public';
			}else if(kelas == 'private') { 
				var type ='private';
			} 
			$.ajax({
                type: 'POST',
                url: "{{ route('join_group') }}",
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': id,
                    'type': type
                },
                success: function(data) {  
                    if (data.errors == true) {
	                        setTimeout(function () { 
	                            toastr.error('You already sent Invitation!', {timeOut: 1000});
	                        }, 500);  
	                } else {
	                	if(data.type == 'public'){
	                		toastr.success('Join Group success', {timeOut: 5000}); 
	                		location.reload(); 
	                	}else {
	                		toastr.success('Request Join Group success', {timeOut: 5000}); 
	                	} 
                        
	                }
                },
            });  
		} 	    
	</script>
@endsection 