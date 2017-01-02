<?php
class Vue {
	static function viewInscription() {
?>
	<div class="row">
		<div class="col-xs-12 col-md-12 bg-success border">
			<h1> Inscription à la séance</h1>
				<form class="form-horizontal" method = "POST" enctype="multipart/form-data" action ="?module=Inscription&action=Inscription">
					<div class="form-group">
						<div class="col-sm-offset-2">
							<div class="radio" >
								<label><input required value="Homme" type="radio" name="civil"> Homme</label>
								<label><input required value="Femme" type="radio" name="civil"> Femme </label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 col-md-2">Nom</label>
						<div class="col-sm-10 col-md-10">
							<input class="form-control" id="nom" type = "text" name = "nom" placeholder="Fançois" required />
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 col-md-2" >Prénom</label>
						<div class="col-sm-10 col-md-10">
							<input class="form-control" id="prenom" type = "text" name = "prenom" placeholder="DUPON" required />
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 col-md-2">Adresse</label>
						<div class="col-sm-10 col-md-10">
							<input class="form-control" id="adresse" type = "text" name = "adresse" placeholder="9 rue de la tuilerie" required />
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 col-md-2" >Code Postal</label>
						<div class="col-sm-10 col-md-10">
							<input class="form-control" id="codePostal" type = "text" name = "codePostal" placeholder="75 000" maxlength="5" required />
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 col-md-2">Ville</label>
						<div class="col-sm-10 col-md-10">
							<input class="form-control" id="ville" type = "text" name = "ville" placeholder="Paris" required />
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 col-md-2">Date de naissance</label>
						<div class="col-sm-10 col-md-10">
							<div class="col-sm-4">
								<select class="form-control" name="jours" id="jours">
									<?php
									for ($i = 31 ; $i >= 1 ; $i--){
									?>
										<option value="<?php echo $i ?>"><?php echo $i ?></option>';
									<?php 
									}  
									?>
								</select>
							</div>
							<div class="col-sm-4">
								<select class="form-control" name="mois" id="mois">
									<?php
									for ($i = 12 ; $i >= 1 ; $i--){
									?>
										<option value="<?php echo $i ?>"><?php echo $i ?></option>';
									<?php 
									}  
									?>
								</select>
							</div>
							<div class="col-sm-4">
								<select class="form-control" name="annees" id="annees">
									<?php
									for ($i = 2015 ; $i >= 1950 ; $i--){
									?>
										<option value="<?php echo $i ?>"><?php echo $i ?></option>';
									<?php 
									}  
									?>
								</select>
							</div>
						</div>
					</div>
				
					<div class="form-group">
						<label class="control-label col-sm-2 col-md-2">Email</label>
						<div class="col-sm-10 col-md-10">
							<input class="form-control" id="email" type = "email" name = "email" placeholder="françois@exemple.com" required />
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-sm-2 col-md-2">Comment avez-vous découvert One Piece ?</label>
						<div class="col-sm-10 col-md-10">
							<textarea class="col-sm-10 col-md-10"></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-sm-2 col-md-2">Quels sont vos personnages préférés et pourquoi ?</label>
						<div class="col-sm-10 col-md-10">
							<textarea class="col-sm-10 col-md-10"></textarea>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-8 col-md-12">
							<center><input type="submit" class="btn btn-default" name ="button"  id ="button" value="Valider" /></center>
						</div>
					</div>
					</br>
				</form>
			</div>
	</div>
<?php
	}		
	static function viewInscriptionEffectue($var) {	
?>
		<h3> 
			<p> <?php echo $var[0]; ?> <?php echo $var[1]; ?>, vous vous êtes bien inscrit</p>
		</h3>
<?php
	}		
}
?>