<?php
session_start();
if(isset($_SESSION['adm']))
{
 header("Location:hello.php");
 exit;
}
$nickname=$_POST['username'];
$password=$_POST['password'];
if(($nickname=="admin")&&($password=="123456"))
{
  session_register("adm");
  $adm=$nickname;
 
  header("Location:hello.php");
}
else
{
 echo "<table width='100%' align=center><tr><td align=center>";
 echo "������û������󣬻��߹���Ա�˻�����Ŷ<br><br>";
 echo "<font color=red><h1 align=center>����Ա��½����</h1></font><br><a href='session.php'>������<a>";
 echo "</td></tr></table>";

}

?>