@extends('dashboard_layouts.app2')
@section('title') 	
	<title>{!! $group->group_name !!} - Skill Link </title>
@endsection
@section('top')  
<div class="row">
	<div class="col-md-5">
		<div class="box bg-yellow">
			<br>
		</div>
		<div class="box">
			<div class="branch-img min-height">
				<img src="{{ asset('dashboard_assets/images/kbr.png') }}" alt="">
				<div class="branch-check branch-img-status">
					<img src="{{ asset('dashboard_assets/images/check.png') }}" alt="">
				</div><br><br>
				<div class="branch-title">
					<h3><b>{!! $group->group_name !!}</b></h3>
					<h3>{!! $group->type->type_name !!}</h3>
					<h4>{!! $group->location !!}</h4><br>
					@if ($cek_join == 1)
						<br><br> 
						@else
						@if ($group->type->id == 1)
							<a href="" class="btn btn-warning">Request To Join</a>
						@elseif($group->type->id == 2)
							<a href="" class="btn btn-warning">Join Group</a>
						@endif 
					@endif
					
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box margin-15-responsive">
			<div class="box-header with-border">
				<span class="box-title"><b>Company Info</b></span>
				<div>
					<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
						<i class="fa fa-gear"></i>
					</a>
					<ul class="dropdown-menu right">
						<li>
							<a href="#">Edit</a> 
						</li>
					</ul>
				</div>
			</div>
			<div class="box-body min-height" id="table-info">
				<table class="table">
					<tbody>
						<tr>
							<td>Headquaters</td>
							<td><b>{!! $group->location !!}</b></td>
						</tr>
						<tr>
							<td>C.E.O</td>
							<td><b>{!! $group->user->fname !!} {!! $group->user->lname !!} </b></td>
						</tr>
						<tr>
							<td>Year Founded</td>
							<td><b>{!! Carbon\Carbon::parse($group->created_at)->format('d F Y')!!}</b></td>
						</tr>
						<tr>
							<td>Company Type</td>
							<td><b>{!! $group->type->type_name !!}</b></td>
						</tr>
						<tr>
							<td>Company Size</td>
							<td><b>@if ($group->company_size != 0)
								{!! $group->company_size !!}+ employee
								@else
								-
							@endif</b></td>
						</tr>
						<tr>
							<td>Website</td>
							<td><b><a href="" class="grey">@if ($group->website != null)
								{!! $group->website !!}
							@endif</a></b></td>
						</tr>
						<tr>
							<td>Social Network</td>
						</tr>
					</tbody>
				</table>
				<br /><br /><br/>
			</div>
		</div>
	</div>
</div><br>
@endsection 
@section('right') 	
	@include('dashboard_layouts.right')
@endsection
@section('content')  
	<div class="col-md-9"><br><br>
		@foreach ($group->member as $member)
			<div class="col-md-4">
				<div class="box margin-15-responsive" style="margin-bottom: 60px;">
					<div class="branch-img min-height">
						@if ($member->users->photo == null)
							<div class="thumbnail margin-15 img-user img-user-small" style="width: 200px !important; height: 200px !important; border: none;">
								<h1 style="color: #fff;" >{{ mb_substr($member->users->fname ,0,1)}}{{ mb_substr($member->users->mdname ,0,1)}}{{ mb_substr($member->users->lname ,0,1)}}</h1>
							</div> 
						@else 
							<img src="{{ asset('avatar/'.$member->users->photo) }}" >
						@endif     
						<div class="branch-check branch-img-status">
							<img src="{{ asset('dashboard_assets/images/check.png') }}" alt="">
						</div><br><br>
						<div class="branch-title">
							<h3><b>{!! $member->users->fname !!} {!! $member->users->lname !!}</b></h3> 
							{{-- <h3>Head Recruiter</h3> --}}
							@if (count($member->level) != 0)
								<h5><b>{{ ucfirst($member->level->level_name) }}</b></h5><br>
							@endif
							@if (count($member->users->province) != 0)
								<h4>{{ $member->users->province->name }}, {{ $member->users->province->country }}</h4><br>
							@endif
							@if ($member->userid != Auth::user()->id) 
								<a data-id="{!! $member->userid !!}" style="margin-top: 20px;" onclick="return follow(this);" class="btn btn-warning">Add Friend</a>
							@endif
						</div>
					</div>
				</div>
			</div> 
		@endforeach 
	</div>
@endsection
@section('script')  
	
@endsection