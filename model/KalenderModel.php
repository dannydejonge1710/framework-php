<?php

function getOneBirthday($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM birthdays WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllBirthdays() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM birthdays ORDER BY month, day";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;


	return $query->fetchAll();
}

function createBirthday($data) 
{
	$person = ($data['person']);
	$day = ($data['day']);
	$month = ($data['month']);
	$year = ($data['year']);


	if (strlen($person) == 0 || strlen($day) == 0 || strlen($month) == 0 || strlen($year) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO birthdays(person, day, month, year) VALUES (:person, :day, :month, :year)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':person' => $person,
		':day' => $day,
		':month' => $month,
		':year' => $year));

	$db = null;
	
	return true;
}

function deleteBirthday($id) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM birthdays WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));
	
	$db = null;
	
	return true;
}



function editBirthday($data) 
{
	$person = ($data['person']);
	$day = ($data['day']);
	$month = ($data['month']);
	$year = ($data['year']);
	$id = ($data['id']);
	
	if (strlen($person) == 0 || strlen($day) == 0 || strlen($month) == 0 || strlen($year) == 0 || strlen($id) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE birthdays SET person = :person, day = :day, month = :month, year = :year WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':person' => $person,
		':day' => $day,
		':month' => $month,
		':year' => $year,
		':id' => $id));

	$db = null;
	
	return true;
}



