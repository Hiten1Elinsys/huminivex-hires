<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("../helpers/utility.php");
require_once('baseController.php');
class Jobs extends BaseController{

	use utility;
	public $con;
	function __construct(){
		include("../db_connect.php");
		$this->con = $con;
	}

	public function save($POST,$FILES)
	{	

		$admin_id = $_SESSION['admin_id'];
		$title = $POST['title'];
		$company_id = !empty($POST['company_id'])?$POST['company_id']:"";
		$job_description = !empty($POST['job_description'])?$POST['job_description']:"";
		$responsibilities = !empty($POST['responsibilities'])?$POST['responsibilities']:"";
		$skills = !empty($POST['skills'])?json_encode($POST['skills']):"";
		$qualifications = !empty($POST['qualifications'])?$POST['qualifications']:"";
		$experience = !empty($POST['experience'])?$POST['experience']:"";
		$opening = !empty($POST['opening'])?$POST['opening']:"";
		$job_type = !empty($POST['job_type'])?$POST['job_type']:"";
		$minimum_salary = !empty($POST['minimum_salary'])?$POST['minimum_salary']:"";
		$maximum_salary = !empty($POST['maximum_salary'])?$POST['maximum_salary']:"";
		$benifits_perks = !empty($POST['benifits_perks'])?$POST['benifits_perks']:"";
		$remote_work = !empty($POST['remote_work'])?$POST['remote_work']:"";
		$location = !empty($POST['location'])?$POST['location']:"";
		$application_instructions = !empty($POST['application_instructions'])?$POST['application_instructions']:"";
		$job_overview = !empty($POST['job_overview'])?$POST['job_overview']:"";
		$diversity_inclusion = !empty($POST['diversity_inclusion'])?$POST['diversity_inclusion']:"";
		$posted_at = !empty($POST['posted_at'])?date('Y-m-d',strtotime($POST['posted_at'])):"";
		$application_deadline = !empty($POST['application_deadline'])?date('Y-m-d',strtotime($POST['application_deadline'])):"";
		$is_active = 1;
		$is_delete = 0;
		$created_at = date("Y-m-d H:i:s");
		$updated_at = date("Y-m-d H:i:s");

		$sql = "INSERT INTO jobs (`admin_id`,`title`,`company_id`,`job_description`,`responsibilities`,`skills`,`qualifications`,`experience`,`opening`,`job_type`,`minimum_salary`,`maximum_salary`,`benifits_perks`,`remote_work`,`location`,`application_instructions`,`posted_at`,`application_deadline`,`job_overview`,`diversity_inclusion`,`is_active`,`is_delete`,`created_at`,`updated_at`) values('$admin_id','$title','$company_id','$job_description','$responsibilities','$skills','$qualifications','$experience','$opening','$job_type','$minimum_salary','$maximum_salary','$benifits_perks','$remote_work','$location','$application_instructions','$posted_at','$application_deadline','$job_overview','$diversity_inclusion','$is_active','$is_delete','$created_at','$updated_at') ";
	
		$query = mysqli_query($this->con,$sql);

		if($query )
		{
			$id = mysqli_insert_id($this->con);
			
			if($id){
				$admin_id = $_SESSION['admin_id'];
				if(!empty($FILES['logo_images']['name'])){
				
					$target_dir = "../uploads/job/logo/";
					
					if (!is_dir($target_dir)) {
						//Create our directory if it does not exist
						mkdir($target_dir);
					}
					
					$count = count($FILES['logo_images']['name']);	
					
					for($i=0; $i<$count;$i++){

						$logo_images = basename($FILES["logo_images"]["name"][$i]);

						//check
						$temp = explode(".", $FILES["logo_images"]["name"][$i]);
						$logo_images = round(microtime(true))+$i . '.' . end($temp);

						$target_file = $target_dir . $logo_images;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
						
						if (move_uploaded_file($FILES["logo_images"]["tmp_name"][$i], $target_file)) {
							
							$sql = "INSERT INTO job_logo_images (`admin_id`,`job_id`,`name`,`created_at`,`updated_at`) values ('$admin_id', '$id','$logo_images','$created_at','$updated_at')";
							
							$query = mysqli_query($this->con,$sql);
						
						}

					}

						
				}

			}

			return $id ;
		}

		return false;

	}


