$("#employee_frm").on("submit",function(e){
  e.preventDefault();
  tinymce.triggerSave();

  var data = new FormData($('#employee_frm').get(0));

  $.ajax({
        url: base_url+'admin/employee-exe.php',
        data : data,
        method : 'post',
        dataType:'json',
        success: function (res) {
        	// console.log(res);
        	var code = res.code;
        	if(code == 200){
              $("#emailError").text("");
              Swal.fire(
              'Success',
              res.msg,
              'success'
              ).then((result) => {
                          window.location.href=base_url+'admin/list_employee.php'; 
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
        },
        cache: false,
        contentType: false,
        processData: false
    });
}); 

function deleteEmployeeById(id){
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
            url: base_url+'admin/employee-exe.php',
            data : {
                'module':'employee',
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
                        window.location.href=base_url+'admin/list_employee.php'; 
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


