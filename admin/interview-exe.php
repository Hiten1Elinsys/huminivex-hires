<?php 
include_once("../config.php");
include_once("../controller/interview.php");
$interview  = new Interviews();

$res['code'] = 400;
$res['msg'] = "Opps, Something went worng.Please try again!";
if(isset($_POST['action'])&&isset($_POST['module']))
{
	if($_POST['action'] == "save" && $_POST['module'] == "interview"){
			
		$save = $interview->save($_POST);
			
		if($save)
		{	
			$res['last_insert_id'] = $save;
			$res['code'] = 200;
			$res['msg'] = "Record has been added successfully.";
		}

	}

	if($_POST['action'] == "update" && $_POST['module'] == "interview"){
		
		$update = $interview->update($_POST);
		if($update)
		{
			$res['code'] = 200;
			$res['msg'] = "Record has been updated successfully.";
		}
		
	}

	if($_POST['action'] == "delete" && $_POST['module'] == "interview"){
		
		$delete = $interview->delete($_POST);
		if($delete)
		{
			$res['code'] = 200;
			$res['msg'] = "Record has been deleted successfully.";
		}

	}

}

echo json_encode($res);exit;

?>