@extends('layouts.apprec')
@section('content')
		<div class="content container-fluid">
			<div class="box border-all-radius">
				<div class="box-header with-border">
					<span class="box-title">Employee Grader
					</span>
				</div>
				<div class="box-body">
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
								 	    {{Html::image('images/star.png')}}  
										{{-- <img src="assets/images/star.png" alt=""> --}}
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
							<div class="box border-bottom-right-radius bg-grey">
								<div class="box-header with-border">
									<span class="box-title">Pesonal Info</span>
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
									<form action="" id="rate">
										<input type="hidden" name="rate" value="0">
										<ul class="pagination pagination-rate">
											<li><a href="#" data-value="10">A+</a></li>
											<li><a href="#" data-value="9">A</a></li>
											<li><a href="#" data-value="8">A-</a></li>
											<li><a href="#" data-value="7">B+</a></li>
											<li><a href="#" data-value="6">B</a></li>
											<li><a href="#" data-value="5">B-</a></li>
											<li><a href="#" data-value="4">C+</a></li>
											<li><a href="#" data-value="3">C</a></li>
											<li><a href="#" data-value="2">C-</a></li>
										</ul>
										<div class="form-group">
											<button class="btn btn-primary" data-trigger="rate">Rate Worker</button>
											<a href="#" class="btn btn-primary">Write Refference</a>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="box">
								<div class="margin-15">
									<div class="info-load">
										<div class="info-load-header">
											<span class="italic">Recent Ex-Employee</span>
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
															<td class="green">4/6/2016</td>
														</tr>
														<tr>
															<td>Jack Herald</td>
															<td>Pipefilter</td>
															<td>Journeyman</td>
															<td>
																<i class="fa fa-2x fa-star green"></i>
															</td>
															<td>AB</td>
															<td class="green">4/6/2016</td>
														</tr>
														<tr>
															<td>Jack Herald</td>
															<td>Pipefilter</td>
															<td>Journeyman</td>
															<td>
																<i class="fa fa-2x fa-star red"></i>
															</td>
															<td>AB</td>
															<td class="green">4/6/2016</td>
														</tr>
														<tr>
															<td>Jack Herald</td>
															<td>Pipefilter</td>
															<td>Journeyman</td>
															<td>
																<i class="fa fa-2x fa-star orange"></i>
															</td>
															<td>SK</td>
															<td class="green">4/6/2016</td>
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
@section('script')
		{{Html::script('js/rate.js')}}  
		<script>
			var rate = new Rate({
				el: '#rate',
				pagination: '#rate .pagination-rate',
				input: '#rate [name="rate"]',
				btn: '#rate [data-trigger="rate"]'
			});
		</script>
@endsection