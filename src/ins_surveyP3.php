<?php
				 include ("connect_db.php");
					 $comment1_1 = $_POST["comment1_1"];
					 $comment1_2 = $_POST["comment1_2"];
					 $comment2_1 = $_POST["comment2_1"];
					 $comment2_2 = $_POST["comment2_2"];
					 $comment3_1 = $_POST["comment3_1"];
					 $comment3_2 = $_POST["comment3_2"];
					 $comment3_3 = $_POST["comment3_3"];
					 $comment4_1 = $_POST["comment4_1"];
					 $comment4_2 = $_POST["comment4_2"];
					 $comment5_1 = $_POST["comment5_1"];
					 $comment5_2 = $_POST["comment5_2"];
					 $comment5_3 = $_POST["comment5_3"];
					 $comment5_4 = $_POST["comment5_4"];
					 $comment5_5 = $_POST["comment5_5"];
					 $comment5_6 = $_POST["comment5_6"];
					 $comment6_1 = $_POST["comment6_1"];
					 $comment6_2 = $_POST["comment6_2"];
					 $comment6_3 = $_POST["comment6_3"];
					 $comment6_4 = $_POST["comment6_4"];
					 $comment6_5 = $_POST["comment6_5"];
					 $comment6_6 = $_POST["comment6_6"];				 
					 
				 $idGet = $_POST["idGet"];
				 
						$SQL = "INSERT INTO `commentdata` ( `idGD`, `CD11`, `CD12`, `CD21`, `CD22`, `CD31`, `CD32`, `CD33`, `CD41`, `CD42`, `CD51`, `CD52`, `CD53`, `CD54`, `CD55`, `CD56`, `CD61`, `CD62`, `CD63`, `CD64`, `CD65`, `CD66`)";
						$SQL .= "VALUES('$idGet','$comment1_1','$comment1_2','$comment2_1','$comment2_2','$comment3_1','$comment3_2','$comment3_3','$comment4_1','$comment4_2','$comment5_1','$comment5_2','$comment5_3','$comment5_4','$comment5_5','$comment5_6','$comment6_1','$comment6_2','$comment6_3','$comment6_4','$comment6_5','$comment6_6')";
						mysql_query("SET NAMES UTF8");
						$query = mysql_query($SQL);
						//echo $query;
						echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
?>