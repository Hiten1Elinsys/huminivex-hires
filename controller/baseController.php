<?php
// require_once("./helpers/utility.php");
class BaseController{

	
	use utility;

	public $email;
	public $password;
	public $con;
	public $base_url;
	function __construct(){
		require_once("./db_connect.php");
		$this->con = $con;
		$this->base_url =  "http://localhost/huminivexhires/"; 
	}

    public function getAllSkills(){
        $admin_id = $_SESSION['admin_id'];
        $sql = "select * from skills where admin_id = '{$admin_id }'";
		$query = mysqli_query($this->con,$sql);
        $data = [];
        if(mysqli_num_rows($query)>0){
            while($row = mysqli_fetch_assoc($query)){
                $data[] = $row; 
            }
        }
        return $data;
    }

}


?>