<div class="box margin-15-responsive">
	<div class="box-header with-border">
		<span class="box-title"><b>Job Description</b></span>
	</div>
	<div class="box-body">
		<p>{{ $jobs->company->name }}, {{ $jobs->company->typecompany->name }} | @foreach ($jobs->company->companyindustry as $key => $spe)
				@if($key >= 1),@endif {{ $spe->industry->name }}
			@endforeach</span> </p>
	</div>
</div> 