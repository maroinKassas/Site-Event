<?php
class Vue {
	static function administration($participants) {
		if($participants != null){
?>
			<h2> Participants </h2>

			<?php
			if(isset($_POST["modifier"])){
			?>
				<div id="alert" class="alert alert-success" onclick="alert()">
	    			<strong>Modification !</strong> Votre modification a été réalisée avec succès !
	  			</div>
  			<?php
  			}elseif (isset($_POST["supprimer"])) {
  			?>
  				<div id="alert" class="alert alert-danger" onclick="alert()">
   					<strong>Suppression !</strong> Votre suppression a été réalisée avec succès !
  				</div>
  			<?php
  			}
  			?>

			<table class="table table-hover">
				<thead>
					<tr>
						<th>Civilité</th>
						<th>Nom</th>
						<th>Prénom</th>
						<th>Adresse</th>
						<th>Code P.</th>
						<th>Ville</th>
						<th>Date de naissance</th>
						<th>Email</th>
						<th style="text-align:center">Action</th>
					</tr>
				</thead>

				<?php
					foreach ($participants as $donnees) {
				?>
						<tbody>
							<tr>
								<form class="form-horizontal" method = "POST" enctype="multipart/form-data" action ="?module=Admin&action=Administration">
									<td class="td-dn">
										<input class="form-control" id="civil" type = "text" name = "civil" value='<?php echo $donnees["civil"]; ?>'/>
									</td>
									<td class="td-dn">
										<input class="form-control" id="nom" type = "text" name = "nom" value='<?php echo $donnees["nom"]; ?>'/>
									</td>
									<td class="td-dn">
										<input class="form-control" id="prenom" type = "text" name = "prenom" value='<?php echo $donnees["prenom"]; ?>'/>
									</td>
									<td class="td-dn">
										<input class="form-control" id="adresse" type = "text" name = "adresse" value='<?php echo $donnees["adresse"]; ?>'/>
									</td>
									<td class="td-dn">
										<input class="form-control" id="codePostal" type = "text" name = "codePostal" value='<?php echo $donnees["codePostal"]; ?>'/>
									</td>
									<td class="td-dn">
										<input class="form-control" id="ville" type = "text" name = "ville" value='<?php echo $donnees["ville"]; ?>'/>
									</td>
									<td style="width: 15%;">
										<input class="dt-n form-control" id="jours" type = "text" name = "jours" value='<?php echo $donnees["jours"]; ?>'/>
										<input class="dt-n form-control" id="mois" type = "text" name = "mois" value='<?php echo $donnees["mois"]; ?>'/>
										<input class="dt-n form-control" id="annees" type = "text" name = "annees" value='<?php echo $donnees["annees"]; ?>'/>
									</td>
									<td style="width: 15%;">
										<input class="form-control" id="email" type = "text" name = "email" value='<?php echo $donnees["email"]; ?>'/>
									</td>
									<td style="width: 26%;">
										<div class="col-sm-12">
											 <input type="hidden" name="idParticipant" value="<?php echo $donnees['idParticipant']; ?>" />
											<?php
												if($donnees["statut"] == null){
											?>
													<input type="submit" class="btn btn-default btnV" name ="valider"  id ="valider" value="Valider" />
													<input type="submit" class="btn btn-default btnR" name ="refuser"  id ="refuser" value="Refuser" />
											<?php		
												}elseif($donnees["statut"] == "true"){
											?>
													<input type="submit" class="btn btn-default btnV" name ="valider"  id ="valider" value="Inscription validé" disabled="true" />
											<?php
												}else{
											?>
													<input type="submit" class="btn btn-default btnR" name ="refuser"  id ="refuser" value="Inscription refusé" disabled="true" />
											<?php
												}
											?>

											<input type="submit" class="btn btn-default" name ="modifier"  id ="modifier" value="Modifier" />
											<input type="submit" class="btn btn-default" name ="supprimer"  id ="supprimer" value="Supprimer" />
										</div>					
									</td>
								</form>
							</tr>
						</tbody>
				<?php
					}
				?>
			</table>
<?php
		}else{
?>
			<?php
  			if (isset($_POST["supprimer"])) {
  			?>
  				<div id="alert" class="alert alert-danger" onclick="alert()">
   					<strong>Suppression !</strong> Votre suppression a été réalisée avec succès !
  				</div>
  			<?php
  			}
  			?>

			<h3> Aucun participant n'est inscrit. </h3>
<?php
		}
	}
}
?>

<script type="text/javascript">
	function alert(){
		document.getElementById("alert").style.opacity = "1";
	}
</script>