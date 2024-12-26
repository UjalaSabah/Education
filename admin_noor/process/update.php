<?php
$conn=mysqli_connect('localhost','root','','registration');
$firstname=$_GET['firstName'];
$lastname=$_GET['lastName'];
$email=$_GET['email']; 
$password=$_GET['password'];
$fathername=$_GET['fatherName'];
$DOB=$_GET['dob'];   
$phone=$_GET['phone']; 
$CNICnumber=$_GET['CNICnumber'];
$address=$_GET['address'];
$city=$_GET['city']; 
$country=$_GET['country'];
$id=$_GET['id']; 
// echo $firstname;
// echo "<br>";
// echo $lastname;echo "<br>";
// echo $fathername;echo "<br>";
// echo $DOB;echo "<br>";
// echo $email;echo "<br>";
// echo $password;echo "<br>";
// echo $phone;echo "<br>";
// echo $CNICnumber;echo "<br>";
// echo $address;echo "<br>";
// echo $city;echo "<br>";
// echo $country;echo "<br>";
$query="UPDATE user_table SET Firstname='$firstname',Lastname='$lastname',Email='$email',Password ='$password',Fathername='$fathername', DOB='$DOB',Phone='$phone',CNICnumber='$CNICnumber',Address='$address', City='$city',Country='$country'  where id='$id'";
$execution=mysqli_query($conn,$query);
if($execution)
{
   header('Location:../form_table.php?msg=update');
   
}else
{
   header('Location:../form_table.php?msg=notupdate');
  
}
?>