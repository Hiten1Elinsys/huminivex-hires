<?php 
include_once("../config.php");
include_once("../controller/profile.php");
$user = new users();

$res['code'] = 400;
$res['msg'] = "Opps, Something went worng.Please try again!";
if(isset($_POST['action'])&&isset($_POST['module']))
{
	
	if($_POST['action'] == "update" && $_POST['module'] == "user"){
		
		$isOldPass = $user->checkOldPassword($_POST['old_pass']);
		if($isOldPass){
			$update = $user->update($_POST,$_FILES);
			if($update)
			{
				$res['code'] = 200;
				$res['msg'] = "Record has been updated successfully.";
			}	
		}
		else{
			$res['code'] = 401;
			$res['msg'] = "Old Password is incorrect!!";
		}

	}

}

echo json_encode($res);exit;

?>