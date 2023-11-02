$("#role_frm").on("submit",function(e){
	e.preventDefault();
	$.ajax({
        url: base_url+'admin/role-exe.php',
        data : $('#role_frm').serialize(),
        method : 'post',
        dataType:'json',
        success: function (res) {
        	//console.log(res);
        	var code = res.code;
        	if(code == 200)
        	{

        		Swal.fire(
				  'Success',
				  res.msg,
				  'success'
				).then((result) => {
                    window.location.href=base_url+'admin/list_role.php'; 
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
}); 

function deleteRoleById(id){
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
            url: base_url+'admin/role-exe.php',
            data : {
                'module':'role',
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
                        window.location.href=base_url+'admin/list_role.php'; 
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

