﻿<?php

  session_start();
  
  

  echo "<!DOCTYPE html>\n<html><head>";
	echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
	header("Content-type: text/html; charset=utf-8");	
    	
  require_once 'functions.php';
  
  //echo $ora_exacta = date("H:i"); 

    //echo longdate();
    
    
    /**
    *aici faviconul
    */
    echo '<link rel="icon" 
      type="image/png" 
      href="logo.png" />';
    /**
     * script JS aici cu ora care se schimba 
     */ 
    echo '<div class="coltDreapta">' . $dataCuZiua  .  
    '<br>' .
    '<script language="javascript" src="script/liveclock.js">
	/* asta merge cu functia  
	 <body onLoad="show_clock()"> 
	 */
	
/*	*/

</script>' . '</div>';

/**
 * aici scriem banerul
 * 
 */
  $userstr = ' Oaspete';


  if (isset($_SESSION['user']))
  {
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = " $user";
  }
  else $loggedin = FALSE;
    /**
    asta e headerul cu titlul
    */
  echo "<title>$appname - $userstr</title><link rel='stylesheet' " .
       "href='styles.css' type='text/css'>"                     .
       "</head><body onLoad='show_clock()'><center><canvas id='logo' width='624' "    .
       "height='100'>$appname</canvas></center>"             .
       "<div class='appname'>Salut $userstr! Bine ai venit pe $appname </div>"            .
       "<script src='javascript.js'></script>" ;

  if ($loggedin)
  {
    echo "<br ><ul class='menu'><p>" .
         "<li><a href='members.php?view=$user'>Acasă</a></li>" .
         "<li><a href='profile.php'>Profil</a></li>"         .
           "<li><a href='messages.php'>Mesaje</a></li>"      .
           "<li><a href='friends.php'>Prieteni</a></li>" .
            "<li><a href='members.php'>Membri</a></li>"    .
            "<li><a href='logout.php'>Deconectare</a></li></ul><br></p>".
         
		 
		 "<br> <span class='data5'> Salut  $user <br> </span><br> ";
  }
   else
  {
    echo ("<br><ul class='menu'>" .
          "<li><a href='index.php'>Acasă</a></li>" . "<br><ul class='menu'><br>");
  }



?>