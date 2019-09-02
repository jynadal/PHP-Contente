//To have the GET by URL

<h2><?php echo $_GET['nom'] ?></h2>

//To have product that you are looking for

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
                         Cat_Id='.$_GET['id'].' 
                      ';
                      
                      $resultSet = $pdo->query($query);
                      $prods = $resultSet->fetchAll();
                       ?>
   //List of products                    
  <div class="row">
                             <?php foreach($prods as $prod): ?>
                                <div class="col-md-3 col-sm-6">
                                    <div class="product-item">
                                        <div class="item-thumb">
                                            <span class="badge new">New</span>
                                            <img src="<?= $prod['Image'] ?>" class="img-responsive" alt=""/>
                                            <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                            
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="./products.php?id=<?= $prod['Id'] ?>"><?= $prod['Titre'] ?></a></h4>
                                            <span class="product-price"><?= $prod['Prix'] ?> €</span>
                                            
                                        </div>
                                    </div>

                                </div>
                                    <?php endforeach; ?> 
                                <div class="col-md-4 col-sm-6">
                              </div>

                       
