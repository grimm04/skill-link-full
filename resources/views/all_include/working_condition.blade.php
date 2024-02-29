<div class="box margin-15" id="working-condition">
	<div class="box-header with-border">
		<span class="box-title"><b>Working Conditions</b></span>
	</div>
	<div class="box-body">
		<ul>
			@foreach ($jobs->typejob as $types)  
				<li><i class="fa fa-check label-success"></i> {{ $types->type->name }}</li>
			@endforeach 
		</ul>
		<div class="clearfix"></div>
	</div>
</div>