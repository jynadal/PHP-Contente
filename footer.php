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


    // Requête qui sélectionne toutes les colonnes de la table Network
    $query =
      '
        SELECT
          Id,
          Titre,
          Url,
          Icones
        FROM  
          Network
      ';

      $resultSet = $pdo->query($query);
      $netws = $resultSet->fetchAll();


?>

 <!-- FOOTER -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 widget-footer col-sm-3">
                            <h5>About Store</h5>
                            <img width=80% src="logo.png" class="img-responsive space10" alt=""/>
                            
                            <!-- On récupère la valeur de la colonne About de la table Company -->
                            
                            <p><?= $info['About'] ?></p>
                            <div class="clearfix"></div>
                            <ul class="f-social">
                                
                              <!-- Boucle qui récupère l'Url, et l'icone du réseau social (de la table Network) -->
                                
                                <?php foreach($netws as $netw): ?>
                                <li><a href="<?= $netw['Url'] ?>" class="<?= $netw['Icones'] ?>"></a></li>
                                <?php endforeach; ?>
                                
                                <!-- Fin de la boucle qui récupère l'Url, et l'icone du réseau social (de la table Network) -->

                            </ul>
                        </div>
