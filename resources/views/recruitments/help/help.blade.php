@extends('layouts.apprec')
@section('content')
	<div class="content container-fluid">
		<div class="box border-all-radius margin-15">
			<div class="box-header with-border">
				<span class="box-title">Chat bot</span>
			</div>
			<div class="box-body">
				<div class="chat-body">
					<div class="media">
					  <div class="media-left">
					    <a href="#">
						 {{Html::image('images/kbr.png','KBR',array('class'=>'media-object','style'=>'width: 60px; height: 60px;'))}} 
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
						 {{Html::image('images/women.png','women',array())}}  
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
	</div>
@endsection