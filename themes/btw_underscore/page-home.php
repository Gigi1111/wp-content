<?php
/**
 * Template Name: Home Page
 */
$prelaunch_price    = get_post_meta(11, 'prelaunch_price', true);
$launch_price       = get_post_meta(11, 'launch_price', true);
$final_price        = get_post_meta(11, 'final_price', true);
$course_url         = get_post_meta(11, 'course_url', true);
$button_text        = get_post_meta(11, 'button_text', true);
$optin_text         = get_post_meta(11, 'optin_text', true);
$optin_button_text    = get_post_meta(11, 'optin_button_text', true);
//post, key, true means single false set

//greetings
$greetings_content  = get_field('greetings_content');
$greeting_slideshow_1  = get_field('greeting_slideshow_1');
$greeting_slideshow_2  = get_field('greeting_slideshow_2');
$greeting_slideshow_3  = get_field('greeting_slideshow_3');

$news_content  = get_field('news_content');

// advanced Custom Fields
$premium_service_feature_image   = get_field('premium_service_feature_image');
$premium_service_section_title   = get_field('premium_service_section_title');
$premium_service_section_desc    = get_field('premium_service_section_description');
$reason_1_title         = get_field('reason_1_title');
$reason_1_desc          = get_field('reason_1_description');
$reason_2_title         = get_field('reason_2_title');
$reason_2_desc          = get_field('reason_2_description');
$reason_3_title         = get_field('reason_3_title');
$reason_3_desc          = get_field('reason_3_description');


$who_feature_image      = get_field('who_feature_image');
$who_section_title      = get_field('who_section_title');
$who_section_body      = get_field('who_section_body');


$features_section_image      = get_field('features_section_image');
$features_section_title      = get_field('features_section_title');
$features_section_body      = get_field('features_section_body');

$twitter    = get_post_meta(11, 'twitter', true);
$facebook       = get_post_meta(11, 'facebook', true);
$instagram        = get_post_meta(11, 'instagram', true);

$brand_logo    			= get_field('header_logo');
$brand_name       = get_field('header_brand_name');

// column mid ; besonders
$md_section_title      = get_field('md_section_title');
$md_section_body      = get_field('md_section_body');
$col_image_1      = get_field('col_image_1');
$col_content_1      = get_field('col_content_1');
$col_image_2      = get_field('col_image_2');
$col_content_2      = get_field('col_content_2');
$col_image_3      = get_field('col_image_3');
$col_content_3      = get_field('col_content_3');
$col_image_4      = get_field('col_image_4');
$col_content_4      = get_field('col_content_4');
$col_image_5      = get_field('col_image_5');
$col_content_5      = get_field('col_content_5');

// slideshow; camping equipments
$equipment_slideshow_title      = get_field('equipment_slideshow_title');
$equipment_slideshow_sub      = get_field('equipment_slideshow_sub');
// item
$equipment_slideshow_item_title_1      = get_field('equipment_slideshow_item_title_1');
$equipment_slideshow_item_description_1      = get_field('equipment_slideshow_item_description_1');
$equipment_slideshow_item_image_1      = get_field('equipment_slideshow_item_image_1');
// item
$equipment_slideshow_item_title_2      = get_field('equipment_slideshow_item_title_2');
$equipment_slideshow_item_description_2      = get_field('equipment_slideshow_item_description_2');
$equipment_slideshow_item_image_2      = get_field('equipment_slideshow_item_image_2');
// item
$equipment_slideshow_item_title_3      = get_field('equipment_slideshow_item_title_3');
$equipment_slideshow_item_description_3      = get_field('equipment_slideshow_item_description_3');
$equipment_slideshow_item_image_3      = get_field('equipment_slideshow_item_image_3');
// item
$equipment_slideshow_item_title_4      = get_field('equipment_slideshow_item_title_4');
$equipment_slideshow_item_description_4      = get_field('equipment_slideshow_item_description_4');
$equipment_slideshow_item_image_4      = get_field('equipment_slideshow_item_image_4');
// item
$equipment_slideshow_item_title_5      = get_field('equipment_slideshow_item_title_5');
$equipment_slideshow_item_description_5      = get_field('equipment_slideshow_item_description_5');
$equipment_slideshow_item_image_5      = get_field('equipment_slideshow_item_image_5');

