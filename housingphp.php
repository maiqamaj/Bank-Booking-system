<!DOCTYPE HTML>
<HTML>
<head>
<meta charset = "utf-8">
	<title></title>
	</head>
	<body>
<?php
if(isset($_POST['Name'])||isset($_POST['email'])||isset($_POST['phone_number']) ){
$Name=$_POST['Name'];
$national_number=$_POST['national_number'];
$email=$_POST['email'];
$phone_number=$_POST['phone_number'];
}
$connection = new mysqli("localhost","root","","housing bank");
$stmt = $connection->prepare("insert into bank_info(Name,national_number,email,phone_number) values(?,?,?,?);");
$stmt->bind_param("ssss",$Name,$national_number,$email,$phone_number);
$stmt->execute();
echo" <center><br><br>Name : $Name<center>"  ; 
echo" <center>National Number : $national_number<center>"  ; 
echo" <center>Email : $email<center>"  ; 
echo" <center>Phone Number : $phone_number <br><center>"  ; 


echo "<center><br>Your request has been successfully completed <br><center>";
echo'THANK YOU '; 

?>
 </body>

</HTML>