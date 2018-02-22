<?php

require(ROOT . "model/StudentModel.php");

function index()
{
	render("student/index", array(
		'birthdays' => getAllBirthdays()
	));
}

function create()
{
	render("student/create");
}

function createSave()
{
	if (!createBirthday()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "student/index");
}

function deleteThis($id)
{
	if (!deleteBirthday($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	deleteBirthday($id);
	header("Location:" . URL . "student/index");
}











function editThis($id)
{
	render("student/edit", array(
		'student' => getOneBirthday($id)
	));
}

function editSaveThis()
{
	if (!editBirthday()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	editBirthday();
	header("Location:" . URL . "student/index");
} 


