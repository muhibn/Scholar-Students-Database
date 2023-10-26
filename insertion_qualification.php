<?php 
   
   $school=$_POST['school'];
   $college=$_POST['college'];
   $university=$_POST['university'];
   $level=$_POST['level'];
   $course=$_POST['course'];
   $apg=$_POST['apg'];
   $suid=$_POST['suid'];
 
  
   $con=mysqli_connect('localhost','root');
   mysqli_select_db($con,'scholarship');
   $q=" 
insert  into qualification(school,college , university,level,course,apg,suid) values ('$school','$college','$university','$level','$course',$apg,$suid)";
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