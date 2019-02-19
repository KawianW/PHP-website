<?php 
	define("game", "yathzee"); //yathzee, monopoly, schaken 
	define("truefalse", true); //true, false
	define("cijfer", 0); //random cijfer
	$answer = "";

	switch (game){
		case "yathzee": 
		if(truefalse == true){
			if(cijfer >15 && cijfer <30){
				$answer = "Je wilt Yathzee spelen want je hebt tussen de 15 en 30 minuten tijd";
			}elseif(cijfer <15 || cijfer >30){
				$answer = "Je wilt Yathzee spelen want dat vindt je gewoon leuk";
			}
		}elseif(truefalse == false){
			if(cijfer >100){
				$answer = "Je wilt geen Yathzee spelen want je wilt meer dan 100x met een dobbelsteen gooien";
			}elseif( cijfer <=100){
				$answer = "Je wilt geen Yathzee spelen want je wilt minder dan 100 punten halen";
			}
		}break;
	case "monopoly": 
		if(truefalse == true){
			if(cijfer ==1){
				$answer = "Je wilt Monopoly spelen want je hebt aan 1 spelletje genoeg";
			}elseif(cijfer >1){
				$answer = "Je wilt Monopoly spelen want je houd er van om iedereen blut te maken";
			}
		}elseif(truefalse == false){
			if(cijfer ==2 || cijfer >120){
				$answer = "Je wilt Monopoly niet spelen want je hebt geen zin in een spel van 2 uur";
			}else{
				$answer = "Je wilt Monopoly niet spelen want je houd niet van hotels";
			}
		}break;
	case "schaken": 
		if(truefalse == true){
			if(cijfer ==2){
				$answer = "Je wilt Schaken want je vindt zwart en wit leuk";
			}elseif(cijfer !=2){
				$answer = "Je wilt Schaken want je denkt slimmer dan mij te zijn";
			}
		}elseif(truefalse == false){
			if(cijfer ==-1){
				$answer = "Je wilt echt niet Schaken";
			}else{
				$answer = "Je wilt gewoon niet Schaken";
			}
		}break;
			default: $answer = "je wilt geen spel spelen";
		}


	echo $answer;
?>