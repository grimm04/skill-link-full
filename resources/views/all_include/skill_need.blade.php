<div class="box margin-15" id="working-condition">
	<div class="box-header with-border">
		<span class="box-title"><b>Skill needed</b></span>
	</div>
	<div class="box-body">
		<ul>
			@foreach ($jobs->skill as $skill) 
				<div for="" class="label label-success">{{ $skill->skill->name }}</div>
			@endforeach 
		</ul>
		<div class="clearfix"></div>
	</div>
</div>	