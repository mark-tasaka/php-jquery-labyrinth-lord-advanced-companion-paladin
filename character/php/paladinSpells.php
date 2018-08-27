<?php

/*Paladin Cleric Spells*/

function level1Spells ($level)
{
    $spells = "-";
    
    if($level == 9)
    {
        $spells = "1";
    }
    else if($level >= 10 && $level <= 14)
    {
        $spells = "2";
    }
    else if($level == 15)
    {
        $spells = "3";
    }
    else
    {
        $spells = "-";
    }

    return $spells;
    
}

function level2Spells ($level)
{
    $spells = "-";
    
    if($level == 11)
    {
        $spells = "1";
    }
    else if($level >= 12 && $level <= 15)
    {
        $spells = "2";
    }
    else
    {
        $spells = "-";
    }

    
    return $spells;
    
}


function level3Spells ($level)
{
  
    $spells = "-";
    
    if($level >= 13 && $level <= 16)
    {
        $spells = "1";
    }
    else
    {
        $spells = "-";
    }

    
    return $spells;
    
}


function level4Spells ($level)
{

    $spells = "-";
    
    if($level >= 15 && $level <= 18)
    {
        $spells = "1";
    }
    else
    {
        $spells = "-";
    }

    return $spells;
    
}


?>