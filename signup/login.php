<?php
$conn=mysqli_connect('localhost','root','','registration');
session_start();

if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    header('Location: ./dashboard.php');
    exit(); // Stop further script execution
}

if(isset($_POST['signup']) && $_POST['signup']=='username')
{
    
$email=$_POST['email'];
$password=$_POST['password'];
// echo $email;exit;
// exit;


$query=mysqli_query($conn,"select * from user_table where Email='$email' AND Password='$password'");
$row=mysqli_fetch_assoc($query);
$num=mysqli_num_rows($query);
// echo $num;

if($num > 0)
{

    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['Firstname'];
   
   if($row['status']=='admin')
   {
      header('location:../admin_noor/index.php');
   }
   else
   {
    header('location:../index.php');
   }

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <h2 class="text-2xl font-bold text-center mb-6">Log In</h2>
        <form action="login.php" method="POST">
            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="email">Email</label>
                <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                       type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2" for="password">Password</label>
                <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                       type="password" id="password" name="password" placeholder="Enter your password" required>
            <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                       type="hidden" id="password" name="signup" value="username" required>
            </div>

            <!-- Submit Button -->
            <div>
                <button class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400" 
                        type="submit">
                    Log In
                </button>
            </div>
        </form>
    </div>
</body>
</html>
