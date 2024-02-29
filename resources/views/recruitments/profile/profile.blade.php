@extends('layouts.apprec')
@section('content') 
	<div class="content container-fluid">
					<div class="row">
						<div class="col-md-5">
							<div class="box border-top-left-radius bg-blue-light">
								<br>
							</div>
							<div class="box">
								<div class="branch-img min-height">
									{{Html::image('images/kbr.png')}} 
									{{-- <img src="images/kbr.png" alt=""> --}}
									<div class="branch-star branch-img-status">
										{{-- <img src="images/star.png" alt=""> --}}
										{{Html::image('images/star.png')}}  
									</div>
									<div class="branch-check branch-img-status">
										{{Html::image('images/check.png')}}   
										{{-- <img src="images/check.png" alt=""> --}}
									</div><br><br>
									<div class="branch-title">
										<h3><b>KBR</b></h3>
										<h3>Head Recruiter</h3>
										<h4>Antonio Hall</h4>
									</div>
								</div><br><br> 
							</div>
						</div>
						<div class="col-md-7">
							<div class="box border-top-right-radius border-bottom-right-radius margin-15-responsive">
								<div class="box-header with-border">
									<span class="box-title">Running Campaigns</span>
									<div>
										<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
											<i class="fa fa-gear"></i>
										</a>
										<ul class="dropdown-menu right">
											<li>
												<a href="#">Set As Completed</a>
												<a href="#">Delete Campaign</a>
												<a href="#">Print Report</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="box-body min-height" id="table-info">
									<table class="table">
										<tbody>
											<tr>
												<td>Headquaters</td>
												<td><b>Houston, Texas, United States</b></td>
											</tr>
											<tr>
												<td>C.E.O</td>
												<td><b>Stuart Bradie(jun 2, 2014-)</b></td>
											</tr>
											<tr>
												<td>Year Founded</td>
												<td><b>1919</b></td>
											</tr>
											<tr>
												<td>Company Type</td>
												<td><b>Public Company</b></td>
											</tr>
											<tr>
												<td>Company Size</td>
												<td><b>10,001+ employee</b></td>
											</tr>
											<tr>
												<td>Website</td>
												<td><b><a href="" class="grey">http://www.kbr.com</a></b></td>
											</tr>
											<tr>
												<td>Social Network</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="box margin-15 border-top-right-radius border-bottom-right-radius">
								<div class="box-header with-border">
									<span class="box-title">Running Campaigns</span>
									<div>
										<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
											<i class="fa fa-gear"></i>
										</a>
										<ul class="dropdown-menu right">
											<li>
												<a href="#">Set As Completed</a>
												<a href="#">Delete Campaign</a>
												<a href="#">Print Report</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="box-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quas quidem ullam fugiat sint repudiandae ea laborum eum! Repellendus delectus numquam labore quibusdam sed voluptatibus illum, neque maxime ipsam suscipit.</p>
								</div>
								<span class="box-title">About The Company</span>
								<div class="box-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quas quidem ullam fugiat sint repudiandae ea laborum eum! Repellendus delectus numquam labore quibusdam sed voluptatibus illum, neque maxime ipsam suscipit.</p>
									<hr>
									<a href="" class="btn btn-link btn-block grey ">View more <i class="fa fa-angle-down"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="box margin-15 border-top-right-radius border-bottom-right-radius border-bottom-left-radius">
								<div class="box-header with-border">
									<span class="box-title">Active Jobs</span>
									<div>
										<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
											<i class="fa fa-gear"></i>
										</a>
										<ul class="dropdown-menu right">
											<li>
												<a href="#">Set As Completed</a>
												<a href="#">Delete Campaign</a>
												<a href="#">Print Report</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="box-body">
									<div class="row">
										<div class="col-md-4 col-sm-6">
											<div class="media">
												<div class="media-left">
								   					{{Html::image('images/kbr.png','bell',array('class'=>'media-object','style'=>'width: 80px; height: 80px;'))}} 
													{{-- <img src="assets/images/kbr.png" alt="bell" class="media-object" style="width: 80px; height: 80px"> --}}
												</div>
												<div class="media-body">
													<a href="#" class="grey">
														<h5 class="media-heading">KBR</h5>
														Fort Hills job #123 <br />
														Jun 16 - Dec 20
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6">
											<div class="media">
												<div class="media-left">
								   					{{Html::image('images/kbr.png','bell',array('class'=>'media-object','style'=>'width: 80px; height: 80px;'))}}  
													{{-- <img src="assets/images/kbr.png" alt="bell" class="media-object" style="width: 80px; height: 80px"> --}}
												</div>
												<div class="media-body">
													<a href="#" class="grey">
														<h5 class="media-heading">KBR</h5>
														Fort Hills job #123 <br />
														Jun 16 - Dec 20
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6">
											<div class="media">
												<div class="media-left">
								   					{{Html::image('images/kbr.png','bell',array('class'=>'media-object','style'=>'width: 80px; height: 80px;'))}}  
													
													{{-- <img src="assets/images/kbr.png" alt="bell" class="media-object" style="width: 80px; height: 80px"> --}}
												</div>
												<div class="media-body">
													<a href="#" class="grey">
														<h5 class="media-heading">KBR</h5>
														Fort Hills job #123 <br />
														Jun 16 - Dec 20
													</a>
												</div>
											</div>
										</div>
									</div>
									<hr />
								</div>
							</div>
						</div>
					</div>
				</div>
@endsection