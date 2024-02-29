@if ($cek_join == 1)
	<div class="alert bg-orange alert-dismissible popup-ticket" id="myAlert">
    <a href="#" class="close" style="color: #fff;opacity: 1;">&times;</a>
    <a href="#" style="color: #fff;">Update your Ticket now</a>
</div>
@endif  
<div class="row">
	<div class="col-md-5">
		<div class="box bg-yellow">
			<br>
		</div>
		<div class="box"> 
			<div class="branch-img min-height"> 
				@if (count($group->group_image) == 0)
					<div class="thumbnail img-user img-user-small" style="width: 120px !important; height: 120px !important; border: none;">
					<h1 style="color: #fff;" class="media-object">{{ mb_substr($group->group_name ,0,1)}}</h1>
					</div>  
				@else  
					<img src="{{ asset('group_image/'.$group->group_image) }}" alt="" class="media-object" style="width: 120px; height: 120px;border-radius: 50%;">
				@endif     
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
							<a class="btn btn-warning" id="private" data-id="{!! $group->id !!}"  onclick="joingroup(this)">Request To Join</a>
						@elseif($group->type->id == 2)
							<a class="btn btn-warning" id="public" data-id="{!! $group->id !!}"  onclick="joingroup(this)">Join Group</a>
						@endif 
					@endif 
					@if ($group->type->id == 1 && Auth::user()->id == $group->userid)
						<a href="{{ route('list_join',$group->ref_number) }}" class="btn btn-warning" id="private" >Who wants to join</a> 
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
							<td>
								<b>
								@if ($group->company_size != 0)
								{!! $group->company_size !!} + employee
								@else
								- 
								@endif
								</b>
							</td>
						</tr>
						<tr>
							<td>Website</td>
							<td><b><a href="@if ($group->website != null) {!! $group->website !!} @endif" class="grey">@if ($group->website != null) {!! $group->website !!} @endif</a></b></td>
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
@if ($cek_join == 1)
	@include('frontgroups.form_group')
@else
	@if ($group->type->id == 1)
		<br>
	@elseif($group->type->id == 2)
		@include('frontgroups.form_group')
	@endif 
@endif