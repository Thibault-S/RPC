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

	public function probaCondI(	$iad,  
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

		public function probaCondA(	$aipr,  
									$aip_r, 
									$ai_pr, 
									$ai_p_r, 
									$a_ipr, 
									$a_ip_r, 
									$a_i_pr, 
									$a_i_p_r,
									$_aipr,  
									$_aip_r, 
									$_ai_pr, 
									$_ai_p_r, 
									$_a_ipr, 
									$_a_ip_r, 
									$_a_i_pr, 
									$_a_i_p_r){
		

		if($this->_nom=="accident"){
			$this->_proba=array(	"aipr"=>$aipr,  
									"aip-r"=>$aip_r, 
									"ai_pr"=>$ai_pr, 
									"ai_p_r"=>$ai_p_r, 
									"a_ipr"=>$a_ipr, 
									"a_ip_r"=>$a_ip_r, 
									"a_i_pr"=>$a_i_pr, 
									"a_i_p_r"=>$a_i_p_r,
									"_aipr"=>$_aipr,  
									"_aip-r"=>$_aip_r, 
									"_ai_pr"=>$_ai_pr, 
									"_ai_p_r"=>$_ai_p_r, 
									"_a_ipr"=>$_a_ipr, 
									"_a_ip_r"=>$_a_ip_r, 
									"_a_i_pr"=>$_a_i_pr, 
									"_a_i_p_r"=>$_a_i_p_r,);
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