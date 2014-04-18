<?php
class Var_Bays
{
	private $_nom;
	private $_parents;        
	private $_fils;       
	private $_proba;
	private $_observe;


	public function __construct($nom) // Constructeur demandant 2 paramètres
	  {
	    echo 'Voici le constructeur !'; // Message s'affichant une fois que tout objet est créé.
	    $this->setNom($nom); // Initialisation de la force.
	    $this->_parents=array();
	    
	  }
	public function addParent($pere){
		array_push($this->_parents,$pere);
		//var_dump($this->_parents);
		//echo 'test';
		//var_dump($tt);
		return;
	}
	public function getProba() // Une méthode qui déplacera le personnage (modifiera sa localisation).
	  {
	  	if($this->_parents==null){
	  		echo "Pas de parents!";
	  		return $this->_proba;
	  	}else{
	  		echo "J'ai des parents!";
	  		return $this->_proba;
	  	}
	  	
	  }
	public function getNom() // Une méthode qui déplacera le personnage (modifiera sa localisation).
	{
	  	return $this->_nom;
	}
	public function afficheParents() // Une méthode qui déplacera le personnage (modifiera sa localisation).
	{	
		if($this->_parents!=null){
			echo "</br>Les parents de " . $this->_nom . " sont : </br><ul>";
		
			foreach ($this->_parents as $clé => $valeur) {
				echo '<li>'.$valeur.'</li>';
			}
			echo '</ul>';
			//var_dump($this->_parents);
		}else{
			echo "</br>". $this->_nom . " n'a pas de parents. </br>";
		

		}
	  	return;
	}
	public function setNom($nom){
		$this->_nom=$nom;
	}
	public function setProba($proba){
		$this->_proba=$proba;
	}

}
?>