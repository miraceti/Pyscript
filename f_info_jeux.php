<?php
//--table du haut-->
echo("<table height=\"5%\" width=\"100%\" bgcolor=\"#C0C0C0\" border=1> ");
echo("<tr ><td bgcolor=\"#14118F\" width=\"20%\"><font color=\"#FFFF33\"> Accueil et Logo</font> </td>");
echo("<td width=\"60%\" align=\"center\"> ");
echo("<font color=\"#000000\" face=\"MS Sans Serif\" size=\"2\"> INFORMATIQUE</font> </td>");
echo("<td width=\"20%\"> <font color=\"#FFFF33\"> droitH</font> </td></tr> </table>");

//--table du haut en dessous-->
echo("<table height=\"5%\" width=\"100%\" ");
echo("<tr >");
echo("<td width=\"100%\"> ");
echo("<font color=\"#14118F\">");
include("f_info_menu.inc.php");
echo(" theme</font> </td>");
echo("</tr>"); 
echo("</table>");

//table du milieu
echo("<table border=1 width=\"100%\" height=\"90%\" bgcolor=\"#14118f\"> ");
echo("<tr><td width=\"10%\" valign=\"top\"> ");
include("f_liennavscience.inc.php");
include("f_info_liennavinfo.inc.php");
include("f_liennavmedia.inc.php");
//include("f_liennavjeux.inc.php");
include("f_liennavperso.inc.php");

echo("<font color=\"#FFFF33\"> gaucheM</font> </td>");

echo("<td width=\"80%\" background=\"images/f_fond.gif\"  valign=\"top\"> ");
echo("<font color=\"#FFFF33\">");
include("requete_jeux.php");
echo("</font> </td>");
echo("<td width=\"10%\"> ");


echo("<font color=\"#FFFF33\"> droiteM</font> </td></tr> </table>");

//table du bas
echo("<table height=\"5%\" width=\"100%\" bgcolor=\"#000000\" border=1> ");
echo("<tr><td width=\"20%\">");
echo("<font color=\"#FFFF33\">");

echo(" gaucheB</font> </td>");
echo("<td width=\"50%\"> <font color=\"#FFFF33\"> MilieuB</font> </td>");
echo("<td width=\"30%\"> <font color=\"#FFFF33\"> ");
echo (date("l dS of F Y h:i:s A"));
echo("</font> </td></tr> </table>");
 ?> 
 
