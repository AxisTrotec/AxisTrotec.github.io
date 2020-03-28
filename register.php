<?php
require_once ('init/db-connection.php');

if ( $_POST ) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = $_POST['lastname'];

    $sql = "INSERT INTO administrator VALUES ('$username', '$password', '$firstname', '$lastname')";
    $result = $conn->query($sql);
    if ( $result ) {
        $successMsg = "Congratulation! Your account is ready to use. Happy sending. (Note: Your address is set to nothing. Please change it.) ";
        header( 'Location: index.php' );
        } else {
            $errMsg =  $conn->error;
        }
    }
?>

<!------------------------------------- END OF LINE ------------------------------------->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    
    <title> Arc Kanban </title>
</head>
<body>

<a href="index.php"> <div id="lines" > <h1> ARC </h1> </div> </a>
<?php include('inc/msg.php') ?>

<form class="form-signin" method="post" style="position: absolute; top: 50%;left: 50%;transform: translate(-50%,-50%);" action="register.php">

    <h1> Register -</h1>

    <label for="username" class="label">Email address</label>
    <input type="username" id="username" class="form-control" placeholder="Username" name="username" required autofocus>

    <br>

    <label for="password" class="label">Password</label>
    <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>

    <br>

    <label for="firstname" class="label">First Name</label>
    <input type="text" id="firstname" class="form-control" placeholder="First Name" name="firstname" required>

    <br>

    <label for="lastname"  class="label">Last Name</label>
    <input type="text" id="lastname" class="form-control" placeholder="Last Name" name="lastname" required>

    <br>

    <button type="submit" class="button"> Register </button>
    <a class="button" href="login.php"> Sign In </a>
</form>

<?php require_once('init/db-close-connection.php') ?>

</body>
</html>