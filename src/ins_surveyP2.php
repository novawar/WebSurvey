<?php
				 include ("connect_db.php");
				 $expYear = $_POST["exp-year"];
				 $app = "";
				if(!empty($_POST['app'])) {
					foreach($_POST['app'] as $check) {
						$app .= $check."_"; 
					}
				}
				 $appSame = $_POST["app-same"];
				 $platfrom = "";
				if(!empty($_POST['platfrom'])) {
					foreach($_POST['platfrom'] as $check1) {
						$platfrom .= $check1."_"; 
					}
				}
				$play = $_POST["play"];
				 $timeplay = $_POST["timeplay"];
				 $timeSocial = $_POST["time-social"];
				 $want = "";
				 if(!empty($_POST['want'])) {
					foreach($_POST['want'] as $check2) {
						$want .= $check2."_"; 
					}
				}
				 $idGet = $_POST["idGet"];
						$SQL = "INSERT INTO socaildata (idGD,survey4,survey5,survey6,survey7,survey8,survey9,survey10,survey11)";
						$SQL .= "VALUES('$idGet','$expYear','$app','$appSame','$platfrom','$play','$timeplay','$timeSocial','$want')";
						mysql_query("SET NAMES UTF8");
						$query = mysql_query($SQL);
						echo "<meta http-equiv=\"refresh\" content=\"0; url=survey-part3.php?idGl=$idGet\">";
?>