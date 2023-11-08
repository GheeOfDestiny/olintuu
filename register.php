<?php

include "connectionString.php";
session_start();
$first_name = $middle_name = $last_name = $user_level =  $stud_num = $password = "";
$first_nameErr = $middle_nameErr = $last_nameErr = $user_levelErr = $stud_numErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

	if(isset($_POST["btnRegister"]))
	{

		if(empty($_POST["first_name"]))
		{
			$first_nameErr = "*First name is required!";
		}
		else
		{
			$first_name = test_input($_POST["first_name"]);
		}

		if(empty($_POST["middle_name"]))
		{
			$middle_nameErr = "*Middle Name is required!";
		}
		else
		{
			$middle_name = test_input($_POST["middle_name"]);
		}

		if(empty($_POST["last_name"]))
		{
			$last_nameErr = "*Last Name is required!";
		}
		else
		{
			$last_name = test_input($_POST["last_name"]);
		}

		if(empty($_POST["user_level"]))
		{
			$user_levelErr = "*Role is required!";
		}
		else
		{
			$user_level = test_input($_POST["user_level"]);
		}

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


		    
			if($user_level ==='Student')
			{

				$sql = "SELECT * FROM tbl_student WHERE stud_num = '$stud_num'";
        		$result=$conn->query($sql);

        		if($result->num_rows > 0)
				{
					$stud_numErr = "*This student number is already exist!";
				}
				else
				{
					$sql ="INSERT INTO tbl_student(first_name, middle_name, last_name, user_level, stud_num, password) VALUES('" . $first_name . "','" . $middle_name . "','" . $last_name . "','" . $user_level . "','" . $stud_num . "','" . $password . "')";
					if($conn->query($sql) === TRUE)
					{
						$conn->close();

						echo "<script>window.location.href='login';</script>";
					}
					else
					{
						$conn->close();
						echo "sad";
					}
				}
			}


			$sql = "SELECT * FROM tbl_professor WHERE stud_num = '$stud_num'";
        	$result=$conn->query($sql);

        	if($result->num_rows > 0)
			{
				$stud_numErr = "*This student number is already exist!";
			}
			else
			{
				if($user_level ==='Professor')
				{
					include "connectionString.php";
					$sql ="INSERT INTO tbl_professor(first_name, middle_name, last_name, user_level, stud_num, password) VALUES('" . $first_name . "','" . $middle_name . "','" . $last_name . "','" . $user_level . "','" . $stud_num . "','" . $password . "')";
					if($conn->query($sql) === TRUE)
					{
						echo "<script>window.location.href='login';</script>";
					}
					else
					{
						$conn->close();
						echo "sad";
					}
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
<script>
	function isNumberKey(evt)
	{
		var charCode = (evt.which) ? evt.which : event.keyCode

		if(charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
	}
</script>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<link rel="stylesheet" href="css/design_register.css">
</head>
<body>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
		<div class="tab-form">
			<div class="tab-header">
				<a type="button" class="active">Register</a>
                <a type="button" href="login">Login</a>
			</div>
			<div class="tab-body">
				<div class="tab active" id="Register">
					<h2>Create an Account</h2>
					<div class="form-input">
						<label>First Name</label>
						<span style="color: red;"><?php echo $first_nameErr; ?></span>
						<input type="text" name="first_name" id="first_name" placeholder="First Name" value="<?php echo $first_name; ?>">
						
					</div>
					<div class="form-input">
						<label>Middle Name</label>
						<span class=".error" style="color: red;"><?php echo $middle_nameErr; ?></span>
						<input type="text" name="middle_name" id="middle_name" placeholder="Middle Name" value="<?php echo $middle_name; ?>">
						
					</div>
					<div class="form-input">
						<label>Last Name</label>
						<span class=".error" style="color: red;"><?php echo $last_nameErr; ?></span>
						<input type="text" name="last_name" id="last_name" placeholder="Last Name" value="<?php echo $middle_name; ?>">
						
					</div>
					<div class="form-input">
						<label>Do you have any background in PHP?</label>
						<span style="color: grey;">Optional</span>
						<div value="<?php echo $background; ?>">
							<select name="background" id="background" value="<?php echo $background; ?>">
							<option name="background" id="background" value="">-----</option>
							<option name="background" id="background" value="Yes">Yes</option>
							<option name="background" id="background" value="Yes">No</option>
						</select>
							
						</div>
					</div>
					<div class="form-input">
						<label>Select a role</label>
						<span style="color: red;"><?php echo $user_levelErr; ?></span>
						<select name="user_level" id="user_level" value="<?php echo $background; ?>">
							<option name="user_level" id="user_level" value="">-----</option>
							<option name="user_level" id="user_level" value="Student">Student</option>
							<option name="user_level" id="user_level" value="Professor">Professor</option>
						</select>
					</div>
					<div class="form-input">
						<label>Studen Number</label>
						<span style="color: red;"><?php echo $stud_numErr; ?></span>
						<input type="text" name="stud_num" id="stud_num" placeholder="student number" value="<?php echo $stud_num; ?>" onkeypress='return isNumberKey(event)'>
						
					</div>
					<div class="form-input">
						<label>Password</label>
						<span style="color: red;"><?php echo $passwordErr; ?></span>
						<input type="password" name="password" id="password" placeholder="password" value="" >
					</div>
					<div class="btn-primary">
						<input type="submit" name="btnRegister" value="Register">
						<input type="submit" value="Skip/Back" name="btnSkip" ></input>
					</div>
				</div>
			</div>
		</div>
	</form>

<script>
    // Get the input element
    const fnameInput = document.getElementById('first_name');
    const mnameInput = document.getElementById('middle_name');
    const lnameInput = document.getElementById('last_name');

    fnameInput.addEventListener('keydown', function(event) {
    const keyCode = event.which || event.keyCode;

	    if ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122))
	    {
	        return true;
	    }
	    else
	    {
	        event.preventDefault(); // Prevent the key from being entered
	        return false;
	     }
    });

    mnameInput.addEventListener('keydown', function(event) {
    const keyCode = event.which || event.keyCode;
    
	    if ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122))
	    {
	        return true;
	    }
	    else
	    {
	        event.preventDefault(); // Prevent the key from being entered
	        return false;
	     }
    });

    lnameInput.addEventListener('keydown', function(event) {
    const keyCode = event.which || event.keyCode;
    
	    if ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122))
	    {
	        return true;
	    }
	    else
	    {
	        event.preventDefault(); // Prevent the key from being entered
	        return false;
	     }
    });
</script>
</body>
</html>
