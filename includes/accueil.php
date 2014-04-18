

<div class="container">
	<?php
	$var_alcool = new Var_Bays("alcool");
	$var_drogue = new Var_Bays("drogue");
	$var_infarctus = new Var_Bays("infarctus");
	$var_infarctus->addParent("alcool");
	$var_infarctus->addParent("drogue");
	
	$var_alcool->afficheParents();
	$var_drogue->afficheParents();
	$var_infarctus->afficheParents();

	$var_infarctus->setProba(0.5);
	echo $var_infarctus->getProba();
	
	
	
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
							<td><input <?php if(isset($_POST["alcool"])&&$_POST["alcool"]=="vrai")   echo " checked " ?> name="alcool" value="vrai" type="radio"  required="required" ></td>
							<td><input <?php if(isset($_POST["alcool"])&&$_POST["alcool"]=="faux")   echo " checked " ?> name="alcool" value="faux" type="radio" required="required" ></td>
							<td><input <?php if(isset($_POST["alcool"])&&$_POST["alcool"]=="inconnu")echo " checked " ?> name="alcool" value="inconnu" type="radio" required="required" ></td>
						</tr>
						<tr><td>Drogue</td>
							<td><input <?php if(isset($_POST["drogue"])&&$_POST["drogue"]=="vrai")   echo " checked " ?>name="drogue" value="vrai" type="radio" required="required" ></td>
							<td><input <?php if(isset($_POST["drogue"])&&$_POST["drogue"]=="faux")   echo " checked " ?>name="drogue" value="faux" type="radio"></td>
							<td><input <?php if(isset($_POST["drogue"])&&$_POST["drogue"]=="inconnu")echo " checked " ?>name="drogue" value="inconnu" type="radio"></td>
						</tr>
						<tr><td>Infarctus</td>
							<td><input <?php if(isset($_POST["infarctus"])&&$_POST["infarctus"]=="vrai")    echo " checked " ?>name="infarctus" value="vrai" required="required"  type="radio"></td>
							<td><input <?php if(isset($_POST["infarctus"])&&$_POST["infarctus"]=="faux")    echo " checked " ?>name="infarctus" value="faux" type="radio"></td>
							<td><input <?php if(isset($_POST["infarctus"])&&$_POST["infarctus"]=="inconnu") echo " checked " ?>name="infarctus" value="inconnu" type="radio"></td>
						</tr>
						
				</tbody>

			</table>
			<button type="submit"> Valider </button></br>
						
			<?php 

				foreach($_POST as $variable=> $valeur){
					
					if (($valeur=="vrai")||($valeur=="faux")){
						echo "Sachant que " . $variable . " est " . $valeur. "</br>";
					}
				}
				
				foreach($_POST as $variable=> $valeur){
					if ($valeur=="inconnu"){
						echo "On peut essayer de trouver ". $variable . " qui est inconnu. </br>";
					}
				}
				foreach($_POST as $variable=> $valeur){
					if ($valeur=="inconnu"){
						echo '<button name="recherche" type="submit" value="'.$variable.'">'. $variable . "</button> </br>";
					}
				}
				if(isset($_POST["recherche"])){
				echo "Vous avez choisi de chercher ".$_POST["recherche"];
			}

			?>
			</form>
		</div>
	</div>
</div>