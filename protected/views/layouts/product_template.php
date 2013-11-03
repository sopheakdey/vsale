<?php /* @var $this Controller */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Stylesheets -->
  <!-- Bootstrap -->
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/template/style/bootstrap.css" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/template/style/font-awesome.css">
  <!-- Navigation menu -->
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/template/style/ddlevelsmenu-base.css">
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/template/style/ddlevelsmenu-topbar.css">
  <!-- cSlider -->
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/template/style/slider.css">
  <!-- PrettyPhoto -->
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/template/style/prettyPhoto.css">
  <!-- Custom style -->
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/template/style/style.css" rel="stylesheet">
  <!-- Responsive Bootstrap -->
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/template/style/bootstrap-responsive.css" rel="stylesheet">
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
 <link rel="shortcut icon" href="/images/favicon.png">
  
  <!-- JS -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/template/js/jquery.js"></script> <!-- jQuery -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/template/js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/template/js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/template/js/jquery.isotope.js"></script> <!-- isotope -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/template/js/ddlevelsmenu.js"></script> <!-- Navigation menu -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/template/js/jquery.cslider.js"></script> <!-- jQuery cSlider -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/template/js/modernizr.custom.28468.js"></script> <!-- Extra script for cslider -->

<script src="<?php echo Yii::app()->request->baseUrl; ?>/template/js/filter.js"></script> <!-- Support -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/template/js/custom.js"></script> <!-- Custom JS -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>
  
  
</head>

<body>

  <!-- Sliding panel starts-->

  <div class="slidepanel">
    <div class="container">
      <div class="row">
        <div class="span8">
          <div class="spara"> 
            <!-- Contact details -->
            <p><i class="icon-envelope-alt lightblue"></i> vsalephone@info.com &nbsp; 
               <i class="icon-desktop lightblue"></i> (+855) 12 222 222
            </p>
          </div>
        </div>
        <div class="span4">
            <div class="social">
              <!-- Social media icons. Repalce # with your profile links -->
                      <a href="http://www.facebook.com" class="bblue"><i class="icon-facebook"></i></a>
                      <a href="http://www.googleplus.com" class="borange"><i class="icon-google-plus"></i></a> 
                      <a href="http://www.twitter.com" class="blightblue"><i class="icon-twitter"></i></a>
                      <a href="http://www.linkedin.com" class="bviolet"><i class="icon-linkedin"></i></a>
                      <a href="http://www.pinterest.com" class="bred"><i class="icon-pinterest"></i></a>
                      <a href="http://www.rss.com" class="borange"><i class="icon-rss"></i></a>
            </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>

  <!-- Sliding panel ends-->

  <!-- Header starts -->

  <header>
    <div class="container">
      <div class="row">

        <div class="span3">

          <!-- Logo starts -->
          <div class="logo">
          <div class="logo-image">
              <!-- Image link -->
              <a href="/"><img src="/images/logo.png"></i></a>
            </div>

            <div class="clearfix"></div>

          </div>

          <!-- Logo ends -->

        </div>

        <div class="span9">

          <!-- Navbar starts -->

          <div class="navi pull-right">
            <div id="ddtopmenubar" class="mattblackmenu">
              <!-- Main navigation -->
              <!-- Use the background color class in anchor tag for colorful menu -->
              
                 <?php $this->widget('zii.widgets.CMenu',array(
                       'activateParents' => true,
			'items'=>array(
                            
                             array('label'=>'Home', 'url'=>array('/'), 
                                  'linkOptions'=> array(
                                  'class' => 'blightblue bg-home',
                                       ),                      
                           ),
                             array('label'=>'Products', 'url'=>array('/product'),
                                    'linkOptions'=> array('class' => 'bred bg-product'),
                            ),
                                array('label'=>'Accessories', 'url'=>array('/Accessories'),
                                    'linkOptions'=> array('class' => 'bviolet bg-accessory'),
                                    ),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'),
                                    'linkOptions'=> array('class' => 'bgreen bg-about'),
                                    ),
				array('label'=>'Contact', 'url'=>array('/site/contactus'),
                                    'linkOptions'=> array('class' => 'borange bg-contact'),
                                    ),
				array('label'=>'Shop Now', 'url'=>array('/customer/Register'), 
                                    'linkOptions'=> array('class' => 'bblue bg-shop'),
                                    'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'),
                                    'linkOptions'=> array('class' => 'bblue'),
                                    'visible'=>!Yii::app()->user->isGuest)
			),
                    
              )); ?>  
            </div>
          </div>

          <div class="navis"></div>

          <!-- Navbar ends -->

          <div class="clearfix"></div>

        </div>

      </div>
    </div>
  </header>

  <div class="clearfix"></div>

  <!-- Header ends -->

