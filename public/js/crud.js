
 
// ========================certification============================ 

// ========================certification============================ 
	$('.form-photo').on('submit',function(e){  
 	  e.preventDefault(); 
      var data = $(this).serialize(); 
      var url  = $(this).attr('action');  
      $.post(url,data,function(data){ 
      	 if($.isEmptyObject(data.error)){
      	 	alert();
      	 	    window.location = "access_contact";  
         }else{
        	printErrorMsg(data.error);
         } 
      });
    }); 
// ========================smsverify============================  
    $('#form-sms').on('submit',function(e){  
      $('#button-sms').prop('disabled',true); 
      e.preventDefault(); 
      var data = $(this).serialize();  
      var url  = $(this).attr('action');  
      $.post(url,data,function(data){ 
         if(data.success == true){   
              window.location = "sign-in";  
         }else if(data.success == false) {  
              setTimeout(function(){// wait for 5 secs(2)
                 location.reload(); // then reload the page.(3)
              }, 1000 );   
         }else{
           $('#button-sms').prop('disabled',false); 
          printErrorMsg(data.error);
         } 
      });
    });  
// ========================smsverify============================  
    $('#post_article').on('submit',function(e){  
      $('#post_button').prop('disabled',true); 
      e.preventDefault(); 
      var data = $(this).serialize();  
      var url  = $(this).attr('action');  
      $.post(url,data,function(data){ 
         if(data.success == true){   
              // window.location = "sign-in";  
         }else if(data.success == false) {  
              setTimeout(function(){// wait for 5 secs(2)
                 location.reload(); // then reload the page.(3)
              }, 1000 );   
         }else{
           $('#post_button').prop('disabled',false); 
          printErrorMsg(data.error);
         } 
      });
    });  
// ========================error message=========================== 
	function printErrorMsg (msg) {
		$(".print-error-msg").find("ul").html('');
		$(".print-error-msg").css('display','block');
		$.each( msg, function( key, value ) {
			$(".print-error-msg").find("ul").append('<li>'+value+'</li>');
		});
	}

