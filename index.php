<!DOCTYPE html>
<html>
<head>
<title>Launch Page: Labyrinth Lord Paladin Generator</title>
    
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Mark Tasaka 2018">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    
	<link rel="stylesheet" href="css/github_ll_additions.css"/> 
	<link rel="stylesheet" href="css/github_ll_style.css"/> 
	<link rel="stylesheet" href="css/github_ll_additions_advance.css"/> 

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="utf-8" />
	

	</head>
	
	
<body>
    

	
	<section>
		
		<h1><img src="images/title.png" alt="Labyrinth Lord Generator" class="image" /></h1>
		
				
			
		
                                
                
            <br/>
            <br/>
        
        <p>The Labyrinth Lord Advanced Edition Companion Paladin Generator is designed primarily with PHP and jQuery.  The Launch Page has a series of drop-down menus, input fields and checkboxes, where alignments, weapons, armour, gear, character level, etc., are added to the character sheet.  When the submit button is entered, the information (variables) is collected through POST methods and added to the character sheet.  Several of the variables POSTED modify the values on the character sheet; therefore, jQuery or PHP functions have been created to make these adjustments possible.</p>

        <p>Several of the jQuery/JavaScript functions are stored in external files, as a means of creating greater design efficiency, with the goal of designing a program with high cohesion and low coupling.  In this way, this program replicates Object-Oriented design.  JSON is used to store multi-column variables, with jQuery functions used to retrieve these variables.    </p>    

        <br/>
        <br/>
    
           

            
		<form action="" id ="paladinForm"  target="_blank" method="post">
            

            <div class="content9">
  
            <span class="formIputDescription">Character's Name:</span>
            <input type="text" id="characterName" name="theCharacterName" value="" class="nameBox">

            <br/>
            <br/>
            
            
            <span class="formIputDescription">Player's Name:</span>
            <input type="text" id="playerName" name="thePlayerName" value="" class="nameBox">
            
            <br/>
            <br/>
                
                            
            <span class="formIputDescription">Character Level:</span>	
			  <select id="level" name="theLevel" class="alignmentBox">	
				<option value="1" selected>1st Level, Paladin</option>
				<option value="2">2nd Level, Paladin</option>
				<option value="3">3rd Level, Paladin</option>
				<option value="4">4th Level, Paladin</option>
				<option value="5">5th Level, Paladin</option>
				<option value="6">6th Level, Paladin</option>
				<option value="7">7th Level, Paladin</option>
				<option value="8">8th Level, Paladin</option>
				<option value="9">9th Level, Paladin</option>
				<option value="10">10th Level, Paladin</option>
				<option value="11">11th Level, Paladin</option>
				<option value="12">12th Level, Paladin</option>
				<option value="13">13th Level, Paladin</option>
				<option value="14">14th Level, Paladin</option>
				<option value="15">15th Level, Paladin</option>
			  </select>
            
            <br/>
            <br/>
                

                            
                <span class="formIputDescription">Ability Scores:</span>	
			  <select id="abilityScores" name="theAbilityScore" class="alignmentBox">	
				<option value="1" selected>3d6 (Old School)</option>
				<option value="2">4d6, drop the lowest</option>
			  </select>
            
                
            <br/>
            <br/>
                
                            
                <span class="formIputDescription">Hit Dice:</span>	
			  <select id="hitDice" name="theHitDice" class="alignmentBox">	
				<option value="1" selected>d8, standard HD</option>
				<option value="2">d10, advanced HD (optional)</option>
			  </select>
            
                
            <br/>
            <br/>
                
                
            
            <span class="formIputDescription">Alignment:</span>	
			  <select id="alignment" name="theAlignment" class="alignmentBox">			
                <option value="Lawful" selected>Lawful</option>
				<option value="Lawful Good">Lawful Good</option>
				<option value="Lawful Neutral">Lawful Neutral</option>
				<option value="Lawful Evil">Lawful Evil</option>
			  </select>
            
            <br/>
            <br/>
                
                            
            <span class="formIputDescription">Armour:</span>	
			  <select id="armour" name="theArmour" class="alignmentBox">			
                <option value="0" selected>No Armour</option>
				<option value="1">Banded mail</option>
				<option value="2">Chain mail</option>
				<option value="3">Leather</option>
				<option value="4">Padded</option>
				<option value="5">Plate mail</option>
				<option value="6">Scale mail</option>
				<option value="7">Splint mail</option>
				<option value="8">Studded leather</option>
			  </select>
            
            <br/>
            <br/>         
                
            <span class="formIputDescription">Shield:</span>	
			  <select id="shield" name="theShield" class="alignmentBox">			
                <option value="0" selected></option>
				<option value="1">Add Shield</option>
			  </select>


            
            <br/>
            <br/>
                
                
                
            <span class="formIputDescription">Wealth:</span>	
			  <select id="gold" name="theGold" class="alignmentBox">			
                <option value="0" selected></option>
				<option value="1">1d6 x 10 gold pieces</option>
				<option value="2">3d6 x 10 gold pieces</option>
				<option value="3">6d6 x 10 gold pieces</option>
				<option value="4">2d6 x 10 platinum pieces</option>
				<option value="5">4d6 x 10 platinum pieces</option>
			  </select>
            
            <br/>
            <br/>
                

                <span class="weaponBoxHeader">Weapons:</span>
                <br/><br/>
                
            <div id="weaponsGroupings">
                <input type="checkbox" name="theWeapons[]" value="0"> Axe, battle+<br/>
                <input type="checkbox" name="theWeapons[]" value="1"> Axe, hand<br/>  
                <input type="checkbox" name="theWeapons[]" value="2"> Club<br/>  
                <input type="checkbox" name="theWeapons[]" value="3"> Crossbow, heavy++<br/>  
                <input type="checkbox" name="theWeapons[]" value="4"> Crossbow, light++<br/> 
                <input type="checkbox" name="theWeapons[]" value="5"> Dagger<br/>   
                <input type="checkbox" name="theWeapons[]" value="6"> Daggers x 2<br/>  
                <input type="checkbox" name="theWeapons[]" value="7"> Daggers x 3<br/>  
                <input type="checkbox" name="theWeapons[]" value="8"> Dagger, silver<br/> 
                <input type="checkbox" name="theWeapons[]" value="9"> Darts x 2<br/> 
                <input type="checkbox" name="theWeapons[]" value="10"> Darts x 4<br/> 
                <input type="checkbox" name="theWeapons[]" value="11"> Darts x 6<br/> 
                <input type="checkbox" name="theWeapons[]" value="12"> Flail<br/> 
                <input type="checkbox" name="theWeapons[]" value="13"> Flail, heavy+<br/> 
                <input type="checkbox" name="theWeapons[]" value="14"> Hammer, light<br/> 
                <input type="checkbox" name="theWeapons[]" value="15"> Hammer, war+<br/> 
                <input type="checkbox" name="theWeapons[]" value="16"> Javelin<br/> 
                <input type="checkbox" name="theWeapons[]" value="17"> Javelins x 2<br/> 
                <input type="checkbox" name="theWeapons[]" value="18"> Lance<br/> 
                <input type="checkbox" name="theWeapons[]" value="19"> Longbow++<br/> 
                <input type="checkbox" name="theWeapons[]" value="20"> Mace<br/> 
                <input type="checkbox" name="theWeapons[]" value="21"> Morningstar+<br/> 
                <input type="checkbox" name="theWeapons[]" value="22"> Pick, heavy+<br/> 
                <input type="checkbox" name="theWeapons[]" value="23"> Pick, light<br/> 
                <input type="checkbox" name="theWeapons[]" value="24"> Pole Arm+<br/> 
                <input type="checkbox" name="theWeapons[]" value="25"> Quarterstaff+<br/> 
                <input type="checkbox" name="theWeapons[]" value="26"> Scimitar<br/> 
                <input type="checkbox" name="theWeapons[]" value="27"> Shortbow++<br/> 
                <input type="checkbox" name="theWeapons[]" value="28"> Sling++<br/> 
                <input type="checkbox" name="theWeapons[]" value="29"> Spear<br/>  
                <input type="checkbox" name="theWeapons[]" value="30"> Sword, long<br/>  
                <input type="checkbox" name="theWeapons[]" value="31"> Sword, bastard^<br/>  
                <input type="checkbox" name="theWeapons[]" value="32"> Sword, short<br/>  
                <input type="checkbox" name="theWeapons[]" value="33"> Sword, two-handed+<br/>  
                <input type="checkbox" name="theWeapons[]" value="34"> Trident+<br/> 
                
                </div>
                <br/>
                
                <div class="weaponBoxFooter">
                
                    + Two-handed weapon<br/>
                    ++ Includes ammunition<br/>
                    ^ A bastard sword can be used on handed or two-handed
                </div>
                
                <br/>
                <br/>
                
                <span class="weaponBoxHeader">Adventuring Gear:</span>
                <br/><br/>
                
            <div id="gearGroupings">
                <input type="checkbox" name="theGear[]" value="0"> Backpack (empty)<br/>
                <input type="checkbox" name="theGear[]" value="1"> Bedroll<br/>  
                <input type="checkbox" name="theGear[]" value="2"> Case, map or scroll<br/>  
                <input type="checkbox" name="theGear[]" value="3"> Blanket, winter<br/>  
                <input type="checkbox" name="theGear[]" value="4"> Block and tackle<br/>  
                <input type="checkbox" name="theGear[]" value="5"> Candles (10)<br/>   
                <input type="checkbox" name="theGear[]" value="6"> Crowbar<br/>  
                <input type="checkbox" name="theGear[]" value="7"> Flask (empty)<br/>  
                <input type="checkbox" name="theGear[]" value="8"> Flint and steel<br/> 
                <input type="checkbox" name="theGear[]" value="9"> Garlic (3 cloves)<br/> 
                <input type="checkbox" name="theGear[]" value="10"> Grappling hook<br/> 
                <input type="checkbox" name="theGear[]" value="11"> Hammer<br/> 
                <input type="checkbox" name="theGear[]" value="12"> Holy symbol, wooden<br/> 
                <input type="checkbox" name="theGear[]" value="13"> Holy symbol, silver<br/> 
                <input type="checkbox" name="theGear[]" value="14"> Holy water (flask)<br/> 
                <input type="checkbox" name="theGear[]" value="15"> Ink (1 ox. vial)<br/> 
                <input type="checkbox" name="theGear[]" value="16"> Quill pen<br/> 
                <input type="checkbox" name="theGear[]" value="17"> Ladder, 10-foot<br/> 
                <input type="checkbox" name="theGear[]" value="18"> Lantern<br/> 
                <input type="checkbox" name="theGear[]" value="19"> Lock<br/> 
                <input type="checkbox" name="theGear[]" value="20"> Manacles<br/> 
                <input type="checkbox" name="theGear[]" value="21"> Mirror, small steel<br/> 
                <input type="checkbox" name="theGear[]" value="22"> Oil (1-pint flask)<br/> 
                <input type="checkbox" name="theGear[]" value="23"> Paper (sheet)<br/> 
                <input type="checkbox" name="theGear[]" value="24"> Parchment (sheet)<br/> 
                <input type="checkbox" name="theGear[]" value="25"> Pick, miner's<br/> 
                <input type="checkbox" name="theGear[]" value="26"> Pole, 10-foot wooden<br/> 
                <input type="checkbox" name="theGear[]" value="27"> Rations, unpreserved<br/> 
                <input type="checkbox" name="theGear[]" value="28"> Rations, trail (5 days)<br/> 
                <input type="checkbox" name="theGear[]" value="29"> Rope, hemp (50 ft.)<br/>  
                <input type="checkbox" name="theGear[]" value="30"> Rope, silk (50 ft.)<br/>  
                <input type="checkbox" name="theGear[]" value="31"> Sack, large (empty)<br/>  
                <input type="checkbox" name="theGear[]" value="32"> Sack, small (empty)<br/>  
                <input type="checkbox" name="theGear[]" value="33"> Saddle<br/>  
                <input type="checkbox" name="theGear[]" value="34"> Saddle bag<br/>   
                <input type="checkbox" name="theGear[]" value="35"> Spade or shovel<br/>   
                <input type="checkbox" name="theGear[]" value="36"> Spell book (blank)<br/>   
                <input type="checkbox" name="theGear[]" value="37"> Spikes, iron (12)<br/>   
                <input type="checkbox" name="theGear[]" value="38"> Spyglass<br/>   
                <input type="checkbox" name="theGear[]" value="39"> Stakes, wooden (3)<br/>   
                <input type="checkbox" name="theGear[]" value="40"> Thieves' tools<br/>   
                <input type="checkbox" name="theGear[]" value="41"> Torches (8)<br/>   
                <input type="checkbox" name="theGear[]" value="42"> Vial (for ink, potion)<br/>   
                <input type="checkbox" name="theGear[]" value="43"> Waterskin/wineskin<br/>   
                <input type="checkbox" name="theGear[]" value="44"> Wine (2 pints)<br/>   
                <input type="checkbox" name="theGear[]" value="45"> Wolfsbane (first full)<br/>  
                <input type="checkbox" name="theGear[]" value="46"> Box, large iron<br/>  
                <input type="checkbox" name="theGear[]" value="47"> Box, small iron<br/>                  
                <input type="checkbox" name="theGear[]" value="48"> Cask, wooden<br/>                  
                <input type="checkbox" name="theGear[]" value="49"> Chest, large wooden<br/>  
                <input type="checkbox" name="theGear[]" value="50"> Chest, small wooden<br/>                  
                <input type="checkbox" name="theGear[]" value="51"> Mirror, large metal<br/>  
                <input type="checkbox" name="theGear[]" value="52"> Mirror, small steel<br/>                   
                <input type="checkbox" name="theGear[]" value="53"> Pouch, large belt<br/>  
                <input type="checkbox" name="theGear[]" value="54"> Pouch, small belt<br/>      
      
                </div>
                
                <br/>
                <br/>
                                
                <span class="weaponBoxHeader">Clothing:</span>
                <br/><br/>
                
            <div id="clothingGroupings">
                <input type="checkbox" name="theClothing[]" value="0"> Belt, leather<br/>
                <input type="checkbox" name="theClothing[]" value="1"> Belt, wide leather<br/>  
                <input type="checkbox" name="theClothing[]" value="2"> Boots, high hard leather<br/>  
                <input type="checkbox" name="theClothing[]" value="3"> Boots, low hard leather<br/>  
                <input type="checkbox" name="theClothing[]" value="4"> Boots, high soft leather<br/>  
                <input type="checkbox" name="theClothing[]" value="5"> Boots, low soft leather<br/>   
              <!--  <input type="checkbox" name="theClothing[]" value="6"> <br/>  -->
                <input type="checkbox" name="theClothing[]" value="7"> Cap, cloth<br/>  
                <input type="checkbox" name="theClothing[]" value="8"> Cap, leather<br/> 
                <input type="checkbox" name="theClothing[]" value="9"> Cloak, cloth<br/> 
                <input type="checkbox" name="theClothing[]" value="10"> Cloak, fur<br/>  
                <input type="checkbox" name="theClothing[]" value="11"> Girdle<br/>  
                <input type="checkbox" name="theClothing[]" value="12"> Hat<br/>  
                <input type="checkbox" name="theClothing[]" value="13"> Robe, cloth<br/>  
                <input type="checkbox" name="theClothing[]" value="14"> Robe, silk<br/>  
                <input type="checkbox" name="theClothing[]" value="15"> Shirt, cloth<br/>  
                <input type="checkbox" name="theClothing[]" value="16"> Shirt, leather patched<br/>  
                <input type="checkbox" name="theClothing[]" value="17"> Trousers, heavy<br/>       
                <input type="checkbox" name="theClothing[]" value="18"> Trousers, light<br/>          

      
                </div>
                
                <br/>
                <br/>
            
		<div class="content8">
            
			  
            			  
			<div class="generatorButtonA2">
			
			     <span class="generatorbuttonsC1">

				
                    <input type="submit" value="" id="generate_characters2"/>
			     
                </span>
				
			     <span class="generatorbuttonsC1">
				
                     <input type="reset"  value="" id="reset_generator2"/>
		
				</span>
                
		
            </div>
            </div>
            
				
            </div>
            
            </form>
            
            
            
                
                
                	
                <script>
        
                    $("#generate_characters2").click(function(){
         
    
                        $("#paladinForm").attr('action', "character/ll_paladin_"+ $("#abilityScores").val() +  ".php");
    
                    });
                    
                </script>
        
                
                
                
      
    </section>


</body>
</html>