<!-- Slider starts -->
  <div class="parallax-slider">
          <!-- Slider (Parallax Slider) -->            
            <div id="da-slider" class="da-slider">
              <!-- Each slide should be enclosed inside "da-slide" class -->
              <!-- Slide starts -->
              <div class="da-slide">

                  <p class="bviolet">
                    <!-- Heading -->
                             <span class="das-head">iPhone</span><br />
                    <!-- Para -->
                    iPhone 5s is purposefully imagined. Meticulously considered. Precision crafted. 
                    It’s not just a product of what’s technologically possible. But what’s technologically useful.
                    <br />
                    <!-- Link -->
                    <a class="das-link btn" href="/index.php/category/view/1">Read More <i class="icon-double-angle-right"></i></a>
                  </p>
                  <!-- Image -->
                  <div class="da-img"><img src="<?php $webroot?>/template/img/parallax/1.png" alt="image01" /></div>

              </div>
              <!-- Slide ends -->

              <div class="da-slide">

                  <p class="bblue">
                    <!-- Heading -->
                    <span class="das-head">Sumsung</span><br />
                    <!-- Para -->
                    Make your life richer, simpler, and more fun. As a real life companion, the new Samsung GALAXY S4 helps bring us
closer and captures those fun moments when we are together.        
                    <br />
                    
                    <a class="das-link btn" href="/index.php/category/view/2">Read More <i class="icon-double-angle-right"></i></a>
                  </p>
                  <!-- Image -->
                  <div class="da-img"><img src="<?php $webroot?>/template/img/parallax/2.png" alt="image01" /></div>

              </div>
              <div class="da-slide">

                  <p class="bgreen">
                    <!-- Heading -->
                    <span class="das-head">Nokia Lumia</span><br />
                    <!-- Para -->
                   The Nokia Lumia 1020 is a phone we’ve been anticipating for a long time. It’s a Windows Phone 8 mobile that uses similar camera tech to the Nokia 808 PureView. That phone had an incredible camera, but was bought by
                    <br />
                    <a class="das-link btn" href="/index.php/category/view/3">Read More <i class="icon-double-angle-right"></i></a>
                  </p>
                  <!-- Image -->
                  <div class="da-img"><img src="<?php $webroot?>/template/img/parallax/3.png" alt="image01" /></div>

              </div>
              <div class="da-slide">

                  <p class="bred">
                    <!-- Heading -->
                    <span class="das-head">Sony Xperia</span><br />
                    <!-- Para -->
                    Sony Xperia is a phone we’ve been anticipating for a long time. It’s an Android 4.2 mobile that uses high quality camera PureView. 
                    <br />
                    <a class="das-link btn" href="/index.php/category/view/4">Read More <i class="icon-double-angle-right"></i></a>
                  </p>
                  <!-- Image -->
                  <div class="da-img"><img src="<?php $webroot?>/template/img/parallax/4.png" alt="image01" /></div>

              </div>

              <nav class="da-arrows">
                <span class="da-arrows-prev"></span>
                <span class="da-arrows-next"></span>
              </nav>
            </div>
  </div>
<!-- Slider ends -->

<!-- Hero starts -->


