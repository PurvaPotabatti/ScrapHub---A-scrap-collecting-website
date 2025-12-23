<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Management</title>
</head>
<body>

<?php
$conn = new mysqli("localhost", "root", "", "emp");

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["update"])) 
{
    $id = $_POST["id"];
    $name = $_POST["name"];
    $salary = $_POST["salary"];

    if(!empty($id) && !empty($name) && !empty($salary))
	{
    $sql = "UPDATE employee SET emp_name='$name', emp_salary='$salary' WHERE emp_id=$id";

    if ($conn->query($sql) === TRUE) 
	{
        echo "<script>alert('Record updated successfully');</script>";
    } 
	else 
	{
        echo "Error updating record: " . $conn->error;
    }
	}
	
	else
	{
		echo "No field must be empty";
	}
}

if (isset($_POST["delete"])) 
{
    $delete_id = $_POST["id"];
	
	if(!empty($delete_id))
	{
    $sql = "DELETE FROM employee WHERE emp_id=$delete_id";

    if ($conn->query($sql) === TRUE) 
	{
        echo "<script>alert('Record deleted successfully');</script>";
    } 
	else 
	{
        echo "Error deleting record: " . $conn->error;
    }
	}
	
	else
	{
		echo "Id is must";
	}
}

$conn->close();
?>

<form method="post" action="">
    ID = <input type="number"  name="id" ><br>
	Employee Name<input type="text"  name="name"><br>
    Salary<input type="text" name="salary" ><br>

    <button type="submit" name="update">Update</button>
	<button type="submit" name="delete">Delete</button>
</form>
</body>
</html>
