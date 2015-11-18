<?PHP
	// e-mail validator
    function email_validator($email) 
    { 
        if (eregi("^[0-9a-z]([-_.]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-z]{2,4}$",$email)) 
            $valid = "1"; 

        return $valid; 
    }
        
    // check of het formulier is verzonden
    // zo ja, valideer de e-mail adressen
    // en zet speciale karakters om
    if ($_POST['submit'])
    {	
		$mailHeader = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Strict//EN">';
		$mailHeader .= '<HTML><HEAD><TITLE>Mail via www.luxevakantiewoningnen.com</TITLE>';
		$mailHeader .= '</HEAD> ';
		$mailHeader .= '<BODY> ';
		$mailHeader .= '<TABLE cellSpacing=4 cellPadding=4 width=625 align=left border=0>';
	
    $afz_naam = htmlentities($_POST['F1']);
		$afz_subject = htmlentities($_POST['F2']);
   	$afz_adres = htmlentities($_POST['F3']);   	       	    
    $afz_wpl = htmlentities($_POST['F4']);       
    $afz_zip = htmlentities($_POST['F5']);
    $afz_land = htmlentities($_POST['F6']);
    $afz_tel = htmlentities($_POST['F7']);
    $afz_tel = htmlentities($_POST['F7']);                
    $afz_email = htmlentities($_POST['F9']);
    $bericht = htmlentities($_POST['F10']);
    
		$mailFooter = '</TABLE></BODY></HTML>';		    
        
		$check_afz_email = email_validator($_POST['F9']);        
    }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML><HEAD><TITLE>Leren Duiken - PADI Duikschool/Duikclub/Duikcentrum Scuba College Mechelen/Antwerpen</TITLE>
	<meta name="description" content="Leren Duiken - PADI Duikschool/Duikclub/Duikcentrum Scuba College Mechelen/Antwerpen">
	<meta name="keywords" content="duiken,leren duiken,PADI,padi,duikschool,duikclub,duikcentrum,duikwinkel,duikshop,open water,advanced open water,openwater,OW,AOW,rescue diver,efr,divemaster,OWSI,mechelen,antwerpen,walem,nitrox,cursus,duikcursus,duikopleiding,nekker,de nekker,DAN,dan,bare,green force,mares,ralf tech,seac sub,sealife,suunto,uwkinetics,underwater kinetics,UK">
