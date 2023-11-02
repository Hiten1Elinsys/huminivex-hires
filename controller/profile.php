<?php
class Users{

	public $email;
	public $password;
	public $con;
	public $base_url;
	function __construct(){
		require_once("../db_connect.php");
		$this->con = $con;
		$this->base_url =  "http://localhost/huminivexhires/"; 
	}

	public function login($email,$password,$rememberme){
		
		$this->email = $email;
		$this->password = md5($password);

		$sql = "select u.id,u.email,um.group_id,ug.title group_name from users u"; 
		$sql .= " INNER JOIN user_map um ON um.user_id = u.id";
		$sql .= " INNER JOIN user_group ug ON ug.id = um.group_id";
	    $sql .= "  where u.email = '$email' and u.password = '$this->password'";
		
		$query = mysqli_query($this->con,$sql);

		if(mysqli_num_rows($query)){
			$res = mysqli_fetch_assoc($query);
			$_SESSION['id'] = $res['id'];
			$_SESSION['email'] = $res['email'];
			$_SESSION['group_id'] = $res['group_id'];
			$_SESSION['group_name'] = $res['group_name'];
			
			if($rememberme)
			{
				setcookie("email", $res['email'] , time() + (86400 * 30*365), "/");
				setcookie("password", $password , time() + (86400 * 30*365), "/");
				setcookie("rememberme", true , time() + (86400 * 30*365), "/");
			}
			else{
				setcookie("email","", time() - 3600, "/");
				setcookie("password","", time() - 3600, "/");
				setcookie("rememberme", "" , time() - 3600, "/");
			}

			if($res['group_name'] == "admin"){
				$sql = "select * from recruiters where id = ".$res['id'];
				$query = mysqli_query($this->con,$sql);
				$_SESSION['user_image'] = "";
				if(mysqli_num_rows($query)){
					$res = mysqli_fetch_assoc($query);
					$_SESSION['recruiter'] = $res['name'];
					$_SESSION['recruiter_id'] = $res['id'];
					$_SESSION['user_image'] = $this->base_url."uploads/user/".$res['image'];
				}

			}
			return true;
		}
		else{
			return false;
		}
	}


	public function getUserDetailById($id){

		$sql = "select u.*,ug.title,ug.admin_id from users u inner join user_map um ON um.user_id = u.id INNER JOIN user_group ug ON ug.id = um.group_id where u.id = ".$id;
		$query = mysqli_query($this->con,$sql);
		$result = mysqli_fetch_assoc($query);
		$data = array('email'=>$result['email']);
		if(!empty($result['title']))
		{
			$title = $result['title'];
			if($title == "admin")
			{
				$sql = "select * from recruiters where id = ".$result['admin_id'];
				$query = mysqli_query($this->con,$sql);
				if(mysqli_num_rows($query))
				{
					$data1 = mysqli_fetch_assoc($query);
				} 
				$data = array_merge($data1,$data);
			}
			elseif($title == "client"){
				//Code
			}
			elseif($title == "employee"){
				//Code
			}
		}
		return $data;
	}


	public function update($POST,$FILES){

		// echo '<pre>';print_r($FILES);
		// echo '<pre>';print_r($POST);exit;

		$full_name = !empty($POST['full_name'])?$POST['full_name']:"";
		$email = !empty($POST['email'])?$POST['email']:"";
		$old_pass = !empty($POST['old_pass'])?$POST['old_pass']:"";	
		$new_pass = !empty($POST['new_pass'])?md5($POST['new_pass']):"";	
		$confirm_pass = !empty($POST['confirm_pass'])?$POST['confirm_pass']:"";	
		$user_id = $_SESSION['id'];
		$admin_id = $_SESSION['admin_id'];

		// Update recruiter
		$sql = "UPDATE `recruiters` SET `name` = '{$full_name}', `email` = '{$email}' where `id` = '{$admin_id}' ";
		$query = mysqli_query($this->con,$sql);
		if($query){

			//Updating session
			$_SESSION['recruiter'] = $full_name; 

			//Update user
			$sql = "UPDATE `users` SET `email` = '{$email}' , `password` = '{$new_pass}' where `id` = '{$user_id}'";
			$query = mysqli_query($this->con,$sql);
			
			//update image

			if(!empty($FILES['user_image']['name'])){
				
				$sql = "select image from recruiters  where  id =".$admin_id ;
				
				$query = mysqli_query($this->con,$sql);
				if(mysqli_num_rows($query)>0)
				{
					while($userImageData = mysqli_fetch_assoc($query)){
						$userImage = $userImageData['image'];
						if(!empty($userImage)){
							if(file_exists('../uploads/user/'.$userImage))
							{
								unlink('../uploads/user/'.$userImage);	
							}
						}
					}
				}
				

				$target_dir = "../uploads/user/";
				
				if (!is_dir($target_dir)) {
					//Create our directory if it does not exist
					mkdir($target_dir);
				}
				
				
				$userImage = basename($FILES["user_image"]["name"]);

				//check
				$temp = explode(".", $FILES["user_image"]["name"]);
				$userImage = round(microtime(true)).'.'. end($temp);

				$target_file = $target_dir . $userImage;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				
				if (move_uploaded_file($FILES["user_image"]["tmp_name"], $target_file)) {
					
					$sql = "UPDATE  recruiters SET `image` = '{$userImage}' where `id` ='{$admin_id}'";
					
					$query = mysqli_query($this->con,$sql);

					$_SESSION['user_image'] = $this->base_url."uploads/user/".$userImage;
				
				}
				else{
					echo 'ca';exit;
				}	
			}

			return true;
		}

		return false;

	}


	public function checkOldPassword($old_pass){
		$user_id = $_SESSION['id'];
		$hash_password = md5($old_pass);
		$sql = "select * from users where id =".$user_id." and password ='".$hash_password."'";	
		
		$query = mysqli_query($this->con,$sql);
		if(mysqli_num_rows($query)>0)
		{
			return true;
		}

		return false;

	}


}


?>