<?php
$users = array ('budi' => 'budi', 'andi' => 'andi', 'aisyah' => 'aisyah', 'fina' => 'fina');


if(isset($_POST['btnlogin']))
{
    $uname = $_POST['txtuname'];
    $pass = $_POST['txtpass'];
    foreach($users as $username => $password) 
    {
        if($username == $uname && $password == $pass) 
        {
            $msg = "<p>Login successful</p>";

            //if success break the loop
            break;
        }
        else
        {
           $msg = "<p>Wrong username or password</p>";
        }
    }
    
    echo $msg;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Array Based Login</title>
</head>
<body>
<form method="post" action="">
<input type="text" placeholder="Nama" name="txtuname" /><br /><br />
<input type="password" placeholder="Password" name="txtpass" /><br /><br />
<input type="submit" name="btnlogin" value="Login" />
</form>
</body>
</html>