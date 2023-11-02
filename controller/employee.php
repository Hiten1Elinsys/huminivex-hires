<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Employees{

	
	public $con;
	function __construct(){
		include("../db_connect.php");
		$this->con = $con;
	}

	
	public function save($POST)
	{	
		//echo '<pre>';print_r($POST);exit;
		// $user_id = $_SESSION['id']
		$admin_id = $_SESSION['admin_id'];
		$fname = $POST['fname'];
		$lname = $POST['lname'];
		$email = $POST['email'];
		$p_contact_no = $POST['p_contact_no'];
		$s_contact_no = $POST['s_contact_no'];
		$dob = $POST['dob'];
		$designation = $POST['designation'];
		$role_id = $POST['role_id'];
		$password = $POST['password'];
		$hash_password = md5($password);
		$is_active = 1;
		$is_delete = 0;
		$created_at = date("Y-m-d H:i:s");
		$updated_at = date("Y-m-d H:i:s");
		
		// User Creating
		$sql = "INSERT INTO users (`admin_id`,`email`,`password`,`created_at`,`updated_at`)value('{$admin_id}','{$email}','{$hash_password}','{$created_at}','$updated_at')";
		
		$query = mysqli_query($this->con,$sql);
		
		if($query)
		{
			$user_id = mysqli_insert_id($this->con);

			//User Mapping
			$sql = "INSERT INTO user_map (`user_id`,`group_id`,`created_at`,`updated_at`)values('$user_id','3','$created_at','$updated_at')";
				mysqli_query($this->con,$sql);
			
			//Creating Employee
			$sql = "INSERT INTO employees (`admin_id`,`user_id`,`fname`,`lname`,`email`,`p_contact_no`,`s_contact_no`,`dob`,`role_id`,`password`,`designation`,`is_active`,`is_delete`,`created_at`,`updated_at`) values ('{$admin_id}','{$user_id}','{$fname}','{$lname}','{$email}','{$p_contact_no}','{$s_contact_no}','{$dob}','{$role_id}','{$password}','{$designation}','{$is_active}','{$is_delete}','{$created_at}','{$updated_at}')";
			
			$query = mysqli_query($this->con,$sql);
				
			if($query )
			{
				
				$id = mysqli_insert_id($this->con);
				return $id ;
			
			}
		
		}

		return false;

	}


	public function checkEmailExists($email)
	{
		$sql = "SELECT * FROM employees WHERE email = '$email' LIMIT 1";
		$query = mysqli_query($this->con, $sql);
	
		return mysqli_num_rows($query) > 0;
	}

	public function checkEmailExistsForOtherUsers($email, $id)
	{
		$sql = "SELECT COUNT(*) as count FROM employees WHERE email = '$email' AND id != $id";
		$query = mysqli_query($this->con, $sql);
		$row = mysqli_fetch_assoc($query);

		return $row['count'] > 0;
	}

	public function update($POST)
	{

		$id = $POST['id'];
		$fname = $POST['fname'];
		$lname = $POST['lname'];
		$email = $POST['email'];
		$p_contact_no = $POST['p_contact_no'];
		$s_contact_no = $POST['s_contact_no'];
		$dob = $POST['dob'];
		$designation = $POST['designation'];
		$role_id = $POST['role_id'];
		$password = $POST['password'];
		$hash_password = md5($password);
		$updated_at = date("Y-m-d H:i:s");

		$sql = "UPDATE employees SET `fname` = '{$fname}' , `lname` = '{$lname}', `email` = '{$email}', `p_contact_no`= '{$p_contact_no}', `s_contact_no` = '{$s_contact_no}', `dob`='{$dob}', `designation`='{$designation}',`role_id`='{$role_id}',`password`='{$password}', `updated_at` = '{$updated_at}' where id = ".$id;

		$query = mysqli_query($this->con,$sql);

		if($query )
		{
			if($id){
				
				$sql = "select admin_id from employees where id = ".$id;
				$query = mysqli_query($this->con,$sql);
				if(!empty($query))
				{
					if(mysqli_num_rows($query))
					{
						$employee = mysqli_fetch_assoc($query);
						$admin_id = $employee['admin_id'];
						$hash_password = md5($POST['password']);
						//Updating password in users
						$sql = "update `users` set `password` = '".$hash_password."' where id = ".$admin_id;
						mysqli_query($this->con,$sql);

					}
				}

			}	

			return true;
		}

		return false;

	}

	public function delete($POST){

		$id = $POST['id'];

		$sql ="UPDATE employees SET is_delete = 1 where id = ".$id;
		return mysqli_query($this->con,$sql);

	}

	public function getAllEmployees(){
		$admin_id = $_SESSION['admin_id'];
		$sql = "select * from employees where is_delete = 0 and admin_id = ".$admin_id;
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



	public function getEmployeeById($id)
	{
		$sql = "select e.*,r.title role_title from employees e INNER JOIN roles r ON r.id = e.role_id where e.id = ". $id;
		$query = mysqli_query($this->con,$sql);
		$data = mysqli_fetch_assoc($query);
		return $data;
	}

	

}	