<?php
require_once ('init/db-connection.php');

$isLoggedIn = isset( $_SESSION['administrator'] );
if ( $isLoggedIn ) {
    header( "location: index.php" );
}

if( $_POST ) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM administrator WHERE name = '$name'";

    $result = $conn->query( $sql );
    if ( $result->num_rows > 0 ) {
        $user = $result->fetch_assoc();
        $isPasswordCorrect = password_verify($password, $user['password'] );

        if ( $isPasswordCorrect ) {
            header( "Location: index.php");
        } else {
	        $errMsg = "<div id='lines' > Your username or password is not correct. Please try again. </div>";
        }
    } else {
	    $errMsg = "<div id='lines' > There is no account tied to this email address. Please register. </div>";
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

<form class="form-signin" method="post" action="login.php">

    <h1> LOGIN -</h1>

    <label for="login-email" class="label"> Email address </label>
    <input type="name" placeholder="Username" class="form-control" name="name" required autofocus>
        <br>
    <label for="password" class="label" >Password</label>
    <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>

    <br>

    <input type="hidden" name="operation" value="login">
    <button type="submit" class="button"> Sign in </button>
    <a class="button" href="register.php"> Register </a>
</form>

<?php require_once('init/db-close-connection.php') ?>

</body>
</html>