<div class="container">
	<h1>Create</h1>
	<form action="<?= URL ?>Kalender/createSave" method="post">
	
		<input required type="text" name="person" placeholder="Name">
		<input required type="number" min= "1" max= "31" name="day" placeholder="Day">
		<input required type="number" min= "1" max= "12" name="month" placeholder="Month">
		<input required type="number" min= "1900" max= "2030" name="year" placeholder="Year">

		<input type="submit" value="Verzenden">
	
	</form>

</div>