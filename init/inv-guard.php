<?php
if ( ! isset( $_SESSION['individual'] ) ) {
	header( 'Location: login.php' );
}