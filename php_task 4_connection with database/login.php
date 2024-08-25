 <?php
include "connection.php";

session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id']; 
}else{
    $user_id = "";
}

if (isset($_POST['logButton'])) {

   $email = $_POST['email'];
   $email = filter_var($email , FILTER_SANITIZE_SPECIAL_CHARS);
   $password =$_POST['password'];
   $password = filter_var($password , FILTER_SANITIZE_SPECIAL_CHARS);
   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email=? AND password=?");
   $select_user->execute([$email , $password]);

   if ($select_user->rowCount() > 0) {
      $fetch_user_id = $select_user->fetch(PDO::FETCH_ASSOC);
      $_SESSION['user_id'] = $fetch_user_id['id'];
      header('location: profile.php');    
      exit;  
   }else{
    echo ' <div class="alert alert-warning" role="alert"> incorrect username or password </div> ';
   }

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
    <title>login now</title>
</head>

<body>

    <form class="w-50 m-auto mt-5" action="" method="post">
        <h1 class="mb-4 text-center">Login Now</h1>
    
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>


        <button type="submit" class="btn btn-success" name="logButton">Login</button>
        <p>do not have an account? <a href="login.php">register now</a></p>
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