<div class="container">
    <div class="row">
            <?php
            echo ' <div class="span3" >
            <div class="pricel">
             <div class="mobile-phone" style="margin:0;padding-left:0;padding-right:0">Mobile Phone</div>
             <div class="plist">';
 

            $dbC = Yii::app()->db->createCommand("select * from tbl_category where type_id = 1");
            
            foreach ($dbC->queryAll() as $row) {
                //now we can access row columns as object properties:
                $cat=$row['cat_name'];
               $cat_id=$row['cat_id'];
                echo '<ul>';
                    echo '<li>';
                    echo "<a href='/index.php/category/view/$cat_id' >";
                            echo $cat;
                           echo " <input type='hidden' name='categoty_id' id='categoty_id' value='$cat_id'/>";
                      echo '</a>';
                    echo    '</li>';
                echo '</ul>';
                
            }
         
 echo  '  </div>
     </div></div>';
            ?>
        <div class="span9"> 
            <?php if(isset($this->breadcrumbs)):?>
                    <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                            'links'=>$this->breadcrumbs,
                    )); ?><!-- breadcrumbs -->
            <?php endif?>

            <?php echo $content; ?>
                    <div class="clear">&nbsp;</div>
        </div>
    </div>
</div>
</div>

<footer>
  <div class="container" style="margin-top:10px;">
    <div class="row">


      <div class="widgets">

        <div class="span3">
          <div class="fwidget">
            
             <h4>Contact</h4>

                  <p>Siem Reap office</p>
                  <hr />
                  <i class="icon-home"></i> &nbsp; Nation road 6, Siem Reap, Cambodia
                  <hr />
                  <i class="icon-phone"></i> &nbsp; +855 12 222 222
                  <hr />
                  <i class="icon-envelope-alt"></i> &nbsp; <a href="mailto:#">vsalephone@info.com</a>
                  <hr />
                    <div class="social">
                      <a href="http://www.facebook.com" class="bblue"><i class="icon-facebook"></i></a>
                      <a href="http://www.googleplus.com" class="borange"><i class="icon-google-plus"></i></a> 
                      <a href="http://www.twitter.com" class="blightblue"><i class="icon-twitter"></i></a>
                      <a href="http://www.linkedin.com" class="bviolet"><i class="icon-linkedin"></i></a>
                      <a href="http://www.pinterest.com" class="bred"><i class="icon-pinterest"></i></a>
                      <a href="http://www.rss.com" class="borange"><i class="icon-rss"></i></a>
                    </div>

          </div>
        </div>

        <div class="span3">
          <div class="fwidget">
            <h4>Categories</h4>
            <ul>
               <li><a href="/index.php/category/view/1">Apple</a></li>
              <li><a href="/index.php/category/view/2">Sumsung</a></li>
              <li><a href="/index.php/category/view/3">Nokia</a></li>
              <li><a href="/index.php/category/view/4">Sony</a></li>
              <li><a href="/index.php/category/view/5">LG</a></li>
              <li><a href="/index.php/category/view/6">HTC</a></li>
            </ul>
          </div>
        </div>        

        <div class="span3">
          <div class="fwidget">
            
            <h4>Subscribe</h4>
            <p><strong>Vsalephone shop</strong> sales many type of phone that import from USA, Korea, China, Holand. All new products include with screen, install program and new game, and warranty. We also repair phones with suitable price.</p>
            <p>Enter you email to Subscribe</p>
            
            <form class="form-inline">
              <div class="input-append row-fluid">
                <input type="text" class="span8" placeholder="Subscribe">
                <button type="submit" class="btn btn-danger">Subscribe</button>
              </div>
            </form>

          </div>
        </div>

        <div class="span3">
          <div class="fwidget">
            <h4>Recent Posts</h4>
            <ul>
              <li><a href="#">Iphone 5s (32G), Iphone 5c (32G) </a></li>
              <li><a href="#">HTC one mini</a></li>
              <li><a href="#">Sumsumg galaxy note 3</a></li>              
            </ul>
          </div>
        </div>

      </div>

      <div class="span12">
          <div class="copy">
                <p style="text-align:center">Copyright &copy; 2013 &nbsp;&nbsp;<a href="http://www.vsalephone.com">www.vsalephone.com</a> &nbsp;&nbsp;-&nbsp;&nbsp; <a href="/index.php">Home</a> | <a href="/index.php/product">Product</a> | <a href="/index.php/accessories">Accessories</a> | <a href="/index.php/about us">About us</a> | <a href="/index.php/contact">Contact</a></p>
          </div>
      </div>

    </div>
  <div class="clearfix"></div>
  </div>
</footer> 


</body>
</html>

