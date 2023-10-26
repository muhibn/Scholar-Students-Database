<?php

 $suid=$_POST['suid'];
 
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'scholarship');
 $q1="Select * from student where suid=$suid ";
 $result1=mysqli_query($con,$q1);
  $num1=mysqli_num_rows($result1);
  
 $q2="Select * from qualification  where suid=$suid ";
 $result2=mysqli_query($con,$q2);
  $num2=mysqli_num_rows($result2);
  
 $q3="Select * from country   where suid=$suid ";
 $result3=mysqli_query($con,$q3);
  $num3=mysqli_num_rows($result3);
  
 $q4="Select * from scholarship  where suid=$suid ";
 $result4=mysqli_query($con,$q4);
  $num4=mysqli_num_rows($result4 );
 
 mysqli_close($con);
?>
<<!DOCUMENT HTML>
<html>
<head>
  <title>view exiten Students</title>
 
 <link rel="stylesheet" href="total.css"  />
</head>
<body>
<center>
  <h1>Students Information   </h1>
  <table   id="table_view" >
    <tr>
	 <th> Students ID</th>
	 <th>First Name </th>
	 <th>Last Name</th>
	 <th>Date Birth</th>
	 <th>gender</th>
	 <th>famialy income </th>
	 <th>email</th>
	 <th>phone Number </th>
	</tr>
	<?php
	  for($i=1;$i<=$num1;$i++)
	  {  $row1=mysqli_fetch_array($result1);
	  
	  ?>
	  <tr>
	     <td><?php echo $row1['Suid'] ; ?></td>
		 <td><?php echo $row1['sfirstname'] ; ?></td>
		 <td><?php echo $row1['slastname'] ; ?></td>
		 <td><?php echo $row1['datebirth'] ; ?></td>
	     <td><?php echo $row1['gender'] ; ?></td>
		 <td><?php echo $row1['familyincome'] ; ?></td>
		 <td><?php echo $row1['email'] ; ?></td>
		 <td><?php echo $row1['phone'] ; ?></td>
	  
	  
	  
	  
	  </tr>
	  <?php  }
	  ?>
	  
   </table>
   
   <h1>Quelification Information   </h1>
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
	  for($i=1;$i<=$num2;$i++)
	  {  $row2=mysqli_fetch_array($result2);
	  
	  ?>
	  
	  <tr>
	     <td><?php echo $row2['school'] ; ?></td>
		 <td><?php echo $row2['college'] ; ?></td>
		 <td><?php echo $row2['University'] ; ?></td>
		 <td><?php echo $row2['course'] ; ?></td>
	     <td><?php echo $row2['level'] ; ?></td>
		 <td><?php echo $row2['apg'] ; ?></td>
		 <td><?php echo $row2['suid'] ; ?></td>
	
	  </tr>
	  <?php  }
	  ?>
	  
   </table>
   <h1>Country Information   </h1>
   <table   id="table_view" >
    <tr>
	 <th>Country ID</th>
	 <th>Country</th>
	 <th>Range</th>
	 <th>Specail Requirement</th>
	 <th>Student ID</th>
	</tr>
	<?php
	  for($i=1;$i<=$num3;$i++)
	  {  $row3=mysqli_fetch_array($result3);
	  
	  ?>
	  
	  <tr>
	     <td><?php echo $row3['cuid'] ; ?></td>
		 <td><?php echo $row3['cname'] ; ?></td>
		 <td><?php echo $row3['ranges'] ; ?></td>
		 <td><?php echo $row3['specialR'] ; ?></td>
	     <td><?php echo $row3['suid'] ; ?></td>
		 
	  </tr>
	  <?php  }
	  ?>
	  
   </table>
   <h1>Scholarship   Information   </h1>
   
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
	  for($i=1;$i<=$num4;$i++)
	  {  $row4=mysqli_fetch_array($result4);
	  
	  ?>
	  
	  <tr>
	     <td><?php echo $row4['scuid'] ; ?></td>
		 <td><?php echo $row4['scname'] ; ?></td>
		 <td><?php echo $row4['University'] ; ?></td>
		 <td><?php echo $row4['college'] ; ?></td>
		 <td><?php echo $row4['course'] ; ?></td>
		 <td><?php echo $row4['cuid'] ; ?></td>
	     <td><?php echo $row4['suid'] ; ?></td>
		 
	  </tr>
	  <?php  }
	  ?>
	  
   </table>
   <center>
  </body>
</html>