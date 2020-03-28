<?php
$sql = "SELECT * FROM cities";
$result = $conn->query($sql);
$users = [];
if ( $result->num_rows > 0 ) :
?>
<select class="form-control" name="city">
	<?php while ( $city = $result->fetch_assoc() ) : ?>
		<option value="<?php echo $city['city'] ?>" <?php echo $selectedCity == $city['city'] ? 'selected' : '' ?>><?php echo $city['city'] ?></option>
	<?php endwhile; ?>
</select>
<?php endif ?>