<?php 
   $scuid=$_POST['scuid'];
   $scname=$_POST['scname'];
   $college=$_POST['college'];
   $university=$_POST['university'];
   $course=$_POST['course'];
   $level=$_POST['level'];
   $cuid=$_POST['cuid'];
   $suid=$_POST['suid'];
   
 
  
   $con=mysqli_connect('localhost','root');
   mysqli_select_db($con,'scholarship');
   $q="INSERT INTO scholarship  values($scuid,'$scname','$college','$university','$course','$level',$cuid,$suid)";
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
	       echo  $scuid;
	      
	   ?>
	 </p>
	  Next <a href="insert in qualification.html"   />click here</a>
</body>
</html>