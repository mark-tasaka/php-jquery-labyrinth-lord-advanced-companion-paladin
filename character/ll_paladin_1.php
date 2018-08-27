<!DOCTYPE html>
<html>
<head>
<title>Labyrinth Lord Paladin Character Generator</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Labyrinth Lord Paladin Character Generator. Goblinoid Games.">
	<meta name="keywords" content="Labyrinth Lord, Goblinoid Games,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2018">
		

	<link rel="stylesheet" type="text/css" href="css/ll_paladin.css">
	<link rel="stylesheet" type="text/css" href="css/ll_paladin_post.css">
    
    
    <script type="text/javascript" src="./js/dieRoll.js"></script>
    <script type="text/javascript" src="./js/modifiers.js"></script>
    <script type="text/javascript" src="./js/hitPoinst.js"></script>
    <script type="text/javascript" src="./js/abilityScoreAddition.js"></script>
    <script type="text/javascript" src="./js/bonusSpells.js"></script>
    <script type="text/javascript" src="./js/primeReq.js"></script>
    
    
    
</head>
<body>
    
    <!--PHP-->
    <?php
    
    include 'php/armour.php';
    include 'php/checks.php';
    include 'php/weapons.php';
    include 'php/gear.php';
    include 'php/coins.php';
    include 'php/encumbrance.php';
    include 'php/classDetails.php';
    include 'php/clothing.php';
    include 'php/characterRace.php';
    include 'php/paladinSpells.php';
    include 'php/turnUndead.php';
    include 'php/paladinSpecial.php';
    
    
        if(isset($_POST["theCharacterName"]))
        {
            $characterName = $_POST["theCharacterName"];
    
        }
    
        if(isset($_POST["thePlayerName"]))
        {
            $playerName = $_POST["thePlayerName"];
        
        }    
    
        if(isset($_POST["theAlignment"]))
        {
            $alignment = $_POST["theAlignment"];
        }
        

        if(isset($_POST["theLevel"]))
        {
            $level = $_POST["theLevel"];
        
        } 
    
    
    $exNext = experienceNextLevel($level);
    
    $thacoAdvancement = thacoAdjust ($level);
    
    
        if(isset($_POST["theHitDice"]))
        {
            $hitDiceOption = $_POST["theHitDice"];
        
        }    
    
    
        if(isset($_POST["theArmour"]))
        {
            $armour = $_POST["theArmour"];
        }
    
        $armourName = getArmour($armour)[0];
        $armourDefense = getArmour($armour)[1];
        $armourWeight = getArmour($armour)[2];
    
        if(isset($_POST["theShield"]))
        {
            $shield = $_POST["theShield"];
        }
    
        $shieldName = getShield($shield)[0];
        $shieldDefense = getShield($shield)[1];
        $shieldWeight = getShield($shield)[2];
    
        $totalAcDefense = $armourDefense + $shieldDefense;
        $totalArmourWeight = $shieldWeight + $armourWeight;
    
        $armourDefense = removeZero($armourDefense);
        $armourWeight = removeZero($armourWeight);
    
        $shieldDefense = removeZero($shieldDefense);
        $shieldWeight = removeZero($shieldWeight);
        
    
        if(isset($_POST["theGold"]))
        {
            $coins = $_POST["theGold"];
        }
    
        $coinQuantity = getCoins($coins)[0];
        $coinType = getCoins($coins)[1];
    
    
         
        $weaponArray = array();
        $weaponNames = array();
        $weaponDamage = array();
        $weaponWeight = array();
    
    
        if(isset($_POST["theWeapons"]))
        {
            foreach($_POST["theWeapons"] as $weapon)
            {
                array_push($weaponArray, $weapon);
            }
        }
    
    foreach($weaponArray as $select)
    {
        array_push($weaponNames, getWeapon($select)[0]);
    }
        
    foreach($weaponArray as $select)
    {
        array_push($weaponDamage, getWeapon($select)[1]);
    }
        
    $totalWeaponWeight = 0;
    
    foreach($weaponArray as $select)
    {
        array_push($weaponWeight, getWeapon($select)[2]);
        $totalWeaponWeight += getWeapon($select)[2];
    }
    
    

        $gearArray = array();
        $gearNames = array();
        $gearWeight = array();
    
    
        if(isset($_POST["theGear"]))
        {
            foreach($_POST["theGear"] as $weapon)
            {
                array_push($gearArray, $weapon);
            }
        }
    
        foreach($gearArray as $select)
        {
            array_push($gearNames, getGear($select)[0]);
        }
        
        $totalGearWeightOnly = 0;
    
        foreach($gearArray as $select)
        {
            array_push($gearWeight, getGear($select)[1]);
            $totalGearWeightOnly += getGear($select)[1];
        }
    
        $clothingArray = array();
        $clothingNames = array();
        $clothingWeight = array();
    
    
        if(isset($_POST["theClothing"]))
        {
            foreach($_POST["theClothing"] as $clothing)
            {
                array_push($clothingArray, $clothing);
            }
        }
    
        foreach($clothingArray as $select)
        {
            array_push($clothingNames, getClothing($select)[0]);
        }
        
        $totalClothingWeight = 0;
    
        foreach($clothingArray as $select)
        {
            array_push($clothingWeight, getClothing($select)[1]);
            $totalClothingWeight += getClothing($select)[1];
        }
    
    $totalGearWeight = $totalGearWeightOnly + $totalClothingWeight + $coinQuantity;
    
    
    $totalWeightCarried = $totalWeaponWeight + $totalGearWeight + $totalArmourWeight;
    
    $movementTurn = turnMovement($totalWeightCarried);
    
    $movementEncounter = encounterMovement($totalWeightCarried);
    
    $movementRunning = runningMovement($totalWeightCarried);
    
    $vsBreathAttacks = saveBreathAttacks($level) - 2;
    $vsPoisonDeath = savePoisonDeath ($level) - 2;
    $vsPetrify = savePetrify ($level) - 2;
    $vsWand = saveWand ($level) - 2;
    $vsSpell = saveSpell ($level) - 2;
    
    
    $spellsLevel1 = level1Spells ($level);
    $spellsLevel2 = level2Spells ($level);
    $spellsLevel3 = level3Spells ($level);
    $spellsLevel4 = level4Spells ($level);
    
    $hd1Undead = undeadHD1 ($level);
    $hd2Undead = undeadHD2 ($level);
    $hd3Undead = undeadHD3 ($level);
    $hd4Undead = undeadHD4 ($level);
    $hd5Undead = undeadHD5 ($level);
    $hd6Undead = undeadHD6 ($level);
    $hd7Undead = undeadHD7 ($level);
    $hd8Undead = undeadHD8 ($level);
    $hd9Undead = undeadHD9 ($level);
    $hd10Undead = undeadHD10 ($level);
    
    $paladinMessage = paladinSpecial ($level);
    
    ?>

    
	
