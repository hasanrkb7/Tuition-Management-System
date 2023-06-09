<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>Edit profile</title>
</head>

<script type="text/javascript">

        function validateForm() 
        {
            var minNumberofChars = 5;
            var maxNumberofChars = 16;
            var regularExpression  =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
            var onlyLetters = /[^A-Z a-z]/g;
            const mailformat = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            var name=document.Form.name.value;  
            var email=document.Form.email.value;
            var ins=document.Form.ins.value;  
            var phone=document.Form.phone.value;


            if (name == null || name == "") 
            {
                alert("Name can't be blank");
                return false;
            }
            else if(onlyLetters.test(name)) 
            {  
              alert("Name can contain letters only");  
              return false;  
            }
            else if (email == null || email == "") 
            {
                alert("Email can't be blank");
                return false;
            }
            else if (!mailformat.test(email)) 
            {
                alert("Enter valid email");
                return false;
            }
            else if(onlyLetters.test(ins)) 
            {  
              alert("Enter valid Institution name.");  
              return false;  
            }
            else if (phone == null || phone == "") 
            {  
              alert("Phone no can't be blank.");  
              return false;  
            }

        }
        
    </script>



<body>

    <div class="menu">
         <?php include 'header.php';?>
    </div>


<?php
if (!isset($_SESSION['uname'])) 
{
    header('location:SignIn.php');
} 
?>


    <?php 
         require_once 'controller/studentInfo.php';
         $student = fetchStudent($_SESSION['uname']);

    ?>

    <center>
            <div class="container" style="width:500px;">


<fieldset style="width: 400px; "><legend><b><h1> Edit Profile :</h1></b></legend>

                        
<form name="Form" action="controller/updateStudent.php" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">

  <label for="name">Name:</label>
  <input value="<?php echo $student['Name'] ?>" type="text" id="name" name="name"><br><br>

  <label for="email">Email:</label>
  <input value="<?php echo $student['Email'] ?>" type="text" id="email" name="email"><br><br>

  <label for="ins">Current_Institution:</label>
  <input value="<?php echo $student['Current_Institution'] ?>" type="text" id="ins" name="ins"><br><br>

  <label for="phone">Phone No:</label>
  <input value="<?php echo $student['Phone'] ?>" type="number" id="phone" name="phone"><br><br>

  <input type="submit" name = "updateStudent" value="Update">
 
</form> 
</fieldset><br><br><br><br>
        </div>
                    
    </center>

<div class="menu">
        <?php include 'Footer.php';?>
</div>

</body>
</html>