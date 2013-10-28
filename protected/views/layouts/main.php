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
  <link rel="shortcut icon" href="img/favicon/favicon.png">
  
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
  
  
</head>

<body>

  <!-- Sliding panel starts-->

  <div class="slidepanel">
    <div class="container">
      <div class="row">
        <div class="span8">
          <div class="spara"> 
            <!-- Contact details -->
            <p><i class="icon-envelope-alt lightblue"></i> Vsale@gmail.com &nbsp; 
              <i class="icon-twitter lightblue"></i> @Daro &nbsp; 
              <i class="icon-desktop lightblue"></i> (+855) 010 253 210
            </p>
          </div>
        </div>
        <div class="span4">
            <div class="social">
              <!-- Social media icons. Repalce # with your profile links -->
                      <a href="#" class="bblue"><i class="icon-facebook"></i></a>
                      <a href="#" class="borange"><i class="icon-google-plus"></i></a> 
                      <a href="#" class="blightblue"><i class="icon-twitter"></i></a>
                      <a href="#" class="bviolet"><i class="icon-linkedin"></i></a>
                      <a href="#" class="bred"><i class="icon-pinterest"></i></a>
                      <a href="#" class="borange"><i class="icon-rss"></i></a>
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
              <a href="/"><i class="icon-mobile-phone blue"></i></a>
            </div>
            
            <div class="logo-text">
              <h1><a href="/">Vsale<span class="lightblue">Phone</span></a></h1>
              <div class="logo-meta">Siem Reap Angkor</div>
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
                                  'class' => 'blightblue',
                                       ),                      
                           ),
                             array('label'=>'Products', 'url'=>array('/product'),
                                    'linkOptions'=> array('class' => 'bred'),
                            ),
                                array('label'=>'Accessories', 'url'=>array('customer/admin'),
                                    'linkOptions'=> array('class' => 'bviolet'),
                                    ),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'),
                                    'linkOptions'=> array('class' => 'bgreen '),
                                    ),
				array('label'=>'Contact', 'url'=>array('/site/contact'),
                                    'linkOptions'=> array('class' => 'borange'),
                                    ),
				array('label'=>'Login', 'url'=>array('/site/login'), 
                                    'linkOptions'=> array('class' => 'bblue'),
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
                    <span class="das-head">Amazing Theme Ever</span><br />
                    <!-- Para -->
                    When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove,  the subline of her own road, the Line Lane.
                    <br />
                    <!-- Link -->
                    <a class="das-link btn">Read More <i class="icon-double-angle-right"></i></a>
                  </p>
                  <!-- Image -->
                  <div class="da-img"><img src="<?php $webroot?>/template/img/parallax/1.png" alt="image01" /></div>

              </div>
              <!-- Slide ends -->

              <div class="da-slide">

                  <p class="bblue">
                    <!-- Heading -->
                    <span class="das-head">Based On Metro Interface</span><br />
                    <!-- Para -->
                    When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove,  the subline of her own road, the Line Lane.
                    <br />
                    <a class="das-link btn">Read More <i class="icon-double-angle-right"></i></a>
                  </p>
                  <!-- Image -->
                  <div class="da-img"><img src="<?php $webroot?>/template/img/parallax/2.png" alt="image01" /></div>

              </div>
              <div class="da-slide">

                  <p class="bgreen">
                    <!-- Heading -->
                    <span class="das-head">Tons Of Features</span><br />
                    <!-- Para -->
                    When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove,  the subline of her own road, the Line Lane.
                    <br />
                    <a class="das-link btn">Read More <i class="icon-double-angle-right"></i></a>
                  </p>
                  <!-- Image -->
                  <div class="da-img"><img src="<?php $webroot?>/template/img/parallax/3.png" alt="image01" /></div>

              </div>
              <div class="da-slide">

                  <p class="bred">
                    <!-- Heading -->
                    <span class="das-head">All In One Theme</span><br />
                    <!-- Para -->
                    When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove,  the subline of her own road, the Line Lane.
                    <br />
                    <a class="das-link btn">Read More <i class="icon-double-angle-right"></i></a>
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
        <div class="span12">
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


            
<!-- Clients starts -->
  
  <div class="clients">
    <div class="container">
            <div class="row">
               <div class="span12">
                     <h3 class="title">Our Clients</h3>
                     <p><i class="icon-quote-left lightblue"></i>Vivamus diam diam, fermentum sed dapibus eget, egestas sed eros. Lorem fermentum ipsum dolor sit amet, ipsum dolor sit amet, consectetur fermentum adipiscing elit.<i class="icon-quote-right lightblue"></i></p>
                     <img src="<?php $webroot?>/template/img/clients/amazon.png" alt="" />
                     <img src="<?php $webroot?>/template/img/clients/google.png" alt="" />
                     <img src="<?php $webroot?>/template/img/clients/twitter.png" alt="" />
                     <img src="<?php $webroot?>/template/img/clients/facebook.png" alt="" />
                     <img src="<?php $webroot?>/template/img/clients/skype.png" alt="" />
                     <img src="<?php $webroot?>/template/img/clients/youtube.png" alt="" />
               </div>
            </div>
    </div>
  </div>
            
<!-- Clients ends -->

<!-- Footer -->

<!-- Below area is for testimonial -->
<div class="foot blightblue">
  <div class="container">
    <div class="row">
      <div class="span12">
          
          <!-- User icon -->
          <span class="twitter-icon text-center"><i class="icon-user"></i></span>
          <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum dolor eget nisi <br />fermentum quis hendrerit magna vestibulum."</em></p>
          
        
      </div>
    </div>
  </div>
</div>  

<footer>
  <div class="container">
    <div class="row">


      <div class="widgets">

        <div class="span3">
          <div class="fwidget">
            
            <h4>Contact</h4>

                  <p>Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. </p>
                  <hr />
                  <i class="icon-home"></i> &nbsp; 123, Some Area. Los Angeles, CA, 54321.
                  <hr />
                  <i class="icon-phone"></i> &nbsp; +239-3823-3434
                  <hr />
                  <i class="icon-envelope-alt"></i> &nbsp; <a href="mailto:#">someone@company.com</a>
                  <hr />
                    <div class="social">
                      <a href="#" class="bblue"><i class="icon-facebook"></i></a>
                      <a href="#" class="borange"><i class="icon-google-plus"></i></a> 
                      <a href="#" class="blightblue"><i class="icon-twitter"></i></a>
                      <a href="#" class="bviolet"><i class="icon-linkedin"></i></a>
                      <a href="#" class="bred"><i class="icon-pinterest"></i></a>
                      <a href="#" class="borange"><i class="icon-rss"></i></a>
                    </div>

          </div>
        </div>

        <div class="span3">
          <div class="fwidget">
            <h4>Categories</h4>
            <ul>
              <li><a href="#">Condimentum - Condimentum gravida</a></li>
              <li><a href="#">Etiam at - Condimentum gravida</a></li>
              <li><a href="#">Fusce vel - Condimentum gravida</a></li>
              <li><a href="#">Vivamus - Condimentum gravida</a></li>
              <li><a href="#">Pellentesque - Condimentum gravida</a></li>
              <li><a href="#">Fusce vel - Condimentum gravida</a></li>
            </ul>
          </div>
        </div>        

        <div class="span3">
          <div class="fwidget">
            
            <h4>Subscribe</h4>
            <p>Duis leo risus, condimentum ut posuere ac, vehicula luctus nunc.  Quisque rhoncus, a sodales enim arcu quis turpis.</p>
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
              <li><a href="#">Sed eu leo orci, condimentum gravida metus</a></li>
              <li><a href="#">Etiam at nulla ipsum, in rhoncus purus</a></li>
              <li><a href="#">Fusce vel magna faucibus felis dapibus facilisis</a></li>
              <li><a href="#">Vivamus scelerisque dui in massa</a></li>
              <li><a href="#">Pellentesque eget adipiscing dui semper</a></li>
            </ul>
          </div>
        </div>

      </div>

      <div class="span12">
          <div class="copy">
                <p>Copyright &copy; <a href="#">Your Site</a> - <a href="index-2.html">Home</a> | <a href="aboutus.html">About Us</a> | <a href="faq.html">FAQ</a> | <a href="contactus.html">Contact Us</a></p>
          </div>
      </div>

    </div>
  <div class="clearfix"></div>
  </div>
</footer> 


</body>
</html>

