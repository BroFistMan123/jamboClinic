<?php

$servername= "localhost";
$dBUsername="root";
$dBPassword="";
$dBName="jclinic";

$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if(!$conn){
	die("Connection Failed: ".mysqli_connect_error());
}
?>


<!-- <?php

	// require_once('functions.php');

	// class connectdb
	// {	
	// 	public $db;
	// 	function __construct($username,$password,$database)
	// 	{
	// 		$user="root";
	// 		$pass="";
	// 		$this->db="jclinic";

	// 		$this->db = new mysqli('localhost',$user,$pass,$this->db) or die("unable to connect");
	// 		if ($this->db->connect_error) 
	// 		{
	// 			die("connection failed; ".$db-> connect_error);
	// 		}
	// 	}
		
	// 	function loginAccount($dbname,$username,$password)
	// 	{
	// 		$s= "SELECT id FROM $dbname WHERE username='$username' AND password='$password'";
	// 		$result=mysqli_query($this->db,$s);
	// 		$num=mysqli_num_rows($result);
	// 		$id=mysqli_fetch_assoc($result);
	// 		return $num.'-'.$id['id'];
	// 	}
	// 	function checkAccountIfExist($dbname,$username)
	// 	{
	// 		$s= "SELECT id FROM $dbname WHERE username='$username'";
	// 		$result=mysqli_query($this->db,$s);
	// 		$num=mysqli_num_rows($result);
	// 		return $num;
	// 	}

	// 	function resultRowAsArray($dbname,$id){


	// 		$value=[];

	// 		$sql="SELECT * FROM $dbname WHERE account_id=$id";
	// 		$result=mysqli_query($this->db,$sql);
	// 		$counter=0;
	// 		while ($row = mysqli_fetch_row($result))
	// 		{	
	// 			for ($i=0; $i <count($row); $i++) { 
	// 				$value[$counter][$i]=$row[$i];
	// 			}
	// 			$counter++;
	// 		}
			
	// 		return $value;
			
	// 	}

	// 	function insertData($dbname,$arrayInfo)
	// 	{
	// 		$colRow=explode("/",queryArranger($arrayInfo));
	// 		$this->db->query(
	// 		"INSERT INTO `$dbname` ($colRow[1]) VALUES 
	// 		($colRow[0])");

	// 	}

	// 	function updatedataID($dbname,$data,$id)
	// 	{	
	// 		$values=queryArrangerForUpdate($data);

	// 		 mysqli_query($this->db,("UPDATE `$dbname` SET
	// 		 $values 
	// 		 WHERE id=$id"));

	// 	}
	// 	function updatedataUSERNAME($dbname,$data,$username)
	// 	{	
	// 		$values=queryArrangerForUpdate($data);
	// 		echo $values;
	// 		 mysqli_query($this->db,("UPDATE `$dbname` SET
	// 		 $values 
	// 		 WHERE username='$username'"));

	// 	}
	// 	function deleteData($dbname,$id)
	// 	{	
	// 		 mysqli_query($this->db,("DELETE FROM `$dbname` WHERE id=$id"));
				
	// 	}

    // }


?> -->