<META http-equiv=Content-Type content="text/html; charset=windows-1252">
<STYLE type=text/css>@import url(%20all.css%20);
BODY { FONT-SIZE: 11px; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; font-weight: normal; }
A {
	COLOR: #333333; font-weight: normal; TEXT-DECORATION: none 
}
A:active {
	COLOR: #333333; font-weight: normal; TEXT-DECORATION: none
}
A:hover {
	COLOR: #666666; font-weight: bold; TEXT-DECORATION: none
}
A:visited {
	COLOR: font-weight: normal; #333333
}
#frame {
	PADDING-RIGHT: 0px; 
	MARGIN-TOP: 1px; 
	PADDING-LEFT: 0px; 
	PADDING-BOTTOM: 0px; 
	MARGIN-LEFT: auto; 
	WIDTH: 1000px; 
	MARGIN-RIGHT: auto; 
	PADDING-TOP: 0px; 
	TEXT-ALIGN: left;
	BACKGROUND: #fff;
	border-right: 1px solid #9999CC;
	border-left: 1px solid #9999CC;
	border-top: 1px solid #9999CC;
	border-bottom: 1px solid #9999CC;
}
#contentleft{ BACKGROUND: #fff; FLOAT: left; WIDTH: 200px; height: auto; min-height: 1500px; padding: 0; border-right: 1px solid #9999cc; }
#contentcenter { BACKGROUND: #fff; FLOAT: left; WIDTH: 613px; padding: 0; }
#contentright { BACKGROUND: #fff; FLOAT: right; WIDTH: 185px; height: auto; min-height: 1500px; padding: 0; border-left: 1px solid #9999cc; }
#contentheader {
	HEIGHT: 130px; BACKGROUND: url(images/header.jpg) no-repeat 0px 0px;
}
#contentheadermenu {
	BACKGROUND: fff 
}
#footer {
	BACKGROUND: fff; border-top: 1px solid #9999CC; 
}
P {
	MARGIN: 0px 10px 10px
}
H1 {
	MARGIN: 0px 10px 10px
}
PRE {
	MARGIN: 0px 10px 10px
}
H1 {
	FONT-SIZE: 14px; PADDING-TOP: 10px
}
#contentheader H1 {
	PADDING-RIGHT: 10px; PADDING-LEFT: 10px; FONT-SIZE: 14px; PADDING-BOTTOM: 10px; MARGIN: 0px; PADDING-TOP: 10px
}
#contentright P {
	FONT-SIZE: 10px
}
DIV.headermenusub {
	PADDING-RIGHT: 3px; PADDING-LEFT: 3px; BACKGROUND-IMAGE: url(images/contentheadermenu.jpg); PADDING-BOTTOM: 2px; VERTICAL-ALIGN: middle; PADDING-TOP: 8px; HEIGHT: 23px; TEXT-ALIGN: left
}
DIV.headermenusub A {
	PADDING-RIGHT: 10px; PADDING-LEFT: 10px; FONT-WEIGHT: bold; PADDING-BOTTOM: 4px; COLOR: #ffffff; PADDING-TOP: 4px; TEXT-DECORATION: none
}
DIV.headermenusub A:active {
	PADDING-RIGHT: 10px; PADDING-LEFT: 10px; FONT-WEIGHT: bold; PADDING-BOTTOM: 4px; COLOR: #ffffff; PADDING-TOP: 4px; TEXT-DECORATION: none
}
DIV.headermenusub A:visited {
	PADDING-RIGHT: 10px; PADDING-LEFT: 10px; FONT-WEIGHT: bold; PADDING-BOTTOM: 4px; COLOR: #ffffff; PADDING-TOP: 4px; TEXT-DECORATION: none
}
DIV.headermenusub A:hover {
	COLOR: #333333; BACKGROUND-COLOR: #f4f5f6; TEXT-DECORATION: none
}
DIV.headermenusub A.headermenusubsel {
	COLOR: #333333; BACKGROUND-COLOR: #f4f5f6; TEXT-DECORATION: none
}
DIV.headermenusub A.headermenusubsel:visited {
	COLOR: #333333; BACKGROUND-COLOR: #f4f5f6; TEXT-DECORATION: none
}
DIV.headermenusub A.headermenusubsel:hover {
	COLOR: #333333; BACKGROUND-COLOR: #f4f5f6; TEXT-DECORATION: none
}
DIV.headermenusub A.headermenusubsel:active {
	COLOR: #333333; BACKGROUND-COLOR: #f4f5f6; TEXT-DECORATION: none
}
.boxkop {
	BORDER-RIGHT: #999999 1px solid; BORDER-TOP: #999999 0px solid; PADDING-LEFT: 4px; FONT-WEIGHT: bold; FONT-SIZE: 11px; BACKGROUND-IMAGE: url(images/boxkop.jpg); BORDER-LEFT: #999999 1px solid; COLOR: #ffffff; BORDER-BOTTOM: #999999 0px solid; HEIGHT: 18px
}
.boxc {
	BORDER-RIGHT: #cccccc 1px solid; PADDING-RIGHT: 4px; BORDER-TOP: #cccccc 0px solid; PADDING-LEFT: 4px; FONT-SIZE: 11px; PADDING-BOTTOM: 4px; BORDER-LEFT: #cccccc 1px solid; PADDING-TOP: 4px; BORDER-BOTTOM: #cccccc 1px solid; BACKGROUND-COLOR: #f2f3f4
}
.boxkopl {
	MARGIN-TOP: 3px; PADDING-LEFT: 4px; FONT-WEIGHT: bold; BACKGROUND-IMAGE: url(images/leftbox.jpg); MARGIN-BOTTOM: 5px; HEIGHT: 18px
}

</STYLE>

<META content="MSHTML 6.00.6000.16441" name=GENERATOR></HEAD>
<BODY background="images/bg.gif">

<DIV id=frame>

<DIV id=contentheader></DIV>
<DIV id=contentheadermenu>
	<DIV class=headermenusub style="width: 994px; height: 24px">
      
    &nbsp; <font size="2">&nbsp;</font><font color="#FFFFFF" size="2"><span style="font-weight: 700"><a href="index.html">Home</a>&nbsp; 
	|&nbsp; <a target="_blank" href="http://www.facebook.com/ScubaCollege">Facebook Forum</a>&nbsp; |&nbsp; <a href="kalender.html">
	Kalender</a>&nbsp; |&nbsp; <a href="contact.php">Contact</a></span></font><p>
      
    </DIV>
</DIV>

<DIV id=contentleft style="width: 200px; height: 535px">&nbsp;
<DIV class=boxkopl style="width: 196px; height: 18px">
<font color="#FFFFFF" size="2">Leren Duiken</font></DIV>
<A href="duikschool_duikinitiatie.php" >&nbsp Duikinitiatie</A><BR>
<A href="duikschool_leren_duiken.html" >&nbsp Leer nu Duiken</A><BR><BR>
            
