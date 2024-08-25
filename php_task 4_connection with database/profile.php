<?php
include "connection.php";

session_start();
if (!isset($_SESSION['user_id'])) {
    header("location: login.php");
    exit;
}
$user_id = $_SESSION['user_id'];

$select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ? ");
$select_profile->execute([$user_id]);


if ($select_profile->rowCount() > 0) {

    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
    echo '  <div class="alert alert-info" role="alert">user found</div>';
} else {
    echo  ' <div class="alert alert-warning" role="alert">user not found</div>';
}
// print_r($fetch_profile);
// exit;

?>
<style type="text/css">
    <?php include 'style.css'; ?>
</style>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css"> -->

    <title>profile page</title>
</head>

<body>
    <section>
        <h1>My Profile</h1>
        <div class="container">
            <img src="./image/<?= $fetch_profile['image']; ?>" alt="profile page">
         

            <p><strong>Name : </strong><?php echo $fetch_profile['name']; ?></p>
            <p class="email"><strong>Email : </strong><?php echo $fetch_profile['email']; ?></p>

        </div>
    </section>

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