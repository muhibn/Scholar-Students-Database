<?php 
   
   $cuid=$_POST['cuid'];
   $cname=$_POST['cname'];
   $ranges=$_POST['ranges'];
   $specailR=$_POST['specailR'];
  $suid=$_POST['suid'];
 
  
   $con=mysqli_connect('localhost','root');
   mysqli_select_db($con,'scholarship');
   $q="INSERT INTO country  values($cuid,'$cname',$ranges,'$specailR',$suid)";
   $status=mysqli_query($con,$q);
   mysqli_close($con);
   
 ?>
<!DOCUMENT HTML>
<html>
<head>
  <title>Insertion From </title>
 
</head>
<body>
  <h1>Registeration From </h1> 
  <p><?php 
       if($status==1)
		   echo "Your Registeration successful";
	   else
		   echo  "Your Registeration is  failed";
	      
	   ?>
	 </p>
	  Next <a href="insert in qualification.html"   />click here</a>
</body>
</html>