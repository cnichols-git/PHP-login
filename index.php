
<?php 
include 'inc\head.php'; ?>

	<div class="test-form">
		<form action="welcome.php" method="post">
			Name: <input class="form-input" type="text" name="name"><br>
			E-mail: <input class="form-input" type="text" name="email"><br>
			Create User Name: <input class="form-input" type="text" name="uname">
			<input type="submit">
		</form>
	</div>
<?php include 'inc/footer.php'; ?>