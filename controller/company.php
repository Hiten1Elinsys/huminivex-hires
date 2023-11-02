<?php
include_once('../helpers/utility.php');
class Companies{

	use utility;

	public $con;

	function __construct(){
		include("../db_connect.php");
		$this->con = $con;
	}

	public function getAllIndustries(){
		$sql = "select * from industries where id>0";
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

	public function save($POST)
	{	

		$admin_id = $_SESSION['admin_id'];
		$user_id = $_SESSION['id'];
		$company_name = $POST['company_name'];
		$email = $POST['email'];
		$mobile = $POST['mobile_no'];
		$industry_id = $POST['industry_id'];
		$comapny_size = $POST['comapny_size'];
		$location = $POST['location'];
		$contact_person_name = $POST['contact_person_name'];
		$website_url = $POST['website_url'];
		$company_over_view = $POST['company_over_view'];
		$mission_value = $POST['mission_value'];
		$current_job_openings = $POST['current_job_openings'];
		$working_days  = $POST['working_days'];
		$e_benifits = $POST['e_benifits'];
		$company_culture = $POST['company_culture'];
		$social_responsibility = $POST['social_responsibility'];
		$diversity_inclusion = $POST['diversity_inclusion'];
		$testimonials = $POST['testimonials'];
		$additional_comments = $POST['additional_comments'];
		$is_active = 1;
		$is_delete = 0;
		$created_at = date("Y-m-d H:i:s");
		$updated_at = date("Y-m-d H:i:s");

		$password = $this->generate_password($email,$mobile);
		$hash_password = md5($password);
		
		
		
		$sql = "INSERT INTO companies (`admin_id`,`company_name`,`email`,`password`,`mobile_no`,`industry_id`,`comapny_size`,`location`,`contact_person_name`,`website_url`,`company_over_view`,`mission_value`,`current_job_openings`,`working_days`,`e_benifits`,`company_culture`,`social_responsibility`,`diversity_inclusion`,`testimonials`,`additional_comments`,`is_active`,`is_delete`,`created_at`,`updated_at`) values( '$admin_id', '$company_name','$email','$password','$mobile','$industry_id','$comapny_size','$location','$contact_person_name','$website_url','$company_over_view','$mission_value','$current_job_openings','$working_days','$e_benifits','$company_culture','$social_responsibility','$diversity_inclusion','$testimonials','$additional_comments','$is_active','$is_delete','$created_at','$updated_at') ";
		
		$query = mysqli_query($this->con,$sql);

		if($query )
		{

			$company_id =  mysqli_insert_id($this->con);	
			
			//Creating users
			$sql = "INSERT INTO users (`admin_id`,`email`,`password`,`created_at`,`updated_at`)value('{$admin_id}','{$email}','{$hash_password}','{$created_at}','$updated_at')";
			$query = mysqli_query($this->con,$sql);


			$user_id = mysqli_insert_id($this->con);
			if($user_id){
				$id = [''];
				$admin_id =$_SESSION['admin_id'];
				// mapping user with groups
				$group_id = 2; // 2- client,1 = admin,3 = employee
				$sql = "INSERT INTO user_map (`user_id`,`group_id`,`created_at`,`updated_at`)value('{$user_id}','{$group_id}','{$created_at}','$updated_at')";
				$query = mysqli_query($this->con,$sql);

				if($query){

					mysqli_query($this->con,"update companies set user_id ='{$user_id}' where  id = '{$company_id}'");

					$shifts = $POST['shift_title'];
					$stimes = $POST['shift_stime'];
					$etimes = $POST['shift_etime'];
					if(!empty($shifts))
					{
						$i = 0;
						foreach($shifts as $shift)
						{

							$title = $shifts[$i];
							$stime = $stimes[$i];
							$etime = $etimes[$i];
							$created_at = date("Y-m-d H:i:s");
							$updated_at = date("Y-m-d H:i:s");

							$sql = "INSERT INTO company_shifts (`admin_id`, `company_id`,`title`,`stime`,`etime`,`created_at`,`updated_at`) values('$admin_id', '$company_id','$title','$stime','$etime','$created_at','$updated_at')";
							$query = mysqli_query($this->con,$sql);
							$i++;
						}
					}	

				}
			}
			
			return $id ;
		}
		else {
            return false;
        }
			
	}
	
	public function checkEmailExists($email)
	{
		$sql = "SELECT * FROM companies WHERE email = '$email' LIMIT 1";
		$query = mysqli_query($this->con, $sql);
	
		return mysqli_num_rows($query) > 0;
	}

	public function checkEmailExistsForOtherUsers($email, $id)
	{
		$sql = "SELECT COUNT(*) as count FROM companies WHERE email = '$email' AND id != $id";
		$query = mysqli_query($this->con, $sql);
		$row = mysqli_fetch_assoc($query);

		return $row['count'] > 0;
	}

	public function update($POST)
	{
		
		$id = $POST['id'];
		$company_name = $POST['company_name'];
		$industry_id = $POST['industry_id'];
		$comapny_size = $POST['comapny_size'];
		$email = $POST['email'];
		$mobile = $POST['mobile_no'];
		$location = $POST['location'];
		$contact_person_name = $POST['contact_person_name'];
		$website_url = $POST['website_url'];
		$company_over_view = $POST['company_over_view'];
		$mission_value = $POST['mission_value'];
		$current_job_openings = $POST['current_job_openings'];
		$working_days  = $POST['working_days'];
		$e_benifits = $POST['e_benifits'];
		$company_culture = $POST['company_culture'];
		$social_responsibility = $POST['social_responsibility'];
		$diversity_inclusion = $POST['diversity_inclusion'];
		$testimonials = $POST['testimonials'];
		$additional_comments = $POST['additional_comments'];
		$updated_at = date("Y-m-d H:i:s");

		$sql = "UPDATE companies SET `company_name` = '{$company_name}' ,`email` = '{$email}' ,`mobile_no` = '{$mobile}' , `industry_id` = '{$industry_id}', `comapny_size` = '{$comapny_size}', `location`= '{$location}', `contact_person_name` = '{$contact_person_name}', `website_url`='{$website_url}', `company_over_view`='{$company_over_view}',`mission_value`='{$mission_value}', `current_job_openings` = '{$current_job_openings}',`working_days`='{$working_days}', `e_benifits`='{$e_benifits}',`company_culture` = '{$company_culture}', `social_responsibility` = '{$social_responsibility}',`diversity_inclusion` = '{$diversity_inclusion}', `testimonials`='{$testimonials}', `additional_comments` = '{$additional_comments}', `updated_at` = '{$updated_at}' where id = ".$id;

		$query = mysqli_query($this->con,$sql);

		if($query )
		{
			if($id){
				if(isset( $POST['shift_title'])){
					$shifts = $POST['shift_title'];
					$stimes = $POST['shift_stime'];
					$etimes = $POST['shift_etime'];
					if(!empty($shifts))
					{
						//deleting old shifts
						$sql = "DELETE FROM company_shifts WHERE company_id =".$id;
						$query = mysqli_query($this->con,$sql);

						$i = 0;
						foreach($shifts as $shift)
						{

							$title = $shifts[$i];
							$stime = $stimes[$i];
							$etime = $etimes[$i];
							$created_at = date("Y-m-d H:i:s");
							$updated_at = date("Y-m-d H:i:s");

							$sql = "INSERT INTO company_shifts (`company_id`,`title`,`stime`,`etime`,`created_at`,`updated_at`) values('$id','$title','$stime','$etime','$created_at','$updated_at')";
							$query = mysqli_query($this->con,$sql);
							$i++;
						}
					}
				}
			}	

			return true;
		}

		return false;

	}

	public function delete($POST){

		$id = $POST['id'];

		$sql ="UPDATE companies SET is_delete = 1 where id = ".$id;
		return mysqli_query($this->con,$sql);

	}


	public function getAllComapnies(){

		$admin_id =$_SESSION['admin_id'];
		$user_id =$_SESSION['id'];
		$sql = "select c.*,i.title industry_title from companies c inner join industries i on i.id = c.industry_id  where c.admin_id='{$admin_id}'  and c.is_delete = 0 order by c.id desc";
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

	public function getCompanyById($id)
	{
		$sql = "select c.*,i.title industry_title from companies c inner join industries i on i.id = c.industry_id  where c.id = ". $id;
		$query = mysqli_query($this->con,$sql);
		$data = mysqli_fetch_assoc($query);
		return $data;
	}

	public function getShiftsByComapnyId($id){

		$sql = "select * from company_shifts where company_id = ".$id;
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

	public function getCompaniesByUserId($id){
		$sql = "select c.id,c.company_name from companies c  where c.id>0 and admin_id = ".$id."  and c.is_delete = 0 order by c.id desc";
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