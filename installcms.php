<?php
echo "
<form method = 'POST' action = ''>
<font face='Cooper Black color='#00688B'>Host:</font><input type='text' name='host'/> <br />
<font face='Cooper Black color='#00688B'>UserName:</font><input type='text' name='user'/> <br />
<font face='Cooper Black color='#00688B'>Password:</font><input type='password' name='password'/> <br />
<font face='Cooper Black color='#00688B'>Database Name:</font><input type='text' name='dbname'/> <br />
<font face='Cooper Black color='#00688B'>Table Name:</font><input type='text' name='table'/> <br />
<input type='submit' name='submit' value='Install'/>
</form>
";

if(isset($_POST['submit'])){
if(isset($_POST['host'])){
if(isset($_POST['user'])){
if(isset($_POST['password'])){
if(isset($_POST['dbname'])){
if(isset($_POST['table'])){
$host = $_POST['host'];
$user = $_POST['user'];
$password = $_POST['password'];
$dbname = $_POST['dbname'];
$table = $_POST['table'];
mysql_connect($host, $user, $password)or die('cannot connect to database');
mysql_select_db($dbname)or die('database name incorrect');
fopen('config.php', 'w');
fwrite('config.php', $host, $user, $password, $dbname);
fclose('config.php');
}
}
}
}
}

if(empty($_POST['host'])){
echo'Please Submit Host Name <br />';
}
if(empty($_POST['user'])){
echo'Please Submit User <br />';
}
if(empty($_POST['password'])){
echo'Please Submit Password <br />';
}
if(empty($_POST['dbname'])){
echo'Please Submit Database Name <br />';
}
if(empty($_POST['table'])){
echo'Please Submit Table Name<br />' ;
}

}
?>
