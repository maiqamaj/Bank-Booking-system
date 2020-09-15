<!DOCTYPE HTML>
<HTML>
<head>
<meta charset = "utf-8">
	<title></title>
	<style>
 		body { 

            background-image: url('https://www.rafeeg.ae/ar/wp-content/uploads/2020/01/Gray-PowerPoint-background-picture-scaled.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
              background-size: 100% 100%;

 		 }

	 .in {
                background: #000;
                padding: 7px;
                border: 2px outset #fafafa;
                color: #fafafa
            }
            .box1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #97a24e;
            width: 300px;
            padding: 30px;
            border-radius: 10px;

        }
    
        </style>
	</head>
	<body  >
	<div class="box1">
<?php
if(isset($_POST['Name'])||isset($_POST['email'])||isset($_POST['phone_number']) ||isset($_POST['national_number'])){
$Name=$_POST['Name'];
$national_number=$_POST['national_number'];
$email=$_POST['email'];
$phone_number=$_POST['phone_number'];
}
$connection = new mysqli("localhost","root","","cairo bank");
$stmt = $connection->prepare("insert into bank_info(Name,national_number,email,phone_number) values(?,?,?,?);");
$stmt->bind_param("ssss",$Name,$national_number,$email,$phone_number);
$stmt->execute();

echo" <center><br><br>Name : $Name<center>"  ; 
echo" <center>Email : $email<center>"  ; 
echo" <center>National Number : $national_number<center>"  ; 
echo" <center>Phone Number : $phone_number <br><center>"  ; 
echo "<center><br>Your request has been successfully completed <br><center>";
echo'<br>THANK YOU!<br><br><br><br>'; 
?>
   <center> <a href="http://localhost/bankbookingsystem.php"> <input type="button" class="in" style="min-width:80px" value="Back To Home Page"></a></center>
 </body>

</HTML>