<?php
require_once("../helpers/utility.php");
require_once('baseController.php');

class Candidates extends BaseController{
		
	use utility;
	public $con;
	function __construct(){
		require("../db_connect.php");
		$this->con = $con;
	}

	public function save($POST,$FILES)
	{	
		
		$user_id = $_SESSION['id'];	
		$admin_id = $_SESSION['admin_id'];
		$fname = !empty($POST['fname'])?$POST['fname']:"";
		$lname = !empty($POST['lname'])?$POST['lname']:"";
		$email = !empty($POST['email'])?$POST['email']:"";
		$location = !empty($POST['location'])?$POST['location']:"";
		$primary_contact_no = !empty($POST['primary_contact_no'])?$POST['primary_contact_no']:"";
		$p_is_whatsapp = !empty($POST['p_is_whatsapp'])?$POST['p_is_whatsapp']:"";
		$s_contact_no = !empty($POST['s_contact_no'])?$POST['s_contact_no']:"";
		$s_is_whatsapp = !empty($POST['s_is_whatsapp'])?$POST['s_is_whatsapp']:"";
		$address = !empty($POST['address'])?$POST['address']:"";
		$e_status = !empty($POST['e_status'])?$POST['e_status']:"";
		$current_job_title = !empty($POST['current_job_title'])?$POST['current_job_title']:"";
		$w_field_experience = !empty($POST['w_field_experience'])?$POST['w_field_experience']:"";
		$total_experience = !empty($POST['total_experience'])?$POST['total_experience']:"";
		$relevent_experience = !empty($POST['relevent_experience'])?$POST['relevent_experience']:"";
		$c_salary = !empty($POST['c_salary'])?$POST['c_salary']:"";
		$notice_period = !empty($POST['notice_period'])?$POST['notice_period']:"";
		$skills = !empty($POST['skills'])?json_encode($POST['skills']):"";
		$c_references = !empty($POST['c_references'])?$POST['c_references']:"";
		$post_applied_for = !empty($POST['post_applied_for'])?$POST['post_applied_for']:"";
		$joining_period = !empty($POST['joining_period'])?$POST['joining_period']:"";
		$shortlisted_for = !empty($POST['shortlisted_for'])?$POST['shortlisted_for']:"";
		$salary_expectations = !empty($POST['salary_expectations'])?$POST['salary_expectations']:"";
		$work_location = !empty($POST['work_location'])?$POST['work_location']:"";
		$additionalcomments = !empty($POST['additionalcomments'])?$POST['additionalcomments']:"";
		$is_active = 1;
		$is_delete = 0;
		$created_at = date("Y-m-d H:i:s");
		$updated_at = date("Y-m-d H:i:s");



		$sql = "INSERT INTO candidates (`admin_id`,`fname`,`lname`,`email`,`location`,`primary_contact_no`,`p_is_whatsapp`,`s_contact_no`,`s_is_whatsapp`,`address`,`e_status`,`current_job_title`,`w_field_experience`,`total_experience`,`relevent_experience`,`c_salary`,`notice_period`,`skills`,`c_references`,`post_applied_for`,`joining_period`,`shortlisted_for`,`salary_expectations`,`work_location`,`additionalcomments`,`is_active`,`is_delete`,`created_at`,`updated_at`) values('$admin_id','$fname','$lname','$email','$location','$primary_contact_no','$p_is_whatsapp','$s_contact_no','$s_is_whatsapp','$address','$e_status','$current_job_title','$w_field_experience','$total_experience','$relevent_experience','$c_salary','$notice_period','$skills','$c_references','$post_applied_for','$joining_period','$shortlisted_for','$salary_expectations','$work_location','$additionalcomments','$is_active','$is_delete','$created_at','$updated_at') ";
	
		$query = mysqli_query($this->con,$sql);
		
		if($query )
		{
			
			$id = mysqli_insert_id($this->con);
			if($id){
				$admin_id =$_SESSION['admin_id'];
				//Adding experiences
				$company_names = $POST['company_name'];
				$job_titles = $POST['job_title'];
				$start_ds = $POST['start_d'];
				$end_ds = $POST['end_d'];
				if(!empty($company_names))
				{
					$i = 0;
					foreach($company_names as $companies)
					{
						
						$company_name = $company_names[$i];
						$job_title = $job_titles[$i];
						$start_d = $start_ds[$i];
						$end_d = $end_ds[$i];
						$created_at = date("Y-m-d H:i:s");
						$updated_at = date("Y-m-d H:i:s");

						$sql = "INSERT INTO experiences (`admin_id`, `candidate_id`,`company_name`,`job_title`,`start_d`,`end_d`,`created_at`,`updated_at`) values('$admin_id', '$id','$company_name','$job_title','$start_d','$end_d','$created_at','$updated_at')";
						$query = mysqli_query($this->con,$sql);
						$i++;
					}
				}

				//Adding Qualifications
				$degree_names = $POST['degree_name'];
				$percentages = $POST['percentage'];
				$univesitys = $POST['univesity'];
				$passing_ys = $POST['passing_y'];
				if(!empty($degree_names))
				{
					$admin_id =$_SESSION['admin_id'];
					$i = 0;
					foreach($degree_names as $degree)
					{

						$degree_name = $degree_names[$i];
						$percentage = $percentages[$i];
						$univesity = isset($univesitys[$i])?$univesitys[$i]:"";
						$passing_y = isset($passing_ys[$i])?$passing_ys[$i]:"";
						$created_at = date("Y-m-d H:i:s");
						$updated_at = date("Y-m-d H:i:s");

						$sql = "INSERT INTO qualifications (`admin_id`,`candidate_id`,`degree_name`,`percentage`,`univesity`,`passing_y`,`created_at`,`updated_at`) values('$admin_id','$id','$degree_name','$percentage','$univesity','$passing_y','$created_at','$updated_at')";
						$query = mysqli_query($this->con,$sql);
						$i++;
					}
				}

				//Adding Awards
				$professional_accomlishments = $POST['professional_accomlishments'];
				
				if(!empty($professional_accomlishments))
				{
					$admin_id =$_SESSION['admin_id'];
					$i = 0;
					foreach($professional_accomlishments as $professional_accomlishment)
					{

						$title = $professional_accomlishment;	
						$created_at = date("Y-m-d H:i:s");
						$updated_at = date("Y-m-d H:i:s");

						$sql = "INSERT INTO professional_accomlishments (`admin_id`,`candidate_id`,`title`,`created_at`,`updated_at`) values('$admin_id','$id','$title','$created_at','$updated_at')";
						$query = mysqli_query($this->con,$sql);
						$i++;
					}
				}

			}


			//Adding resume
			
			if(!empty($FILES['resume']['name'])){
				
				$target_dir = "../uploads/candidate/resume/";
				
				if (!is_dir($target_dir)) {
					//Create our directory if it does not exist
					mkdir($target_dir);
				}

				$resume = basename($FILES["resume"]["name"]);

				//check
				$temp = explode(".", $FILES["resume"]["name"]);
				$resume = round(microtime(true)) . '.' . end($temp);


				$target_file = $target_dir . $resume;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				if (move_uploaded_file($FILES["resume"]["tmp_name"], $target_file)) {
					$sql = "UPDATE candidates SET `resume` = '".$resume ."' where id =".$id ;
					$query = mysqli_query($this->con,$sql);
				}	
			}

			//Adding Certifications	
			if(!empty($FILES['certifications']['name'])){
				
				$target_dir = "../uploads/candidate/certification/";

				if (!is_dir($target_dir)) {
					//Create our directory if it does not exist
					mkdir($target_dir);
				}

				$certification = basename($FILES["certifications"]["name"]);

				//check
				$temp = explode(".", $FILES["certifications"]["name"]);
				$certification = round(microtime(true)) . '.' . end($temp);
				

				$target_file = $target_dir . $certification;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				if (move_uploaded_file($FILES["certifications"]["tmp_name"], $target_file)) {
					$sql = "UPDATE candidates SET `certifications` = '".	$certification ."' where id =".$id ;
					$query = mysqli_query($this->con,$sql);
				}
			}

			return $id ;
		}

		return false;

	}




