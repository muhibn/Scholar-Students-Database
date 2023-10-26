<?php
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'scholarship');
 $q="Select * from student";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
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
  <h1>Students  Details  </h1>
  <form >
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
	  for($i=1;$i<=$num;$i++)
	  {  $row=mysqli_fetch_array($result);
	  
	  ?>
	  
	  <tr>
	     <td><?php echo $row['Suid'] ; ?></td>
		 <td><?php echo $row['sfirstname'] ; ?></td>
		 <td><?php echo $row['slastname'] ; ?></td>
		 <td><?php echo $row['datebirth'] ; ?></td>
	     <td><?php echo $row['gender'] ; ?></td>
		 <td><?php echo $row['familyincome'] ; ?></td>
		 <td><?php echo $row['email'] ; ?></td>
		 <td><?php echo $row['phone'] ; ?></td>
	  
	  
	  
	  
	  </tr>
	  <?php  }
	  ?>
	  
   </table>
   <center>
  </body>
</html>