<div class="row">
	<div class="col-md-9">
		<div class="box border-all-radius" style="margin-bottom: 15px;">
			<div class="box-header with-border">
				<span class="box-title"><b>Other Jobs From {{$jobs->company->name}}</b></span>
			</div>
			<div class="row">
				@foreach ($other as $other)   
					<div class="col-xs-6 col-md-6 margin-15">
							<div class=" box-job">
								<div class="row">
									<div class="col-md-4">
										<div class="job-list-img"> 
											<img src="{{ asset('jobs/'.$other->image) }}" alt="">  
										</div>
									</div>
									<div class="col-md-7"> 
										<h5>{{ $other->name }}</h5>
										<p style="font-size: 12px;">{{ $other->company->name }}, {{ $other->company->typecompany->name }} | @foreach ($other->company->companyindustry as $key => $spe)
											@if($key >= 1),@endif {{ $spe->industry->name }}
										@endforeach</P> 
										<a href="{{ route('job_detail',$other->id) }}" class="btn btn-warning">Details</a>
									</div>
								</div>
							</div>
						</div>
				@endforeach 
			</div><br>
			<div style="text-align: center;">
				<a href="{{ route('job_others',$jobs->company->slug) }}" class="blue-dark">See All Job</a>
			</div>
		</div>
	</div>
</div>