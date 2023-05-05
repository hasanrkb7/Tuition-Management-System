<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>View Profile</title>
</head>

<body>
 
    <div class="menu">

        <?php 
         require_once 'controller/studentInfo.php';
         include 'header.php';
         $student = fetchStudent($_SESSION['uname']);
        ?>

    </div>
    
    <!-- redirecting to the signIn page if not logged in -->
    <?php

        if (!isset($_SESSION['uname'])) 
        {
            header('location:SignIn.php');
        }
    ?>
    <center>
       
            <fieldset style="width: 40%; ">
                <legend><b><h1>Profile:</h1></b></legend>
                 
                   

         <br>           
        <b>Name: </b><?php echo $student['Name'] ?><br>
        <b>Email:</b><?php echo $student['Email'] ?><br>
        <b>Username:</b><?php echo $student['Username'] ?><br>
        <b>Password:</b><?php echo $student['Password'] ?><br>
        <b>Gender:</b><?php echo $student['Gender'] ?><br>
        <b>TGender:</b><?php echo $student['TGender'] ?><br>
        <b>Current_Institution:</b><?php echo $student['Current_Institution'] ?><br>
        <b>Class:</b><?php echo $student['Class'] ?><br>
        <b>Phone_No:</b><?php echo $student['Phone'] ?><br>
        <b>Area:</b><?php echo $student['Area'] ?><br>
        <b>Sallery:</b><?php echo $student['Salary'] ?><br>
        <b>Date of birth:</b><?php echo $student['DOB'] ?><br><br>
    

                    <hr style="border: 0.1px solid;">
                    <a href="editProfile.php"><b>Edit Profile</b></a>
            </fieldset><br><br><br><br>
        
    </center>
    <div class="menu">
        <?php include 'Footer.php';
?>

</body>

</html>