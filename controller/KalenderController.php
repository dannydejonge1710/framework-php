<?php

require(ROOT . "model/KalenderModel.php");

function index()
{
	render("birthdayMap/index", array(
		'birthdays' => getAllBirthdays()
	));
}

function create()
{
	render("birthdayMap/create");
}

function createSave()
{
	if (!createBirthday()) {
		header("Location:" . URL . "Error/index");
		exit();
	}


	header("Location:" . URL . "Kalender/index");
}

function deleteThis($id)
{
	if (!deleteBirthday($id)) {
		header("Location:" . URL . "Error/index");
		exit();
	}

	header("Location:" . URL . "Kalender/index");
}










function edit($id)
{
	render("birthdayMap/edit", array(
		'birthdays' => getOneBirthday($id)
	));
}

function editSave()
{
	if (!editBirthday()) {
		header("Location:" . URL . "Error/index");
		exit();
	}

	header("Location:" . URL . "Kalender/index");
} 