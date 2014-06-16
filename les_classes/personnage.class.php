<?php
	class Personnage 
	{
		private $_experience ;						//declaration des attributs privé
		private $_force  ;
		private $_degat ;
		private $_localisation ;

		const FORCE_LOW = 20 ;
		const FORCE_MEDIUM = 40 ;
		const FORCE_HIGH = 80 ;

		 public function __construct($force, $degat)
		{
			$this->setforce($force) ;
			$this->setdegat($degat) ;
			$this->gagner_XP ;
		}
		
		public function gagner_XP()					//declaration des Methodes public
		{
			$this-> _experience = $this -> _experience +1 ;
		}
		public function frapper(Personnage $cible)
		{
			$cible->_degat += $this->_force ;
		}

		public function setforce($force)
		{
			if (in_array($force , array(self::FORCE_LOW , self :: FORCE_MEDIUM , self :: FORCE_HIGH))) 		//test des constantes
				$this->_force = $force ;
		}
		
		public function setdegat($degat)
		{
			if (!is_int($degat)) 										// S'il ne s'agit pas d'un nombre entier.
			{
				trigger_error("ce n'est pas un nombre entier", E_USER_WARNING);
				return;
			}
			
			$this->_degat = $degat ;
		}
		
		public function setexperience($experience)
		{
			if(!is_int($experience))
			{
				trigger_error("ce n'est pas un nombre entier !", E_USER_WARNING);
				return ;
			}
			if ($experience>100)
			{
				echo ("l'experience d'un personnage ne peut depasser 100 ");
			}
			$this->_experience = $experience ;
		}
			
		
		
		public function experience()                                    //declaration des acceseurs
		{
			return $this->_experience ;
		
		}
		public function force()
		{
			return $this->_force ;
		
		}
		public function localisation()
		{
			return $this->_localisation ;
		
		}
		public function degat()
		{
			return $this->_degat ;
		
		}
	}									