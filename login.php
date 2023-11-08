<?php
session_start();
include "connectionString.php";
$stud_num = $password =  "";
$stud_numErr = $passwordErr  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

	if(isset($_POST["btnLogin"]))
	{
		if(empty($_POST["stud_num"]))
	    {
	        $stud_numErr = "*Student number is required!";
	    }
	    else
	    {
	        $stud_num = test_input($_POST["stud_num"]);
	    }

	    if(empty($_POST["password"]))
	    {
	        $passwordErr = "*Password is required!";
	    }
	    else
	    {
	        $password = test_input($_POST["password"]);
	    }

		if (!empty($stud_num) && !empty($password))
		{
		    $sql = "SELECT * FROM tbl_student WHERE stud_num = '$stud_num'";
		    $result = $conn->query($sql);

		    if ($result === false)
		    {
		        die("Error executing the query: " . $conn->error);
		    }

		    if ($result->num_rows > 0)
		    {
		        $row = $result->fetch_assoc();
		        $_password = $row["password"];
		        $user_level = $row["user_level"];
		        $stud_num = $row['stud_num'];
				$last_name = $row['last_name'];
				$first_name = $row['first_name '];
				$middle_name = $row['middle_name'];
				$_SESSION['stud_num'] = $stud_num;
				$_SESSION['$last_name'] = $$last_name;
				$_SESSION['first_name'] = $first_name;
				$_SESSION['middle_name'] = $middle_name;

		        if ($user_level == "Student" && $_password == $password)
		        {
					
		            header("Location: student/dashboard");
		            exit();
		        }
		        else
		        {
		            $passwordErr = "*Password is incorrect!";
		        }
		    }
		    else
		    {
		        $sql = "SELECT * FROM tbl_professor WHERE stud_num = '$stud_num'";
		        $result = $conn->query($sql);

		        if ($result === false)
		        {
		            die("Error executing the query: " . $conn->error);
		        }

		        if ($result->num_rows > 0)
		        {
		            $row = $result->fetch_assoc();
		            $_password = $row["password"];
		            $user_level = $row["user_level"];

		            if ($user_level == "Professor" && $_password == $password)
		            {
		                $_SESSION['stud_num'] = $stud_num;
						$_SESSION['last_name'] = $last_name;
						$_SESSION['first_name'] = $first_name;
		                header("Location: professor/dashboard");
		                exit();
		            }
		            else
		            {
		                $passwordErr = "*Password is incorrect!";
		            }
		        }
		        else
		        {
		            $stud_numErr = "*Student number is not registerd!";
		        }
		    }
		}
	}
	if(isset($_POST["btnSkip"]))
	{
		echo "<script>window.location.href='home.php';</script>";
	}
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<link rel="stylesheet" href="css/design_login.css">
</head>
<body>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="tab-form">
			<div class="tab-header">
				<a type="button" href="register">Register</a>
                <a type="button" class="active">Login</a>
			</div>
			<div class="tab-body">
				<div class="tab active" id="Login">
					<h2>Login</h2>
					<div class="form-input">
						<label>Studen Number</label>
						<span style="color: red;"><?php echo $stud_numErr; ?></span>
						<input type="number" name="stud_num" id="stud_num" placeholder="student number" value="<?php echo $stud_num; ?>">
					</div>
					<div class="form-input">
						<label>Password</label>
						<span style="color: red;"><?php echo $passwordErr; ?></span>
						<input type="password" name="password" id="password" placeholder="password" value="">
					</div>
					<div class="btn-primary">
						<input type="submit" name="btnLogin" value="Login">
						<input type="submit" value="Skip/Back" name="btnSkip" ></input>
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>
