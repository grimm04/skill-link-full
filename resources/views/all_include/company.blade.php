
<div class="col-md-5">
	<div class="box bg-yellow">
		<br>
	</div>
	<div class="box">
		<div class="branch-img min-height">
			@if (count($companies->avatar) == 0)
				<div class="thumbnail img-user img-user-small" style="width: 180px !important; height: 180px !important; border: none;">
				<h1 style="color: #fff;" class="media-object">{{ mb_substr($companies->name ,0,1)}}</h1>
				</div>  
			@else  
				<img src="{{ asset('companies/avatars/'.$companies->avatar) }}" alt="" class="media-object" style="width: 180px; height: 180px;border-radius: 50%;">
			@endif     
			{{-- <img src="{{ asset('companies/avatars/'.$companies->avatar) }}" alt=""> --}}
			<div class="branch-check branch-img-status">
				<img src="{{ asset('dashboard_assets/images/check.png') }}" alt="">
			</div><br><br>
			<div class="branch-title">
				<h3><b>{{ $companies->name }}</b></h3>
				<h3>{{ $companies->typecompany->name }} | @foreach ($companies->companyindustry as $index => $ind)
								@if($index == 1)
							        &
							    @endif
								{{ $ind->industry->name }} 
							 @endforeach </h3>
				<h4>{{ $companies->locations->name }}, {{ $companies->locations->country }}</h4><br>
				<br><br>
			</div>
		</div>
	</div>
</div>