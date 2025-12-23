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

$name = $salary = "";

if (isset($_POST["insert"])) 
{    
        $name = $_POST["name"];
        $salary = $_POST["salary"];
    
	if(!empty($name) && !empty($salary))
	{
        $sql = "INSERT INTO employee (emp_name, emp_salary) VALUES ('$name', '$salary')";

        if ($conn->query($sql) === TRUE) 
		{
            echo "<script>alert('Record inserted successfully');</script>";
        } 
		else 
		{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
	}
    else
    {
		echo "No field must be empty";
	}		
    
}

// Display data from database upon button click
if (isset($_POST["display"])) 
{
    $sql = "SELECT * FROM employee";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
	{
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Salary</th></tr>";
        while ($row = $result->fetch_assoc()) 
		{
            echo "<tr><td>" . $row["emp_id"] . "</td><td>" . $row["emp_name"] . "</td><td>" . $row["emp_salary"] . "</td></tr>";
        }
        echo "</table>";
    } 
	else 
	{
        echo "0 results";
    }
}
$conn->close();

?>

<form method="post" action="">
    Employee Name<input type="text"  name="name"><br>
    Salary<input type="text" name="salary" ><br>

    <button type="submit" name="insert" required>Insert</button>
    <button type="submit" name="display" required>Display</button>
</form>
</body>
</html>
