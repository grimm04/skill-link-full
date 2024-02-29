	<script type="text/javascript">	
		   function statuses(i) {
			   id = $(i).data('id');  
                $.ajax({
                    type: 'POST',
                    url: "{{ route('statuses') }}",
                    data: {
                        '_token': $('meta[name="_token"]').attr('content'),
                        'id': id
                    },
                    success: function(data) { 
                        if ((data.error === true)) {
		                        setTimeout(function () { 
		                            toastr.error('error!', {timeOut: 1000});
		                        }, 500);  
		                } else {  
							toastr.success('Changed', {timeOut: 5000});   
                       		location.reload();  
		                	
		                }
                    },
                }); 
			}

		    $('#search').keydown(function(e) {
				var key = e.which;
				if (key == 13) { 
					$('#search').submit(); // Submit form code
				}
			});
			 $('#searchmobile').keydown(function(e) {
				var key = e.which;
				if (key == 13) { 
					$('#searchmobile').submit(); // Submit form code
				}
			});

			function goBack() {
			   window.location.href = '{{ URL::previous() }}';  
			}
			function follow(i) { 
				id = $(i).data('id');  
	                $.ajax({
	                    type: 'POST',
	                    url: "{{ route('follow') }}",
	                    data: {
	                        '_token': $('input[name=_token]').val(),
	                        'id': id
	                    },
	                    success: function(data) { 
	                        if ((data.error === true)) {
			                        setTimeout(function () { 
			                            toastr.error('Validation error!', {timeOut: 1000});
			                        }, 500);  
			                } else {
			                	var button = $(i).attr('id');   
			                	if(button === 'network') {
									toastr.success('Added Network', {timeOut: 5000}); 
		                       		window.location.href = "{{ route('network') }}";
								} else if(button === 'follow'){
									toastr.success(data.message, {timeOut: 5000}); 
		                       		location.reload(); 
								} else {
									
								}
			                	
			                }
	                    },
	                });
			} 	
			function like(i) {
				postid = $(i).data('id'); 
                var kelas = $(i).attr('class');   
                console.log(kelas); 
                if(kelas == 'like-'+postid ){
                	console.log('like');
				    $(".like-"+postid).addClass("unlike-"+postid);
                    $(".unlike-"+postid).removeClass("like-"+postid); 
                    $('.display-like-'+postid).text(eval($('.display-like-'+postid).text()) +  1);  
				}else if(kelas == 'unlike-'+postid){ 
                    $(".unlike-"+postid).addClass("like-"+postid);
                    console.log('unlike');
                    $(".like-"+postid).removeClass("unlike-"+postid);
                    $('.display-like-'+postid).text(eval($('.display-like-'+postid).text()) -  1); 
				} else {
					console.log('TIDAK');
				}
                $.ajax({
                    type: 'POST',
                    url: "{{ route('likestatus') }}",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'ref_number': $('input[name=ref_number]').val(),
                        'postid': postid
                    },
                    success: function(data) { 
                        if(data.status === true){ 
                        }else {
                        	// alert('TIDAK');
                        }
                    },
           		 });
			} 
	       
	       $("#id_of_textbox").keyup(function(event) {
			    if (event.keyCode === 13) {
			        $("#id_of_button").click();
			    }
			});

	        $("#id_of_textbox").keyup(function(event) {
			    if (event.keyCode === 13) {
			        $("#id_of_button").click();
			    }
			});
			$(document).keypress(
			    function(event){
			     if (event.which == '13') {
			        event.preventDefault();
			      } 
			});

			function Comments(i) {
	        	id = $(i).data('id');  
	        	form = $('#form-comment-'+id).serialize();
	        	$('#comment_add-'+id).val(''); 
	        	$('#comments-'+id).prop('disabled',true); 
		            $.ajax({
		                type: 'POST',
		                url: "{{ route('comment') }}",
		                data:form,
		                success: function(data) {  
		                    if ((data.errors)) {
		                        setTimeout(function () { 
		                            toastr.error('Please fill the input!', {timeOut: 1000});
		                        }, 500);  
		                        $('#comments-'+id).prop('disabled',false); 
		                    } else {
		                        toastr.success('Successfully added Comment!', 'Success Alert', {timeOut: 5000});
		                        setTimeout(function () { 
		                            location.reload(); 
		                        }, 500);  
		                       
                    			$('#comments-'+id).prop('disabled',false); 
		                        $('.comment-'+data.id_post).focus();  
		                    }
		                },
		            });
	        }
	     

	        function hide(i) {
				id = $(i).data('id');   
	                $.ajax({
	                    type: 'POST',
	                    url: "{{ route('hide_post') }}",
	                    data: {
	                        '_token': $('input[name=_token]').val(),
	                        'id': id
	                    },
	                    success: function(data) { 
	                        if ((data.errors)) {
			                        setTimeout(function () { 
			                            toastr.error('Validation error!', {timeOut: 1000});
			                        }, 500);  
			                } else {
			                	toastr.success('Status Hide', {timeOut: 5000}); 
		                        location.reload(); 
			                }
	                    },
	                });
			} 	

			function report(i) {
				id = $(i).data('id');    
	                $.ajax({
	                    type: 'POST',
	                    url: "{{ route('report_post') }}",
	                    data: {
	                        '_token': $('input[name=_token]').val(),
	                        'id': id
	                    },
	                    success: function(data) { 
	                        if ((data.errors)) {
			                        setTimeout(function () { 
			                            toastr.error('Validation error!', {timeOut: 1000});
			                        }, 500);  
			                } else {
			                	toastr.success('Report Status Success', {timeOut: 5000}); 
		                        location.reload(); 
			                }
	                    },
	                });
			} 	

			function unfollow(i) { 
				id = $(i).data('id');   
				// console.log(id);
				// return false;
                $.ajax({
                    type: 'POST',
                    url: "{{ route('unfollow') }}",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) { 
                        if ((data.errors)) {
		                        setTimeout(function () { 
		                            toastr.error('Validation error!', {timeOut: 1000});
		                        }, 500);  
		                } else {
		                	toastr.success('Unfollow success', {timeOut: 5000}); 
	                        location.reload(); 
		                }
                    },
                });
			} 	 

			function deletenotification(i) { 
				id = $(i).data('id');   
                $.ajax({
                    type: 'POST',
                    url: "{{ route('notifdelete') }}",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) { 
                        if ((data.errors)) {
		                        setTimeout(function () { 
		                            toastr.error('Delete error!', {timeOut: 1000});
		                        }, 500);  
		                } else {
		                	toastr.success('Delete Notification  success', {timeOut: 5000}); 
	                        location.reload(); 
		                }
                    },
                });
			} 	 

			function showHide(shID) {
			    if (document.getElementById(shID)) {
			        if (document.getElementById(shID+'-show').style.display != 'inline-block') {
			            document.getElementById(shID+'-show').style.display = 'inline-block';
			            document.getElementById(shID).style.display = 'block';
			        }
			        else {
			            document.getElementById(shID+'-show').style.display = 'inline';
			            document.getElementById(shID).style.display = 'none';
			        }
			    }
			}

			 function deletepost(i) {
				id = $(i).data('id');    
	                $.ajax({
	                    type: 'POST',
	                    url: "{{ route('delete_post') }}",
	                    data: {
	                        '_token': $('input[name=_token]').val(),
	                        'id': id
	                    },
	                    success: function(data) { 
	                    	var button = $(i).attr('id');   
			                	if(button === 'detail') {
									toastr.success('Added Network', {timeOut: 5000}); 
		                       		window.location.href = "{{ route('dashboard') }}";  
								} else {
									location.reload(); 
								}
	                         
	                    },
	                });
			} 	 

		function acceptg(i) {
			id = $(i).data('id');    
                $.ajax({
                    type: 'POST',
                    url: "{{ route('acept_join') }}",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'segment': $('input[name=segment]').val(),
                        'id': id
                    },
                    success: function(data) {  
						toastr.success('Accept this request', {timeOut: 5000});  
		                window.location.href = data.group;  
						 
                    },
                });
		} 	

		function declineg(i) {
			id = $(i).data('id');    
                $.ajax({
                    type: 'POST',
                    url: "{{ route('decline_join') }}",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'segment': $('input[name=segment]').val(),
                        'id': id
                    },
                    success: function(data) {  
						toastr.success('Decline this request', {timeOut: 5000});  
		                window.location.href = data.group;  
						 
                    },
                });
		} 	 
		$('#status_share').change(function () { 
			if($('#status_share').is(':checked')){ 
		        var check = 'checked';
		        var status_share = '1';
			}else {
		        var check = 'unchecked'; 
		        var status_share = '0';
			} 
		    // alert(check); return false; 
	         $.ajax({
                type: 'POST',
                url: "{{ route('status_share') }}",
                data: {
                    '_token': $('[name="csrf_token"]').attr('content'),
                    'status_share': status_share
                },
                success: function(data) { 
                    if ((check === 'checked')) { 
	                	toastr.success('Shared Profile Change', {timeOut: 5000});  
	                } else {
	                	toastr.success('Unshared Profile Change', {timeOut: 5000});  
	                }
                },
            });
		}); 
		$('.multi-field-wrapper').each(function() {
		    var $wrapper = $('.multi-fields', this);
		    $(".add-field", $(this)).click(function(e) {
		        $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('.box-looping').val('').focus();
		    });
		    $('.multi-field .remove-field', $wrapper).click(function() {
		        if ($('.multi-field', $wrapper).length > 1)
		            $(this).parent('.multi-field').remove();
		    });
		});

		</script>