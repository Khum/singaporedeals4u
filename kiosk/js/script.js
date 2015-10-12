// JavaScript Document
(function ($){
	$(document).ready(function(e) {
       $('form').submit(function (){
		  var _input = $(this) .find('.is_required');
		  var form = $(this);
		  var error = false;
		  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		  
		  $.each(_input, function (){
			 if ($(this).val() == '')
			 {
				 $(this).css({border: '1px solid red'});
				 error = true;
			 }else if ($(this).hasClass('email') && !emailReg.test($(this).val()) )
				 {
					 $(this).css({border: '1px solid red'});
				    error = true;
				 }else{
					 $(this).css({border: '1px solid red #ccc'});
				 	 } 
			 });
			 
			if(!error){
				$('#wait_loading').show();
				var dataObj = $(this).serialize();
				
				$.post('./mail.php', {action: 'sendmail', dataObj:dataObj}, function (data){
				$("div.error").html(data);
				$("div.error").show();	
				$('#wait_loading').hide();
				form.find("input[type='text']").val('');
					});
				}else{
					return  false;
				}
		  return  false;
		 });
		  
	  $('form').find('.is_required').click(function (){
		  $(this).css({border: '1px solid #ccc'});
		  });
	});
})(jQuery)