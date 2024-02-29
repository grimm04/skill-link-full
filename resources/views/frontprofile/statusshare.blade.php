<div class="alert bg-orange" id="myAlert" style="padding: 10px 10px 5px 10px;">
    <div class="row">
    	<div class="col-xs-8 col-sm-9 col-md-11">
    		<p style="margin-top: 5px;">Share Profile Change</p>
    	</div>
    	<div class="col-xs-4 col-sm-3 col-md-1">
    		<label class="switch">
			  <input type="checkbox" id="status_share"  value="{{ Auth::user()->status_share }}" name="status_share" class="switch-input" {{ Auth::user()->status_share == '1' ? 'checked' : '' }}>
			  <span class="slider round"></span>
			</label>
    	</div>
    </div>
</div>