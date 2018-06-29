<?php
				 include ("connect_db.php");
				 $sexGl = $_POST["gender"];
				 $old   = $_POST["old"];
				 $fac = $_POST["fac"];
				 
						$SQL = "INSERT INTO generaldata(sexGD,argeGD,facGD)";
						$SQL .= "VALUES('$sexGl','$old','$fac')";
						mysql_query("SET NAMES UTF8");
						$query = mysql_query($SQL);
						$idRecord = mysql_insert_id();
						echo "<meta http-equiv=\"refresh\" content=\"0; url=survey-part2.php?idGl=$idRecord\">";
?>