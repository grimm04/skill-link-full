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
								<div class="branch-star branch-img-status">
									{{Html::image('images/star.png')}}   
								</div>
								<div class="branch-check branch-img-status">
									{{Html::image('images/check.png')}}
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
								<br />
								<a href="#" class="btn btn-primary">Schedule Interview</a>
								<a href="#" class="btn btn-primary">Send Message</a>
								<a href="#" class="btn btn-success">Hire</a>
							</div>
						</div>
					</div>
				</div>
				<div class="box margin-15 border-top-right-radius border-bottom-right-radius">
					<div class="box-header with-border">
						<span class="box-title" style="margin-right: 30px;">Skill</span>
						<span class="label label-success">Apprentice</span>
						<span class="label label-primary">Journeyman</span>
						<span class="label label-warning">Master</span>
					</div>
					<div class="box-body">
						<div class="label-group">
							<div class="label label-success">Bricklayer</div>
							<div class="label label-success">Electrician</div>
							<div class="label label-success">Gasfitter</div>
							<div class="label label-success">Trades</div>
							<div class="label label-success">Oil</div>
							<div class="label label-success">Welder</div>
							<div class="label label-success">Soldiering</div>
							<div class="label label-success">Forging</div>
							<div class="label label-success">Plumber</div>
							<div class="label label-success">Bricklayer</div>
							<div class="label label-success">Electrician</div>
							<div class="label label-success">Gasfitter</div>
							<div class="label label-success">Trades</div>
							<div class="label label-primary">Oil</div>
							<div class="label label-primary">Welder</div>
							<div class="label label-primary">Soldiering</div>
							<div class="label label-primary">Forging</div>
							<div class="label label-primary">Plumber</div>
							<div class="label label-primary">Bricklayer</div>
							<div class="label label-primary">Electrician</div>
							<div class="label label-primary">Gasfitter</div>
							<div class="label label-warning">Trades</div>
							<div class="label label-warning">Oil</div>
							<div class="label label-warning">Welder</div>
							<div class="label label-warning">Soldiering</div>
							<div class="label label-warning">Forging</div>
							<div class="label label-warning">Plumber</div>
						</div>
						<hr />
					</div>
					<span class="box-title">Endorsements</span>
					<div class="box-body">
						<div class="endorse clearfix">
							<span class="label label-endorse">
								Occupational Health
								<span class="counter">
									<span>2</span>
								</span>
							</span>
							<div class="media">
								<div class="media-left">
									<a href="#">
										{{Html::image('images/women.png','Women',array('class'=>'media-object','style'=>'width: 25px; height: 25px;'))}}
										{{-- <img class="media-object" src="assets/images/women.png" alt="Women" style="width: 25px; height: 25px;"> --}}
									</a>
								</div>
								<div class="media-body">
									Endorsed By <span class="bold">Femmy Andriani and 2</span> other mutual connections
								</div>
							</div>
						</div>
						<div class="endorse clearfix">
							<span class="label label-endorse">
								Supervisory Skills
								<span class="counter">
									<span>2</span>
								</span>
							</span>
							<div class="media">
								<div class="media-left">
									<a href="#">
										{{Html::image('images/women.png','Women',array('class'=>'media-object','style'=>'width: 25px; height: 25px;'))}}
										{{-- <img class="media-object" src="assets/images/women.png" alt="Women" style="width: 25px; height: 25px;"> --}}
									</a>
								</div>
								<div class="media-body">
									Endorsed By <span class="bold">Femmy Andriani and 2</span> other mutual connections
								</div>
							</div>
						</div>
						<div class="endorse clearfix">
							<span class="label label-endorse">
								Construction
								<span class="counter">
									<span>2</span>
								</span>
							</span>
							<div class="media">
								<div class="media-left">
									<a href="#">
										{{Html::image('images/women.png','Women',array('class'=>'media-object','style'=>'width: 25px; height: 25px;'))}}
										{{-- <img class="media-object" src="assets/images/women.png" alt="Women" style="width: 25px; height: 25px;"> --}}
									</a>
								</div>
								<div class="media-body">
									Endorsed By <span class="bold">Femmy Andriani and 2</span> other mutual connections
								</div>
							</div>
						</div>
						<hr>
						<a href="" class="btn btn-link btn-block grey ">View more <i class="fa fa-angle-down"></i></a>
					</div>
				</div>
				<div class="box margin-15 border-top-right-radius border-bottom-right-radius border-bottom-left-radius">
					<div class="box-header with-border">
						<span class="box-title">Education</span>
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
											<h5 class="media-heading">Hessle High School</h5>
											Class of 2003 - 2007 <br />
											Exex Country
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
											<h5 class="media-heading">Northern Alberta Institution of Technology</h5>
											Class of 2007 - 2013 <br />
											Alberta, Canada
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
											<h5 class="media-heading">Northern Alberta Institution of Master Technology</h5>
											Class of 2003 - 2007 <br />
											Alberta, Canada
										</a>
									</div>
								</div>
							</div>
						</div>
						<hr />
					</div>
				</div>

				<div class="box margin-15 border-top-right-radius border-bottom-right-radius border-bottom-left-radius">
					<div class="box-header with-border">
						<span class="box-title">Employment History</span>
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
											Welder Assistant <br />
											Jan 19, 2017 - Feb 20, 2018 <br />
											Newark
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
											<h5 class="media-heading">Ledcor Group</h5>
											Welder Assistant <br />
											Jan 19, 2017 - Feb 20, 2018 <br />
											Wancouver, Canada
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
											<h5 class="media-heading">Pacific Carriers Limited</h5>
											Welder Assistant <br />
											Jan 19, 2017 - Feb 20, 2018 <br />
											Vancouver, Canada
										</a>
									</div>
								</div>
							</div>
						</div>
						<hr />
					</div>
				</div>

				<div class="box margin-15 border-all-radius">
					<div class="box-body">
						<div class="info-load">
							<div class="info-load-header">
								<span class="italic">Other Candidates</span>
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
											</tr>
											<tr>
												<td>Jack Herald</td>
												<td>Pipefilter</td>
												<td>Journeyman</td>
												<td>
													<i class="fa fa-2x fa-star green"></i>
												</td>
												<td>AB</td>
											</tr>
											<tr>
												<td>Jack Herald</td>
												<td>Pipefilter</td>
												<td>Journeyman</td>
												<td>
													<i class="fa fa-2x fa-star red"></i>
												</td>
												<td>AB</td>
											</tr>
											<tr>
												<td>Jack Herald</td>
												<td>Pipefilter</td>
												<td>Journeyman</td>
												<td>
													<i class="fa fa-2x fa-star orange"></i>
												</td>
												<td>SK</td>
											</tr>
										</tbody>
									</table>
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
