@extends('layouts.apprec')
@section('content')
	<div class="content container-fluid">
		<div class="box border-all-radius margin-15">
			<div class="box-header with-border">
				<span class="box-title pull-left">Users
				</span>
				<div class="pull-right">
					<h4 style="display: inline; margin-right: 40px;">1 of 3 seats assigned</h4>
					<div class="margin-15-responsive">
						<a href="#" class="btn btn-primary ">Add User</a>
						<a href="#" class="btn btn-primary" style="margin-right: 40px;">Import User</a>
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
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="box-body">
				<form action="" class="filter margin-15">
					<div class="row">
						<div class="col-md-offset-2 col-md-9">
							<div class="row">
								<div class="col-sm-3">
									<div class="form-group">
										<input type="text" placeholder="Username" name="username" class="form-control">
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<input type="text" placeholder="Name" name="name" class="form-control">
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<input type="text" placeholder="Phone Number" class="form-control" name="phone">
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<button class="btn btn-primary">Filter</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
				<div class="table-responsive">
					<table class="table table-lists">
						<thead>
							<tr>
								<th>Username</th>
								<th>Name</th>
								<th>Assigned<br/>Phone Number</th>
								<th>Candidates<br/>Contacted</th>
								<th>Response<br/>Rate</th>
								<th>Response<br/>Time</th>
								<th>Last Login</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>anton@kbr.com</td>
								<td>Anton Hall</td>
								<td>+1 (323) 736-4874</td>
								<td class="green">350</td>
								<td class="green">98%</td>
								<td class="green">2 Min</td>
								<td>2/24/16 09:28 AM</td>
							</tr>
							<tr>
								<td>anton@kbr.com</td>
								<td>Anton Hall</td>
								<td>+1 (323) 736-4874</td>
								<td class="green">350</td>
								<td class="green">98%</td>
								<td class="green">2 Min</td>
								<td>2/24/16 09:28 AM</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection