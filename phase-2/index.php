<?php include('perch/runtime.php');?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>
      <?php perch_pages_title(); ?>
    </title>
    <meta charset='utf-8'>
    <meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>

    <?php     
        perch_page_attributes(array(        
          'template' => 'seo.html'    
        )); 
        ?>
        
    <link href='assets/stylesheets/vendor/reset.css' rel='stylesheet' type='text/css'>
    <link href='assets/stylesheets/main.css' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <link href='assets/stylesheets/ie8.css' rel='stylesheet' type='text/css'>
      <script src='assets/javascripts/vendor/html5shiv.min.js'></script>
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Abel|Six+Caps' rel='stylesheet' type='text/css'>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src='assets/javascripts/jquery.bgswitcher.js'></script>

    <script>
      $(function () {
          $('#home-bg').height($(document).height());
          var bgImages =  ["<?php perch_content('home_bg_images'); ?>"]; // Background images

          // Due to how we're outputting the images, there will be an empty "" at the end
          if (bgImages[bgImages.length - 1] == "") {
            bgImages.pop();
          }
          
          $("#home-bg").bgswitcher({
            images: bgImages,
            effect: "fade" // fade, blind, clip, slide, drop, hide
          });
          
      });
    </script>
    <!-- :javascript -->
    <!-- (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ -->
    <!-- (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), -->
    <!-- m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) -->
    <!-- })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); -->
    <!-- ga('create', 'UA-XXXXXX-XX', 'auto'); -->
    <!-- ga('send', 'pageview'); -->
  </head>
  <body ontouchstart="" class='default'>
    <div class="wrapper-push">
        <header class='home'>
          <div class='logo'>
            <a href='index.php'>
              <?php perch_content('pedalinx-logo-nav'); ?>
            </a>
          </div>
          <nav>
            <ul id='nav'>
              <li>
                <span class="product-title"><?php perch_content('product-nav'); ?></span>
                <ul>
                  <li>
                    <ul>
                      <li>
                        <div class='product-listing'>
                          <div class='bikes'>
                            <div class='header'>
                              <?php perch_content('nav-column-1'); ?>
                            </div>
                            <?php perch_pages_navigation(array('navgroup' =>'Bikes')); ?>
                          </div>
                          <div class='helmets'>
                            <div class='header'>
                              <?php perch_content('nav-column-2'); ?>
                            </div>
                            <?php perch_pages_navigation(array('navgroup' =>'Helmets')); ?>
                          </div>
                          <div class='apparel'>
                            <div class='header'>
                              <?php perch_content('nav-column-3'); ?>
                            </div>
                            <?php perch_pages_navigation(array('navgroup' =>'Apparel')); ?>
                          </div>
                          <div class='clear'></div>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li>
                <a class='services-link' href='services.php'><?php perch_content('services-nav'); ?></a>
              </li>
              <li>
                <a class='about-link' href='about.php'><?php perch_content('about-nav'); ?></a>
              </li>
              <li>
                <a class='contact-link' href='contact.php'><?php perch_content('contact-nav'); ?></a>
              </li>
            </ul>
          </nav>
          <div class='clear'></div>
          <div class='header-keyline'></div>
        </header>
        <div id='main'>
          <div class='wrapper-home'>
            <h2>
              <?php perch_content('headline-copy')?>
            </h2>
            <a class='home-white' href='<?php perch_content('call-to-action-link'); ?>'>
              <?php perch_content('call-to-action'); ?>
            </a>
          </div>
          <div id='home-bg'></div>
        </div>
        <div class="push"></div>
    </div>
    <div class="footer">
      <footer class='home'>
        <div class='newsletter'>
          <div class='header'>
            <?php perch_content('join-newsletter'); ?>
          </div>
          <div class='form'>
            <?php perch_content('email-registration')?>
          </div>
          <div class='social'>
          <span><?php perch_content('stay-connected'); ?></span>
            <?php perch_content('social-links'); ?>
          </div>
        </div>
        <div class='clear'></div>
        <div class='copyright'>
          <?php perch_content('copyright'); ?>
        </div>
      </footer>
    </div>
  </body>
</html>
