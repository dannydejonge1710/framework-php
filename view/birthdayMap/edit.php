<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>Kalender/editSaveThis" method="post">
	
		<input type="text" name="person" placeholder="Name" value="<?= $birthdays['person'] ?>">
		<input type="number" min= "1" max= "31" name="day" placeholder="Day" value="<?= $birthdays['day'] ?>">
		<input type="number" min= "1" max= "12" name="month" placeholder="Month" value="<?= $birthdays['month'] ?>">
		<input type="number" min= "1900" max= "2030" name="year" placeholder="Year" value="<?= $birthdays['year'] ?>">

		<input type="hidden" name="id" value="<?= $birthdays['id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
