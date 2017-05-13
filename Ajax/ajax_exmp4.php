<!DOCTYPE html>
<html>
<head>
<script>
  function showUser(str) {
    if (str=="") {
      document.getElementById("txtHint").innerHTML="";
      return;
    } 
    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    } else { // code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("txtHint").innerHTML=this.responseText;
      }
    }
    xmlhttp.open("GET","getuser.php?q="+str,true);
    xmlhttp.send();
  }
</script>
</head>
<body>

<form>
    <!-- <select name="users" onchange="showUser(this.value)">
    <option value="">Select a person:</option>
    <option value="1">Amitosh Gain</option>
    <option value="2">Arif Rabbani</option>
    <option value="3">Nezamuddin Rony</option>
 -->

  <select  name="users" onchange="showUser(this.value)">
  <option value="">Select a person:</option>
      <?php
        $con = mysqli_connect('localhost','root','mrgain','web_ajaxDb');
        if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
        }


          $query="select * from user";

          $res=mysqli_query($con,$query);
          
          while($row=mysqli_fetch_assoc($res))
          {
            echo '<option value="'.$row['id'].'"> '.$row['id']."&emsp;".$row['firstName']." ".$row['lastName'] .' </option>';
            //PASS ID NOT NAME
          }

          mysqli_close($con);
      ?>

</select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here.</b></div>

</body>
</html>