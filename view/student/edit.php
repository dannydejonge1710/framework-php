<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>student/editSaveThis" method="post">
	
		<input type="text" name="person" placeholder="danny">
		<input type="number" min= "1" max= "31" name="day" placeholder="17">
		<input type="number" min= "1" max= "12" name="month" placeholder="10">
		<input type="number" min= "1900" max= "2030" name="year" placeholder="1996">

		<input type="hidden" name="id" value="<?= $birthday['id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
