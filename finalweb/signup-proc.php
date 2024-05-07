<?php


if (empty($_POST["fullname"])){


}else if (!preg_match("/(^[A-Za-z]{3,16})([ ]{0,1})([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})/",$_POST["fullname"])) {
    
    die("Please Enter a Valid Fullname");
    
}
if (empty($_POST["username"])){
    die("UserNmae is required");

}else if (!preg_match("/^[A-Za-z][A-Za-z0-9_]{5,29}$/",$_POST["username"])) {
    die("Please Enter a Valid Username");
}
if (empty($_POST["email"])){
    die("email is required");
}else{
    if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
    die("please make sure the email is valid ");
}}
if (!preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/",$_POST["pswd"])) {
    die("Please Enter a Valid Password");
}
if($_POST["pswd"]!==$_POST["pswdconf"]){
    die("password and confirm should match");
}


$mysqli=require __DIR__. "/config.php" ;

$username=$_POST["username"];
$pass=$_POST["pswd"];
$email=$_POST["email"];
$fullname=$_POST["fullname"];
$pass2=$_POST['pswdconf'];

$sql= "INSERT INTO signup (FullName,username,Email,Hashed_password) VALUES (?, ?, ?,?)";
$username=stripcslashes($username);
$username=mysqli_real_escape_string($mysqli,$username);
    
$email=stripcslashes($email);
$email=mysqli_real_escape_string($mysqli,$email);
    
$fullname=stripcslashes($fullname);
$fullname=mysqli_real_escape_string($mysqli,$fullname);

$password=stripcslashes($password);
$password=mysqli_real_escape_string($mysqli,$password);

$password_hash=password_hash($password,PASSWORD_DEFAULT);
    
$stmt=$mysqli->stmt_init();
$stmt->prepare($sql);
if(!$stmt){
 die("Sql Error");
 }
$stmt->bind_param("ssss",$fullname, $username, $email ,$password_hash);

 #error excute the firdt codtion 

if($stmt->execute()){
    header("Location: index.php"); } 
 
if ($stmt = $mysqli->prepare('SELECT id FROM signup WHERE username = ? ')) {
    // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $username);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'Username or email are exists, please choose another!';
    }}
?>

