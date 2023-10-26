<?php
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'scholarship');
 $q="Select* from country";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 mysqli_close($con);
?>
<<!DOCUMENT HTML>
<html>
<head>
  <title>view exiten Country</title>
 
 <link rel="stylesheet" href="total.css"  />
</head>
<body>
<center>
  <h1>Country  Details</h1>

  <table   id="table_view" >
    <tr>
	 <th>Country ID</th>
	 <th>Country</th>
	 <th>Range</th>
	 <th>Specail Requirement</th>
	 <th>Student ID</th>
	</tr>
	<?php
	  for($i=1;$i<=$num;$i++)
	  {  $row=mysqli_fetch_array($result);
	  
	  ?>
	  
	  <tr>
	     <td><?php echo $row['cuid'] ; ?></td>
		 <td><?php echo $row['cname'] ; ?></td>
		 <td><?php echo $row['ranges'] ; ?></td>
		 <td><?php echo $row['specialR'] ; ?></td>
	     <td><?php echo $row['suid'] ; ?></td>
		 
	  </tr>
	  <?php  }
	  ?>
	  
   </table>  
   
   <center>
  </body>
</html>