<script type="text/javascript">
	$(document).ready(function(){
		  var intercal = setInterval(function()
		  {
		    $.ajax({
		      url: "{{ route('message_online') }}"
		    });

		  },5000); 
		}); 
</script>