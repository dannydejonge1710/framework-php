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
	if (!createBirthday($_POST)) {
		header("Location:" . URL . "error/index");
		exit();
	}


	header("Location:" . URL . "Kalender/index");
}

function deleteThis($id)
{
	if (!deleteBirthday($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Kalender/index");
}










function editThis($id)
{
	render("birthdayMap/edit", array(
		'birthdays' => getOneBirthday($id)
	));
}

function editSaveThis()
{
	if (!editBirthday($_POST)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Kalender/index");
} 