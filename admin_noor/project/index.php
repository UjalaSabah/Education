<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 3 Form</title>
    <!-- Bootstrap 3 CDN -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
</head>
<body>

<div class="container">
    <h2>Student Registration From</h2>
    <form action="data.php" method="POST">

        <!-- Name Input -->
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="user_name">
        </div>
        <div class="form-group">
            <label for="name">F.Name:</label>
            <input type="text" class="form-control" id="Fname" placeholder="Enter your Fname" name="user_Fname">
        </div>
        <!-- Email Input -->
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" name="user_email">
        </div>

        <!-- Password Input -->
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="user_password">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

<!-- jQuery and Bootstrap JS -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

</body>
</html>
