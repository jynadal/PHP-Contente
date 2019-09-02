// ATTENTION à l'ordre des requêtes :
// ON PLACE TOUJOURS TOUT EN HAUT LES REQUÊTES D'AJOUT, DE MODIFICATION ET DE SUPPRESSION !!!

    // Si l'utilisateur clique sur le bouton AJOUTER
    // Avec des formulaires, on peut utiliser POST
    if (isset($_POST['adduser'])){

            $query =
        '
            INSERT INTO
                User
                (Nom_Prenom,Email,Pass,Ville,Zip,Pays,Adresse,Tel,Datei)
            VALUES 
                (?,?,?,?,?,?,?,?,NOW())
        ';

    $resultSet = $pdo->prepare($query);
    $resultSet->execute([$_POST['nom'],$_POST['mail'],$_POST['passw'],$_POST['ville'],$_POST['zip'],$_POST['pays'],$_POST['adresse'],$_POST['tel']]);
    // On exécute la requête et on récupère la valeur saisit dans les input Titre, Prix, Image, Catégories et Description avec le name='titre', name='prix', name='img', name='cat', name='desc' (name renseignés dans chaque input) dans la variable $resultSet
    
    // On renvoit l'utilisateur vers la page inscription.php?ok=ok dans laquelle on iscrit dans l'URL ?ok=ok et on pourra de cette manière faire un test pour afficher un message disant que le compte a été créé grâce à la variable $_GET['ok']
    // CECI PERMET D'ANNULER LE MESSAGE DE CONFIRMATION DE NOUVEL ENVOI DU FORMULAIRE QUI REINJECTERAI A NOUVEAU LES DONNEES DANS LA BASE DE DONNEES
    header('location:inscription.php?ok=ok');

    }

 
?>

//Formulaire d'inscription

 <div class="account-form">
									
									<?php 
										// Quand l'utilisateur clique sur le bouton S'INSCRIRE, il est redirigé vers     header('location:inscription.php?ok=ok')
										// Test qui permet de vérifier si l'utilisateur a déjà créé un compte et d'afficher un message si c'est le cas
										if(isset($_GET['ok'])){
									?>

                                        Le compte a été créé avec succès
                                
									<?php
										}
									?>

                                    <form method="POST" class="form-login"> 

                                        <ul class="form-list row">

                                            <li class="col-md-12 col-sm-12">
                                                <label >Nom Prénom <em>*</em></label>
                                                <!-- On applique un name="nom" à l'input -->
                                                <input required type="text" class="input-text" name="nom">
                                            </li>
                                            <li class="col-md-12 col-sm-12">
                                                <label >Email <em>*</em></label>
                                                <!-- On applique un name="mail" à l'input -->
                                                <input required type="text" class="input-text" name="mail">
                                            </li>
                                            <li class="col-md-12 col-sm-12">
                                                <label >Mot de passe <em>*</em></label>
                                                <!-- On applique un name="passw" à l'input -->
                                                <input required type="text" class="input-text" name="passw">
                                            </li>
                                            <li class="col-md-12 col-sm-12">
                                                <label >Ville <em>*</em></label>
                                                <!-- On applique un name="ville" à l'input -->
                                                <input required type="text" class="input-text" name="ville">
                                            </li>
                                            <li class="col-md-12 col-sm-12">
                                                <label >Code Postal <em>*</em></label>
                                                <!-- On applique un name="zip" à l'input -->
                                                <input required type="text" class="input-text" name="zip">
                                            </li>
                                            <li class="col-md-12 col-sm-12">
                                                <label >Pays <em>*</em></label>
                                                <!-- On applique un name="pays" au select -->
												<select required name="pays"> 
												   <!--<option value="FR" selected="selected">France</option>-->
                                                   <!--<option value="AF">Afghanistan</option>......-->
                                                    </li>
                                            <li class="col-md-12 col-sm-12">
                                                <label >Adresse <em>*</em></label>
                                                <input required type="text" class="input-text" name="adresse">
                                            </li>
                                            <li class="col-md-12 col-sm-12">
                                                <label >Téléphone <em>*</em></label>
                                                <input required type="text" class="input-text" name="tel">
                                            </li>
                                        
                                        </ul>

                                        <div class="buttons-set">
                                          <!-- On applique un name="adduser" à l'input -->
                                          <button name="adduser" class="btn-black" type="submit" ><span>S'inscrire</span></button>
                                        </div>

                                    </form>
                                </div>  
                                
                                
                                                   
                                                   
