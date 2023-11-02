<?php 
include_once("../config.php");
include_once("../controller/company.php");
$company  = new companies();

$res['code'] = 400;
$res['msg'] = "Opps, Something went worng.Please try again!";
if(isset($_POST['action'])&&isset($_POST['module']))
{
	if($_POST['action'] == "save" && $_POST['module'] == "company"){

		$save = $company->save($_POST);
		if($save)
		{
			$res['last_insert_id'] = $save;
			$res['code'] = 200;
			$res['msg'] = "Record has been added successfully.";
		}

	}

	if($_POST['action'] == "update" && $_POST['module'] == "company"){
		
		$update = $company->update($_POST);
		if($update)
		{
			$res['code'] = 200;
			$res['msg'] = "Record has been updated successfully.";
		}

	}

	if($_POST['action'] == "delete" && $_POST['module'] == "company"){
		
		$delete = $company->delete($_POST);
		if($delete)
		{
			$res['code'] = 200;
			$res['msg'] = "Record has been deleted successfully.";
		}

	}

}

echo json_encode($res);exit;

?>