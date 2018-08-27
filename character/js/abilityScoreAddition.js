
function survivalResurrection (constitution)
{
    let resurrection = 0;
    
    switch(constitution)
        {
            case 3:
                resurrection = 40;
                break;
                
            case 4:
                resurrection = 45;
                break;
                
            case 5:
                resurrection = 50;
                break;
                
            case 6:
                resurrection = 55;
                break;
                
            case 7:
                resurrection = 60;
                break;
                
            case 8:
                resurrection = 65;
                break;
                
            case 9:
                resurrection = 70;
                break;
                
            case 10:
                resurrection = 75;
                break;
                
            case 11:
                resurrection = 80;
                break;
                
            case 12:
                resurrection = 85;
                break;
                
            case 13:
                resurrection = 90;
                break;
                
            case 14:
                resurrection = 92;
                break;
                
            case 15:
                resurrection = 94;
                break;
                
            case 16:
                resurrection = 96;
                break;
                
            case 17:
                resurrection = 98;
                break;
                
            case 18:
                resurrection = 100;
                break;
                
            case 19:
                resurrection = 100;
                break;
                
            default:
                resurrection = 9999;
                
        }
    
    return resurrection;
}


function survivalShock (constitution)
{
    let shock = 0;
    
    switch(constitution)
        {
            case 3:
                shock = 35;
                break;
                
            case 4:
                shock = 40;
                break;
                
            case 5:
                shock = 45;
                break;
                
            case 6:
                shock = 50;
                break;
                
            case 7:
                shock = 55;
                break;
                
            case 8:
                shock = 60;
                break;
                
            case 9:
                shock = 65;
                break;
                
            case 10:
                shock = 70;
                break;
                
            case 11:
                shock = 75;
                break;
                
            case 12:
                shock = 80;
                break;
                
            case 13:
                shock = 85;
                break;
                
            case 14:
                shock = 90;
                break;
                
            case 15:
                shock = 93;
                break;
                
            case 16:
                shock = 95;
                break;
                
            case 17:
                shock = 97;
                break;
                
            case 18:
                shock = 99;
                break;
                
            case 19:
                shock = 99;
                break;
                
            default:
                shock = 9999;
                
        }
    
    return shock;
}


function wisdomBonusCleric (wisdom)
{
    let message = "";
    
    switch(wisdom)
        {
                
            case 10:
                message = "Spell Failure 15%";
                break;
                
            case 11:
                message = "Spell Failure 10%";
                break;
                
            case 12:
                message = "Spell Failure 5%";
                break;
                
            case 13:
                message = "Spell Failure 0%; additional spells: +1 (Lv 1)";
                break;
                
            case 14:
                message = "Spell Failure 0%; additional spells: +2 (Lv 1)";
                break;
                
            case 15:
                message = "Spell Failure 0%; additional spells: +2 (Lv 1), +1 (Lv 2)";
                break;
                
            case 16:
                message = "Spell Failure 0%; additional spells: +2 (Lv 1), +2 (Lv 2)";
                break;
                
            case 17:
                message = "Spell Failure 0%; additional spells: +2 (Lv 1), +2 (Lv 2), +1 (Lv 3)";
                break;
                
            case 18:
                message = "Spell Failure 0%; additional spells: +2 (Lv 1), +2 (Lv 2), +1 (Lv 3), +1 (Lv 4)";
                break;
                
            case 19:
                message = "Spell Failure 0%; additional spells: +3 (Lv 1), +2 (Lv 2), +1 (Lv 3), +1 (Lv 4)";
                break;
                
            default:
                message = "Spell Failure 20%";
                
        }
    
    return message;
}