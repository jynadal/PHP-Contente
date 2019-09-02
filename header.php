  // Requête qui sélectionne toutes les colonnes de la table Company
    $query =
      '
        SELECT
          Id,
          Pub,
          Tel,
          Mail,
          About,
          Copyright
        FROM  
          Company
      ';

      $resultSet = $pdo->query($query);
      $info = $resultSet->fetch();

?>

 <div class="tb_center pull-left">
                                    <ul>
                                        <!-- On récupère la valeur des colonnes Tel et Mail de la table Company -->    
                                        <li><i class="fa fa-phone"></i> Téléphone: <a href="#"><?= $info['Tel'] ?></a></li>
                                        <li><i class="fa fa-envelope-o"></i> <a href="#"><?= $info['Mail'] ?></a></li>
                                    </ul>
                                </div>
                                
                                
   //Pour le Nav bar
    <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a href="./index.php" class="dropdown-toggle active" role="button" >Accueil</a>
                                    </li>

//Pour le titre des Catégorie sur la NAV BAR
                    <?php 

                       $query =
                      '
                        SELECT
                          Id,
                          Titre
                        FROM  
                          Categories
                      ';


                      $resultSet = $pdo->query($query);
                      $slids = $resultSet->fetchAll();



                       ?>

                       
 <?php foreach($slids as $slid): ?>
                                    <li class="dropdown mmenu">


                                   
                                        <a href="./categories.php?id=<?= $slid['Id'] ?>&nom=<?= $slid['Titre'] ?>"><?= $slid['Titre'] ?></a>
                                  
                                        
                                    </li>
                                 <?php endforeach; ?>   
                                </ul>
