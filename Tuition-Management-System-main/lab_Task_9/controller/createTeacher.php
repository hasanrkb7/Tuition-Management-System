<?php  
require_once '../model_a/model.php';


if (isset($_POST['createTeacher']))
{ 
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['password'] =$_POST['password'];
  $data['gender'] = $_POST['gender'];
	$data['ins'] = $_POST['ins'];
	$data['dep'] = $_POST['dep'];
  $data['dob'] = $_POST['dob'];
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
	{
    echo "The picture named ". basename( $_FILES["image"]["name"]). " has been uploaded.<br>";
  } 
  else 
  {
    echo "Sorry, there was an error uploading your file.";
  }

  if (addTeacher($data)) 
  {
  	echo '<br>Successfully added!!';
  }
} 
else 
{
	echo 'You are not allowed to access this page.';
}

?>