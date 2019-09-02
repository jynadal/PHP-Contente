
<!-- PAGE HEADER -->
            <div class="page_header" style="    height: 130px;">
                <div class="container">
                    <div class="page_header_info text-center" style="height: 120px;margin: 4px;">
                        <div class="page_header_info_inner">
                            <h2>Recherche : <?php echo $_GET['search'] ?></h2>
                           
                        </div>
                    </div>
                </div>
            </div>
            
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
                         Titre
                         LIKE 
                        "%'.$_GET['search'].'%"

                        
                      ';


                      $resultSet = $pdo->query($query);
                      $prods = $resultSet->fetchAll();



                       ?>
       
       
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
                                            <h4 class="product-title"><a href="./products.php"><?= $prod['Titre'] ?></a></h4>
                                            <span class="product-price"><?= $prod['Prix'] ?> €</span>
                                            
                                        </div>
                                    </div>

                                </div>
                                    <?php endforeach; ?> 
