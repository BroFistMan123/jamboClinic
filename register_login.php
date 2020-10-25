<?php

	require_once('class/connectdb.php');
	require_once('class/functions.php');


	$condb= new connectdb('root','','sampledb');



	if (isset($_POST['signup'])) 
	{
		

		$check = $condb->checkAccountIfExist('accounts',$_POST['usern1']);
		if ($check!=0) 
		{
			echo "Account already exist";
		}
		else
		{
			$condb->insertData('accounts',
			array(

				"username"=>$_POST['usern1'],
				"password"=>$_POST['userp1']
			)
		);
			echo "successfully inserted";
		}
		
	}



	if (isset($_POST['login'])) 
	{
		
		$username=$_POST['usern'];
		$password=$_POST['userp'];

//function loginAccount($dbname,$username,$password)
		$check=$condb->loginAccount('accounts',$username,$password);
		

		if ($check==1) 
		{
			header("Location: home.php");
		}
		else
		{
			echo "account not found";
		}

		//echo 'the username is: '.$username. 'The passowrd is: '.$password;
	}

	//header("Location: home.php");



?>