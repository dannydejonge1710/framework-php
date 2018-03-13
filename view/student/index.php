<div class="container">

	<?php foreach ($birthdays as $birthday) { 
		if ($month != $birthday['month'] ) {
			$month = $birthday['month'];
			echo "<h1>". date('F', mktime(0,0,0,$month,10)). "</h1>";
		}

		if ($day != $birthday['day'] ) {
			$day = $birthday['day'];
			$person = $birthday['person'];
			$year = $birthday['year'];
			echo "<h2>". $day . "</h2>";
			
			echo "<p><a href= '" . URL . "/student/editThis/"  . "' > ". $person ." " .$year . "</a>" .  "<a href= '" . URL . "/student/deleteThis/" . "' >" . " x" . "</a>" . "</p>";
		} 

	?>

	<?php } ?>

	<a href="<?= URL ?>student/create">Toevoegen</a>
</div>