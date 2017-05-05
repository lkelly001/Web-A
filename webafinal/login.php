<?php  //Start the Session
session_start();
 require('connectivity.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['firstname']) and isset($_POST['mint']) and isset($_POST['lastname']) and isset($_POST['idnum'])){
//3.1.1 Assigning posted values to variables.
$firstname = $_POST['firstname'];
$mint = $_POST['mint'];
$lastname = $_POST['lastname'];
$idnum = $_POST['idnum'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `STUDENT` WHERE student_fname='$firstname' and student_mi='$mint' and student_lname='$lastname' and student_id='$idnum'";
 
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['idnum'] = $idnum;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}

//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['student_fname'])){
$firstname = $_SESSION['student_fname'];
header( 'Location: home.html' );
echo "<a href='logout.php'>Logout</a>";
 
}else
//3.2 When the user visits the page first time, simple login form will be displayed.
?>