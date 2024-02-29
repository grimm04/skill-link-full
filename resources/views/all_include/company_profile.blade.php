<div class="col-md-4">
	<div class="box margin-15-responsive">
		<div class="box-header with-border">
			<span class="box-title"><b>Company Description</b></span>
			<div>
				<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
					<i class="fa fa-gear"></i>
				</a>
{{-- 				<ul class="dropdown-menu right">
					<li>
						<a href="#">Set As Completed</a>
						<a href="#">Delete Campaign</a>
						<a href="#">Print Report</a>
					</li>
				</ul> --}}
			</div>
		</div>
		<div class="box-body min-height" id="table-info">
			<table class="table">
				<tbody>
					<tr>
						<td>Specialities</td>
						<td><b>@foreach ($companies->companyspeciality as $key => $cs)
									@if($key >= 1),@endif {{ $cs->speciality->name }} 
							    @endforeach
							</b>
						</td>
					</tr>
					<tr>
						<td>Headquarters</td>
						<td><b>{{ $companies->headquarters->name }}, {{ $companies->headquarters->country }}</b></td>
					</tr> 
					<tr>
						<td>Company Size</td>
						<td><b>{{ number_format($companies->company_size, 0) }}+ employee</b></td>
					</tr>
					<tr>
						<td>Website</td>
						<td><b><a href="http://{{ $companies->website }}" class="grey" target="_blank">{{ $companies->website }}</a></b></td>
					</tr>
					<tr>
						<td>Industry</td>
						<td><b> 
							@foreach ($companies->companyindustry as $index => $ind)
								@if($index == 1)
							        &
							    @endif
								{{ $ind->industry->name }} 
							 @endforeach
							</b>
						</td>
					</tr> 
					<tr>
						<td>Founded</td>
						<td><b>{{ Carbon\Carbon::parse($companies->founded)->format('Y') }}</b></td>
					</tr> 
					<tr>
						<td>Type</td>
						<td><b>{{ $companies->type }} </b></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><b>{{ $companies->email }} </b></td>
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