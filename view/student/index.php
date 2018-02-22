<div class="container">
	<table>
		<tr>
			<th>Id</th>
			<th>Person</th>
			<th>Day</th>
			<th>Month</th>
			<th>Year</th>
			<th colspan="2">Actie</th>
		</tr>
	

		<?php foreach ($birthdays as $birthday) { ?>


	
		<tr>
			<td><?= $birthday['id']; ?></td>
			<td><?= $birthday['person']; ?></td>
			<td><?= $birthday['day']; ?></td>
			<td><?= $birthday['month']; ?></td>
			<td><?= $birthday['year']; ?></td>

			<td><a href="<?= URL ?>student/editThis/<?= $birthday['id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>student/deleteThis/<?= $birthday['id'] ?>">Delete</a></td>
		</tr>

		<?php } ?>

	</table>
	<a href="<?= URL ?>student/create">Toevoegen</a>
</div>