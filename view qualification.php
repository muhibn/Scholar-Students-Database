<?php
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'scholarship');
 $q="Select school,college,University,course,level,apg,suid from qualification";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 mysqli_close($con);
?>
<<!DOCUMENT HTML>
<html>
<head>
  <title>view exiten  Qualification </title>
 
 <link rel="stylesheet" href="total.css"  />
</head>
<body>
<center>
  <h1>Students Qualification</h1>

  <table   id="table_view" >
    <tr>
	 <th>School</th>
	 <th>Collge</th>
	 <th>University</th>
	 <th>course</th>
	 <th>Level of Education</th>
	 <th>percentage</th>
	 <th>Student ID</th>
	 
	</tr>
	<?php
	  for($i=1;$i<=$num;$i++)
	  {  $row=mysqli_fetch_array($result);
	  
	  ?>
	  
	  <tr>
	     <td><?php echo $row['school'] ; ?></td>
		 <td><?php echo $row['college'] ; ?></td>
		 <td><?php echo $row['University'] ; ?></td>
		 <td><?php echo $row['course'] ; ?></td>
	     <td><?php echo $row['level'] ; ?></td>
		 <td><?php echo $row['apg'] ; ?></td>
		 <td><?php echo $row['suid'] ; ?></td>
	
	  </tr>
	  <?php  }
	  ?>
	  
   </table>
   <center>
  </body>
</html>