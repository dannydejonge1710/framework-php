<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>Kalender/editSave" method="post">
	
		<input type="text" name="person" placeholder="Name">
		<input type="number" min= "1" max= "31" name="day" placeholder="Day">
		<input type="number" min= "1" max= "12" name="month" placeholder="Month">
		<input type="number" min= "1900" max= "2030" name="year" placeholder="Year">

		<input type="hidden" name="id" value="<?= $birthday['id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