<!-- JQuery -->
  <img id="character_sheet"/>
   <section>
           
		<span id="strength"></span>
		<span id="dexterity"></span> 
		<span id="constitution"></span> 
		<span id="intelligence"></span>
		<span id="wisdom"></span>
       <span id="charisma"></span>
		  
       
		<span id="strengthModDesc"></span>
		<span id="dexterityModDesc"></span> 
		<span id="constitutionModDesc"></span> 
		<span id="intelligenceModDesc"></span>
		<span id="wisdomModDesc"></span>
       <span id="charismaModDesc"></span>
       

       <span id="saveBreathAttack"></span>
       
       
       <span id="savePoisonDeath"></span>
       <span id="savePetrify"></span>
       <span id="saveWands"></span>
       <span id="saveSpell"></span>
       
       <span id="dieRollMethod"></span>
       
       <span id="race">Human</span>
       
       <span id="class">Paladin</span>
       
       
       <span id="exNextLevel">
           <?php
           echo $exNext;
           ?>
       
       </span>
       
       
       <span id="meleeAc0"></span>
       <span id="meleeAc1"></span>
       <span id="meleeAc2"></span>
       <span id="meleeAc3"></span>
       <span id="meleeAc4"></span>
       <span id="meleeAc5"></span>
       <span id="meleeAc6"></span>
       <span id="meleeAc7"></span>
       <span id="meleeAc8"></span>
       <span id="meleeAc9"></span>
       
       <span id="missileAc0"></span>
       <span id="missileAc1"></span>
       <span id="missileAc2"></span>
       <span id="missileAc3"></span>
       <span id="missileAc4"></span>
       <span id="missileAc5"></span>
       <span id="missileAc6"></span>
       <span id="missileAc7"></span>
       <span id="missileAc8"></span>
       <span id="missileAc9"></span>

       <span id="baseAc"></span>
       <span id="modifiedAc"></span>
       <span id="hitPoints"></span>
      <span id="primeReq"></span>
       
       
       <span id="conMessage"></span>
       <span id="wisdomTable"></span>
       <span id="spellProb"></span>
       <span id="paladinSpecial"></span>
       
       <span id="spellsLevel1"></span>
       <span id="spellsLevel2"></span>
       <span id="spellsLevel3"></span>
       <span id="spellsLevel4"></span>
       
       
       <span id="level">
           <?php
                echo $level;
           ?>
        </span>
       
       <span id="characterName">
           <?php
                echo $characterName;
           ?>
        </span>
       
              
       <span id="playerName">
           <?php
                echo $playerName;
           ?>
        </span>
	                 
       <span id="alignment">
           <?php
                echo $alignment;
           ?>
        </span>
              
              
       <span id="armourName">
           <?php
                echo $armourName;
           ?>
        </span>
              
       <span id="armourAc">
           <?php
                echo $armourDefense;
           ?>
        </span>
              
       <span id="armourWeight">
           <?php
                echo $armourWeight;
           ?>
        </span>
       
              
       <span id="shieldName">
           <?php
                echo $shieldName;
           ?>
        </span>
              
       <span id="shieldAc">
           <?php
                echo $shieldDefense;
           ?>
        </span>
              
       <span id="shieldWeight">
           <?php
                echo $shieldWeight;
           ?>
        </span>
       
       
       <span id="totalArmourClassMod">
           <?php
                echo $totalAcDefense;
           ?>
        </span>
              
       <span id="totalArmourWeight">
            <?php
                echo $totalArmourWeight;
            ?>
       </span>
       
       <span id="weaponsList">
           <?php
           $val1 = 0;
           $val2 = 0;
           $val3 = 0;
           
           foreach($weaponNames as $theWeapon)
           {
               echo $theWeapon;
               echo "<br/>";
               $val1 = isWeaponTwoHanded($theWeapon, $val1);
               $val2 = isWeaponBastardSword($theWeapon, $val2);
           }
           
           $val3 = $val1 + $val2;
           
           $weaponNotes = weaponNotes($val3);
           
           ?>  
        </span>
       
       <span id="weaponNotes">
           <?php
                echo $weaponNotes;
           ?>
        </span>
            
       <span id="weaponsList2">
           <?php
           foreach($weaponDamage as $theWeaponDam)
           {
               echo $theWeaponDam;
               echo "<br/>";
           }
           ?>        
        </span>
       

            
       <span id="weaponsList3">
           <?php
           foreach($weaponWeight as $theWeapon)
           {
               echo $theWeapon;
               echo "<br/>";
           }
           ?>        
        </span>
       
       <span id="totalWeaponWeight">
           <?php
           echo $totalWeaponWeight;
           ?>
       </span>

              
       <span id="gearList">
           <?php
           
           foreach($gearNames as $theGear)
           {
               echo $theGear;
               echo "<br/>";
           }
           ?>
       </span>
           
              
       <span id="gearList2">
           <?php
           
           foreach($gearWeight as $theGear)
           {
               echo $theGear;
               echo "<br/>";
           }
           ?>  
        </span>
	   	   
       
       <span id="totalGearWeight">
           <?php
           echo $totalGearWeight;
           ?>
       </span>
       
       
              
       <span id="clothingList">
           <?php
           
           foreach($clothingNames as $theClothing)
           {
               echo $theClothing;
               echo "<br/>";
           }
           ?>
       </span>
           
              
       <span id="clothingList2">
           <?php
           
           foreach($clothingWeight as $theClothing)
           {
               echo $theClothing;
               echo "<br/>";
           }
           ?>  
        </span>
	   	   
       
       <span id="totalGearWeight">
           <?php
           echo $totalGearWeight;
           ?>
       </span>
       
       
       
       <span id="totalWeightCarried">
           <?php
           echo $totalWeightCarried . " lbs";
           ?>
       </span>
              
       
       <span id="wealth">
           <?php
           echo ($coinQuantity * 10) . $coinType;
           ?>
       </span>
       
       <span id="coinWeight">
           <?php
           echo $coinQuantity;
           ?>
       </span>
       
              
       <span id="turnMove">
           <?php
           echo $movementTurn;
           ?>
       </span>
       
       
       <span id="encounterMove">
           <?php
           echo $movementEncounter;
           ?>
       </span>
       
       <span id="runningMove">
           <?php
           echo $movementRunning;
           ?>
       </span>

       
       <span id="turnHD1">
           <?php
           echo $hd1Undead;
           ?>
       </span>
       
       <span id="turnHD2">
           <?php
           echo $hd2Undead;
           ?>
       </span>
       
       <span id="turnHD3">
           <?php
           echo $hd3Undead;
           ?>
       </span>
       
       <span id="turnHD4">
           <?php
           echo $hd4Undead;
           ?>
       </span>
       
       <span id="turnHD5">
           <?php
           echo $hd5Undead;
           ?>
       </span>
       
       <span id="turnHD6">
           <?php
           echo $hd6Undead;
           ?>
       </span>
       
       <span id="turnHD7">
           <?php
           echo $hd7Undead;
           ?>
       </span>
       
       <span id="turnHD8">
           <?php
           echo $hd8Undead;
           ?>
       </span>
       
       
       <span id="turnHD9">
           <?php
           echo $hd9Undead;
           ?>
       </span>
       
       <span id="turnHD10">
           <?php
           echo $hd10Undead;
           ?>
       </span>
       
       
       <span id="paladinSpecial">
           <?php
           echo $paladinMessage;
           ?>
       </span>
       
       
	</section>
	

		
  <script>
      

	  
	/*
	 Character() - Paladin Character Constructor
	*/
	function Character() {
        
        let strength = <?php echo rand(12, 18) ?>;
        let dexterity = rollDice(6, 3, 0, 0);
        let constitution = rollDice(6, 3, 0, 0);
        let	intelligence = <?php echo rand(9, 18) ?>;
        let	wisdom = <?php echo rand(13, 18) ?>;
        let	charisma =  <?php echo rand(17, 18) ?>;
        let wisdomMod = abilityScoreModifier(wisdom);
        let strengthMod = abilityScoreModifier(strength);
        let dexterityMod = abilityScoreModifier(dexterity);
        let constitutionMod = abilityScoreModifier(constitution);
		
		let paladinCharacter = {
			"strength": strength,
			"dexterity": dexterity,
			"constitution": constitution,
			"intelligence": intelligence,
			"wisdom": wisdom,
			"charisma": charisma,
            "strengthMod": abilityScoreModifier(strength),
            "strengthModifyDes": strengthModifierDescription(strength),
            "dexterityMod": abilityScoreModifier(dexterity),
            "dexterityModifyDes": dexterityModifierDescription(dexterity),
            "constitutionMod": abilityScoreModifier(constitution),
            "constitutionModifyDes": constitutionModifierDescription(constitution),
            "intelligenceMod": abilityScoreModifier(intelligence),
            "intelligenceModifyDes": intelligenceModifierDescription(intelligence),
            "wisdomModifyDes": wisdomModifierDescription(wisdom),
            "charismaMod": abilityScoreModifier(charisma),
            "charismaModifyDes": charismaModifierDescription(charisma),
            "breathAttack": '<?php echo $vsBreathAttacks ?>',
            "poisonDeath": '<?php echo $vsPoisonDeath  ?>',
            "petrify": '<?php echo $vsPetrify  ?>',
            "wandsSave": <?php echo $vsWand ?>  - wisdomMod,
            "spellSave": <?php echo $vsSpell ?>  - wisdomMod,
            "meleeHitAC0": 20 - <?php echo $thacoAdvancement ?> - (strengthMod),
            "meleeHitAC1": 20 - <?php echo $thacoAdvancement ?> - (strengthMod) - 1,
            "meleeHitAC2": 20 - <?php echo $thacoAdvancement ?> - (strengthMod) - 2,
            "meleeHitAC3": 20 - <?php echo $thacoAdvancement ?> - (strengthMod) - 3,
            "meleeHitAC4": 20 - <?php echo $thacoAdvancement ?> - (strengthMod) - 4,
            "meleeHitAC5": 20 - <?php echo $thacoAdvancement ?> - (strengthMod) - 5,
            "meleeHitAC6": 20 - <?php echo $thacoAdvancement ?> - (strengthMod) - 6,
            "meleeHitAC7": 20 - <?php echo $thacoAdvancement ?> - (strengthMod) - 7,
            "meleeHitAC8": 20 - <?php echo $thacoAdvancement ?> - (strengthMod) - 8,
            "meleeHitAC9": 20 - <?php echo $thacoAdvancement ?> - (strengthMod) - 9,
            "missileHitAC0": 20 - <?php echo $thacoAdvancement ?> - (dexterityMod),
            "missileHitAC1": 20 - <?php echo $thacoAdvancement ?> - (dexterityMod) - 1,
            "missileHitAC2": 20 - <?php echo $thacoAdvancement ?> - (dexterityMod) - 2,
            "missileHitAC3": 20 - <?php echo $thacoAdvancement ?> - (dexterityMod) - 3,
            "missileHitAC4": 20 - <?php echo $thacoAdvancement ?> - (dexterityMod) - 4,
            "missileHitAC5": 20 - <?php echo $thacoAdvancement ?> - (dexterityMod) - 5,
            "missileHitAC6": 20 - <?php echo $thacoAdvancement ?> - (dexterityMod) - 6,
            "missileHitAC7": 20 - <?php echo $thacoAdvancement ?> - (dexterityMod) - 7,
            "missileHitAC8": 20 - <?php echo $thacoAdvancement ?> - (dexterityMod) - 8,
            "missileHitAC9": 20 - <?php echo $thacoAdvancement ?> - (dexterityMod) - 9,
            "level1Spells": '<?php echo $spellsLevel1 ?>',
            "level2Spells": '<?php echo $spellsLevel2 ?>',
            "level3Spells": '<?php echo $spellsLevel3 ?>',
            "level4Spells": '<?php echo $spellsLevel4 ?>',
            "acBase": 9 - dexterityMod,
            "acModified": <?php echo $totalAcDefense ?> + 9 - dexterityMod,
            "hp": hitPoints(<?php echo $level ?>, <?php echo $hitDiceOption ?>, constitutionMod) + addHighLevelHp(<?php echo $level ?>),
            "primeReqBonus": primeReq(strength, wisdom),
            "survivalRes": "Survive Resurrection " + survivalResurrection(constitution) + "%; Survive Transformative Shock " + survivalShock (constitution) + "%",
			"dieRollMethod": "Ability Score Generation: 3d6 (Old School)"
			
		
			

		};
	    if(paladinCharacter.hitPoints <= 0 ){
			paladinCharacter.hitPoints = 1;
		}
		return paladinCharacter;
	  
	  }
	  


  
       let imgData = "images/paladin_character_sheet.png";
      
        $("#character_sheet").attr("src", imgData);
      

	  let data = Character();
		 
      $("#strength").html(data.strength);
      
      $("#dexterity").html(data.dexterity);
      
      $("#constitution").html(data.constitution);
      
      $("#intelligence").html(data.intelligence);
      
      $("#wisdom").html(data.wisdom);
      
      $("#charisma").html(data.charisma);
      
      $("#strengthModDesc").html(data.strengthModifyDes);
      $("#dexterityModDesc").html(data.dexterityModifyDes);
      $("#constitutionModDesc").html(data.constitutionModifyDes);
      $("#intelligenceModDesc").html(data.intelligenceModifyDes);
      $("#wisdomModDesc").html(data.wisdomModifyDes);
      $("#charismaModDesc").html(data.charismaModifyDes);
      
      
      $("#dieRollMethod").html(data.dieRollMethod);
      
      $("#saveBreathAttack").html(data.breathAttack);
      $("#savePoisonDeath").html(data.poisonDeath);
      $("#savePetrify").html(data.petrify);
      $("#saveWands").html(data.wandsSave);
      $("#saveSpell").html(data.spellSave);
      
      
      $("#meleeAc0").html(data.meleeHitAC0);
      $("#meleeAc1").html(data.meleeHitAC1);
      $("#meleeAc2").html(data.meleeHitAC2);
      $("#meleeAc3").html(data.meleeHitAC3);
      $("#meleeAc4").html(data.meleeHitAC4);
      $("#meleeAc5").html(data.meleeHitAC5);
      $("#meleeAc6").html(data.meleeHitAC6);
      $("#meleeAc7").html(data.meleeHitAC7);
      $("#meleeAc8").html(data.meleeHitAC8);
      $("#meleeAc9").html(data.meleeHitAC9);
      
      $("#missileAc0").html(data.missileHitAC0);
      $("#missileAc1").html(data.missileHitAC1);
      $("#missileAc2").html(data.missileHitAC2);
      $("#missileAc3").html(data.missileHitAC3);
      $("#missileAc4").html(data.missileHitAC4);
      $("#missileAc5").html(data.missileHitAC5);
      $("#missileAc6").html(data.missileHitAC6);
      $("#missileAc7").html(data.missileHitAC7);
      $("#missileAc8").html(data.missileHitAC8);
      $("#missileAc9").html(data.missileHitAC9);
      
      
      $("#baseAc").html(data.acBase);
      $("#hitPoints").html(data.hp);
      $("#primeReq").html(data.primeReqBonus);
      $("#modifiedAc").html(data.acModified);
      
      $("#conMessage").html(data.survivalRes);
      
      $("#spellsLevel1").html(data.level1Spells);
      $("#spellsLevel2").html(data.level2Spells);
      $("#spellsLevel3").html(data.level3Spells);
      $("#spellsLevel4").html(data.level4Spells);

	 
  </script>
		
	
    
</body>
</html>