<?php
if (isset($_POST['number'], $_POST['email'], $_POST['username'], $_POST['password'], $_POST['address'], $_POST['name'], $_POST['confirm-password'])) 
{
	require 'db_connection.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$address = $_POST['address'];
	$number = $_POST['number'];
	$confirm_pass = $_POST['confirm-password'];

	$customerCollection = $db->Customer;
	$lastId = $customerCollection->findOne([], ['sort' => ['_id' => -1]]);
	$lastIdNum = $lastId['_id'];
	if ($lastId == 0)
	{
		$lastIdNum == 202400000000;
	}

	$check_username = $customerCollection->findOne(['Username' => $user]);
	if ($check_username > 0) 
	{
		echo "<script>alert('Username already exists. Please choose a different username.'); window.location.href='Register_Add.php';</script>";
		exit;
	}


	if ($pass == $confirm_pass)
	{
		$pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
		
		$newEmployee = [
			'_id' => $lastIdNum + 1,
			'Name' => $name,
			'Email' => $email,
			'Username' => $user,
			'Password' => $pass,
			'Address' => $address,
			'Phone_Number' => $number
		];
	}
	else
	{
		echo "<script>alert('Password does not match.'); window.location.href='Register.php';</script>";
	}

	$result = $customerCollection->insertOne($newEmployee);
	if ($result->getInsertedCount() > 0) 
	{
		echo "<script>alert('Register Successful.'); window.location.href='index.php';</script>";
	} 
	else 
	{
		echo "<script>alert('Register Unsuccessful'); window.location.href='index.php';</script>";
	}
}
else 
{
	echo "<script>alert('All fields are required.'); window.location.href='Register.php';</script>";
}
?>
