<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title> Manager | Shapners </title>
</head>
<body>

	<center>

		<fieldset>

			<table>
				<tr>
				   <td>
					   <h1> 
					   Sharpener's
					   </h1> 
				 </td>
				</tr>
			</table>


		</fieldset>

	</center>
	<br></br>

	
     <center>
	
    <h1>Welcome <?php echo $_SESSION['user'] ?> </h1>
	<table>
	    <tr>
			<td>
				<a href="ManagerProfile.php">Manager Own Profile</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="ManagerRegistration.html">Add new Manager</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="ViewManagerList.php">View Manager List</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="ManagerProfileUpdate.php">Update Manager Profile</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="TeacherRegistration.html">Add New Teacher</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="ViewTeacherList.php">View Teacher List</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="StudentRegistration.html">Add New Student</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="Studentlist.php">View Student List</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="BookList.php">View Book List</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="BookAdd.php">Add New Book</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="CourseList.php">View Course List</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="CourseAdd.php">Add New Course</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="ViewFeedback.php">View Feedback</a>
			</td>
		</tr>
		
		<tr>
			<td>
				<br> </br>
				<a href="logout.php">Log Out</a>
			</td>
		</tr>
	</table>
	</center>
</body>
</html>
<?php
}
	else {
		header('location:LogIn.html');
	}
?>