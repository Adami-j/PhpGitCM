<?php

 $heure1 = $temps;
   $heure2 = $tempstot;
   //Extractions des différents paramètres
   list($h1, $m1, $sec1) = explode(':', $heure1);
   list($h2, $m2, $sec2) = explode(':', $heure2);
 
   $timestamp1 = mktime ($h1, $m1, $sec1, 7, 9, 2006);
   $timestamp2 = mktime ($h2, $m2, $sec2, 7, 9, 2006);
 
   $hrTotal = $h1 + $h2;
   //echo $hrTotal."<br>";
   $mtot = $m1 + $m2;
   $stot = $sec1 + $sec2;
 
         if ($mtot ==60)
            {
            $hrTotal = $hrTotal +1;
 
                     if  ($hrTotal < 10)
                     {
                     $heuretot = "0".$hrTotal.":00:".$stot."0";
                     }
                     else
                     {
                     $heuretot = "".$hrTotal.":00:".$stot."0";
                     }
                     }
 
        elseif ($mtot >60)
        {
        $mtot = $mtot - 60;
        $hrTotal = $hrTotal +1;
 
 
          if  ($hrTotal < 10)
          {
          $heuretot = "0".$hrTotal.":".$mtot.":".$stot."0";
          }
            else
            {
            $heuretot = "".$hrTotal.":".$mtot.":".$stot."0";
            }
         }
 
        elseif  ($mtot <60)
        {
 
          if  ($hrTotal < 10)
          {
          $heuretot = "0".$hrTotal.":".$mtot.":".$stot."0";
          }
 
            else
            {
            $heuretot = "".$hrTotal.":".$mtot.":".$stot."0";
            } 
         }
?>