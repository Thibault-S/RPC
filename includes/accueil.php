

<div class="container">
	<?php
	$var_alcool = new Var_Bays("alcool");
	$var_drogue = new Var_Bays("drogue");
	$var_infarctus = new Var_Bays("infarctus");
	$var_infarctus->addParent("alcool");
	$var_infarctus->addParent("drogue");

	$var_route = new Var_Bays("route");
	$var_pluie = new Var_Bays("pluie");
	$var_accident = new Var_Bays("accident");
	$var_accident->addParent("pluie");
	$var_accident->addParent("route");
	$var_accident->addParent("infarctus");



	
	/*$var_alcool->afficheParents();
	$var_drogue->afficheParents();
	$var_infarctus->afficheParents();
	$var_route->afficheParents();
	$var_pluie->afficheParents();
	$var_accident->afficheParents();
	*/




	$var_infarctus->probaCondI(
								0.384,//$iad,  
								0.072,//$i_ad,
								0.16,//$ia_d,
								0.032,//$i_a_d,
								0.096,//$_iad,
								0.048,//$_i_ad,
								0.16,//$_ia_d,
								0.048//$_i_a_d
								);//*/

		$var_accident->probaCondA(
								0.108,//$aipr,  
								0.072,//$aip_r, 
								0.012,//$ai_pr, 
								0.008,//$ai_p_r, 
								0.016,//$a_ipr, 
								0.144,//$a_ip_r, 
								0.064,//$a_i_pr, 
								0.576,//$a_i_p_r,
								0.108,//$_aipr,  
								0.72,//$_aip_r, 
								0.012,//$_ai_pr, 
								0.008,//$_ai_p_r, 
								0.016,//$_a_ipr, 
								0.144,//$_a_ip_r, 
								0.064,//$_a_i_pr, 
								0.576//$_a_i_p_r
								);//*/
	
	//$var_infarctus->setProba(0.5);
	//echo $var_infarctus->getProbaVrai();

	echo 'coucou '. $var_infarctus->getProbaCond("iad");
	
	
	
	?>
	<div class="row">
		<div class="col-lg-6 ">
			<table class="table">
				<thead>
					<tr>
						 <td>Variable</td>
						 <td>Vrai</td>
						 <td>Faux</td>
						 <td>Inconnu</td>
					</tr>
				</thead>
				<tbody>
						<form method="post">
						<tr><td>Alcool</td>
							<td><input <?php if(isset($_POST["alcool"])&&$_POST["alcool"]=="vrai")   echo " checked " ?> name="alcool" value="1" type="radio"  required="required" ></td>
							<td><input <?php if(isset($_POST["alcool"])&&$_POST["alcool"]=="faux")   echo " checked " ?> name="alcool" value="0" type="radio" required="required" ></td>
							<td><input <?php if(isset($_POST["alcool"])&&$_POST["alcool"]=="inconnu")echo " checked " ?> name="alcool" value="2" type="radio" required="required" ></td>
						</tr>
						<tr><td>Drogue</td>
							<td><input <?php if(isset($_POST["drogue"])&&$_POST["drogue"]=="vrai")   echo " checked " ?>name="drogue" value="1" type="radio" required="required" ></td>
							<td><input <?php if(isset($_POST["drogue"])&&$_POST["drogue"]=="faux")   echo " checked " ?>name="drogue" value="0" type="radio"></td>
							<td><input <?php if(isset($_POST["drogue"])&&$_POST["drogue"]=="inconnu")echo " checked " ?>name="drogue" value="2" type="radio"></td>
						</tr>
						<tr><td>Infarctus</td>
							<td><input <?php if(isset($_POST["infarctus"])&&$_POST["infarctus"]=="vrai")    echo " checked " ?>name="infarctus" value="1" required="required"  type="radio"></td>
							<td><input <?php if(isset($_POST["infarctus"])&&$_POST["infarctus"]=="faux")    echo " checked " ?>name="infarctus" value="0" type="radio"></td>
							<td><input <?php if(isset($_POST["infarctus"])&&$_POST["infarctus"]=="inconnu") echo " checked " ?>name="infarctus" value="2" type="radio"></td>
						</tr>
						<tr><td>Pluie</td>
							<td><input <?php if(isset($_POST["pluie"])&&$_POST["pluie"]=="vrai")   echo " checked " ?> name="pluie" value="1" type="radio"  required="required" ></td>
							<td><input <?php if(isset($_POST["pluie"])&&$_POST["pluie"]=="faux")   echo " checked " ?> name="pluie" value="0" type="radio" required="required" ></td>
							<td><input <?php if(isset($_POST["pluie"])&&$_POST["pluie"]=="inconnu")echo " checked " ?> name="pluie" value="2" type="radio" required="required" ></td>
						</tr>
						<tr><td>Mauvaise Route</td>
							<td><input <?php if(isset($_POST["route"])&&$_POST["route"]=="vrai")   echo " checked " ?> name="route" value="1" type="radio"  required="required" ></td>
							<td><input <?php if(isset($_POST["route"])&&$_POST["route"]=="faux")   echo " checked " ?> name="route" value="0" type="radio" required="required" ></td>
							<td><input <?php if(isset($_POST["route"])&&$_POST["route"]=="inconnu")echo " checked " ?> name="route" value="2" type="radio" required="required" ></td>
						</tr>
						<tr><td>Accident</td>
							<td><input <?php if(isset($_POST["accident"])&&$_POST["accident"]=="vrai")   echo " checked " ?> name="accident" value="1" type="radio"  required="required" ></td>
							<td><input <?php if(isset($_POST["accident"])&&$_POST["accident"]=="faux")   echo " checked " ?> name="accident" value="0" type="radio" required="required" ></td>
							<td><input <?php if(isset($_POST["accident"])&&$_POST["accident"]=="inconnu")echo " checked " ?> name="accident" value="2" type="radio" required="required" ></td>
						</tr>						
				</tbody>
			</table>

			<div>
				<tr><td> Element a interroger ? </td></tr>
				<select id="ListeElementInterroge">
					<option value="alcool">Alcool</option> 
					<option value="drogue">Drogue</option> 
					<option value="infarctus">Infarctus</option> 
					<option value="route">Mauvaise Route</option> 
					<option value="pluie">Pluie</option>
					<option value="accident">Accident</option> 
				</select>
				<button type="submit"> Valider </button></br>
			</div>
						
			
			<?php 

				foreach($_POST as $variable=> $valeur){
					if (($valeur=="vrai")||($valeur=="faux")||($valeur=="inconnu")){
						$var_en_cours[$variable]=$valeur;
					}
				}

				foreach($_POST as $variable=> $valeur){
					
					if ($valeur=="0"){
						echo "Sachant que " . $variable . " est faux</br>";
					}
				}

				foreach($_POST as $variable=> $valeur){
					
					if ($valeur=="1"){
						echo "Sachant que " . $variable . " est vrai</br>";
					}
				}	
				
				foreach($_POST as $variable=> $valeur){
					if ($valeur=="2"){
						echo "Sachant que ". $variable . " est inconnu. </br>";
					}
				}
				foreach($_POST as $variable=> $valeur){
					if ($valeur=="inconnu"){
						echo '<button name="recherche" type="submit" value="'.$variable.'">'. $variable . "</button> </br>";
					}
				}

				if(isset($_POST["recherche"])){
					echo "Vous avez choisi de chercher ".$_POST["recherche"];
					echo ' : p('.$_POST["recherche"];
						$i=0;
					foreach($_POST as $variable=> $valeur){
						
						if ($valeur=="vrai"){
							if($i==0){echo'|';}
							echo  $variable .',';
							
						}
						$i=$i+1;

					}
					echo ")=".$var_infarctus->getProbaCond(parse($_POST["recherche"],$var_en_cours));
					
				}

			?>
			</form>
		</div>
	</div>
</div>
<?php
	function parse($recherche,$var_en_cours){
		$res="".$recherche[0];
		foreach ($var_en_cours as $cle => $valeur) {
			if($valeur=="vrai"){
				$res=$res.$cle[0];
			}
			if($valeur=="faux"){
				$res=$res.'_'.$cle[0];
			}	
		}
		//echo 'res:'$res;
		return $res;
	}

?>



