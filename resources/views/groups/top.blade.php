<div class="alert bg-orange alert-dismissible popup-ticket" id="myAlert">
    <a href="#" class="close" style="color: #fff;opacity: 1;">&times;</a>
    <a href="#" style="color: #fff;">Update your Ticket now</a>
</div>
<div class="row">
	<div class="col-md-5">
		<div class="box bg-yellow">
			<br>
		</div>
		<div class="box">
			<div class="branch-img min-height">
				<img src="{{ asset('dashboard_assets/images/kbr.png') }}" alt="">
				<div class="branch-check branch-img-status">
					<img src="{{ asset('dashboard_assets/images/check.png') }}" alt="">
				</div><br><br>
				<div class="branch-title">
					<h3><b>KBR</b></h3>
					<h3>Open Group</h3>
					<h4>Antonio Hall</h4><br>
					<br><br>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box margin-15-responsive">
			<div class="box-header with-border">
				<span class="box-title"><b>Company Info</b></span>
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
				<br /><br /><br/>
			</div>
		</div>
	</div>
</div><br>
<div class="row">
	<div class="col-md-5">
		<div class="box comment-field border-all-radius">
			<textarea name="status" rows="5" class="form-control" placeholder="Share an article, photo, or update"></textarea>
			<div class="clearfix">
				<div class="pull-left">
					<div class="image-upload">
						<input class="btn btn-default" type="file">
						<button class="btn bg-yellow">
							<i class="fa fa-fw fa-image"></i> Images
						</button>
					</div>
				</div>
				<div class="pull-left">
					<div class="image-upload">
						<input class="btn btn-default" type="file">
						<button class="btn bg-yellow">
							<i class="fa fa-fw fa-film"></i> Video
						</button>
					</div>
				</div>
				<div class="pull-right">
					<button class="btn bg-blue-dark" style="padding: 6px 20px;margin-top: 8px;color: #fff;">Post</button>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box border-all-radius margin-15-responsive">
			<div class="box-header clearfix">
				<span class="bold grey pull-left">Group Member</span>
				<a href="#" class="btn btn-link pull-right yellow">View All</a>
			</div>
			<div class="box-body people-gallery">
				<div class="row">
					<div class="col-xs-4 col-sm-6 col-md-4">
						<div class="thumbnail margin-15">
							<img src="{{ asset('dashboard_assets/images/2.jpg') }}" alt="">
						</div>
						<a href="#" class="btn btn-primary btn-user btn-sm bg-yellow"><i class="fa fa-user-plus"></i></a>
					</div>
					<div class="col-xs-4 col-sm-6 col-md-4">
						<div class="thumbnail margin-15">
							<img src="{{ asset('dashboard_assets/images/2.jpg') }}" alt="">
						</div>
						<a href="#" class="btn btn-primary btn-user btn-sm bg-yellow"><i class="fa fa-user-plus"></i></a>
					</div>
					<div class="col-xs-4 col-sm-6 col-md-4">
						<div class="thumbnail margin-15">
							<img src="{{ asset('dashboard_assets/images/2.jpg') }}" alt="">
						</div>
						<a href="#" class="btn btn-primary btn-user btn-sm bg-yellow"><i class="fa fa-user-plus"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>