<DIV class=boxkopl>&nbsp;<font color="#FFFFFF" size="2">Duikschool</font></DIV>
<A href="duikschool_locatie.html" >&nbsp Locatie & Planning</A><BR>
<A href="duikschool_PADI.html" >&nbsp; PADI Duikopleidingen</A><BR><BR>

<DIV class=boxkopl>&nbsp;<font color="#FFFFFF" size="2">Club</font></DIV>
<A href="duikclub_info.html" >&nbsp Informatie</A><BR>
<A href="kalender.html" >&nbsp Activiteiten</A><BR>
<A target="_blank" href="http://www.facebook.com/ScubaCollege#!/ScubaCollege?sk=photos" >&nbsp Foto Album</A><BR><BR>

<DIV class=boxkopl>&nbsp;<font color="#FFFFFF" size="2">Contact</font></DIV>
<A href="index.html" >&nbsp Algemene Gegevens</A><BR>
<A href="wie.html" >&nbsp Wie zijn wij ?</A><BR>
<A href="contact.php" >&nbsp Contactformulier</A><BR><BR>

<DIV class=boxkopl>&nbsp;<font color="#FFFFFF" size="2">Informatief</font></DIV>
<A href="links.html" >&nbsp Interessante Links</A><BR><BR>
</DIV>

