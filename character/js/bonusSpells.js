
function bonusSpellsLevel1 (wisdom)
{
    let bonus = 0;
    
    if(wisdom === 13)
        {
            bonus = 1;
        }
    else if(wisdom >= 14 && wisdom <= 18)
        {
            bonus = 2;
        }
    else if(wisdom === 19)
        {
            bonus = 3;
        }
    
    return bonus;
}


function bonusSpellsLevel2 (wisdom, level)
{
    let bonus = 0;
    
    if(level >= 3)
        {
            if(wisdom === 15)
            {
                bonus = 1;
            }
            else if(wisdom >= 16)
            {
                bonus = 2;
            }
            
        }
    
    return bonus;
}

function bonusSpellsLevel3 (wisdom, level)
{
    let bonus = 0;
    
    if(level >= 5)
        {
            if(wisdom >= 17)
            {
                bonus = 1;
            }
            
        }
    
    return bonus;
}

function bonusSpellsLevel4 (wisdom, level)
{
    let bonus = 0;
    
    if(level >= 7)
        {
            if(wisdom >= 18)
            {
                bonus = 1;
            }
            
        }
    
    return bonus;
}