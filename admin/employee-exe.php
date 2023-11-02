<?php 
include_once("../config.php");
include_once("../controller/employee.php");
$employee  = new employees();

$res['code'] = 400;
$res['msg'] = "Opps, Something went worng.Please try again!";
if(isset($_POST['action'])&&isset($_POST['module']))
{
	if($_POST['action'] == "save" && $_POST['module'] == "employee"){

		if(!empty($_POST['email'])){
			$email = $_POST['email'];

			$email_exists = $employee->checkEmailExists($email);
			if($email_exists) {
				$res['code'] = 401;
				$res['msg'] = "Email is already exist!!!";
			} else {
				$save = $employee->save($_POST);
				if($save)
				{
					$res['last_insert_id'] = $save;
					$res['code'] = 200;
					$res['msg'] = "Record has been added successfully.";
				}
			}
		}

	}

	if($_POST['action'] == "update" && $_POST['module'] == "employee"){
		if(!empty($_POST['email'])){
			$email = $_POST['email'];
			$id = $_POST['id'];
			$email_exist = $employee->checkEmailExistsForOtherUsers($email, $id);
			if($email_exist) {
				$res['code'] = 401;
				$res['msg'] = "Email is already exist!!!";
			} else {
		$update = $employee->update($_POST);
		if($update)
		{
			$res['code'] = 200;
			$res['msg'] = "Record has been updated successfully.";
		}
		}
		}
	}

	if($_POST['action'] == "delete" && $_POST['module'] == "employee"){
		
		$delete = $employee->delete($_POST);
		if($delete)
		{
			$res['code'] = 200;
			$res['msg'] = "Record has been deleted successfully.";
		}

	}

}

echo json_encode($res);exit;

?>