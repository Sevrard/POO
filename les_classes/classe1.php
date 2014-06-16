<?php
 
 /* function chargerclasse($classe)
 {													
 	require $classe . '.class.php';
 }

 spl_autoload_register('chargerclasse') ;  */
	
	require 'personnage.class.php';

	
	echo ("Stats INITIALES : (avec __construct) <br />") ;
	$perso1 = new Personnage(Personnage::FORCE_LOW,20);		//instanciation de la classe
	$perso2 = new Personnage(Personnage:: FORCE_HIGH,12);	
	echo "le personnage 1 a ",$perso1->force() , "point de force <br /> ";   //test du constructeur
	echo "le personnage 1 a ",$perso1->degat() , "point de degat <br /> " ;
	echo "le personnage 2 a ",$perso2->force() , "point de force <br /> ";
	echo "le personnage 2 a ",$perso2->degat() , "point de degat <br /> " ;
	
	echo ("Stats INITIALES : (avec Mutateurs) <br />") ;
	$perso1->setforce(82);												//Utilisation des mutateurs
	$perso1->setexperience(4);
	$perso2->setforce(30);
	$perso2->setexperience(5);
	echo "le personnage 1 a ",$perso1->force() , "point de force <br /> ";  //test des mutateurs
	echo "le personnage 1 a ",$perso1->experience() , "point d'xp<br /> ";
	echo "le personnage 2 a ",$perso2->force() , "point de force<br /> ";
	echo "le personnage 2 a ",$perso2->experience() , "point d'xp<br /> ";
	
	$perso1->frapper($perso2);
	$perso1->gagner_XP();
	$perso1->frapper($perso1);
	$perso2->gagner_XP() ;
	echo ("Stats FINALES : (test de la fonction frapper) <br />") ;
	echo "le personnage 1 a ",$perso1->degat() , "point de degat<br /> ";  //test des mutateurs
	echo "le personnage 1 a ",$perso1->experience() , "point d'xp<br /> ";
	echo "le personnage 2 a ",$perso2->degat() , "point de degat<br /> ";
	echo "le personnage 2 a ",$perso2->experience() , "point d'xp<br /> ";
	
	
?>
