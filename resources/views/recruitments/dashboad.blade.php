@extends('layouts.apprec')
@section('content')
 	<div class="content container-fluid">
					<div class="box border-all-radius">
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
							<div class="row">
								<div class="col-sm-5">
									<h2 class="italic">Job #123 Fort Hills</h2>
								</div>
								<div class="col-sm-7">
									<div class="box-control pull-right">
										<a href="#" class="btn btn-primary">Schedulle Message</a>
										<div class="dropdown" style="display: inline-block;">
											<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn btn-primary">
												Actions
												<span class="caret"></span>
											</a>
											<ul class="dropdown-menu right">
												<li>
													<a href="#">Dropdown 1</a>
													<a href="#">Dropdown 2</a>
													<a href="#">Dropdown 3</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="row info-load-wrapper">
								<div class="col-sm-6 col-md-4 margin-bottom-15">
									<div class="info-load border-top-left-radius overhide">
										<div class="row">
											<div class="col-sm-7">
												<div class="info-load-header italic">
													Recruiter Stats
												</div>
												<div class="info-load-body">
													97% Response Rate <br />
													1.15m Avg. response time
												</div>
											</div>
											<div class="col-sm-5">
												<div class="info-load-body">
													<div class="circle" data-value="0.97" data-size="90" data-thickness="7" data-animation-start-value="0.0"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="info-load" style="padding-right: 10px;">
										<div class="info-load-header italic border-bottom-right-radius">
											Details
										</div>
										<div class="info-load-body bold">
											<ul>
												<li>
													<i class="fa fa-fw fa-envelope-o"></i>
													1582 Message Sent
												</li>
												<li>
													<i class="fa fa-fw fa-check-circle"></i>
													1242 Responses
												</li>
												<li>
													<i class="fa fa-fw fa-clock-o"></i>
													<span class="orange">20</span> Pending
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4 margin-15-responsive">
									<div class="info-load">
										<div class="row">
											<div class="col-sm-7">
												<div class="info-load-header italic border-bottom-left-radius">
													Campaign Status
												</div>
												<div class="info-load-body bold">
													75% Completion <br />
													<span class="green">1500</span>/200
												</div>
											</div>
											<div class="col-sm-5">
												<div class="info-load-body">
													<div class="circle" data-value="0.75" data-size="90" data-thickness="7" data-animation-start-value="0.0"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="margin-15">
								<div class="info-load">
									<div class="info-load-header">
										<span class="italic pull-left">Schedule Task</span>
										<div class="info-tool pull-right">
											<a href="#" class="btn btn-link" style="margin-right: 50px"><i class="fa fa-plus-circle"></i> Schedulle Task</a>
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
									<div class="info-load-body" style="padding: 0">
										<table class="table">
											<tbody>
												<tr>
													<td>
														<p><input type="checkbox" id="test1" /><label for="test1">find 10 workers with stainless tickets</label></p>
														<p><input type="checkbox" id="test2" /><label for="test2">find 10 workers with stainless tickets</label></p>
														<p><input type="checkbox" id="test3" /><label for="test3">find 10 workers with stainless tickets</label></p>
													</td>
													<td align="center" class="valign-middle">
														8/9/15 2:47 PM
													</td>
													<td align="center" class="valign-middle">
														Incomplete
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="margin-15">
								<div class="info-load">
									<div class="info-load-header">
										<span class="italic pull-left">Pools</span>
										<div class="info-tool pull-right">
											<div>
												<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
													<i class="fa fa-gear"></i>
												</a>
												<ul class="dropdown-menu right" style="margin-top: 30px;">
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
 @endsection