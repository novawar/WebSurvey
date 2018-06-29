<?
 $host="localhost";
 $db="survey";
 $user="root";
 $password="12345678";  
 $link = mysql_connect($host,$user,$password) or die ("Cannot connect the Server");
 mysql_query("SET NAMES UTF8");
 if (!mysql_select_db($db, $link))
 {
   die ("Cannot select database". mysql_error());
 }
		
?>