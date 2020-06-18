
<?php

//variable setting
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message= $_REQUEST['message'];


//check input fields
if (empty($firstname) || empty($lastname) || empty($email) || empty($subject) || empty($message))
{
	echo "please fill all the fields";
}
else 
{
	mail("harshgujral84035@gmail.com","kalia coaching classes",$message,"From :$firstname,$lastname,$subject,$message<$email>");
	echo "<script type='text/javascript'>alert('your message sent successfully');
	window.history.log(-1);
	</script>";
}
?>