<DIV id=contentcenter style="width: 613px; height: 616px">
<p>&nbsp;</p>
<p><font size="4" color="#000080"><b>&nbsp;Scuba College - Contactformulier</b></font></p>
<p>&nbsp;</p>
<?PHP
    // bekijk dus eerst of het formulier is verzonden is en of 
    // alle variabele goed zijn
    if ($_POST['submit'] && $afz_email && $check_afz_email && $afz_naam && $bericht )
    {       
        
      // ZET HIER HET ONDERWERP VAN DE MAIL!
		  $email_onderwerp = "Mail via formulier op www.scubacollege.be";		   
        
	    $email_msg = "<tr><td>Naam</td><td>".$afz_naam."</td></tr> ";            
      //$email_msg .= "<tr><td>Adres</td><td>".$afz_adres."</td></tr> ";            
		  //$email_msg .= "<tr><td>Zip / WPL</td><td>".$afz_zip." ".$afz_wpl."</td></tr> "; 
      //$email_msg .= "<tr><td>Land</td><td>".$afz_land."</td></tr> ";            
		  //$email_msg .= "<tr><td>Telnr</td><td>".$afz_tel."</td></tr> ";             			                       
      $email_msg .= "<tr><td>email</td><td>".$afz_email."</td></tr> ";                        
      $email_msg .= "<tr><td>Bericht</td><td>".$bericht."</td></tr> ";                                                
			            
      $to = "info@scubacollege.be";
      $subject = $email_onderwerp;
      if($afz_subject) $subject = $email_onderwerp." - ".$afz_subject;      
      $message = $mailHeader.$email_msg.$mailFooter;
      $headers  = 'MIME-Version: 1.0'."\n";
		  $headers .= 'Content-type: text/html; charset=iso-8859-1'."\n";
      $headers .= 'From: '.$afz_email."\n";      
            
      if (mail($to,$subject,$message,$headers)){
       	echo("<p><font size=\"2\">Uw bericht werd verstuurd naar Scuba College en u mag binnenkort een antwoord van ons verwachten.</font></p>");
        echo("<p><font size=\"2\">Bedankt voor uw inbreng !</font></p>");
        echo("<p>&nbsp;</p>");
        echo("<p>&nbsp;</p>");
        echo("<p><font size=\"2\">Het Scuba College - Team</font></p>");        
		  } 
	    else {  
    	  echo "<p><font size=\"2\">De mail kon blijkbaar niet verstuurd worden. Probeer het nog eens opnieuw a.u.b.</font></p>";
        echo("<p><font size=\"2\">Onze excuses voor dit ongemak.</font></p>");
        echo("<p>&nbsp;</p>");
        echo("<p>&nbsp;</p>");
        echo("<p><font size=\"2\">Het Scuba College - Team</font></p>");        
		  }                  
    }
    // laat formulier zien!
    else
    {            	  
		$errorMsg = "";
        // bekijk of het al eerder verzonden was
        if ($_POST['submit']) $errorMsg = "<p><strong>Je vergat enkele verplichte velden in te vullen of je e-mail adres is niet correct.</strong></p>";                    
?> 
<form method="post" action="contact.php">
<table cellpadding="2" cellspacing="0" border="0" bgcolor="#FFFFFF">
<tr>
<td>
<font face="Verdana" size="2" color="#000000"></font>
 <div style="" id="mainmsg"> </div>
</td>
</tr>
</table>
<br>
<table cellpadding="2" cellspacing="0" border="0" bgcolor="#FFFFFF" width="600">

<?
if($errorMsg) {
?>
<tr valign="top">
 <td>
<p style="margin-left: 10px; margin-bottom: 2px"><font size="2"><?PHP echo($errorMsg);?></font></p>
</td>
</tr>      
<?
}
?>
<tr valign="top">
 <td>
 <?
  if($_POST['submit'] && !$afz_naam) {
 ?>
<p style="margin-left: 10px; margin-bottom: 2px"><font size="2"><strong>Naam *</strong></font></p>
<?
  }
  else {
 ?>
 <p style="margin-left: 10px; margin-bottom: 2px"><font size="2">Naam</font></p>
 <?
  }  
 ?>
<p style="margin-bottom: 2px">
<font face="Verdana, Arial, Helvetica, sans-serif">
<input type="text" name="F1" value="<?PHP echo($afz_naam);?>" maxlength="100" size="40"></font><font size="2">
</font> </td>
</tr>      
<tr valign="top">
 <td>
 <?
  if($_POST['submit'] && (!$afz_email || !$check_afz_email)) {
 ?>
<p style="margin-left: 10px; margin-bottom: 2px"><font size="2"><strong>E-Mail *</strong></font></p>
<?
  }
  else {
 ?>
 <p style="margin-left: 10px; margin-bottom: 2px"><font size="2">E-Mail</font></p>
 <?
  }  
 ?>
<p style="margin-bottom: 2px">
<font face="Verdana, Arial, Helvetica, sans-serif">
<input type="text" name="F9" value="<?PHP echo($afz_email);?>" maxlength="100" size="40"></font><font size="2">
</font> </td>
</tr>      

<tr valign="top">
 <td>
<p style="margin-left: 10px; margin-bottom: 2px"><font size="2">Onderwerp</font></p>
<p style="margin-bottom: 2px">
<font face="Verdana, Arial, Helvetica, sans-serif">
<input type="text" name="F2" value="<?PHP echo($afz_subject);?>" maxlength="100" size="60"></font><font size="2">
</font> </td>
</tr>      

<tr valign="top">
 <td>
  <?
  if($_POST['submit'] && !$bericht) {
 ?>
<p style="margin-left: 10px; margin-bottom: 2px"><font size="2"><strong>Uw Bericht *</strong></font></p>
<?
  }
  else {
 ?>
 <p style="margin-left: 10px; margin-bottom: 2px"><font size="2">Uw Bericht</font></p>
 <?
  }  
 ?>
<p style="margin-bottom: 2px">
<font face="Verdana, Arial, Helvetica, sans-serif">
<textarea name="F10" cols="60" rows="10"><?PHP echo($bericht);?></textarea></font><font size="2"><br> 
</font> </td>
</tr>      

<tr>
 <td align="left">
<p style="margin-left: 10px">
<input type="submit" class="btn" value="  Verzenden  "   name="submit"><input type="reset" class="btn" value="  Wissen  " name="Clear"></td>
</tr>
</table>                      

</form>
<?PHP
    }
?>
</DIV>

<DIV id=contentright style="width: 185px; height: 642px"><center>&nbsp;</center>
<DIV class=boxkopl><font color="#FFFFFF" size="2">Onze partners</font></DIV>
            <p style="text-align: center; margin-bottom: 0px">&nbsp;</p>
	<p style="text-align: center; margin-bottom:0px">
			<img border="0" src="images/padi.gif" width="150" height="206"><p style="text-align: center; margin-bottom:0px">
	Divecenter S-799086<p style="text-align: center; margin-bottom:0px">
	&nbsp;<hr><p style="text-align: center; margin-bottom:0px">
	&nbsp;<p style="text-align: center; margin-bottom:0px">
	<img border="0" src="images/dan.jpg" width="100" height="190"><p style="text-align: center; margin-bottom:0px">
	&nbsp;<hr>
	<p style="text-align: center; margin-bottom:0px">
	<BR></DIV><BR clear=all><!-- without this little <br /> NS6 and IE5PC do not stretch the frame div down to encopass the content DIVs -->
</DIV>
		
<BR style="CLEAR: both"><br><br><br>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write("\<script src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'>\<\/script>" );
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-1612255-7");
pageTracker._initData();
pageTracker._trackPageview();
</script>

         
</BODY>
</HTML>

