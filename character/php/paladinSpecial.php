<?php
    
    
function paladinSpecial ($level)
{
    $message = "";
    
    $layHands = layOnHands ($level);
    $cureDisease = cureDisease ($level);
    
    if($level >= 1 && $level <= 2)
    {
        $message = "*May only have a maximum of (1) magical suit of armour, (1) magical shield,<br/>
        (4) magical weapons and (4) miscellaneous magical items.<br/>
        *Lay on Hands: once per day, can heal " . $layHands . " hp to a wounded being.<br/>
        *Cure Disease: can cure disease up to " . $cureDisease . " time per day.<br/>
        *Immune to disease.<br/>
        *Detect Evil: when concentrating, may 'Detect Evil' (as spell) up to 60'.<br/>
        *Protect from Evil: radiates a 10' 'Protection from Evil' radius all of the time.<br/>
        *+2 bonus to all saving throws.";
    }
    else if($level == 3)
    {
        
        $message = "*May only have a maximum of (1) magical suit of armour, (1) magical shield,<br/>
        (4) magical weapons and (4) miscellaneous magical items.<br/>
        *Lay on Hands: once per day, can heal " . $layHands . " hp to a wounded being.<br/>
        *Cure Disease: can cure disease up to " . $cureDisease . " time per day.<br/>
        *Immune to disease.<br/>
        *Detect Evil: when concentrating, may 'Detect Evil' (as spell) up to 60'.<br/>
        *Protect from Evil: radiates a 10' 'Protection from Evil' radius all of the time.<br/>
        *+2 bonus to all saving throws.<br/>
        *Can turn Undead at two Cleric levels lower.";
    }
    else if($level >= 4 && $level <= 8)
    {
        
        $message = "*May only have a maximum of (1) magical suit of armour, (1) magical shield,<br/>
        (4) magical weapons and (4) miscellaneous magical items.<br/>
        *Lay on Hands: once per day, can heal " . $layHands . " hp to a wounded being.<br/>
        *Cure Disease: can cure disease up to " . $cureDisease . " time per day.<br/>
        *Immune to disease.<br/>
        *Detect Evil: when concentrating, may 'Detect Evil' (as spell) up to 60'.<br/>
        *Protect from Evil: radiates a 10' 'Protection from Evil' radius all of the time.<br/>
        *+2 bonus to all saving throws.<br/>
        *Can turn Undead at two Cleric levels lower.<br/>
        *May summon a special war horse, but only one time each 10 years. The<br/> 
        horse has AC 5, HD 5+5, movement 180' (60').<br/>";
    }
    else
    {
        
        $message = "*May only have a maximum of (1) magical suit of armour, (1) magical shield,<br/>
        (4) magical weapons and (4) miscellaneous magical items.<br/>
        *Lay on Hands: once per day, can heal " . $layHands . " hp to a wounded being.<br/>
        *Cure Disease: can cure disease up to " . $cureDisease . " time per day.<br/>
        *Immune to disease.<br/>
        *Detect Evil: when concentrating, may 'Detect Evil' (as spell) up to 60'.<br/>
        *Protect from Evil: radiates a 10' 'Protection from Evil' radius all of the time.<br/>
        *+2 bonus to all saving throws.<br/>
        *Can turn Undead at two Cleric levels lower.<br/>
        *May summon a special war horse, but only one time each 10 years. The<br/> 
        horse has AC 5, HD 5+5, movement 180' (60').<br/>
        *Can cast clerical spells; may not use clerical spell scrolls.";
    }
    
    return $message;
}

function layOnHands ($level)
{
    $heal = 2 * ($level);
    
    return $heal;
}

function cureDisease ($level)
{
    $cure = 0;
    
    if($level >= 1 && $level <= 5)
    {
        $cure = 1;
    }
    else if($level >= 6 && $level <= 10)
    {
        $cure = 2;
    }
    else
    {
        $cure = 3;
    }
    
    return $cure;
}
    
    
?>