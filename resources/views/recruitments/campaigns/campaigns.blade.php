@extends('layouts.apprec')
@section('content')
		<div class="content container-fluid">
			<div class="box border-all-radius">
				<div class="box-header with-border">
					<span class="box-title pull-left">Running Campaigns
						<span class="box-subtitle">List of available campaigns</span>
					</span>
					<div class="pull-right" style="position: relative;">
						<a class="btn btn-primary" data-toggle="modal" href='#add-campaign' style="margin-right: 40px;">Add Capaign</a>
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
				<div class="clearfix"></div>
				<div class="box-body">
					<div class="row">
						<div class="col-lg-4">
							<div class="thumbnail info-thumbnail">
								 {{Html::image('images/building.png')}}  
							</div>
						</div>
						<div class="col-lg-8">
							<h2 class="italic" style="margin-bottom: 20px;">Job #123 Fort Hills</h2>
							<div class="row info-load-wrapper">
								<div class="col-md-8 margin-bottom-15">
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
								<div class="col-md-4 margin-bottom-15">
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
								<div class="col-md-8">
									<div class="info-load">
										<div class="row">
											<div class="col-sm-7">
												<div class="info-load-header italic border-bottom-right-radius">
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
								<div class="col-md-4">
									<button class="btn btn-warning btn-lg btn-block btn-semi-block">Applicants</button>
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
									<div class="margin-15">
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
			<div class="box border-all-radius margin-15">
				<div class="box-header with-border">
					<span class="box-title">Management Communications</span>
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
					<div class="chat-body">
						<div class="media">
						  <div class="media-left">
						    <a href="#">
							 {{Html::image('images/kbr.png','KBR',array('class'=>'media-object','style'=>'width: 60px; height: 60px;'))}} 
						      {{-- <img class="media-object" style="width: 60px; height: 60px;" src="assets/images/kbr.png" alt="KBR"> --}}
						    </a>
						  </div>
						  <div class="media-body">
						  	<div class="chat-ms-info clearfix">
								<a href="#">KBR Hiring Management</a>
							</div>
						    <div class="chat-ms-message">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							</div>
							<div class="chat-ms-message no">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							</div>
						  </div>
						  <div class="media-right">
						  	<span class="media-object" style="width: 150px">8/9/15 2:47 PM</span>
						  </div>
						</div>
						<div class="media right">
						  <div class="media-left">
						    <a href="#">
						      <div class="media-object" style="width: 80px; height: 80px;"></div>
						    </a>
						  </div>
						  <div class="media-body">
						    <div class="chat-ms-message">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							</div>
							<div class="chat-ms-message no">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							</div>
							<div class="chat-ms-message no">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							</div>
							<div class="chat-ms-message no">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							</div>
						  </div>
						  <div class="media-right">
						  	<span class="media-object" style="width: 150px">8/9/15 2:47 PM</span>
						  </div>
						</div>
					</div>
					<div class="chat-form margin-15 clearfix">
						<div class="chat-img">
							 {{Html::image('images/women.png','Women',array())}} 
							{{-- <img src="assets/images/women.png" alt="women"> --}}
						</div>
						<div class="input-group">
					      <input type="text" class="form-control" placeholder="Search for...">
					      <span class="input-group-btn">
					        <button class="btn btn-default" type="button">Send</button>
					      </span>
					    </div>
					</div>
				</div>
			</div>
			<div class="box border-all-radius margin-15">
				<div class="box-body">
					<form action="" class="filter">
						<div class="row">
							<div class="col-md-offset-2 col-md-8">
								<div class="row">
									<div class="col-sm-5">
										<div class="form-group">
											<input type="text" placeholder="Name" class="form-control">
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group">
											<input type="text" placeholder="Code" class="form-control">
										</div>
									</div>
									<div class="col-sm-2">
										<div class="form-group">
											<button class="btn btn-primary">Filter</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Name</th>
									<th>Code</th>
									<th>Candidates</th>
									<th>Created</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Hotel- Sandiego</td>
									<td>23453</td>
									<td>7</td>
									<td>2/24/16 09:28 AM</td>
								</tr>
								<tr>
									<td>Hotel- Sandiego</td>
									<td>23453</td>
									<td>7</td>
									<td>2/24/16 09:28 AM</td>
								</tr>
								<tr>
									<td>Hotel- Sandiego</td>
									<td>23453</td>
									<td>7</td>
									<td>2/24/16 09:28 AM</td>
								</tr>
								<tr>
									<td>Hotel- Sandiego</td>
									<td>23453</td>
									<td>7</td>
									<td>2/24/16 09:28 AM</td>
								</tr>
							</tbody>
						</table>
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
@include('recruitments.modals.campaignmodal')
@section('script')
 	{{Html::script('js/select-beauty.js')}}   
	<script> 
			var beauty = new SelectBeauty({
				el: '#work-condition',
				placeholder: 'Select Condition',
				length: 2
			});
		</script>
@endsection
