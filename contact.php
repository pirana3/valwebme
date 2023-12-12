<?php
session_start();
echo'<div class="inner cover">';
 echo'<h1 class="cover-heading">Contacts</h1>';

if (!isset($_POST['submit']))
	if(!isset($_POST['submit']))
	{
		echo'<form id="contact" method="post" action="">';	
		if (!isset($_GET['email']))
		{
			if (isset($_SESSION['email']))
			{
				echo '<div class="form-group">';
				echo '<label for="email">Email address</label>';
				echo '<input name="email" type="text" class="form-control" id="email" value="'.$_SESSION['email'].'">';
				echo '<p id="emailStatus"></p>';
				echo ' </div>';
			}
		

		else
		{
			echo '<div class="form-group">';
			echo '<label for="email">Email address</label>';
			echo '<input name="email" type="text" class="form-control" id="email" placeholder="Email">';
			echo '<p id="emailStatus"></p>';
			echo ' </div>';
			
		}
		}
		elseif (isset($_GET['email']))
		{
			if ($_GET['email'] == "emailNull")
			{
				echo '<div class="form-group has-error">';
				echo '<label for="email">Email address</label>';
				echo '<input name="email" type="text" class="form-control" id="email" placeholder="Email">';
				echo '<p class="alert-danger" id="emailStatus">Email cannot be blank !</p>';
				echo ' </div>';
			}
			else
			{
				if(isset($_SESSION['email']))
				{
					echo '<div class="form-group has-error">';
					echo '<label for="inputError1">Email/label>';
					echo '<input name="email" type="text" class="form-control" id="inputError1" value="'.$_SESSION['email'].'">';
					echo '<p class="alert-danger" id="emailStatus">Invalid Email Data !</p>';
					echo '</div>';
				}
			}
		}
		
		if (!isset($_GET['fname']))
		{
			if (isset($_SESSION['fname']))
			{
				echo '<div class="form-group">';
				echo '<label for="fname">First Name</label>';
				echo '<input name="firstName" type="text" class="form-control" value="'.$_SESSION['fname'].'">';
				echo '<p id="fnameStatus"></p>';
				echo '</div>';
			}
			else
			{
				echo '<div class="form-group">';
				echo '<label for="fname">First Name</label>';
				echo '<input name="firstName" type="text" class="form-control" id="fname" placeholder="First Name">';
				echo '<p id="fnameStatus"></p>';
				echo '</div>';
			}
		}
		elseif (isset($_GET['fname']))
		{
			if ($_GET['fname'] == "fnameNull")
			{
				echo '<div class="form-group has-error">';
				echo '<label for="inputError2">First Name</label>';
				echo '<input name="firstName" type="text" class="form-control" id="inputError2"
				placeholder="First Name">';
				echo '<p class="alert-danger" id="fnameStatus">First name cannot be blank ! </p>';
				echo '</div>';
			}
			else
			{
				if(isset($_SESSION['fname']))
				{
					echo '<div class="form-group has-error">';
					echo '<label for="inputError2">First Name</label>';
					echo '<input name="firstName" type="text" class="form-control" id="inputError2" value="'.$_SESSION['fname'].'">';
					echo '<p class="alert-danger" id="fnameStatus">Invalid First Name Data !</p>';
					echo '</div>';
				}
				
			}

		}
		
		if (!isset($_GET['lname']))
		{
			if (isset($_SESSION['lname']))
			{
				echo '<div class="form-group">';
				echo '<label for="lname">Last Name</label>';
				echo '<input name="lastName" type="text" class="form-control" value="'.$_SESSION['lname'].'">';
				echo '<p id="lnameStatus"></p>';
				echo '</div>';
			}
			else
			{
				echo '<div class="form-group">';
				echo '<label for="lname">Last Name</label>';
				echo '<input name="LastName" type="text" class="form-control" id="lname" placeholder="Last Name">';
				echo '<p id="lnameStatus"></p>';
				echo '</div>';
			}
		}
		elseif (isset($_GET['lname']))
		{
			if ($_GET['lname'] == "lnameNull")
			{
				echo '<div class="form-group has-error">';
				echo '<label for="inputError3">Last Name</label>';
				echo '<input name="lastName" type="text" class="form-control" id="inputError3"
				placeholder="Last Name">';
				echo '<p class="alert-danger" id="lnameStatus">Last name cannot be blank !</p>';
				echo '</div>';
			}
			else
			{
				if(isset($_SESSION['lname']))
				{
					echo '<div class="form-group has-error">';
					echo '<label for="inputError3">Last Name</label>';
					echo '<input name="lastName" type="text" class="form-control" id="inputError3" value="'.$_SESSION['lname'].'">';
					echo '<p class="alert-danger" id="lnameStatus">Invalid Last Name Data !</p>';
					echo '</div>';
				}
				
			}

		}
		
		if (!isset($_GET['phone']))
		{
			if (isset($_SESSION['phone']))
			{
				echo '<div class="form-group">';
				echo '<label for="phone">Phone Number</label>';
				echo '<input name="phone" type="text" class="form-control" value="'.$_SESSION['phone'].'">';
				echo '<p id="phoneStatus"></p>';
				echo '</div>';
			}
			else
			{
				echo '<div class="form-group">';
				echo '<label for="phone">Phone Number</label>';
				echo '<input name="phone" type="text" class="form-control" id="phone" placeholder="Phone Number">';
				echo '<p id="phoneStatus"></p>';
				echo '</div>';
			}
		}
		elseif (isset($_GET['phone']))
		{
			if ($_GET['phone'] == "phoneNull")
			{
				echo '<div class="form-group has-error">';
				echo '<label for="inputError4">Phone Number</label>';
				echo '<input name="phone" type="text" class="form-control" id="inputError4"
				placeholder="Phone Number">';
				echo '<p class="alert-danger" id="phoneStatus">Phone Number cannot be blank ! </p>';
				echo '</div>';
			}
			else
			{
				if(isset($_SESSION['phone']))
				{
					echo '<div class="form-group has-error">';
					echo '<label for="inputError4">Phone Number</label>';
					echo '<input name="phone" type="text" class="form-control" id="inputError4" value="'.$_SESSION['phone'].'">';
					echo '<p class="alert-danger" id="phoneStatus">Invalid Phone Data !</p>';
					echo '</div>';
				}
				
			}

		}
		
		
		if (!isset($_GET['com']))
		{
			if (isset($_SESSION['com']))
			{
				echo '<div class="form-group">';
				echo '<label for="com">Comments</label>';
				echo '<input name="com" type="text" class="form-control" value="'.$_SESSION['com'].'">';
				echo '<p id="comStatus"></p>';
				echo '</div>';
			}
			else
			{
				echo '<div class="form-group">';
				echo '<label for="com">Comments</label>';
				echo '<input name="com" type="text" class="form-control" id="com" placeholder="Comments">';
				echo '<p id="comStatus"></p>';
				echo '</div>';
			}
		}
		elseif (isset($_GET['com']))
		{
			if ($_GET['com'] == "comNull")
			{
				echo '<div class="form-group has-error">';
				echo '<label for="inputError5">Comments</label>';
				echo '<input name="com" type="text" class="form-control" id="inputError5"
				placeholder="Commentsr">';
				echo '<p class="alert-danger" id="comStatus">Comments cannot be blank ! </p>';
				echo '</div>';
			}
			else
			{
				if(isset($_SESSION['com']))
				{
					echo '<div class="form-group has-error">';
					echo '<label for="inputError5">Comments</label>';
					echo '<input name="com" type="text" class="form-control" id="inputError5" value="'.$_SESSION['com'].'">';
					echo '<p class="alert-danger" id="comStatus">Invalid Comment Data !</p>';
					echo '</div>';
				}
				
			}

		}
		
		
		echo'<br>';
		echo'<button name="submit" type="submit" value="submit">Submit</button>';
		echo'</form>';

	}
		if(isset($_POST['submit']))
	{
		if($_POST['submit']=="submit")
		{
			$errStatus=array();
			 $email=$_POST['email'];
			$firstName=$_POST['firstName'];
			$lastName=$_POST['lastName'];
			$phone=$_POST['phone'];
			$com=$_POST['com'];
			if ($firstName == NULL)
				$errStatus[]="fname=fnameNull";
			if (preg_match('/^a-zA-z\'-/',$firstName) != FALSE)
			{
				$errStatus[]="fname=fnameInvalid";
			}
				$_SESSION['fname']=$firstName;
			if ($lastName == NULL)
				$errStatus[]="lname=lnameNull";
			if (preg_match('/^a-zA-z\'-/',$lastName) != FALSE)
			{
				$errStatus[]="lname=lnameInvalid";
			}
				$_SESSION['lname']=$lastName;
			if ($email == NULL)
				$errStatus[]="email=emailNull";
			if (preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i',$email) != FALSE)
			{
				$errStatus[]="email=emailInvalid";
			}
				$_SESSION['email']=$email;
			
			if ($phone == NULL)
				$errStatus[]="phone=phoneNull";
			if (preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i',$phone) != FALSE)
			{
				$errStatus[]="phone=phoneInvalid";
			}
				$_SESSION['phone']=$phone;
			
			if ($com == NULL)
				$errStatus .= "com=comNull";
			if (preg_match('/\/\/.*|\/\*.*\*\//',$phone) != FALSE)
			{
				$errStatus[]="com=comInvalid";
			}
				$_SESSION['com']=$com;
			
			
			if (count($errStatus)>0)
			{
				$errString = implode("&",$errStatus);
				redirect("Location: https://ec2-3-140-216-36.us-east-2.compute.amazonaws.com/hw20/index.php?page=contact&$errString");
			}
			$dblink=db_connect("contact");
			$fnameClean=addslashes($firstName);
			$lnameClean=addslashes($lastName);
			$emailClean=addslashes($email);
			$phoneClean=addslashes($phone);
			$comClean=addslashes($com) ;
			$sql="Insert into `contact_info`(`first_name`, `last_name`, `email`,`phone`, `comments`) values
			('$fnameClean', '$lnameClean', '$emailClean','$phoneClean','$comClean')";
			$dblink->query($sql) or
				die("<p>Something went wrong with: $sql<br>".$dblink->error."</p>");
			redirect("Location: https://ec2-3-140-216-36.us-east-2.compute.amazonaws.com/hw20/index.php?page=contact&msg=success");
		}
	}

      echo'    </div>';
	?>