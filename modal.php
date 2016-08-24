 					
						<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal hide fade subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">
						  <div class="modal-header">
						    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
						    <h3 id="myModalLabel">Inscription</h3>
						  </div>
						  <div class="modal-body">
						    	<form class="form" id="formulaire" method="post" action="controlleurs/creat_abonne.php">
								  <div class="control-group">
								    <div class="controls">
								    <p> <input name="nom" type="text" class="form-control" placeholder="Nom complet" class="in"></p>
								    </div>
								  </div>
								  
								  <div class="control-group">
								    <div class="controls">
								     <p> <input name="mail" type="email" class="form-control" placeholder="Email" class="in"></p>
								    </div>
								  </div>
								  <div class="control-group">
								    <div class="controls">
								     <p> <input  name="pass" type="password" class="form-control" placeholder="Mot de passe" class="in"></p>
								    </div>
								  </div>
								
								  <div class="control-group">
								    <div class="controls"><button type="submit" name="valider" class="btn">S'inscrire</button>
								    </div>
								  </div>
								</form>
						  </div>
					</div>