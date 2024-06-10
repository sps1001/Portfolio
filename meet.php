<?php
$con=mysqli_connect('localhost','root');
if($con){
	echo "connection successful";
}
else{
	echo "not connected";
}	
mysqli_select_db($con,'people');
$name = $_POST['name'];
$email = $_POST['mail'];
$subject = $_POST['subject'];
$message = $_POST['message'];

/*$checkbox1=$_POST['vehicle1'];


$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  

]
$dateofbirth = $_POST['dname'];
$city = $_POST['cname'];
$state = $_POST['stname'];
$pincode = $_POST['pname'];
$gendername = $_POST['gender'];
$mobilenumber = $_POST['mname'];

*/
$query = "insert into meet(name,mail,subject,message)
values('$name','$email','$subject','$message')";  


mysqli_query($con, $query);
header('location:index.php');
?>  