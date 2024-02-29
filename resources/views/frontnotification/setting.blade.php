@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>Visited My Profile | Skill Link </title>
@endsection 
@section('header')  
	@include('dashboard_layouts.headermenu')   
	<header class="header-responsive">
		<div class="container-fluid">
			<div class="back-responsive">
				<a onclick="goBack()"> 
					<img src="{{ asset('dashboard_assets/images/icon/left.png') }}" alt="">
				</a>
			</div>
			<div class="navbar-sl">
				<h4 class="yellow" style="margin:15px 15px;">Notification Setting</h4>
			</div>
			 
		</div>
</header> 
@endsection 
@section('content')   
	<div class="row">
		<div class="col-md-9">
			<div class="accordion panel-group" id="accordion">
		        <div class="panel panel-default">
		          <div class="panel-heading active">
		            <h4 class="panel-title">
		              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
		              	<i class="more-less fa fa-angle-up"></i>
		                <b>Invitations & Message</b>
		              </a>
		            </h4>
		          </div><!-- /.panel-heading -->
		          <div id="collapseOne" class="panel-collapse collapse in">
		            <div class="panel-body">
		              	<label class="input-checkbox">
		                  	<p>Career advice matches</p>
		                  	<input type="checkbox">
		                  	<span class="checkmark border-all-radius"></span>
		               	</label>
		               	<label class="input-checkbox">
		                  	<p>Career advice recomendations</p>
		                  	<input type="checkbox">
		                  	<span class="checkmark border-all-radius"></span>
		               	</label>
		               	<label class="input-checkbox">
		                  	<p>Career advice request</p>
		                  	<input type="checkbox">
		                  	<span class="checkmark border-all-radius"></span>
		               	</label>
		               	<label class="input-checkbox">
		                  	<p>Main reminders</p>
		                  	<input type="checkbox">
		                  	<span class="checkmark border-all-radius"></span>
		               	</label>
		               	<label class="input-checkbox">
		                  	<p>Where you left off in address book import</p>
		                  	<input type="checkbox">
		                  	<span class="checkmark border-all-radius"></span>
		               	</label>
		            </div>
		          </div><!-- /#collapseOne -->
		        </div>
		        <div class="panel panel-default">
		          <div class="panel-heading">
		            <h4 class="panel-title">
		              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
		              	<i class="more-less fa fa-angle-down"></i>
		                <b>Job and opportunities</b>
		              </a>
		            </h4>
		          </div><!-- /.panel-heading -->
		          <div id="collapseTwo" class="panel-collapse collapse">
		            <div class="panel-body">
		              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
		            </div><!-- /.panel-body -->
		          </div><!-- /#collapseThree -->
		        </div>
		        <div class="panel panel-default">
		          <div class="panel-heading">
		            <h4 class="panel-title">
		              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
		              	<i class="more-less fa fa-angle-down"></i>
		                <b>News & Articels</b>
		              </a>
		            </h4>
		          </div><!-- /.panel-heading -->
		          <div id="collapseThree" class="panel-collapse collapse">
		            <div class="panel-body">
		              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
		            </div><!-- /.panel-body -->
		          </div><!-- /#collapseFour -->
		        </div>
		        <div class="panel panel-default">
		          <div class="panel-heading">
		            <h4 class="panel-title">
		              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
		              	<i class="more-less fa fa-angle-down"></i>
		                <b>Updates about you</b>
		              </a>
		            </h4>
		          </div><!-- /.panel-heading -->
		          <div id="collapseFour" class="panel-collapse collapse">
		            <div class="panel-body">
		              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
		            </div><!-- /.panel-body -->
		          </div><!-- /#collapseTwo -->
		        </div>
		        <div class="panel panel-default">
		          <div class="panel-heading">
		            <h4 class="panel-title">
		              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
		              	<i class="more-less fa fa-angle-down"></i>
		                <b>Updates about your network</b>
		              </a>
		            </h4>
		          </div><!-- /.panel-heading -->
		          <div id="collapseFive" class="panel-collapse collapse">
		            <div class="panel-body">
		              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
		            </div><!-- /.panel-body -->
		          </div><!-- /#collapseTwo -->
		        </div>
		        <div class="panel panel-default">
		          <div class="panel-heading">
		            <h4 class="panel-title">
		              <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
		              	<i class="more-less fa fa-angle-down"></i>
		                <b>Updates about your</b>
		              </a>
		            </h4>
		          </div><!-- /.panel-heading -->
		          <div id="collapseSix" class="panel-collapse collapse">
		            <div class="panel-body">
		              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
		            </div><!-- /.panel-body -->
		          </div><!-- /#collapseTwo -->
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
@endsection

@section('script')  
@endsection
