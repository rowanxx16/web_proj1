<?php
$is_invalid= false;
if ($_SERVER["REQUEST_METHOD"] === "POST"){


    $mysqli = require __DIR__."/config.php";
    $username=$_POST["username"];
    $pass=$_POST["pswd"];
    
    $sql = sprintf("SELECT * FROM signup
                    WHERE username = '%s'", 
                    $mysqli-> real_escape_string($username));
    $result= $mysqli ->query($sql);
    $user = $result->fetch_assoc();

    if ($user){
        $password_hash=password_hash($password,PASSWORD_DEFAULT);
        if(password_verify($password,$password_hash)){
            
            session_start();
            session_regenerate_id();

            $_SESSION["user_id"] = $user["Id"];
            $_SESSION["username"] = $user["username"];
            $_SESSION["FullName"] = $user["FullName"];
            header("Location: index.php"); #mainpage
           
        }
    }
    $is_invalid= true;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sign UP</title>
<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link  href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet"   />
<link href="signupstyle.css"rel="stylesheet" type="text/css">
<script defer src="signuplss.js"></script>

</head>
<body>
<div class="main">  	
<input type="checkbox" id="chk" aria-hidden="true">
<div class="divScroll">
<div class="signup">
<form name="frm_valid" action="signup-proc.php" method="post" id="signup" onsubmit=" return checkForm();"> <!-- novalidate--> <!-- Action : where i'm going to forword-->
<label for="chk" aria-hidden="true">Sign up</label>
<input type="text" for="fullname" name="fullname" placeholder="FullName" id="fullname" required="">
<div id="fullnameErr" class="showerror" ></div>
<input type="text" for="username" name="username" placeholder="Username" id="username" required="">
<div id="usernameErr" class="showerror" ></div>
<input type="email" for="email" name="email" placeholder="Email" id="email" required="">
<div id="emailErr" class="showerror" ></div>
<input type="password" for="pswd" name="pswd" placeholder="Password" id="pswd" required="">
<div id="passwordErr" class="showerror" ></div>
<input type="password"for="pswdconf" name="pswdconf" placeholder="Confirm Password" id="pswdconf" required="">
<button type="submit" name="submit" id="submit"  >Sign up</button><br><br><br><br><br><br>
</form>
</div>
</div>
<div class="login">
<form method = "post" action="" >
<label for="chk" aria-hidden="true">Login</label>
<input type="text" name="username" placeholder="username" id="usr" required="" >
<input type="password"  name="pswd" placeholder="Password" id="pw" required="">
<button type="submit" name="submit">Login</button>
<div class="showerror"> 
<?php if ($is_invalid):?>
<em>Invalid login</em>
<?php endif; ?></div>

</form>
</div>
</div>
</body>
</html>