	public function checkEmailExists($email)
	{
		$sql = "SELECT * FROM candidates WHERE email = '$email' LIMIT 1";
		$query = mysqli_query($this->con, $sql);
	
		return mysqli_num_rows($query) > 0;
	}

	public function checkEmailExistsForOtherUsers($candidate_id, $email)
	{
		// Retrieve the current email address for the candidate being updated

		$current_email = $this->getCurrentEmailById($candidate_id);
	
		// Check if the new email exists for any other candidates (excluding the current candidate)
		$sql = "SELECT * FROM candidates WHERE email = '$email' AND email != '$current_email' LIMIT 1";
		$query = mysqli_query($this->con, $sql);
	
		return mysqli_num_rows($query) > 0;
	}

	public function getCurrentEmailById($candidate_id)
	{
		$sql = "SELECT email FROM candidates WHERE id = '$candidate_id' LIMIT 1";
		$query = mysqli_query($this->con, $sql);

		if (mysqli_num_rows($query) > 0) {
			$row = mysqli_fetch_assoc($query);
			return $row['email'];
		} else {
			return null; // Return null if candidate with the specified ID is not found
		}
	}

	public function update($POST,$FILES)
	{
		
		$id = $POST['id'];
		$fname = !empty($POST['fname'])?$POST['fname']:"";
		$lname = !empty($POST['lname'])?$POST['lname']:"";
		$email = !empty($POST['email'])?$POST['email']:"";
		$location = !empty($POST['location'])?$POST['location']:"";
		$primary_contact_no = !empty($POST['primary_contact_no'])?$POST['primary_contact_no']:"";
		$p_is_whatsapp = !empty($POST['p_is_whatsapp'])?$POST['p_is_whatsapp']:"";
		$s_contact_no = !empty($POST['s_contact_no'])?$POST['s_contact_no']:"";
		$s_is_whatsapp = !empty($POST['s_is_whatsapp'])?$POST['s_is_whatsapp']:"";
		$address = !empty($POST['address'])?$POST['address']:"";
		$e_status = !empty($POST['e_status'])?$POST['e_status']:"";
		$current_job_title = !empty($POST['current_job_title'])?$POST['current_job_title']:"";
		$w_field_experience = !empty($POST['w_field_experience'])?$POST['w_field_experience']:"";
		$total_experience = !empty($POST['total_experience'])?$POST['total_experience']:"";
		$relevent_experience = !empty($POST['relevent_experience'])?$POST['relevent_experience']:"";
		$c_salary = !empty($POST['c_salary'])?$POST['c_salary']:"";
		$notice_period = !empty($POST['notice_period'])?$POST['notice_period']:"";
		$skills = !empty($POST['skills'])?json_encode($POST['skills']):"";
		$c_references = !empty($POST['c_references'])?$POST['c_references']:"";
		$post_applied_for = !empty($POST['post_applied_for'])?$POST['post_applied_for']:"";
		$joining_period = !empty($POST['joining_period'])?$POST['joining_period']:"";
		$shortlisted_for = !empty($POST['shortlisted_for'])?$POST['shortlisted_for']:"";
		$salary_expectations = !empty($POST['salary_expectations'])?$POST['salary_expectations']:"";
		$work_location = !empty($POST['work_location'])?$POST['work_location']:"";
		$additionalcomments = !empty($POST['additionalcomments'])?$POST['additionalcomments']:"";

		$sql = "UPDATE candidates SET `fname`= '{$fname}',`lname`='{$lname}',`email`='{$email}',`location`='{$location}',`primary_contact_no`='{$primary_contact_no}',`p_is_whatsapp` = '{$p_is_whatsapp}',`s_contact_no`='{$s_contact_no}',`s_is_whatsapp` = '{$s_is_whatsapp}',`address`='{$address}',`e_status`='{$e_status}',`current_job_title`='{$current_job_title}',`w_field_experience`='{$w_field_experience}',`total_experience`='{$total_experience}',`relevent_experience`='{$relevent_experience}',`c_salary`='{$c_salary}',`notice_period`='{$notice_period}',`skills`='{$skills}',`c_references`='{$c_references}',`post_applied_for` = '{$post_applied_for}',`joining_period`='{$joining_period}',`shortlisted_for`='{$shortlisted_for}',`salary_expectations`='{$salary_expectations}',`work_location`='{$work_location}',`additionalcomments`='{$additionalcomments}' where `id` = '{$id}'";
		$query = mysqli_query($this->con,$sql);

		if($query){

			if($id){


				//Adding new experiences data
				$company_names = $POST['company_name'];
				$job_titles = $POST['job_title'];
				$start_ds = $POST['start_d'];
				$end_ds = $POST['end_d'];
				if(!empty($company_names))
				{

					//deleting old experiences data
					$sql = "DELETE FROM experiences WHERE candidate_id =".$id;
					$query = mysqli_query($this->con,$sql);	

					$i = 0;
					foreach($company_names as $companies)
					{

						$company_name = $company_names[$i];
						$job_title = $job_titles[$i];
						$start_d = $start_ds[$i];
						$end_d = $end_ds[$i];
						$created_at = date("Y-m-d H:i:s");
						$updated_at = date("Y-m-d H:i:s");

						$sql = "INSERT INTO experiences (`candidate_id`,`company_name`,`job_title`,`start_d`,`end_d`,`created_at`,`updated_at`) values('$id','$company_name','$job_title','$start_d','$end_d','$created_at','$updated_at')";
						$query = mysqli_query($this->con,$sql);
						$i++;
					}
				}

				//Adding new Qualifications
				$degree_names = $POST['degree_name'];
				$percentages = $POST['percentage'];
				$univesitys = $POST['univesity'];
				$passing_ys = $POST['passing_y'];
				if(!empty($degree_names))
				{

					//deleting old qualifications data
					$sql = "DELETE FROM qualifications WHERE candidate_id =".$id;
					$query = mysqli_query($this->con,$sql);		

					$i = 0;
					foreach($degree_names as $degree)
					{

						$degree_name = $degree_names[$i];
						$percentage = $percentages[$i];
						$univesity = isset($univesitys[$i])?$univesitys[$i]:"";
						$passing_y = isset($passing_ys[$i])?$passing_ys[$i]:"";
						$created_at = date("Y-m-d H:i:s");
						$updated_at = date("Y-m-d H:i:s");

						$sql = "INSERT INTO qualifications (`candidate_id`,`degree_name`,`percentage`,`univesity`,`passing_y`,`created_at`,`updated_at`) values('$id','$degree_name','$percentage','$univesity','$passing_y','$created_at','$updated_at')";
						$query = mysqli_query($this->con,$sql);
						$i++;
					}
				}


				//Adding Awards
				$professional_accomlishments = $POST['professional_accomlishments'];
				
				if(!empty($professional_accomlishments))
				{

					//deleting old qualifications data
					$sql = "DELETE FROM professional_accomlishments WHERE candidate_id =".$id;
					$query = mysqli_query($this->con,$sql);

					$i = 0;
					foreach($professional_accomlishments as $professional_accomlishment)
					{

						$title = $professional_accomlishment;	
						$created_at = date("Y-m-d H:i:s");
						$updated_at = date("Y-m-d H:i:s");

						$sql = "INSERT INTO professional_accomlishments (`candidate_id`,`title`,`created_at`,`updated_at`) values('$id','$title','$created_at','$updated_at')";
						$query = mysqli_query($this->con,$sql);
						$i++;
					}
				}



				//Adding resume
			
				if(!empty($FILES['resume']['name'])){

					$sql = "select resume from candidates where  id =".$id ;
					$query = mysqli_query($this->con,$sql);
					$resumeData = mysqli_fetch_assoc($query);
					$resume = $resumeData['resume'];
					if(!empty($resume)){
						if(file_exists('../uploads/candidate/resume/'.$resume))
						{
							unlink('../uploads/candidate/resume/'.$resume);	
						}

					}


					$target_dir = "../uploads/candidate/resume/";

					if (!is_dir($target_dir)) {
						//Create our directory if it does not exist
						mkdir($target_dir);
					}

					$resume = basename($FILES["resume"]["name"]);

					//check
					$temp = explode(".", $FILES["resume"]["name"]);
					$resume = round(microtime(true)) . '.' . end($temp);


					$target_file = $target_dir . $resume;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					if (move_uploaded_file($FILES["resume"]["tmp_name"], $target_file)) {
						$sql = "UPDATE candidates SET `resume` = '".$resume ."' where id =".$id ;
						$query = mysqli_query($this->con,$sql);
					}	
				}

				//Adding Certifications	
				if(!empty($FILES['certifications']['name'])){

					$sql = "select certifications from candidates where  id =".$id ;
					$query = mysqli_query($this->con,$sql);
					$resumeData = mysqli_fetch_assoc($query);
					$certification = $resumeData['certifications'];
					if(!empty($certification)){
						if(file_exists('../uploads/candidate/certification/'.$certification))
						{
							unlink('../uploads/candidate/certification/'.$certification);
						}
					}


					$target_dir = "../uploads/candidate/certification/";

					if (!is_dir($target_dir)) {
						//Create our directory if it does not exist
						mkdir($target_dir);
					}
					

					$certification = basename($FILES["certifications"]["name"]);

					//check
					$temp = explode(".", $FILES["certifications"]["name"]);
					$certification = round(microtime(true)) . '.' . end($temp);
					

					$target_file = $target_dir . $certification;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					if (move_uploaded_file($FILES["certifications"]["tmp_name"], $target_file)) {
						$sql = "UPDATE candidates SET `certifications` = '".	$certification ."' where id =".$id ;
						$query = mysqli_query($this->con,$sql);
					}
				}

			
			}	

			return true;
		}
		return false;
	}

