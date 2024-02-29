	<div class="main-wrapper search-responsive" style="">
				<div class="row">
					<div class="col-md-5">
						<div class="box-body dashboard-info">
							<div class="row">
								<div class="col-md-6" style="margin-bottom: 10px;">
									<a href="{{ route('profile_edit') }}">
									<div class="box">
										<div class="row">
											<div class="col-xs-9 col-sm-9 col-md-9"> 
												@if (count(Auth::user()->status) != 0)
													<p class="blue-dark bold" style="font-size: 15px;padding-top: 7px;">{{ Auth::user()->status->name }}</p>
												@endif
											</div>
											<div class="col-md-3">
												<i class="fa fa-gear yellow" style="font-size: 30px;margin-top: 5px;"></i>
											</div>
										</div>
									</div>
									</a>
								</div>
								<div class="col-md-6" style="margin-bottom: 10px;">
									<a href="{{ route('visitedmy') }}">
									<div class="box">
										<div class="row">
											<div class="col-xs-9 col-sm-9 col-md-9">
												<p class="blue-dark bold" style="font-size: 15px;padding-top: 7px;">who`s viewed my profile</p>
											</div>
											<div class="col-xs-3 col-sm-3 col-md-3">
												<h2>{{ $view_profile }}</h2>
											</div>
										</div>
									</div>
									</a>
								</div>
								<div class="col-md-6" style="margin-bottom: 10px;">
									<a href="{{ route('network') }}">
									<div class="box">
										<div class="row">
											<div class="col-xs-9 col-sm-9 col-md-9">
												<p class="blue-dark bold" style="font-size: 15px;padding-top: 7px;">Your Network</p>
											</div>
											<div class="col-xs-3 col-sm-3 col-md-3">
												<h2>{{ $network }}</h2>
											</div>
										</div>
									</div>
									</a>
								</div>
								<div class="col-md-6" style="margin-bottom: 10px;">
									<a href="{{ route('search') }}">
									<div class="box">
										<div class="row">
											<div class="col-xs-9 col-sm-9 col-md-9">
												<p class="blue-dark bold" style="font-size: 15px;padding-top: 7px;">Search Appearances</p>
											</div>
											<div class="col-md-3">
												<i class="fa fa-gear yellow" style="font-size: 30px;margin-top: 5px;"></i>
											</div>
										</div>
									</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="box border-all-radius margin-15-responsive mr10">
							<div class="box-header clearfix">
								<span class="bold grey pull-left">Connect with your collegues</span>
								<a href="{{ route('following') }}" class="btn btn-link pull-right yellow">View All</a>
							</div>
							<div class="box-body people-gallery mb20"> 
								<div class="row">
									@foreach ($follow as $foll)
										@if ($foll->photo == null)
											<div class="col-xs-4 col-sm-6 col-md-3">
												<div class="thumbnail margin-15 img-user img-user-small">
													<h2 style="color: #fff;">{{ mb_substr($foll->fname ,0,1)}}{{ mb_substr($foll->mdname ,0,1)}}{{ mb_substr($foll->lname ,0,1)}}</h2>
												</div>
												<a class="btn btn-primary btn-user btn-sm bg-yellow" id="follow" data-id="{!! $foll->id !!}" onclick="follow(this)"><i class="fa fa-user-plus"></i></a>
											</div>
										@else  
											<div class="col-xs-4 col-sm-6 col-md-3">
												<div class="thumbnail margin-15 img-user img-user-small">
													<img src="{{ asset('avatar/'.$foll->photo) }}" alt="">
												</div>
												<a class="btn btn-primary btn-user btn-sm bg-yellow" id="follow" data-id="{!! $foll->id !!}" onclick="follow(this)"><i class="fa fa-user-plus"></i></a>	
											</div>
										@endif    
									@endforeach 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>