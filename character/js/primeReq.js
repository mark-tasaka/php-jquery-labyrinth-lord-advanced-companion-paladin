/*Ability Score Prime Requisite XP Bonus/Penality*/

function primeReq(strength, wisdom)
{
    let message = "";
    
    if((strength >= 13 && strength <=15) && (wisdom >= 13 && wisdom <=15))
        {
            message = "+5% Experience Point Adjustment (Prime Requisite)";
        }
    else if((strength >= 16) && (wisdom >= 16) )
        {
            message = "+10% Experience Point Adjustment (Prime Requisite)";
        }
    
    return message;
}


function secondAttack(level)
{
    let message = "";
    
    if(level === 15)
        {
            message = "Fighter has 2 attacks per round.";
        }
    
    return message;
}