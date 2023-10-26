<?php 
   
   $Suid=$_POST['Suid'];
   $sfirstname=$_POST['sfirstname'];
   $slastname=$_POST['slastname'];
   $familyincome=$_POST['familyincome'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $gender=$_POST['gender'];
   $date=$_POST['date'];
 
  
   $con=mysqli_connect('localhost','root');
   mysqli_select_db($con,'scholarship');
   $q="INSERT INTO  student VALUES($Suid,'$sfirstname','$slastname','$date','$gender',$familyincome,'$email','$phone')";
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
	       echo     $phone;
	   ?>
	 </p>
	  Next <a href="insert in Student.html"   />click here</a>
</body>
</html>