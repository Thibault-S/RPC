<?php
class Var_Bays
{
	private $_nom;
	private $_parents;        
	private $_fils;       
	private $_proba;
	private $_observe;


	public function __construct($nom) 
	  {
	    
	    $this->setNom($nom); 
	    $this->_parents=array();
	    
	  }

	public function addParent($pere){
		array_push($this->_parents,$pere);
		return;
	}

	public function getProbaCond($val){
		return $this->_proba[$val];
	}

	public function getProbaVrai() 
	  {
	  	if($this->_parents==null){
	  		echo "Pas de parents!";
	  		return $this->_proba;
	  	}else{
	  		echo "J'ai des parents!";
	  		return $this->_proba;
	  	}
	  	
	  }
	public function getProbaFaux() {
		return 1-getProbaVrai();
	}


	public function getNom(){
	  	return $this->_nom;
	}


	public function afficheParents(){	
		if($this->_parents!=null){
			echo "</br>Les parents de " . $this->_nom . " sont : </br><ul>";
		
			foreach ($this->_parents as $clé => $valeur){
				echo '<li>'.$valeur.'</li>';
			}
			echo '</ul>';
		}else{
			echo "</br>". $this->_nom . " n'a pas de parents. </br>";
		}
	  	return;
	}

	public function probaCond(	$iad,  
								$i_ad,
								$ia_d,
								$i_a_d,
								$_iad,
								$_i_ad,
								$_ia_d,
								$_i_a_d){
		

		if($this->_nom=="infarctus"){
			$this->_proba=array("iad"=> $iad, 
								"i_ad"=>$i_ad,
								"ia_d"=>$ia_d,
								"i_a_d"=>$i_a_d,
								"_iad"=>$_iad,
								"_i_ad"=>$_i_ad,
								"_ia_d"=>$_ia_d,
								"_i_a_d"=>$_i_a_d);
		}
	}
//*/
	public function setNom($nom){
		$this->_nom=$nom;
	}


	public function setProba($proba){
		if($this->_parents==null){
			$this->_proba=$proba;
		}else{

				

			}
			echo "On ne peut pas fixer ma proba directement "; 
		}

		
	//*/

}
?>