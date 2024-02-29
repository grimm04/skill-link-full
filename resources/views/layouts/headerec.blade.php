<header class="header">
	<div class="logo">
		{{Html::image('images/logo3.png')}}

		{{-- <img src="images/logo3.png" alt=""> --}}
	</div>
	<form action="" class="search-form">
		<div class="input-group">
			<span class="input-group-btn">
				<button class="btn btn-default" data-target="#menu">
				<i class="fa fa-navicon"></i>
				</button>
			</span>
			<span class="input-group-btn"> 
				<button class="btn btn-default">{{Html::image('images/icon-menu/search.png')}}</button>
			</span>
			<input type="text" class="form-control" placeholder="Advance Search">
		</div>
		<div class="clearfix"></div>
	</form>
	<div class="clearfix"></div>
</header>