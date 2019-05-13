<?php
include_once "config.php";

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if(!$connection){
	throw new Exception("Cannot connect to database");
}else{
	echo "Connected<br/>";
	//insert a record
	//INSERT INTO tasks (task, date) VALUES ('Do something','2019-05-10');
	//echo mysqli_query($connection, "INSERT INTO tasks ( task, date) VALUES ('Do something more','2019-05-11')");
	//SELECT * FROM tasks
	/*$result = mysqli_query($connection,"SELECT * FROM tasks");
	while($data = mysqli_fetch_assoc($result)){
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}*/
	//mysqli_query($connection, 'DELETE FROM tasks');
	mysqli_close($connection);
}