
<!-- $conn=mysqli_connect('localhost','root','','signup');
if(isset($_POST['signup']) && $_POST['signup']=='username')
{
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$query=mysqli_query($conn,"insert into users_table set u_name='$name',u_email='$email',u_password='$password'");
} -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <h2 class="text-3xl font-bold text-center text-blue-600 mb-6">Signup Here</h2>
        <form action="signupprocess.php" method="GET">

            <!-- First Name Field (Required) -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="firstname">
                    Firstname <span class="text-red-500">*</span>
                </label>
                <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                       type="text" id="firstname" name="firstname" placeholder="Enter your first name" required autocomplete="given-name">
            </div>

            <!-- Last Name Field (Required) -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="lastname">
                    Lastname <span class="text-red-500">*</span>
                </label>
                <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                       type="text" id="lastname" name="lastname" placeholder="Enter your last name" required autocomplete="family-name">
            </div>

            <!-- Email Field (Required) -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="email">
                    Email <span class="text-red-500">*</span>
                </label>
                <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                       type="email" id="email" name="email" placeholder="Enter your email" required autocomplete="email">
            </div>

            <!-- Password Field (Required) -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="password">
                    Password <span class="text-red-500">*</span>
                </label>
                <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                       type="password" id="password" name="password" placeholder="Create a password" required autocomplete="new-password">
            </div>
            <!-- Father Name Field -->
             <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="fathername">Father's Name</label>
                <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                       type="text" id="fathername" name="fathername" placeholder="Enter your father's name" autocomplete="additional-name">
            </div>

            <!-- Date of Birth Field -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="dob">Date of Birth</label>
                <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                       type="date" id="dob" name="dob" placeholder="Select your date of birth">
            </div>

            <!-- Phone Field -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="phone">Phone</label>
                <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                       type="tel" id="phone" name="phone" placeholder="Enter your phone number" autocomplete="tel">
            </div>

            <!-- CNIC Number Field -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="cnic">CNIC Number</label>
                <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                       type="number" id="cnic" name="cnic" placeholder="Enter your CNIC number">
            </div>

            <!-- Address Field -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="address">Address</label>
                <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                       type="text" id="address" name="address" placeholder="Enter your address" autocomplete="street-address">
            </div>

            <!-- City Field -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="city">City</label>
                <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                       type="text" id="city" name="city" placeholder="Enter your city" autocomplete="address-level2">
            </div>

            <!-- Country Field -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="country">Country</label>
                <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                       type="text" id="country" name="country" placeholder="Enter your country" autocomplete="country-name">
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400" 
                        type="submit">
                    Signup
                </button>
                <!-- <p class="text-sm font-light text-center p-3 text-gray-600">
                    Already have an account? <a href="login.php" class="font-medium text-blue-600 hover:underline">Login here</a>
                </p> -->
            </div>
        </form>
    </div>
</body>
</html>
