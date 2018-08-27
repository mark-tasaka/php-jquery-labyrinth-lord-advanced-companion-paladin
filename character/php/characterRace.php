<?php

function demiHumanTraits ($race)
{
    $traits = "";
    
    if($race === "Dwarf")
    {
        $traits = "Infravision 60'<br/>2 in 6 chance of detecting traps, false walls, hidden constructs,
        or noticing<br/> if passages are slopped. <br/>Ability to speak the Common tongue, Dwarvish, Alignment
        tongue,<br/> Goblin, Gnome and Kobold.<br/>*Cannot use two-handed weapons or longbows.";
    }
    else if($race === "Elf")
    {
        $traits = "Infavision 60'<br/>When actively searching, elves are able to detect hidden and secret doors on<br/> a roll of 1-2 on a d6.<br/>Unaffected by the papralysis ghouls inflict.<br/>Able to speak the Common tongue, the Alignment tongue, Elvish, Gnoll,<br/> Hobgoblin and Orc.";
    }
    else if($race === "Gnome")
    {
        $traits = "Infravision 60'<br/>
        2 in 6 chance of detecting decrepit or unsafe structures, knowing the current<br/> depth and direction underground and knowing if passages are sloped. <br/>
        Ability to speak the Common tongue, Gnomish, Dwarvish, Halfling, Orc,<br/> Goblin, Kobold and the Alignment tongue.
        <br/>*Cannot use large or two-handed weapons.";
    }
    else if($race === "Halfling")
    {
        $traits = "90% ability to hide in bushes or outdoor cover. <br/>2 in 6 chance of hiding in shadows or behind cover in 
        underground <br/>environments. <br/>+1 to all missile attack rolls. <br/>-2 AC bonus when attack by creatures greater than human sized.<br/>*Cannot use large or two-handed weapons.";
    }
    else if($race === "Half-Elf")
    {
        $traits = "Infavision 60'<br/>When actively searching, half-elves are able to detect hidden and secret <br/>doors on a roll of 1-2 on a d6.<br/>+4 to saving throws against the papralyzing effect of ghouls.<br/>Able to speak the Common tongue, Elvish, the Alignment tongue, Gnoll,<br/> Hobgoblin and Orc.";
    }
    else if($race === "Half-Orc")
    {
        $traits = "Infavision 60'<br/>When actively searching, half-orcs are able to detect hidden and secret <br/>doors on a roll of 1-2 on a d6.<br/>Able to speak the Common tongue, the Alignment tongue, Hobgoblin and Orc.";
    }
    
    return $traits;

}


function demiHumanTitle ($race)
{
    $traits = "";
    
    if($race === "Dwarf")
    {
        $traits = "DWARF TRAITS:";
    }
    else if($race === "Elf")
    {
        $traits = "ELF TRAITS:";
    }
    else if($race === "Gnome")
    {
        $traits = "GNOME TRAITS:";
    }
    else if($race === "Halfling")
    {
        $traits = "HALFLING TRAITS:";
    }
    else if($race === "Half-Elf")
    {
        $traits = "HALF-ELF TRAITS:";
    }
    else if($race === "Half-Orc")
    {
        $traits = "HALF-ORC TRAITS:";
    }
    
    return $traits;

}


?>