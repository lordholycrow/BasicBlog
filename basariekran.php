<?php 
//gel values from form in login
$username= $_POST['user'];
$password= $_POST['pass'];

//defend
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

//connect db
$link = mysqli_connect("localhost","root","","btbssite");
$link -> set_charset("utf8");
mysql_select_db("btbssite");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


//sorgu
$result = mysql_query("select * from btbs wehere username='$username' and password='$password'")
   or die("failed to query db".mysql_error());
   $row= mysql_fetch_array($result);
   if($row['username'] == $username && $row['password'] == $password)
   {
   	echo "giriş başarılı" ;
   }
   else
   {
   	echo "yanlış şifre ve k.adi";
   }


?>