// slideshow; bikes
$bike_slideshow_title      = get_field('bike_slideshow_title');
$bike_slideshow_sub      = get_field('bike_slideshow_sub');
// item
$bike_slideshow_item_title_1      = get_field('bike_slideshow_item_title_1');
$bike_slideshow_item_description_1      = get_field('bike_slideshow_item_description_1');
$bike_slideshow_item_image_1      = get_field('bike_slideshow_item_image_1');
// item
$bike_slideshow_item_title_2      = get_field('bike_slideshow_item_title_2');
$bike_slideshow_item_description_2      = get_field('bike_slideshow_item_description_2');
$bike_slideshow_item_image_2      = get_field('bike_slideshow_item_image_2');
get_header();
?>


    <!-- HERO
    ================================================== -->
    <section id="hero">
            <div class="container clearfix">
                <!-- The video -->
                <video autoplay muted loop id="videoPlayer" poster="<?php bloginfo('stylesheet_directory');?>/assets/img/brand-image/image-relax.jpg">
                    <source src="<?php bloginfo('stylesheet_directory');?>/assets/img/brand-image/cargobike_hero_reel.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="overlay">
                     <?php
                        get_template_part( 'template-parts/hero', 'content' );
                        ?>
                </div>

                
            </div>
            <!-- container -->
    </section>

      <!-- quote
    ================================================== -->
    <!-- <section id="introduction" >
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6 left">
                    <blockquote class="wp-block-quote is-style-large">
                    <span class="" style="font:bold 84px / 5px 'Noe Display'">“</span>
                        <p> <?php echo $news_content; ?></p>
                        <cite class=""><a href="https://www.tagesspiegel.de/" onclick="javascript:window.open('https://www.tagesspiegel.de/'); return false;">Tagesspiegel</a></cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </section> -->

     <!-- INTRO
	================================================== -->
    <section id="introduction" class="color-dark-grey" >
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-4 left">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- <?php echo $greetings_content; ?> -->
                            <h2>Hallo Abenteurer*innen, herzlich willkommen!</h2>
                            <p class="lead">Wir von Cargobike Adventures haben es uns zum Ziel gesetzt, euch mit unseren Premium Lastenrädern und allerfeinstem Camping Equipment auf die Reise zu schicken. Wir sorgen dafür, dass rund um eure Reise alles glatt läuft, ihr tretet in die Pedale und beschert euch und euren Liebsten eine unvergessliche Zeit in der Natur.</p>
                        <div class="">
                        <!-- <?php if(!empty($twitter)): ?> -->
                            <!-- <a href="<?php echo $twitter; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a> -->
                        <!-- <?php endif; ?> -->
                        <!-- <?php if(!empty($facebook)): ?> -->
                            <!-- <a href="<?php echo $facebook; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a> -->
                        <!-- <?php endif; ?> -->
                        <!-- <?php if(!empty($instagram)): ?> -->
                            <!-- <a href="<?php echo $instagram; ?>" class="badge social instagram" target="_blank"><i class="fa fa-instagram"></i></a> -->
                        <!-- <?php endif; ?> -->
                        </div>
                        
                    </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- end col -->
                <div class="col-sm-8 col-md-8 right" >
                    <div class="w3-content w3-section" style="max-width:100%; height: 500px; overflow: hidden;">
                        <?php if(!empty($greeting_slideshow_1)): ?>
                            <img class="mySlides" src="<?php  echo $greeting_slideshow_1['url']; ?>" alt="<?php echo $greeting_slideshow_1['alt']; ?>" style="width:100%">
                        <?php endif; ?>
                        <?php if(!empty($greeting_slideshow_2)): ?>
                            <img class="mySlides" src="<?php  echo $greeting_slideshow_2['url']; ?>" alt="<?php echo $greeting_slideshow_2['alt']; ?>" style="width:100%">
                        <?php endif; ?>
                        <?php if(!empty($greeting_slideshow_3)): ?>
                            <img class="mySlides" src="<?php  echo $greeting_slideshow_3['url']; ?>" alt="<?php echo $greeting_slideshow_3['alt']; ?>" style="width:100%">
                        <?php endif; ?>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 2300); // Change image every 2 seconds
            }
        </script>
    </section>
    <!-- introduction -->

  

     <!-- Column small ; was wir bieten
	================================================== -->
    <section id="section-column-sm" class="color-black" >
        <div class="container">

            <div class="section-header">
                <!--if user uploaded an image -->
                <!-- <?php if(!empty($features_section_image)): ?>
                    <img src="<?php  echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">
                <?php endif; ?> -->
                
                <h2>Was Wir Euch Bieten</h2>
                <!-- <h2><?php echo $features_section_title; ?></h2> -->
                <!-- <?php if(!empty($features_section_body)): ?>
                        <p class="lead"><?php echo $features_section_body;?></p>
                <?php endif; ?> -->
            </div>
            <!-- section-header -->

            <div class="row">
                <div class="col-sm-2">
                        <!-- <i class="<?php the_field('course_feature_icon');?>"></i> -->
                        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/offer-bike.png" alt="Design" style="width:50px; height:50px" >
                        <h4>Premium Lastenräder in verschiedenen Konfigurationen mit ausführlicher Einführung bei Anmietung</h4>
                    </div>
                    <div class="col-sm-2">
                        <!-- <i class="<?php the_field('course_feature_icon');?>"></i> -->
                        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/offer-tent.png" alt="Design" style="width:50px; height:50px" >
                        <h4>Bestes Camping Equipment, für unsere Kunden frei zusammenstellbar</h4>
                    </div>
                    <div class="col-sm-2">
                        <!-- <i class="<?php the_field('course_feature_icon');?>"></i> -->
                        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/offer-time.png" alt="Design" style="width:50px; height:50px" >
                        <h4>Viele Extras, die euch die Zeit unterwegs versüßen</h4>
                    </div>
                    <div class="col-sm-2">
                        <!-- <i class="<?php the_field('course_feature_icon');?>"></i> -->
                        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/offer-vacation.png" alt="Design" style="width:50px; height:50px" >
                        <h4>Versicherungspakete für ein rundum sorglos Gefühl im Urlaub</h4>
                    </div>
                    <div class="col-sm-2">
                        <!-- <i class="<?php the_field('course_feature_icon');?>"></i> -->
                        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/offer-direction.png" alt="Design" style="width:50px; height:50px" >
                        <h4>Routenplanung, Tipps und Tricks rund ums Cargobike</h4>
                    </div>  
            </div>
            <!-- row -->

        </div>
        <!-- container -->
    </section>
     <!-- end section -->


  <!-- Column small ; accordion/collapse
    ================================================== -->
    <!-- <section id="section-image-akordion" class="section-image-akordion" style="">
        <div class="container" style="">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        Collapsible Group 1</a>
                    </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                        Collapsible Group 2</a>
                    </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                        Collapsible Group 3</a>
                    </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.</div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
   <!-- end section -->


      <!-- section slideshow bikes
	================================================== -->
    <section id="section-slidshow" class="" style="padding-bottom: 0;">
        <div class="container" style="width: 100%; text-align: center; color: var(--brand-dark-grey);">
            <!-- <h2><?php echo $bike_slideshow_title; ?></h2>   -->
            <!-- <p><?php echo $bike_slideshow_sub; ?></p> -->
            <h2>Bikes for Rent</h2>

            <div id="bikeCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#bikeCarousel" data-slide-to="0" class="active" style="background: url('<?php  echo $bike_slideshow_item_image_1['url']; ?>') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                    <li data-target="#bikeCarousel" data-slide-to="1" style="background: url('<?php  echo $bike_slideshow_item_image_2['url']; ?>') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner"  style="height: 600px; overflow: hidden;">
                    <div class="item active">
                        <img src="<?php  echo $bike_slideshow_item_image_1['url']; ?>" alt="<?php  echo $bike_slideshow_item_image_1['alt']; ?>" >
                        <div class="d-none d-md-block" id="right-info">
                            <!-- <h3><?php echo $equipment_slideshow_item_title_1 ?></h3>
                            <p><?php echo $equipment_slideshow_item_description_1 ?></p> -->
                            <h3>Amazing Self-Built Inflated Tent (Black)</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                        </div>
                        <div class="carousel-caption d-none d-md-block" id="bottom-info">
                            <!-- <h3><?php echo $bike_slideshow_item_title_1 ?></h3>
                            <p><?php echo $bike_slideshow_item_description_1 ?></p> -->
                            <h3>Cargo Load up to 35kg</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="<?php  echo $bike_slideshow_item_image_2['url']; ?>" alt="<?php  echo $bike_slideshow_item_image_2['alt']; ?>" >
                        <div class="d-none d-md-block" id="right-info">
                            <!-- <h3><?php echo $equipment_slideshow_item_title_1 ?></h3>
                            <p><?php echo $equipment_slideshow_item_description_1 ?></p> -->
                            <h3>Amazing Self-Built Inflated Tent (Black)</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                       
                        </div>
                        <div class="carousel-caption d-none d-md-block" id="bottom-info">
                            <!-- <h3><?php echo $bike_slideshow_item_title_2 ?></h3>
                            <p><?php echo $bike_slideshow_item_description_2 ?></p> -->
                            <h3>Cargo Load up to 35kg</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost</p>
                 
                        </div>
                    </div>
                   
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#bikeCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#bikeCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <!-- OPT IN SECTION
	================================================== -->
    <section id="optin" >
            <?php get_template_part( 'template-parts/section', 'oneline' );?>
           
    </section>
    <!-- optin -->
    
    <!-- section slideshow equipments
	================================================== -->
    <section id="section-slidshow" class="" style="padding-bottom: 0;">
        <div class="container" style="width: 100%;">
            <!-- <h2 style="text-align: center; color: var(--brand-dark-grey);"><?php echo $equipment_slideshow_title; ?></h2>  
            <p><?php echo $equipment_slideshow_sub; ?></p> -->
            <h2>Camping Equipments for Rent</h2>

            <div id="equipmentCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#equipmentCarousel" data-slide-to="0" class="active" style="background: url('<?php  echo $equipment_slideshow_item_image_1['url']; ?>') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                    <li data-target="#equipmentCarousel" data-slide-to="1" style="background: url('<?php  echo $equipment_slideshow_item_image_2['url']; ?>') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                    <li data-target="#equipmentCarousel" data-slide-to="2" style="background: url('<?php  echo $equipment_slideshow_item_image_3['url']; ?>') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                    <li data-target="#equipmentCarousel" data-slide-to="3" style="background: url('<?php  echo $equipment_slideshow_item_image_4['url']; ?>') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                    <li data-target="#equipmentCarousel" data-slide-to="4" style="background: url('<?php  echo $equipment_slideshow_item_image_5['url']; ?>') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                  
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner"  style="height: 600px; overflow: hidden;">
                    <div class="item active">
                        <img src="<?php  echo $equipment_slideshow_item_image_1['url']; ?>" alt="<?php  echo $equipment_slideshow_item_image_1['alt']; ?>" >
                        <div class="d-none d-md-block" id="right-info">
                            <!-- <h3><?php echo $equipment_slideshow_item_title_1 ?></h3>
                            <p><?php echo $equipment_slideshow_item_description_1 ?></p> -->
                            <h3>Amazing Self-Built Inflated Tent (Black)</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                       
                        </div>
                        <div class="carousel-caption d-none d-md-block" id="bottom-info">
                            <!-- <h3><?php echo $equipment_slideshow_item_title_1 ?></h3>
                            <p><?php echo $equipment_slideshow_item_description_1 ?></p> -->
                            <h3>Amazing Self-Built Inflated Tent (Black)</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                       
                        </div>
                    </div>

                    <div class="item">
                        <img src="<?php  echo $equipment_slideshow_item_image_2['url']; ?>" alt="<?php  echo $equipment_slideshow_item_image_2['alt']; ?>" >
                        <div class="d-none d-md-block" id="right-info">
                            <!-- <h3><?php echo $equipment_slideshow_item_title_1 ?></h3>
                            <p><?php echo $equipment_slideshow_item_description_1 ?></p> -->
                            <h3>Amazing Self-Built Inflated Tent (Black)</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                       
                        </div>
                        <div class="carousel-caption d-none d-md-block" id="bottom-info">
                            <!-- <h3><?php echo $equipment_slideshow_item_title_2 ?></h3>
                            <p><?php echo $equipment_slideshow_item_description_2 ?></p> -->
                            <h3>Amazing Self-Built Inflated Tent (Black)</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                       
                        </div>
                    </div>

                    <div class="item">
                        <img src="<?php  echo $equipment_slideshow_item_image_3['url']; ?>" alt="<?php  echo $equipment_slideshow_item_image_3['alt']; ?>" >
                        <div class="d-none d-md-block" id="right-info">
                            <!-- <h3><?php echo $equipment_slideshow_item_title_1 ?></h3>
                            <p><?php echo $equipment_slideshow_item_description_1 ?></p> -->
                            <h3>Amazing Self-Built Inflated Tent (Black)</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                       
                        </div>
                        <div class="carousel-caption d-none d-md-block" id="bottom-info">
                            <!-- <h3><?php echo $equipment_slideshow_item_title_3 ?></h3>
                            <p><?php echo $equipment_slideshow_item_description_3 ?></p> -->
                            <h3>Amazing Self-Built Inflated Tent (Black)</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                       
                        </div>
                    </div>

                    <div class="item">
                        <img src="<?php  echo $equipment_slideshow_item_image_4['url']; ?>" alt="<?php  echo $equipment_slideshow_item_image_4['alt']; ?>" >
                        <div class="d-none d-md-block" id="right-info">
                            <!-- <h3><?php echo $equipment_slideshow_item_title_1 ?></h3>
                            <p><?php echo $equipment_slideshow_item_description_1 ?></p> -->
                            <h3>Amazing Self-Built Inflated Tent (Black)</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                       
                        </div>
                        <div class="carousel-caption d-none d-md-block" id="bottom-info">
                            <!-- <h3><?php echo $equipment_slideshow_item_title_4 ?></h3>
                            <p><?php echo $equipment_slideshow_item_description_4 ?></p> -->
                            <h3>Amazing Self-Built Inflated Tent (Black)</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                       
                        </div>
                    </div>

                    <div class="item">
                        <img src="<?php  echo $equipment_slideshow_item_image_5['url']; ?>" alt="<?php  echo $equipment_slideshow_item_image_5['alt']; ?>" >
                        <div class="d-none d-md-block" id="right-info">
                            <!-- <h3><?php echo $equipment_slideshow_item_title_1 ?></h3>
                            <p><?php echo $equipment_slideshow_item_description_1 ?></p> -->
                            <h3>Amazing Self-Built Inflated Tent (Black)</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                       
                        </div>
                        <div class="carousel-caption d-none d-md-block"  id="bottom-info">
                            <!-- <h3><?php echo $equipment_slideshow_item_title_5 ?></h3>
                            <p><?php echo $equipment_slideshow_item_description_5 ?></p> -->
                            <h3>Amazing Self-Built Inflated Tent (Black)</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                       
                        </div>
                    </div>

                   
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#equipmentCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#equipmentCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>


    

    <!-- OPT IN SECTION
	================================================== -->
    <section id="optin" >
            <?php get_template_part( 'template-parts/section', 'oneline' );?>
           
    </section>
    <!-- optin -->


  
     <!-- section column middle; besonders
	================================================== -->
    <section id="section-column-md" class="color-dark-grey" >
        <div class="container">
            <!-- <?php if(!empty($md_section_title)): ?>
                <h2> <?php echo $md_section_title; ?></h2>
            <?php endif; ?>
            <?php if(!empty($md_section_body)): ?>
                <p class="lead"> <?php echo $md_section_body; ?></p>
            <?php endif; ?> -->
            <h2>Was macht Cargobike Adventures so besonders?</h2>
            <p class="lead">Gemeinsam entlasten wir Städte, Straßen und den Himmel. Wir bieten euch ein nie dagewesenes Konzept von</p>

            <div class="row">
                <div class="col-sm-4">
                    <?php if(!empty($col_image_1)): ?>
						<img src="<?php  echo $col_image_1['url']; ?>" alt="<?php echo $col_image_1['alt']; ?>" style="padding: 15px;">
                    <?php endif; ?>
                    <!-- <?php if(!empty($col_content_1)): ?>
                        <p><?php echo $col_content_1; ?></p>
                    <?php endif; ?> -->
                    <p>Zentraler Pick-Up und Drop-Off im MotionLab Berlin-Treptow</p>
                </div>
                <!-- col -->
                <div class="col-sm-4">
                    <?php if(!empty($col_image_2)): ?>
						<img src="<?php  echo $col_image_2['url']; ?>" alt="<?php echo $col_image_2['alt']; ?>" >
                    <?php endif; ?>
                    <!-- <?php if(!empty($col_content_2)): ?>
                        <p><?php echo $col_content_2; ?></p>
                    <?php endif; ?> -->
                   <p>Ausführliche Einführung in Bike und Equipment bei Anmietung</p>
                </div>
                <!-- col -->
                <div class="col-sm-4">
                    <?php if(!empty($col_image_3)): ?>
						<img src="<?php  echo $col_image_3['url']; ?>" alt="<?php echo $col_image_3['alt']; ?>" >
                    <?php endif; ?>
                    <!-- <?php if(!empty($col_content_3)): ?>
                        <p><?php echo $col_content_3; ?></p>
                    <?php endif; ?> -->
                    <p>Neueste Modelle an Bikes und Zubehör, garantiert frisch gewartet und desinfiziert</p>
                </div>
                <!-- col -->
                <div class="col-sm-4">
                    <?php if(!empty($col_image_4)): ?>
						<img src="<?php  echo $col_image_4['url']; ?>" alt="<?php echo $col_image_4['alt']; ?>" style="padding: 8px;">
                    <?php endif; ?>
                    <!-- <?php if(!empty($col_content_4)): ?>
                        <p><?php echo $col_content_4; ?></p>
                    <?php endif; ?> -->
                    <p>CO2 neutrales und somit emissionsfreies Reisen - so schont ihr die Umwelt</p>
                </div>
                <!-- col -->
                <div class="col-sm-4">
                    <?php if(!empty($col_image_5)): ?>
						<img src="<?php  echo $col_image_5['url']; ?>" alt="<?php echo $col_image_5['alt']; ?>" >
                    <?php endif; ?>
                    <!-- <?php if(!empty($col_content_5)): ?>
                        <p><?php echo $col_content_5; ?></p>
                    <?php endif; ?> -->
                    <p>Alle unsere Partner verschreiben sich in höchstem Maße Nachhaltigkeit und Transparenz im Wirtschaftskreislauf</p>
                </div>
                <!-- col -->
            </div>
            <!-- row -->

        </div>
        <!-- container -->
    </section>
    <!-- section-column-md -->

    
      <!-- OPT IN SECTION
	================================================== -->
    <section id="optin" >
            <?php get_template_part( 'template-parts/section', 'oneline' );?>
           
    </section>
    <!-- optin -->

    <!-- column large; premium service
	================================================== -->
    <section id="section-column-lg" class="color-dark-grey" >
        <div class="container">

            <div class="section-header">
                <!--if user uploaded an image -->
                <?php if(!empty($premium_service_feature_image)): ?>
                    <img src="<?php  echo $premium_service_feature_image['url']; ?>" alt="<?php echo $premium_service_feature_image['alt']; ?>">
                <?php endif; ?>
                
                <!-- <h2><?php echo $premium_service_section_title; ?></h2> -->
                <h2>Wie Definieren Wir Premium Service?</h2>
            </div>
            <!-- section-header -->

            <p class="lead"><?php echo $premium_service_section_desc; ?></p>
            <div class="row">
                <div class="col-sm-6">
                    <!-- <h3><?php echo $reason_1_title; ?></h3>
                    <p><?php echo $reason_1_desc; ?></p> -->
                    <h3>Wir sind für euch da</h3>
                    <p>Wir sind Radreisende wie Ihr und für euch da, telefonisch oder per Mail</p>
                </div>
                <!-- end col -->

                <div class="col-sm-6">
                <!-- <h3><?php echo $reason_2_title; ?></h3>
                    <p><?php echo $reason_2_desc; ?></p> -->
                    <h3>We cherish every customer</h3>
                    <p>Von der persönlichen Übergabe eures gebuchten Bikes+Equipment bis zur Rückgabe - hier trefft ihr die Gründer noch mit Putzlappen und Staubwedel</p>
                </div>
                <!-- end col -->

                <div class="col-sm-6">
                <!-- <h3><?php echo $reason_3_title; ?></h3>
                    <p><?php echo $reason_3_desc; ?></p> -->
                    <h3>Our door is open for you</h3>
                    <p>Nach voriger Terminvereinbarung könnt Ihr uns im MotionLab besuchen kommen und euch ein Bild von unserem Angebot machen. Wir haben Gesichter und die zeigen wir gern. Persönlicher Kontakt ist uns wichtig</p>
                </div>
                <!-- end col -->
            </div>
            <!-- row -->

        </div>
        <!-- container -->
    </section>
    <!-- section-column-lg -->


<?php
get_footer();
?>
