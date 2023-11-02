$("#company_frm").on("submit",function(e){
	e.preventDefault();
    tinymce.triggerSave();

	$.ajax({
        url: base_url+'admin/comapny-exe.php',
        data : $('#company_frm').serialize(),
        method : 'post',
        dataType:'json',
        success: function (res) {
        	console.log(res);
        	var code = res.code;
        	 if(code == 200){
                $("#emailError").text(""); 
                Swal.fire(
                'Success',
                res.msg,
                'success'
				       ).then((result) => {
                    window.location.href=base_url+'admin/list_company.php'; 
                });
        	}
          else if(code == 401){
            if(!$("#emailError").hasClass("d-block")){
              $("#emailError").addClass("d-block");
            }
             $('html, body').animate({
                scrollTop: $("#emailError").offset().top
            }, 2000);
          }
          else{
            Swal.fire(
              'Error',
              res.msg,
              'error'
             )
          }
        	
        }
    });
}); 

function deleteComapnyById(id){
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {

         $.ajax({
            url: base_url+'admin/comapny-exe.php',
            data : {
                'module':'company',
                'action':'delete',
                'id':id
            },
            method : 'post',
            dataType:'json',
            success: function (res) {
                console.log(res);
                var code = res.code;
                if(code == 200)
                {
                    Swal.fire(
                      'Deleted!',
                      res.msg,
                      'success'
                    ).then((result) => {
                        window.location.href=base_url+'admin/list_company.php'; 
                       });
                }
                else{
                    Swal.fire(
                      'Error',
                      res.msg,
                      'error'
                    )
                }
            }
        });
      }
    })  
}

