<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="rentCar.php" method="post" >
<table width="500" border="5" align="center">
  <tr>
      <td colspan="5" align="center"><h1>Book a Car</h1></td>
  </tr>  

  <tr>
      <td>Pickup Location:</td>
      <td><input type="text" name="location"></td>
  </tr>

   <tr>
   	<td>Pickup Date & time</td>
   	<td><input type="datetime-local"/></td>
   </tr>
   
   <tr>
   	<td>Return Date & time</td>	
   	<td><input type="datetime-local"/></td>
   </tr>
   
   <tr>
   	<td>Age</td>
   	<td>
	  <select>

      <?php
          for ($i=1; $i<=100; $i++)
          {
              ?>   
                  <option value="<?php echo $i;?>"><?php echo $i;?></option>
              <?php
          }
      ?>
    </select>
   	</td>
   </tr>  
  
  <tr>
      <td colspan="5" align="center" ><input type="submit"  name="submit" value="Book Now"></td>
  </tr>
  
</table>
</form>
</form>
</body>
</html>