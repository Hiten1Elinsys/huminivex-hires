<?php 
include_once("../config.php");
include_once("../controller/job.php");
$JobObj  = new Jobs();

$res['code'] = 400;
$res['msg'] = "Opps, Something went worng.Please try again!";
if(isset($_POST['action'])&&isset($_POST['module']))
{
	if($_POST['action'] == "search" && $_POST['module'] == "job"){

		$job_res = $JobObj->search_candidates($_POST);
		if($job_res)
		{
			$res['data'] = $job_res;
			$res['code'] = 200;
			$res['msg'] = "Record has been added successfully.";
		}

	}
}

echo json_encode($res);exit;

?>