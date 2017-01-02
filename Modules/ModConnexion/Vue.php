<?php
class Vue {
	static function connexion($message) {;
?>
		<div class="row">
			<div class="col-xs-12 col-md-12 bg-success border">	
				<h1>Identification</h1>
				<?php
				if ($message != "") {
				?>
					<div class="alert alert-danger">
						<strong>Danger!</strong> <?php echo $message; ?>
					</div>
				<?php
				}
				?>
				
				<form class="form-horizontal" method = "POST" enctype="multipart/form-data" action ="?module=Connexion&action=Connexion">
					<div class="form-group">
						<label class="control-label col-sm-2" for="email">Identifiant</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="id">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="pwd">Mot de passe</label>
						<div class="col-sm-10">          
							<input type="password" class="form-control" name="pwd">
						</div>
					</div>
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" name="connexion" class="btn btn-default">Connexion</button>
						</div>
					</div>
				</form>
			</div>
		</div>
<?php
	}
}
?>