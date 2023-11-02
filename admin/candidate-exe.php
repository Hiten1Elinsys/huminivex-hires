<?php 
include_once("../config.php");
include_once("../controller/candidate.php");
$candidate  = new candidates();

$res['code'] = 400;
$res['msg'] = "Opps, Something went worng.Please try again!";
if(isset($_POST['action'])&&isset($_POST['module']))
{
	if($_POST['action'] == "save" && $_POST['module'] == "candidate"){

		if(!empty($_POST['email'])){
			$email = $_POST['email'];
			$email_exist = $candidate->checkEmailExists($email);
			if($email_exist) {
				$res['code'] = 401;
				$res['msg'] = "Email is already exist!!!";
			} else {	
				$save = $candidate->save($_POST,$_FILES);
				if($save)
				{
					$res['last_insert_id'] = $save;
					$res['code'] = 200;
					$res['msg'] = "Record has been added successfully.";
				}

			}
		}
		
	}

	if($_POST['action'] == "update" && $_POST['module'] == "candidate"){
		if(!empty($_POST['email'])){
			$email = $_POST['email'];
			$candidate_id = $_POST['id'];
			$email_exist = $candidate->checkEmailExistsForOtherUsers($candidate_id, $email);
			if($email_exist) {
				$res['code'] = 401;
				$res['msg'] = "Email is already exist!!!";
			} else {
		$update = $candidate->update($_POST,$_FILES);
		if($update)
		{
			$res['code'] = 200;
			$res['msg'] = "Record has been updated successfully.";
		}
	}
	}
	}

	if($_POST['action'] == "delete" && $_POST['module'] == "candidate"){
		
		$delete = $candidate->delete($_POST);
		if($delete)
		{
			$res['code'] = 200;
			$res['msg'] = "Record has been deleted successfully.";
		}

	}

}

echo json_encode($res);exit;


// Include your database connection configuration
include "db_connection.php";

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected total experience range from the AJAX request
    $selectedRange = $_POST["total_experience_range"];

    // Perform the database query based on the selected range
    if (!empty($selectedRange)) {
        // Extract the minimum and maximum experience values from the range
        list($minExp, $maxExp) = explode("-", $selectedRange);

        // Use prepared statements to prevent SQL injection
        $sql = "SELECT * FROM candidates WHERE total_experience >= ? AND total_experience < ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $minExp, $maxExp);
        $stmt->execute();
        $result = $stmt->get_result();

        // Fetch and return the candidates as JSON
        $candidates = [];
        while ($row = $result->fetch_assoc()) {
            $candidates[] = $row;
        }

        // Return the candidates as JSON response
        echo json_encode($candidates);
    }
} else {
    // Handle other HTTP request methods or invalid requests
    http_response_code(400); // Bad Request
}
?>
