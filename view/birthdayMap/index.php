<div class="container">

	<h1>Birthdays</h1>

	<?php foreach ($birthdays as $birthday) { 
		if ($month != $birthday['month'] ) {
			$month = $birthday['month'];
			echo "<h1>". date('F', mktime(0,0,0,$month,10)). "</h1>";
		}

		if ($day != $birthday['day'] ) {
			$id = $birthday['id'];
			$day = $birthday['day'];
			$person = $birthday['person'];
			$year = $birthday['year'];
			echo "<h2>". $day . "</h2>";
			
			echo "<p><a href=
			 '" . URL . "/Kalender/editThis/" . $id  . "' > " . $person ." " .$year . "</a>" .  "<a href= '" . URL . "/Kalender/deleteThis/" . $id . "' >" . " x" . "</a>" . "</p>";
		} 
	?>
	<?php } ?>

	<p><a href="<?= URL ?>Kalender/create">Toevoegen</a></p>
</div>