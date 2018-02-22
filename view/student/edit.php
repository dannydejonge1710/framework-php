<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>student/editSaveThis" method="post">
	
		<input type="text" name="person" placeholder="danny">
		<input type="number" name="day" placeholder="17">
		<input type="number" name="month" placeholder="10">
		<input type="text" name="year" placeholder="1996">

		<input type="hidden" name="id" value="<?= $birthday['id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
