<?php
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'scholarship');
 $q="Select* from scholarship";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 mysqli_close($con);
?>
<<!DOCUMENT HTML>
<html>
<head>
  <title>view exiten Scholarship</title>
 
 <link rel="stylesheet" href="total.css"  />
</head>
<body>
<center>
  <h1>Scholarship Details</h1>

  <table   id="table_view" >
    <tr>
	 <th>Scholarship ID</th>
	 <th>Scholarship</th>
	 <th>University</th>
	 <th>College</th>
	 <th>Course</th>
	 <th>Level</th>
	 <th>Country ID</th>
	 <th>Student ID</th>
	</tr>
	<?php
	  for($i=1;$i<=$num;$i++)
	  {  $row=mysqli_fetch_array($result);
	  
	  ?>
	  
	  <tr>
	     <td><?php echo $row['scuid'] ; ?></td>
		 <td><?php echo $row['scname'] ; ?></td>
		 <td><?php echo $row['University'] ; ?></td>
		 <td><?php echo $row['college'] ; ?></td>
		 <td><?php echo $row['course'] ; ?></td>
		 <td><?php echo $row['cuid'] ; ?></td>
	     <td><?php echo $row['suid'] ; ?></td>
		 
	  </tr>
	  <?php  }
	  ?>
	  
   </table>
   <center>
  </body>
</html>