	public function update($POST,$FILES)
	{

		$id = $POST['id'];
		$title = $POST['title'];
		$company_id = !empty($POST['company_id'])?$POST['company_id']:"";
		$job_description = !empty($POST['job_description'])?$POST['job_description']:"";
		$responsibilities = !empty($POST['responsibilities'])?$POST['responsibilities']:"";
		$skills = !empty($POST['skills'])?json_encode($POST['skills']):"";
		$qualifications = !empty($POST['qualifications'])?$POST['qualifications']:"";
		$experience = !empty($POST['experience'])?$POST['experience']:"";
		$opening = !empty($POST['opening'])?$POST['opening']:"";
		$job_type = !empty($POST['job_type'])?$POST['job_type']:"";
		$minimum_salary = !empty($POST['minimum_salary'])?$POST['minimum_salary']:"";
		$maximum_salary = !empty($POST['maximum_salary'])?$POST['maximum_salary']:"";
		$benifits_perks = !empty($POST['benifits_perks'])?$POST['benifits_perks']:"";
		$remote_work = !empty($POST['remote_work'])?$POST['remote_work']:"";
		$location = !empty($POST['location'])?$POST['location']:"";
		$application_instructions = !empty($POST['application_instructions'])?$POST['application_instructions']:"";
		$job_overview = !empty($POST['job_overview'])?$POST['job_overview']:"";
		$diversity_inclusion = !empty($POST['diversity_inclusion'])?$POST['diversity_inclusion']:"";
		$posted_at = !empty($POST['posted_at'])?date('Y-m-d',strtotime($POST['posted_at'])):"";
		$application_deadline = !empty($POST['application_deadline'])?date('Y-m-d',strtotime($POST['application_deadline'])):"";
		$updated_at = date("Y-m-d H:i:s");

		$sql = "UPDATE jobs SET `title` = '{$title}' , `company_id` = '{$company_id}',`job_description` = '{$job_description}', `responsibilities` = '{$responsibilities}',`skills` = '{$skills}',`qualifications` = '{$qualifications}', `experience` = '{$experience}',`opening` = '{$opening}',`job_type` = '{$job_type}',`minimum_salary` = '{$minimum_salary}',`maximum_salary` = '{$maximum_salary}',`benifits_perks` = '{$benifits_perks}',`remote_work` = '{$remote_work}',`location` = '{$location}', `application_instructions` = '{$application_instructions}',`job_overview` = '{$job_overview}', `diversity_inclusion` = '{$diversity_inclusion}', `posted_at` = '{$posted_at}',`application_deadline` = '{$application_deadline}', `updated_at` = '{$updated_at}' where id = ".$id;
		
		if( mysqli_query($this->con,$sql))
		{

			if(!empty($FILES['logo_images']['name'])){
				
				$sql = "select id,name from job_logo_images  where  job_id =".$id ;
				
				$query = mysqli_query($this->con,$sql);
				if(mysqli_num_rows($query)>0)
				{
					while($logoData = mysqli_fetch_assoc($query)){
						$logo = $logoData['name'];

						$sql = "DELETE FROM job_logo_images WHERE id =".$logoData['id'];
						mysqli_query($this->con,$sql);

						if(!empty($logo)){
							if(file_exists('../uploads/job/logo/'.$logo))
							{
								unlink('../uploads/job/logo/'.$logo);	
							}
						}
					}
				}
				

				$target_dir = "../uploads/job/logo/";
				
				if (!is_dir($target_dir)) {
					//Create our directory if it does not exist
					mkdir($target_dir);
				}
				
				$count = count($FILES['logo_images']['name']);	
				
				for($i=0; $i<$count;$i++){
					
					$created_at = date("Y-m-d H:i:s");	
					$updated_at = date("Y-m-d H:i:s");	
					
					$logo_images = basename($FILES["logo_images"]["name"][$i]);

					//check
					$temp = explode(".", $FILES["logo_images"]["name"][$i]);
					$logo_images = round(microtime(true))+$i . '.' . end($temp);

					$target_file = $target_dir . $logo_images;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					
					if (move_uploaded_file($FILES["logo_images"]["tmp_name"][$i], $target_file)) {
						
						$sql = "INSERT INTO job_logo_images (`job_id`,`name`,`created_at`,`updated_at`) values ('$id','$logo_images','$created_at','$updated_at')";
						
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

		$sql ="UPDATE jobs SET is_delete = 1 where id = ".$id;

		return mysqli_query($this->con,$sql);

	}

	public function getAllJobs(){

		$admin_id = $_SESSION['admin_id'];
		$sql = "select j.*,c.company_name from jobs j INNER JOIN companies c ON c.id = j.company_id where j.is_delete = 0 and j.admin_id = ".$admin_id." order by j.id desc";
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

	public function searchByCategory($id)
		{
			
			$sql = "select * from jobs where id = ".$id;
			$query = mysqli_query($this->con, $sql);
			$data = mysqli_fetch_assoc($query);
			$skls = $data['skills'];
			$location = $data['location'];
			$experience = $data['experience'];
			$skills = json_encode($data['skills']);
			$qualifications = $data['qualifications'];
			$sklss = json_decode($skls);
				$conditions = array();
				foreach ($sklss as $skill) {
				 	$skillJson = '"'.addslashes(json_encode([$skill])).'"'; 
					$conditions[] = "JSON_CONTAINS(candidates.skills, $skillJson)";
				}
				if (!empty($conditions)) {
				 	$sql = "SELECT candidates.*, candidates.relevent_experience FROM candidates left join qualifications on qualifications.candidate_id = candidates.id WHERE (" . implode(" OR ", $conditions).") AND qualifications.degree_name = '$qualifications' AND candidates.location = '$location' AND candidates.total_experience = '$experience'";
				} else {
					return;
				}

			$query = mysqli_query($this->con, $sql);
			$candidates = array();
			if ($query) {
				while ($row = mysqli_fetch_assoc($query)) {
					$candidates[] = $row;

				}
			}
			
			return $candidates;
		}
	



		

	public function addSkill($POST)
	{
		$id = $POST['id'];
		$skill = $POST['skill'];
		$sql = "INSERT INTO skills (`skill_id`, `skill_name`) VALUES ('$skill_id', '$skill_name')";
		$query = mysqli_query($this->con, $sql);
		
		$skills = array();
		if ($query) {
			while ($row = mysqli_fetch_assoc($query)) {
				$skills[] = $row;
			}
		}
		echo '<pre>';print_r($skills);exit;
		return $skills;
	}

	public function getJobById($id)
	{
		$sql = "select j.*,c.company_name from jobs j INNER JOIN companies c ON c.id = j.company_id  where j.id = ". $id;
		$query = mysqli_query($this->con,$sql);
		$data = mysqli_fetch_assoc($query);
		return $data;
	}

	public function getModulesByModuleIds($moduleIds)
	{
		$sql ="select title from modules where id IN({$moduleIds})";
        $query = mysqli_query($this->con,$sql);
        $data = "";		
		if(mysqli_num_rows($query)>0)
		{
			while($row = mysqli_fetch_assoc($query)){
				$data .= $row['title'] . ", ";
			}
			$data = rtrim($data,', ');
		}
		return $data;

	}

	public function getJobLogoById($id){
		$sql = "select `name` from job_logo_images where `job_id` =".$id;
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


	public function getCandidatesByJobId($id){
		
		$admin_id = $_SESSION['admin_id'];
		$sql  = "select * from jobs where id = ".$id ." and is_delete = 0 and admin_id = ".$admin_id;
		$query = mysqli_query($this->con,$sql);
		$data = mysqli_fetch_assoc($query);
		$title = $data['title'];
		$skills = $data['skills'];
		$experience = $data['experience'];


		$sql = "select c.* from candidates c where c.post_applied_for like '%$title%' or c.post_applied_for like '%$title%' and ( relevent_experience >= '$experience' or total_experience >= '$experience' ) ";
		if(!empty($skills))
		{
			$sql .= " and (";
			$skills = explode(",",$skills);
			foreach($skills as $skill)
			{
				$sql .="find_in_set('$skill','skills') or ";
			}
			$sql = rtrim($sql,' or ');
			$sql .=") ";
		}	
		$sql .= " and c.is_delete = 0 order by c.id desc";
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

	public function search_candidates($POST){
		$experience = $POST['experience']; 
		$location = $POST['location']; 
		$rexp = $POST['rexp'];
		
		$sql = "SELECT * FROM candidates WHERE total_experience = ".$experience."AND relevent_experience =".$rexp." AND location ='".$location."'" ;
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

}	