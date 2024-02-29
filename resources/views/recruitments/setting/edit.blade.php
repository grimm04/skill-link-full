@extends('layouts.apprec')
@section('content')
	 <div class="content container-fluid">
						<div class="row">
							<div class="col-md-10">
								<div class="box border-top-right-radius border-top-left-radius">
									<div class="box-header with-border clearfix">
										<span class="box-title pull-left">Setting</span>
										<div class="box-tool pull-right">
											<a href="#" class="btn btn-success">Save</a>
										</div>
									</div>
									<div class="box-body min-height" id="table-info">
										<table class="table table-setting setting filter">
											<tbody>
												<tr>
													<td>Headquaters</td>
													<td><a href="mailto:satriamaxt@gmail.com">wicak@skill-link.net</a></td>
												</tr>
												<tr>
													<td colspan="2">
														<input type="email" name="email" class="border-top-left-radius border-bottom-left-radius border-bottom-right-radius form-control" value="wicak@skill-link.net">
													</td>
												</tr>
												<tr>
													<td>Password</td>
													<td>********</td>
												</tr>
												<tr>
													<td colspan="2">
														<input type="password" name="password" class="border-top-left-radius border-bottom-left-radius border-bottom-right-radius form-control" value="">
													</td>
												</tr>
												<tr>
													<td>Language</td>
													<td>English</td>
												</tr>
												<tr>
													<td colspan="2">
														<select class="border-top-left-radius border-bottom-left-radius border-bottom-right-radius form-control">
															<option value="eng">English</option>
															<option value="ind">Indonesian</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>Feed Preferences</td>
													<td>Friends & Featured</td>
												</tr>
												<tr>
													<td colspan="2">
														<select class="border-top-left-radius border-bottom-left-radius border-bottom-right-radius form-control" value="wicak@skill-link.net">
															<option value="">Friends Only</option>
															<option value="">Featured Article Only</option>
															<option value="">Job Poster Only</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>Phone Number</td>
													<td>085693157705</td>
												</tr>
												<tr>
													<td colspan="2">
														<input type="text" name="phone" class="border-top-left-radius border-bottom-left-radius border-bottom-right-radius form-control" value="085693157705">
													</td>
												</tr>
												<tr>
													<td>Autoplay Videos</td>
													<td>Yes</td>
												</tr>
												<tr>
													<td colspan="2">
														<select class="border-top-left-radius border-bottom-left-radius border-bottom-right-radius form-control">
															<option value="">Yes</option>
															<option value="">No</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>Showing Profile Photo</td>
													<td>Yes</td>
												</tr>
												<tr>
													<td colspan="2">
														<select class="border-top-left-radius border-bottom-left-radius border-bottom-right-radius form-control">
															<option value="">Yes</option>
															<option value="">No</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>Sync Contacts</td>
													<td>Gmail</td>
												</tr>
												<tr>
													<td colspan="2">
														<select class="border-top-left-radius border-bottom-left-radius border-bottom-right-radius form-control">
															<option value="">Gmail</option>
															<option value="">Email</option>
															<option value="">Phone Number</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>Manage Active Status</td>
													<td>Yes</td>
												</tr>
												<tr>
													<td colspan="2">
														<select class="border-top-left-radius border-bottom-left-radius border-bottom-right-radius form-control">
															<option value="">Yes</option>
															<option value="">No</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>Profile viewing options</td>
													<td>Yes</td>
												</tr>
												<tr>
													<td colspan="2">
														<select class="border-top-left-radius border-bottom-left-radius border-bottom-right-radius form-control">
															<option value="">Yes</option>
															<option value="">No</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>Social media sharing</td>
													<td>Yes</td>
												</tr>
												<tr>
													<td colspan="2">
														<select class="border-top-left-radius border-bottom-left-radius border-bottom-right-radius form-control">
															<option value="">Yes</option>
															<option value="">No</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>Email Frequency</td>
													<td>All</td>
												</tr>
												<tr>
													<td colspan="2">
														<select class="border-top-left-radius border-bottom-left-radius border-bottom-right-radius form-control">
															<option value="">All</option>
															<option value="">Job Poster</option>
															<option value="">Messages</option>
															<option value="">Invitation</option>
															<option value="">Networks Updates</option>
															<option value="">News</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>Who can send invitation</td>
													<td>Everyone</td>
												</tr>
												<tr>
													<td colspan="2">
														<select class="border-top-left-radius border-bottom-left-radius border-bottom-right-radius form-control">
															<option value="">Friends Only</option>
															<option value="">Public</option>
															<option value="">Network Only</option>
														</select>
													</td>
												</tr>
											</tbody>
										</table>
										<div class="margin-15">
											<a href="#" class="btn btn-link grey">Closing Your Account</a><br/>
											<a href="#" class="btn btn-link grey">Help</a><br/>
											<a href="#" class="btn btn-link grey">Logout</a>
										</div>
									</div>
								</div>
							</div>
						</div>
	 </div>
@endsection