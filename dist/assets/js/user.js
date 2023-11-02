	$("#profile_frm").on("submit",function(e){
		
		e.preventDefault();
		
		var valid = true;
		
		if($("#full_name").val() == "")
		{
			valid = false;
			$("#full_name_error").css("display","block").html("Required Field.");
		}
		else{
			$("#full_name_error").css("display","none").html("");
		}

		if($("#email").val() == "")
		{
			valid = false;
			$("#email_error").css("display","block").html("Required Field.");
		}
		else{
			$("#email_error").css("display","none").html("");
		}

		if($("#old_pass").val() == "")
		{
			valid = false;
			$("#old_error").css("display","block").html("Required Field.");
		}
		else{
			$("#old_error").css("display","none").html("");
		}
		if($("#new_pass").val() == "")
		{
			valid = false;
			$("#new_error").css("display","block").html("Required Field.");
		}
		else{
			$("#new_error").css("display","none").html("");
		}
		if($("#confirm_pass").val() == "")
		{
			valid = false;
			$("#confirm_error").css("display","block").html("Required Field.");
		}
		else{
			$("#confirm_error").css("display","none").html("");
		}


		var new_pass= $("#new_pass").val();
		var confirm_pass= $("#confirm_pass").val();
		
		if(new_pass!=confirm_pass){
			valid = false;
			$("#passerror").html("Password does not match.");
		}
		else{
			$("#passerror").html("");
		}
		
		var data = new FormData($('#profile_frm').get(0));

		if(valid){
			$.ajax({
				url: base_url + "admin/user-exe.php",
				type: 'POST',
				dataType:'json',
				data : data,
				success: function(res) {
					var code = res.code;
					if (code == 200) {
						$("#old_pass_error").html("");
						$("#passerror").html("");
						$("#old_pass").val("");
						$("#new_pass").val("");
						$("#confirm_pass").val("");
						Swal.fire(
						  'Success',
						  res.msg,
						  'success'
						).then((result) => {
	                   		 window.location.href=base_url+'admin/profile.php'; 
	                 	 });	
					}
					else{
						Swal.fire(
						  'Error',
						  res.msg,
						  'error'
						)
					}
				},
				cache: false,
			    contentType: false,
			    processData: false
			});
		}
	})