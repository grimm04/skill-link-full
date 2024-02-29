<form action="{{ route('search') }}" method="GET" id="search"> 
	{!! csrf_field() !!}
	<div class="input-group">
		<span class="input-group-btn">
			<button class="btn btn-default" type="submit"><img src="{{ asset('dashboard_assets/images/icon/search.png') }}" alt=""></button>
		</span>
		<input type="text" name="search" class="form-control" placeholder="Advance Search">
	</div>
</form>