
<!DOCTYPE html>
<html>
  <body>
<?php 
    include "header.php";

?>
<center>
	<br>
<fieldset>
    <!-- [SEARCH FORM] -->
    <form method="post" action="controller/findUser.php">
      <h1>SEARCH FOR USERS</h1>
      <input type="text" name="user_name" />
      <input type="submit" name="findUser" value="Search"/>
    </form>
    </fieldset>
    </center>




 
  </body>
</html>