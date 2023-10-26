<?php 
   $suid=$_POST['suid'];
   
   $con=mysqli_connect('localhost','root');
   mysqli_select_db($con,'scholarship');
   $q1="delete from student where suid=$suid";
     $status1=mysqli_query($con,$q1);
   $q2="delete from   qualification where suid=$suid  ";
   $status2=mysqli_query($con,$q2);
   $q3="delete from country where  suid=$suid ";
     $status3=mysqli_query($con,$q3);
   $q4="delete from scholarship where suid=$suid ";
   $status4=mysqli_query($con,$q4);
   
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
  
       if($status1==1  && $status2==1  && $status4==1  && $status3==1  && $status4==1 )
		   echo "Deletes  successful";
	   else
		   echo  "Deletes  failed";
	      
	   ?>
	 </p>
	  Next <a href="Delete in Sudent.html"   />click here for  delete more </a>
</body>
</html>