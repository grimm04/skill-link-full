<div class="sidebar-menu">
					<ul class="nav navbar-nav">
						<li class="{{ (Request::is('recruitment/dashboard')) ? 'active':'' }}">
							<a href="{{ route('r_dashboard') }}">
								{{Html::image('images/icon-menu/mail.png','Dashboard',array('class'=>'icon'))}} 
								{{-- <img src="images/icon-menu/mail.png" alt="dashboard" class="icon"> --}}
								Dashboard
							</a>
						</li>
						<li class="{{ (Request::is('recruitment/profile')) ? 'active':'' }}">
							<a href="{{ route('r_profile') }}">
								{{Html::image('images/icon-menu/house.png','Profile',array('class'=>'icon'))}} 
								{{-- <img src="images/icon-menu/house.png" alt="dashboard" class="icon"> --}}
								Profile
							</a>
						</li>
						<li class="{{ (Request::is('recruitment/candidates')) ? 'active':'' }}">
							<a href="{{ route('r_candidates') }}">
								{{Html::image('images/icon-menu/head.png','Candidates',array('class'=>'icon'))}}  
								{{-- <img src="images/icon-menu/head.png" alt="dashboard" class="icon"> --}}
								Candidates
							</a>
						</li>
						<li class="{{ (Request::is('recruitment/campaigns')) ? 'active':'' }}">
							<a href="{{ route('r_campaigns') }}">
								{{Html::image('images/icon-menu/bag.png','Campaigns',array('class'=>'icon'))}}  
								{{-- <img src="images/icon-menu/bag.png" alt="dashboard" class="icon"> --}}
								Campaigns
							</a>
						</li>
						<li class="{{ (Request::is('recruitment/inbox')) ? 'active':'' }}">
							<a href="{{ route('r_inbox') }}">
								{{Html::image('images/icon-menu/envelope.png','myinbox',array('class'=>'icon'))}}  

								{{-- <img src="images/icon-menu/envelope.png" alt="dashboard" class="icon"> --}}
								My Indbox
							</a>
						</li>
						<li class="{{ (Request::is('recruitment/notification')) ? 'active':'' }}">
							<a href="{{ route('r_notification') }}">
								{{Html::image('images/icon-menu/bell.png','dashboard',array('class'=>'icon'))}}  

								{{-- <img src="images/icon-menu/bell.png" alt="dashboard" class="icon"> --}}
								Notifications
							</a>
						</li>
						<li class="{{ (Request::is('recruitment/interview')) ? 'active':'' }}">
							<a href="{{ route('r_interview') }}">
								{{Html::image('images/icon-menu/id-card.png','dashboard',array('class'=>'icon'))}}  

								{{-- <img src="images/icon-menu/id-card.png" alt="dashboard" class="icon"> --}}
								Interviews
							</a>
						</li>
						<li class="{{ (Request::is('recruitment/saved')) ? 'active':'' }}">
							<a href="{{ route('r_saved') }}">
								{{Html::image('images/icon-menu/book.png','dashboard',array('class'=>'icon'))}}  

								{{-- <img src="images/icon-menu/book.png" alt="dashboard" class="icon"> --}}
								Saved
							</a>
						</li>
						<li class="{{ (Request::is('recruitment/employegrader')) ? 'active':'' }}">
							<a href="{{ route('r_employegrader') }}">
								{{Html::image('images/icon-menu/grade.png','dashboard',array('class'=>'icon'))}}  

								{{-- <img src="images/icon-menu/grade.png" alt="dashboard" class="icon"> --}}
								Employee Grader
							</a>
						</li>
						<li class="{{ (Request::is('recruitment/user')) ? 'active':'' }}">
							<a href="{{ route('r_user') }}">
								{{Html::image('images/icon-menu/people.png','dashboard',array('class'=>'icon'))}}  

								{{-- <img src="images/icon-menu/people.png" alt="dashboard" class="icon"> --}}
								User
							</a>
						</li>
						<li class="{{ (Request::is('recruitment/setting')) ? 'active':'' }}">
							<a href="{{ route('r_setting') }}">
								{{Html::image('images/icon-menu/setting.png','dashboard',array('class'=>'icon'))}}  

								{{-- <img src="images/icon-menu/setting.png" alt="dashboard" class="icon"> --}}
								Setting
							</a>
						</li>
						<li class="{{ (Request::is('recruitment/help')) ? 'active':'' }}">
							<a href="{{ route('r_help') }}">
								{{Html::image('images/icon-menu/warning.png','dashboard',array('class'=>'icon'))}}   
								{{-- <img src="images/icon-menu/warning.png" alt="dashboard" class="icon"> --}}
								Help
							</a>
						</li>
						<li>
							<a href="#">
								{{Html::image('images/icon-menu/off.png','dashboard',array('class'=>'icon'))}}  
								
								{{-- <img src="images/icon-menu/off.png" alt="dashboard" class="icon"> --}}
								Logout
							</a>
						</li>
					</ul>
				</div>