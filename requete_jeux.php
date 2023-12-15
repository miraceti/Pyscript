<?php

//-- information sur la base de donnée-->
//$user="root";
$user="elecam";
$host="localhost";
//$password="";
$password="typhonzz";
//$database="miraceti";
$database="elecam";
$req="select * from jeux where 1";
//-- connection a la base et execution de la requête -->
mysql_connect($host, $user, $password);
mysql_select_db($database);
$req=stripslashes($req);
$result=mysql_query($req);
//-- traitement des erreurs -->
echo("<table width=\"100%\">");
echo("<tr align=\"center\"><td bgcolor=\"GRAY\"><font color=\"blue\">JEUX</td></tr>");
echo("</table>");
echo("<table width=\"100%\">");
echo("<tr align=\"center\">");
echo("<td bgcolor=\"GRAY\"  colspan=2><font color=\"Red\">Genre</font></td>");
echo("<td bgcolor=\"GRAY\"  colspan=2><font color=\"Red\">Lien</font></td>");
echo("<td bgcolor=\"GRAY\"  colspan=2><font color=\"Red\">Description</font></td>");
echo("</tr>");
if($result==0) : echo("<b>erreur" . mysql_errno() . " : " . mysql_error() . "</B>");
else:
//-- mise en forme du resultat
	if (!mysql_num_rows($result)) {echo("<H1> aucune correspondance </H1>");}
    else {for($i=0; $i < mysql_num_rows($result); $i++) {
			      $tbl_ligne=mysql_fetch_row($result);
				echo("<tr>");
                                echo("<td bgcolor=\"GRAY\"  colspan=2><font color=\"Yellow\"> ".$tbl_ligne[1]."</font></td>");
				echo("<td bgcolor=\"GRAY\"  colspan=2><font color=\"Yellow\"><a href= ".$tbl_ligne[2].">".$tbl_ligne[3]. "</a></font></td>");
				echo("<td bgcolor=\"GRAY\"  colspan=2><font color=\"Yellow\"> ".$tbl_ligne[4]."</font></td>");
		        echo("</tr>");
		        }
			}
endif;
echo("</table>");
?>
