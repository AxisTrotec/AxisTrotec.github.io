<?php
$isLoggedIn = isset( $_SESSION['administrator'] );
if ( $isLoggedIn ) {
	$name = $_SESSION['administrator']['first_name'] . ' ' . $_SESSION['administrator']['last_name'];
}

$profileName = $_SESSION['administrator']['first_name'] . ' ' . $_SESSION['administrator']['last_name'];
$profileEmail = $_SESSION['administrator']['email'];
$profilePhone = $_SESSION['administrator']['phone'];
?>

<!------------------------------------- END OF LINE ------------------------------------->

<nav>
	<a class="Nbutton" href="about.php">About Arc</a>
	<a class="Nbutton" href="ksmw.php">Arc KSMW</a>
	<a class="Nbutton" href="services.php">Our Service</a>


	<span class="text-white pt-1"> Welcome <?php echo $name ?>. 
	<a class="button" href="logout.php">Logout</a></span>

</nav>