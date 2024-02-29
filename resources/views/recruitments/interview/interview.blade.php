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
						{{Html::image('images/women.png')}}  
						{{-- <img src="assets/images/women.png" alt=""> --}}
						<div class="branch-star branch-img-status">
							{{Html::image('images/star.png')}}  
							{{-- <img src="assets/images/star-green.png" alt=""> --}}
						</div>
						<div class="branch-check branch-img-status">
							{{Html::image('images/check.png')}}   
							{{-- <img src="assets/images/check.png" alt=""> --}}
						</div><br><br>
						<div class="branch-title">
							<h3><b>Rini Aviani</b></h3>
							<h3>Engineer</h3>
							<h4>101Labit Center Jakarta</h4>
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
						</table><br>
						<a href="#" class="btn btn-primary">Schedule Interview</a>
						<a href="#" class="btn btn-primary">Send Message</a>
						<a href="#" class="btn btn-success">Hire</a>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="box border-all-radius margin-15">
					<div class="box">
						<div class="margin-15">
							<div class="info-load">
								<div class="info-load-header">
									<span class="italic pull-left">Pools</span>
									<div class="info-tool pull-right">
										<div class="margin-15-responsive">
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
									<div class="clearfix"></div>
								</div>
								<div class="info-load-body" style="padding: 0">
									<div class="table-responsive">
										<table class="table center">
											<thead>
												<tr>
													<th>Name</th>
													<th>Trade</th>
													<th>Level</th>
													<th>Work Status</th>
													<th>Location</th>
													<th>Hire Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Jack Herald</td>
													<td>Pipefilter</td>
													<td>Journeyman</td>
													<td>
														<i class="fa fa-2x fa-star green"></i>
													</td>
													<td>BC</td>
													<td class="green">Hired</td>
												</tr>
												<tr>
													<td>Jack Herald</td>
													<td>Pipefilter</td>
													<td>Journeyman</td>
													<td>
														<i class="fa fa-2x fa-star green"></i>
													</td>
													<td>AB</td>
													<td class="green">Hired</td>
												</tr>
												<tr>
													<td>Jack Herald</td>
													<td>Pipefilter</td>
													<td>Journeyman</td>
													<td>
														<i class="fa fa-2x fa-star red"></i>
													</td>
													<td>AB</td>
													<td class="red">Hired</td>
												</tr>
												<tr>
													<td>Jack Herald</td>
													<td>Pipefilter</td>
													<td>Journeyman</td>
													<td>
														<i class="fa fa-2x fa-star orange"></i>
													</td>
													<td>SK</td>
													<td class="orange">Hired</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<center>
							<ul class="pagination margin-15">
								<li><a href="#">&laquo;</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">&raquo;</a></li>
							</ul>
							<button class="btn btn-link btn-block">411 Results</button>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection