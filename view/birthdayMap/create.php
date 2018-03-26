<div class="container">
	<form action="<?= URL ?>Kalender/createSave" method="post">
	
		<input type="text" name="person" placeholder="Name">
		<input type="number" min= "1" max= "31" name="day" placeholder="Day">
		<input type="number" min= "1" max= "12" name="month" placeholder="Month">
		<input type="number" min= "1900" max= "2030" name="year" placeholder="Year">

		<input type="submit" value="Verzenden">
	
	</form>

</div>