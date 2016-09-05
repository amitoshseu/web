<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form action="rentCar.php" method="post"" >
<table width="500" border="5" align="center" style="background-color:pink">
  <tr>
      <td colspan="5" align="center"><h1><font color="red">Book a Car</font></h1></td>
  </tr>  

  <tr>
      <td>Pickup Location:</td>
      <td><input type="text" name="location"  minlength="3"> </td>
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
   	<td>Phone Number</td>
   	<td><input type="text" name="phone"></td>
   </tr>

   <tr>
   	<td>Mobile Number</td>
   	<td><input type="text" name="mobile"></td>
   </tr>
   <tr>
   	<td>Permanent Address</td>
   	<td>
   	<textarea rows="3" cols="35">
	</textarea>
</td>
   </tr>
   <tr>
   	<td>Age</td>
   	<td>
	  <select>

      <?php
          for ($i=18; $i<=90; $i++)
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
      <!-- <td colspan="5" align="center" ><input type="button"  onclick="myFunction" name="submit" value="Book Now"></td> -->
      <td colspan="5" align="center"><button onclick="myFunction()" style="padding: 6px 12px; font-size: 14px; background-color: red; color: white;" type="submit">Book Now</button>
  </tr>
</table>
</form>
<div align="center">
<form action="cars.html" method="get" >
    <b ><input type="submit" style="padding: 7px 15px; font-size: 14px; background-color: #008CBA; color: white;" value="Back to Car galery" ></b>
</form>
</div>
      <script>
      function myFunction() {
          alert("Booking Successfully Done");
      }
      </script>

</body>
</html>