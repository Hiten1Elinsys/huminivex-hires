<?php
class Roles{

	
	public $con;
	function __construct(){
		include("../db_connect.php");
		$this->con = $con;
	}

	public function getAllModules(){
		$sql = "select id,title from modules where id>0 and is_delete = 0 and is_active = 1";
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
		$title = $POST['title'];
		$role = json_encode($POST['role']);
		$is_active = 1;
		$is_delete = 0;
		$created_at = date("Y-m-d H:i:s");
		$updated_at = date("Y-m-d H:i:s");

		$sql = "INSERT INTO roles (`admin_id`,`title`,`role`,`is_active`,`is_delete`,`created_at`,`updated_at`) values('$admin_id','$title','$role','$is_active','$is_delete','$created_at','$updated_at') ";
		
		$query = mysqli_query($this->con,$sql);

		if($query )
		{
			$id = mysqli_insert_id($this->con);
			return $id ;
		}

		return false;

	}


	public function update($POST)
	{

		$id = $POST['id'];
		$title = $POST['title'];
		$role = json_encode($POST['role']);
		$updated_at = date("Y-m-d H:i:s");

		$sql = "UPDATE roles SET `title` = '{$title}' , `role` = '{$role}', `updated_at` = '{$updated_at}' where id = ".$id;
		
		return  mysqli_query($this->con,$sql);

	}

	public function delete($POST){

		$id = $POST['id'];

		$sql ="UPDATE roles SET is_delete = 1 where id = ".$id;

		return mysqli_query($this->con,$sql);

	}

	public function getAllRoles(){

		$admin_id = $_SESSION['admin_id'];
		$sql = "select id,title,role from roles where is_delete = 0 and admin_id = ".$admin_id." order by id desc";
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

	public function getRoleById($id)
	{
		$sql = "select id, title, role from roles where id = ". $id;
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

}	