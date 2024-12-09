<?php
require 'db_connection.php';

$collectionName = "Customer";

$username = $_POST['username'];
$password = $_POST['password'];

try 
{
    $collection = $db->$collectionName;

    $user = $collection->findOne(['Username' => $username]);

    if ($user) 
    {
        $hashed_password = $user['Password'];

        if (password_verify($password, $hashed_password)) 
        {
            $name = $user['Name'];
            $customerID = $user['_id'];
			
			session_start();
			$_SESSION['user_logged_in'] = true;
			$_SESSION['user_name'] = $username;
			$_SESSION['user_id'] = $customerID;
			$_SESSION['user_pass'] = $password;

			echo "<script>alert('Welcome " . $name . " to WalkingW'); 
			window.location.href = 'index.php';</script>";
			exit();
        } 
        else 
        {
            echo "<script>alert('Incorrect password.'); window.location.href = 'index.php';</script>";
            exit();
        }
    } 
    else 
    {
        echo "<script>alert('User not found.'); window.location.href = 'index.php';</script>";
        exit();
    }
} 
catch (Exception $e) 
{
    die("Error: " . $e->getMessage());
}
?>