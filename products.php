//Exemple list de produit et autre function

 <?php 

                   
                        $query =
                      '
                        SELECT
                          *
                         FROM  
                          Produit
                         WHERE
                          Id='.$_GET['id'].'

                        
                      ';


                      $resultSet = $pdo->query($query);
                      $produit = $resultSet->fetch();


                       ?>
                       
                         <?php 

    $query =
                      '
                        SELECT
                          *
                        FROM  
                          Images
                          WHERE
                          Produit_Id='.$_GET['id'].'
                      ';


                      $resultSet = $pdo->query($query);
                      $slids = $resultSet->fetchAll();


            ?>
            
    <div class="owl-carousel prod-slider sync1">

                                         <?php foreach($slids as $slid): ?>
                                        <div class="item"> 
                                            <img src="<?= $slid['Url']?>" alt="">
                                            <a href="<?= $slid['Url']?>" rel="prettyPhoto[gallery2]" title="Product" class="caption-link"><i class="fa fa-arrows-alt"></i></a>
                                        </div>
                                       <?php endforeach; ?>

                                    </div>

                                    <div  class="owl-carousel sync2">
                                          <?php foreach($slids as $slid): ?>
                                            <div class="item"> <img src="<?= $slid['Url']?>" alt=""> </div>
                                       <?php endforeach; ?>
                                        
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-6">
                                    <div class="product-single">
                                        <div class="ps-header">
                                            <span class="badge offer">-50%</span>
                                            <h3><?= $produit['Titre'] ?></h3>
                                          
                                            <div class="ps-price"><?= $produit['Prix'] ?> € </div>
                                        </div>

<!----------------------------------------------------------------------------------------------------------------------->
                                        <!-- ICI ON A SUPPRIME LA DESCRIPTION DU PRODUIT (elle sera affichée plus bas) -->
                                        <!-- <p> avec variable php $produit['Description'] supprimée -->
<!----------------------------------------------------------------------------------------------------------------------->
                                       
                                        <div class="sep"></div>
                                      
                                        <a class="addtobag" href="#">Ajouter au panier</a>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <!----------------------------------------------------------------------------------------------------------------------->
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <!-- On affiche le Titre du produit dynamiquement-->
                                        <b><?= $produit['Titre'] ?></b>
                                        <div class="space10"></div>
                                        <!-- On affiche la Description du produit dynamiquement -->              
                                        <p><?= $produit['Description'] ?></p>
                                        <div class="space20"></div>
                                    </div>
<!----------------------------------------------------------------------------------------------------------------------->
                       <?php 

                       $query =
                      '
                        SELECT
                          Id,
                          Titre,
                          Description,
                          Image,
                          Prix,
                          Cat_Id
                        FROM  
                          Produit
                         WHERE
                         Cat_Id='. $produit['Cat_Id'].'
                         AND
                         Id <> '.$_GET['id'].'

                        
                      ';


                      $resultSet = $pdo->query($query);
                      $prods = $resultSet->fetchAll();



                       ?>

 <?php foreach($prods as $prod): ?>
                                        <div class="pc-wrap">
                                            <div class="product-item">
                                                <div class="item-thumb">
                                                    <span class="badge new">New</span>
                                                    <img src="<?= $prod['Image'] ?>" class="img-responsive" alt=""/>
                                                    <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                                
                                                </div>
                                                <div class="product-info">
                                                    <h4 class="product-title"><a href="products.php?id=<?= $prod['Id'] ?>"><?= $prod['Titre'] ?></a></h4>
                                                    <span class="product-price"><?= $prod['Prix'] ?>€</span>
                                                  
                                                </div>
                                            </div>
                                        </div>

<?php endforeach; ?>

                                         
                            
                            
            
            
                       
