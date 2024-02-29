@extends('layouts.apprec')
@section('content')
    <div class="content container-fluid">
		<div class="box border-all-radius">
			<div class="box-header with-border">
				<span class="box-title pull-left">Interview
				</span>
				<div class="pull-right">
					<a href="#" class="btn btn-primary" style="margin-right: 40px;">Add Interview</a>
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
				<div class="clearfix"></div>
			</div>
			<div class="box-body">
				<form action="" class="filter margin-15">
					<div class="row">
						<div class="col-md-offset-1 col-md-11">
							<div class="row">
								<div class="col-sm-9">
									<div class="col-sm-3">
										<div class="form-group">
											<input type="text" placeholder="Location" name="location" class="form-control">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<input type="text" placeholder="Trade" name="trade" class="form-control">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<input type="text" placeholder="Level" class="form-control" name="level">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<input type="text" placeholder="Safety Ticket" class="form-control" name="satety-ticket">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<input type="text" placeholder="Experience" name="experience" class="form-control">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<input type="text" placeholder="Multi Ticketed" name="multi-ticketed" class="form-control">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<input type="text" placeholder="Position Held" class="form-control" name="position-held">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<input type="text" placeholder="Work Status" class="form-control" name="work-status">
										</div>
									</div>
								</div>
								<div class="col-sm-3 margin-15">
									<div class="form-group">
										<button class="btn btn-primary">Filter</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form><br>
				<div class="row">
					<div class="col-md-5">
						<div class="box bg-blue-light">
							<br>
						</div>
						<div class="box">
							<div class="branch-img min-height">
								{{Html::image('images/women.png')}}  
								{{-- <img src="assets/images/women.png" alt=""> --}}
								<div class="branch-star branch-img-status">
								    {{-- {{Html::image('images/star-green.png')}}  --}} 
								</div>
								<div class="branch-check branch-img-status">
								    {{Html::image('images/check.png')}}   
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
						<div class="box border-bottom-right-radius bg-grey">
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
								<a href="#" class="btn btn-primary margin-15">Schedule Interview</a>
								<a href="#" class="btn btn-primary margin-15">Send Message</a>
								<a href="#" class="btn btn-success margin-15">Hire</a>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="box">
							<div class="margin-15">
								<div class="info-load">
									<div class="info-load-header">
										<span class="italic pull-left">List of interview</span>
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
													<tr class="active">
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
	</div>
@endsection