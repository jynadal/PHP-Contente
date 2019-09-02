//Exemple de SLIDER

<?php 

                       $query =
                      '
                        SELECT
                          Id,
                          T1,
                          T2,
                          Image,
                          B_Url,
                          B_Txt,
                          B_Color
                        FROM  
                          Slider
                      ';

                      $resultSet = $pdo->query($query);
                      $slids = $resultSet->fetchAll();

                       ?>


  <?php foreach($slids as $slid): ?>
                            <!-- SLIDE  -->
                            <li data-transition="fade" data-slotamount="2" data-masterspeed="500" data-thumb="homeslider_thumb1.jpg"  data-saveperformance="on"  data-title="Intro Slide">

                          

                                <!-- MAIN IMAGE -->
                                <img src=""  alt="slidebg1" data-lazyload="<?= $slid['Image'] ?>" style:width="1920px" height="728px" ; data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">







                                <!-- LAYERS -->
                                <div class="tp-caption customin fadeout tp-resizeme rs-parallaxlevel-10"
                                     data-x="center"
                                     data-y="center"
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="800"
                                     data-start="1000"
                                     data-easing="Power3.easeInOut"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.1"
                                     data-endelementdelay="0.1"
                                     data-end="7300"
                                     data-endspeed="300"
                                     style="z-index: 2; max-width: 630px; max-height: 250px; background-color:rgba(255,255,255,0.5);width:100%;height:100%; white-space: nowrap;">
                                </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption lft skewtoleftshort rs-parallaxlevel-9"
                                     data-x="center"
                                     data-y="250"
                                     data-speed="1000"
                                     data-start="1400"
                                     data-easing="Power3.easeInOut"
                                     data-elementdelay="0.1"
                                     data-endelementdelay="0.1"
                                     data-end="7300"
                                     data-endspeed="1000"
                                     style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;font-family: Raleway;
                                     font-size: 36px;
                                     font-weight: bold;
                                     text-transform: uppercase;	color: #343434;"><span class="ss-color" style="color:#d6644a;"><?= $slid['T1'] ?></span></div>
                                <div class="tp-caption lft skewtoleftshort rs-parallaxlevel-9"
                                     data-x="center"
                                     data-y="310"
                                     data-speed="1000"
                                     data-start="1800"
                                     data-easing="Power3.easeInOut"
                                     data-elementdelay="0.1"
                                     data-endelementdelay="0.1"
                                     data-end="7300"
                                     data-endspeed="1000"
                                     style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;	font-family: Raleway;
                                     font-size: 18px;
                                     color: #333;text-align:center;">
                                    <?= $slid['T2'] ?>
                                </div>
                                <div class="tp-caption lft skewtoleftshort rs-parallaxlevel-9"
                                     data-x="center"
                                     data-y="375"
                                     data-speed="1000"
                                     data-start="2200"
                                     data-easing="Power3.easeInOut"
                                     data-elementdelay="0.1"
                                     data-endelementdelay="0.1"
                                     data-end="7300"
                                     data-endspeed="1000"
                                     style="z-index: 3; max-width: 80px; max-height: 4px; width:100%;height:100%;background:#000000;"></div>
                                <a href="<?= $slid['B_Url'] ?>" class="tp-caption lft skewtoleftshort rs-parallaxlevel-9"
                                   data-x="center"
                                   data-y="395"
                                   data-speed="1000"
                                   data-start="2600"
                                   data-easing="Power3.easeInOut"
                                   data-elementdelay="0.1"
                                   data-endelementdelay="0.1"
                                   data-end="7300"
                                   data-endspeed="1000"
                                   style="z-index: 3; max-height:100%;line-height:43px;color:#fff;font-family: Montserrat;
                                   font-size: 12px;
                                   display:table;
                                   font-weight: bold;
                                   text-transform:uppercase;padding:0 40px;background:<?= $slid['B_Color'] ?>;position:relative;z-index:77;">
                                    <?= $slid['B_Txt'] ?>
                                </a>
                            </li>
                           <?php endforeach; ?>   
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
            </div>