	public function delete($POST){

		$id = $POST['id'];

		$sql ="UPDATE candidates SET is_delete = 1 where id = ".$id;
		return mysqli_query($this->con,$sql);

	}



	public function getAllCandidate(){
		$admin_id = $_SESSION['admin_id'];
		$sql = "select c.* from candidates c where c.id>0 and c.is_delete = 0 and admin_id ='{$admin_id}' order by c.id desc";
		$query = mysqli_query($this->con,$sql);
		$data = array();		
		if(mysqli_num_rows($query)>0)
		{
			while($row = mysqli_fetch_assoc($query)){
				$data[] = $row;
			}
		}
		return $data;

	}

	public function getCandidateById($id)
	{
		$sql = "select c.* from candidates as c where c.id = ". $id;
		$query = mysqli_query($this->con,$sql);
		$data = mysqli_fetch_assoc($query);
		return $data;
	}

	public function getWorkExperienceById($id){
		$sql = "select e.* from experiences e where e.id>0 and candidate_id = ".$id." order by e.id asc";
		$query = mysqli_query($this->con,$sql);
		$data = array();		
		if(mysqli_num_rows($query)>0)
		{
			while($row = mysqli_fetch_assoc($query)){
				$data[] = $row;
			}
		}
		return $data;
	}

	public function getQualificationsById($id){
		$sql = "select e.* from qualifications e where e.id>0 and candidate_id = ".$id." order by e.id asc";
		$query = mysqli_query($this->con,$sql);
		$data = array();		
		if(mysqli_num_rows($query)>0)
		{
			while($row = mysqli_fetch_assoc($query)){
				$data[] = $row;
			}
		}
		return $data;
	}

	public function getAwardsById($id){
		$sql = "select e.title from professional_accomlishments e where e.id>0 and candidate_id = ".$id." order by e.id asc";
		$query = mysqli_query($this->con,$sql);
		$data = array();		
		if(mysqli_num_rows($query)>0)
		{
			while($row = mysqli_fetch_assoc($query)){
				$data[] = $row;
			}
		}
		return $data;
	}

	public function getComapnyNameById($id){
		$sql = "select company_name from companies where id = ".$id;
		$query = mysqli_query($this->con,$sql);
		if(mysqli_num_rows($query)>0)
		{
			$data = mysqli_fetch_assoc($query);
			$company_name = $data['company_name'];
			return $company_name;
		}

		return false;

	}	

	
}	