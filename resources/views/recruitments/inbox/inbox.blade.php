@extends('layouts.apprec')
@section('content')
		<div class="content container-fluid">
				<div class="box border-all-radius">
					<div class="box-header with-border">
						<span class="box-title pull-left">Company Communications</span>
						<div class="pull-right" style="position: relative;">
							<a href="#" class="btn btn-primary" style="margin-right: 40px;">Add Group</a>
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
						<div class="margin-15">
							<div class="media">
							  <div class="media-left">
							    <a href="#">
								 {{Html::image('images/kbr.png','KBR',array('class'=>'media-object','style'=>'width: 80px; height: 80px;'))}}

							      {{-- <img class="media-object" style="width: 80px; height: 80px;" src="assets/images/kbr.png" alt="KBR"> --}}
							    </a>
							  </div>
							  <div class="media-body">
							    <h5 class="media-heading">KBR - Management Team</h5>
							    <p>21 Hours ago</p>
							  </div>
							</div>
							<div class="media">
							  <div class="media-left">
							    <a href="#">
								 {{Html::image('images/kbr.png','KBR',array('class'=>'media-object','style'=>'width: 80px; height: 80px;'))}}

							      {{-- <img class="media-object" style="width: 80px; height: 80px;" src="assets/images/kbr.png" alt="KBR"> --}}
							    </a>
							  </div>
							  <div class="media-body">
							    <h5 class="media-heading">KBR - Management Team</h5>
							    <p>21 Hours ago</p>
							  </div>
							</div>
						</div>
					</div>
				</div>
				<div class="box border-all-radius margin-15">
					<div class="box-header with-border">
						<span class="box-title">My Inbox</span>
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
						<div class="margin-15 media-offset">
							<div class="media">
							  <div class="media-left">
							    <a href="#">
								 {{Html::image('images/women.png','KBR',array('class'=>'media-object','style'=>'width: 80px; height: 80px;'))}}

							      {{-- <img class="media-object" style="width: 80px; height: 80px;" src="assets/images/women.png" alt="KBR"> --}}
							    </a>
							  </div>
							  <div class="media-body">
							    <h5 class="media-heading">Jane Doe - Aplied for Job #123</h5>
							    <p>
									<span class="italic">"Good Day Widya"</span><br />
									21 Hours ago
							    </p>
							  </div>
							</div>
							<div class="media">
							  <div class="media-left">
							    <a href="#">
								 {{Html::image('images/women.png','KBR',array('class'=>'media-object','style'=>'width: 80px; height: 80px;'))}}

							      {{-- <img class="media-object" style="width: 80px; height: 80px;" src="assets/images/women.png" alt="KBR"> --}}
							    </a>
							  </div>
							  <div class="media-body">
							    <h5 class="media-heading">Jane Doe - Aplied for Job #123</h5>
							    <p>
									<span class="italic">"Good Day Widya"</span><br />
									21 Hours ago 
							    </p>
							  </div>
							</div>
						</div>
					</div>
				</div>
				<div class="box border-all-radius margin-15">
					<div class="box-header with-border">
						<span class="box-title">Jane Doe
							<span style="margin-left: 30px;display: inline-block">"Good Day Widya"</span>
						</span>
						<a href="#" class="btn-setting">
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
						</a>
					</div>
					<div class="box-body">
						<div class="chat-body">
							<div class="media right">
							  <div class="media-left">
							    <a href="#">
								 {{Html::image('images/kbr.png','KBR',array('class'=>'media-object','style'=>'width: 80px; height: 80px;'))}}
							    	
							      {{-- <img class="media-object" style="width: 80px; height: 80px;" src="assets/images/kbr.png" alt="KBR"> --}}
							    </a>
							  </div>
							  <div class="media-body">
							  	<div class="chat-ms-info clearfix">
									<a href="#">KBR Hiring Management</a>
								</div>
							    <div class="chat-ms-message">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam commodi, possimus dolorum earum, praesentium voluptates expedita accusamus exercitationem laborum maxime necessitatibus doloremque voluptatem! Mollitia reiciendis omnis doloribus odio non ab? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit architecto molestiae placeat, ullam, earum magnam possimus enim blanditiis. Ea repellat necessitatibus, minima impedit explicabo, architecto velit numquam enim doloribus ab.
								</div>
							  </div>
							  <div class="media-right">
							  	<span class="media-object" style="width: 150px">8/9/15 2:47 PM</span>
							  </div>
							</div>
						</div>
						<div class="chat-form margin-15 clearfix">
							<div class="chat-img">
								<img src="assets/images/women.png" alt="women">
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
		</div>
@endsection