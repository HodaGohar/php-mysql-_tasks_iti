<?php
include "connection.php";

session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

if (isset($_POST['RegButton'])) {
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];
    $password = filter_var($password, FILTER_SANITIZE_SPECIAL_CHARS);
    $confirmPassword = $_POST['confirmPassword'];
    $confirmPassword = filter_var($confirmPassword, FILTER_SANITIZE_SPECIAL_CHARS);
    $image = $_FILES['image']['name'];
    $image = filter_var($image, FILTER_SANITIZE_SPECIAL_CHARS);
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = "./image/" . $image;

    // Check if image directory exists, if not create it
    if (!is_dir('./image/')) {
        mkdir('./image/', 0777, true); // Create the directory if it doesn't exist
    }

    // Check if the email already exists in the database
    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email=? ");
    $select_user->execute([$email]);

    if ($select_user->rowCount() > 0) {
        echo '<div class="alert alert-warning" role="alert">User email already exists</div>';
    } else {
        if ($password != $confirmPassword) {
            echo '<div class="alert alert-warning" role="alert">Confirm password does not match</div>';
        } else {
            // Insert user data into the database
            $insert_user = $conn->prepare("INSERT INTO `users`(name,email,password,image) VALUES (?,?,?,?)");
            if ($insert_user->execute([$name, $email, $password, $image])) {
                // Check if the image file was successfully uploaded
                if (!empty($image) && move_uploaded_file($image_tmp_name, $image_folder)) {
                    echo '<div class="alert alert-info" role="alert">New User Registered</div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">Failed to upload image</div>';
                }
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to register user</div>';
            }
        }
    }
    header("Location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <title>Register Now</title>
</head>

<body>

    <form class="w-50 m-auto my-5" action="" method="post" enctype="multipart/form-data">
        <h1 class="mb-4 text-center">Register Now</h1>
        <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input type="text" class="form-control" id="Name" name="name">
        </div>
        <div class="mb-3">
            <label for="Email1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" id="Password" name="password">
        </div>
        <div class="mb-3">
            <label for="ConfirmPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="ConfirmPassword1" name="confirmPassword">
        </div>
        <div class="mb-3">
            <label for="Image" class="form-label">Select Image</label>
            <input type="file" name="image" class="form-control" id="Image" accept="image/*">
        </div>
        <button type="submit" class="btn btn-success" name="RegButton">Register</button>
        <p>Already have an account? <a href="login.php">Login now</a></p>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
