@extends('layouts.apprec')
@section('content')
	<div class="content container-fluid">
		<div class="box border-all-radius">
			<div class="box-body">
				<div class="notification-lists">
					<div class="notification-header">
						<span>Notifications</span>
					</div>
					<div class="notification-body">
						<div class="media">
							<div class="media-left">
								<a href="#">
									<div class="media-object bg-red">
										{{Html::image('/images/icon-menu/bell.png','bell',array())}}  
										{{-- <img src="assets/images/icon-menu/bell.png" alt="bell"> --}}
									</div>
								</a>
							</div>
							<div class="media-body">
								<a href="#">
									<h5 class="media-heading">
									You Got 4 New Company Communication Messages
									</h5>
									24 Minutes ago
								</a>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#">
									<div class="media-object bg-red">
										{{Html::image('/images/icon-menu/bell.png','bell',array())}}  

										{{-- <img src="assets/images/icon-menu/bell.png" alt="bell"> --}}
									</div>
								</a>
							</div>
							<div class="media-body">
								<a href="#">
									<h5 class="media-heading">
									You Got 4 New Company Communication Messages
									</h5>
									24 Minutes ago
								</a>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#">
									<div class="media-object bg-green">
										{{Html::image('/images/icon-menu/bell.png','bell',array())}}  
										{{-- <img src="assets/images/icon-menu/bell.png" alt="bell"> --}}
									</div>
								</a>
							</div>
							<div class="media-body">
								<a href="#">
									<h5 class="media-heading">
									You Got 4 New Company Communication Messages
									</h5>
									24 Minutes ago
								</a>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#">
									<div class="media-object bg-blue">
										{{Html::image('/images/icon-menu/bell.png','bell',array())}}  

										{{-- <img src="assets/images/icon-menu/bell.png" alt="bell"> --}}
									</div>
								</a>
							</div>
							<div class="media-body">
								<a href="#">
									<h5 class="media-heading">
									You Got 4 New Company Communication Messages
									</h5>
									24 Minutes ago
								</a>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#">
									<div class="media-object bg-blue-light">
										{{Html::image('/images/icon-menu/bell.png','bell',array())}}   
										{{-- <img src="assets/images/icon-menu/bell.png" alt="bell"> --}}
									</div>
								</a>
							</div>
							<div class="media-body">
								<a href="#">
									<h5 class="media-heading">
									You Got 4 New Company Communication Messages
									</h5>
									24 Minutes ago
								</a>
							</div>
						</div>
					</div>
					<div class="notification-footer">
						<a href="#" class="btn btn-link italic">See More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection