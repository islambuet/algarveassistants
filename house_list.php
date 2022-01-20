<?php
include_once 'header.php';
$conn=Db::get_connection();
$houses=array();
$state=isset($_GET['state'])?$_GET['state']:'';
$city=isset($_GET['city'])?$_GET['city']:'';
$minPrize=isset($_GET['minPrize'])?$_GET['minPrize']:0;
$maxPrize=isset($_GET['maxPrize'])?$_GET['maxPrize']:0;

$types=isset($_GET['types'])?$_GET['types']:array();

try{

    $sql = 'Select  * from '.Db::$table_houses.' where status!="Deleted" ';
    $sql.='AND state="'.$state.'"';
    $sql.='AND city="'.$city.'"';
    $sql.='AND price>="'.$minPrize.'"';
    $sql.='AND price<="'.$maxPrize.'"';
    foreach($types as $type){
        $sql.='AND types LIKE "%,'.$type.',%"';
    }
    $sql.=' order by id DESC';
    $houses = $conn->query($sql)->fetchAll();
}catch(Exception $e) {
    print_r($e);

}

?>
<!DOCTYPE html>
<html  >
   <head>
      <!-- Site made with Mobirise Website Builder v4.10.1, https://mobirise.com -->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="generator" content="Mobirise v4.10.1, mobirise.com">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
      <link rel="shortcut icon" href="assets/images/logo-126x128-85.png" type="image/x-icon">
      <meta name="description" content="Algarve Portugal support services, property owners, tolls, car matriculation, property management, villa services, Reducing running costs, Translation Services, Bureau and fiscal Services, Payment of Utility Bills, Villa Rental Licences, bureau services, fiscal representation,  vehicle Management, payment of Utility Bills, non habitual residents, expatriate, gains capitals.">
      <title>Algarve Assistants | House List</title>

      <link href="assets/simulator/all.css" type="text/css" rel="stylesheet" media="all">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">


      <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&subset=latin">
      <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
      <link rel="stylesheet" href="assets/tether/tether.min.css">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/gdpr-plugin/gdpr-styles.css">
      <link rel="stylesheet" href="assets/dropdown/css/style.css">
      <link rel="stylesheet" href="assets/animate.css/animate.min.css">
      <link rel="stylesheet" href="assets/socicon/css/styles.css">
      <link rel="stylesheet" href="assets/mobirise3-blocks-plugin/css/style.css">
      <link rel="stylesheet" href="assets/theme/css/style.css">
      <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
      <link rel="stylesheet" href="assets/css/custome.css">
      <link rel="stylesheet" href="assets/css/responsive.css">
      <!-- Global site tag (gtag.js) - Google Ads: 429372062 -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=AW-429372062"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'AW-429372062');
      </script>
      <!-- Event snippet for Contacto no Site conversion page -->
      <script>
         gtag('event', 'conversion', {'send_to': 'AW-429372062/cLwrCPPqjv8BEJ7l3swB'});
         gtag('config', 'AW-429372062');
         gtag('config', 'AW-429372062');
      </script>
      <!-- Event snippet for Enviar formulário de potenciais clientes conversion page
         In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
      <script>
         function gtag_report_conversion(url) {
           var callback = function () {
             if (typeof(url) != 'undefined') {
               window.location = url;
             }
           };
           gtag('event', 'conversion', {
               'send_to': 'AW-429372062/LYHsCJOOl4ACEJ7l3swB',
               'event_callback': callback
           });
           return false;
         }
      </script>
      <script>
         gtag('config', 'AW-429372062/kRffCJqZp_8BEJ7l3swB', {
           'phone_conversion_number': '289 816 390'
         });
      </script>
   </head>
   <body>
      <section id="index-ext_menu-0" data-rv-view="0">
         <nav class="navbar navbar-dropdown navbar-fixed-top">
            <div class="container">
               <div class="mbr-table">
                  <div class="mbr-table-cell">
                     <div class="navbar-brand">
                        <a href="#top" class="navbar-logo"><img src="assets/images/logo-126x128-85.png" alt="AA"></a>
                        <a class="navbar-caption" href="#top">Algarve Assistants</a>
                     </div>
                  </div>
                  <div class="mbr-table-cell">
                     <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                     </button>
                     <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                        <li class="nav-item"><a class="nav-link link" href="index.html#index-header3-0">OUR SERVICES</a></li>
                        <li class="nav-item"><a class="nav-link link" href="../#Carsimulator">Car Tax Simulator</a></li>
                        <li class="nav-item"><a class="nav-link link" href="../#propertyFilter">Property Filter</a></li>
                        <li class="nav-item"><a class="nav-link link" href="/agent.html">Agent</a></li>
                        <li class="nav-item"><a class="nav-link link" href="index.html#index-header3-1">FAQ'S</a></li>
                        <li class="nav-item dropdown"><a class="nav-link link" href="index.html#index-header3-2" aria-expanded="false">ABOUT US</a></li>
                        <li class="nav-item"><a class="nav-link link" href="index.html#index-header3-3">CONTACT US</a></li>
                        <li class="nav-item nav-btn"><a class="nav-link btn btn-primary" href="index_pt.html"><span class="etl-icon icon-flag mbr-iconfont mbr-iconfont-btn"></span>PT</a></li>
                     </ul>
                     <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                     </button>
                  </div>
               </div>
            </div>
         </nav>
      </section>
      <section class="engine"><a href="https://mobirise.info/v">html templates</a></section>

      <section class="properSale_area" id="propertyFilter">
         <div class="container">
            
            <div class="propertyFilterRes" id="propFilRes">
               <div class="row">
               <?php
               if(sizeof($houses)>0){
                   foreach($houses as $house){
                   ?>
                   <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                       <div class="single_property">
                           <div class="property_img">
                               <?php $images=json_decode($house['attachments']);?>
                               <img src="<?php echo $images[0]; ?>" alt="Property">
                               <span class="properPrice"><?php echo $house['price']; ?> <span class="priSi">€</span></span>
                               <a href="house_details.php?id=<?php echo $house['id']; ?>" class="propMapPin"><i class="fas fa-map-marker-alt"></i> <?php echo $house['title']; ?>.</a>
                           </div>
                           <div class="properCont">
                               <div class="prperType">
                                   <div class="propTypeSym"><i class="fas fa-bed"></i> <?php echo trim($house['types'],',') ?></div>
                                   <div class="properyPrize"><?php echo $house['price']; ?> <span class="priSi">€</span></div>
                               </div>
                               <p><?php echo $house['description']; ?></p>
                               <div class="properBtn">
                                   <a href="house_details.php?id=<?php echo $house['id']; ?>" class="viewProBtn">More Details</a>
                                   <a href="#" class="viewProBtn2">Mortage Simulation</a>
                               </div>
                           </div>
                       </div>
                   </div>
                   <?php
                   }
               }
               else{
                   ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        No result found
                    </div>
                    <?php
               }
               ?>
               </div>
            </div>
         </div>
      </section>

      <section class="mbr-section mbr-section-md-padding" id="index-social-buttons4-0" data-rv-view="46" style="background-color: rgb(0, 0, 0); padding-top: 30px; padding-bottom: 0px;">
         <div class="container">
            <div class="row">
               <div class="col-md-8 col-md-offset-2 text-xs-center">
                  <h3 class="mbr-section-title display-2">Follow Us</h3>
                  <div><a class="btn btn-social" title="Twitter" target="_blank" href="http://twitter.com/algarve_assist"><i class="socicon socicon-twitter"></i></a> <a class="btn btn-social" title="Facebook" target="_blank" href="http://www.facebook.com/algarveassistants1"><i class="socicon socicon-facebook"></i></a>         </div>
               </div>
            </div>
         </div>
      </section>

      <section class="mbr-section mbr-section__container article" id="header3-2" data-rv-view="48" style="background-color: rgb(0, 0, 0); padding-top: 20px; padding-bottom: 20px;">
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
                  <h3 class="mbr-section-title display-2"><span style="font-weight: normal;"><a href="terms_EN.html#image2-9" class="text-primary">Terms and Conditions</a>&nbsp; -- &nbsp;<a href="privacy_EN.html#image2-h" class="text-primary">Privacy Policy</a>&nbsp;-- <a href="https://www.livroreclamacoes.pt/inicio" target="_blank" class="text-primary">Complain Book</a> -- <a href="https://www.cniacc.pt/" target="_blank" class="text-primary">Centro de Arbitragem(CNIACC)</a> -- <a href="https://www.consumidoronline.pt/pt/" target="_blank" class="text-primary">Centro de Arbitragem(CIMAAL)</a> -- <a href="InfoCred_EN.html#image2-y" class="text-primary">Credit &nbsp;Intermediate Liicense nº0002324</a></span></h3>
               </div>
            </div>
         </div>
      </section>

      <footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="index-footer1-0" data-rv-view="50" style="background-color: rgb(0, 0, 0); padding-top: 1.75rem; padding-bottom: 1.75rem;">
         <div class="container text-xs-center">
            <p>Copyright (c) 2018 Algarve Assistants, Lda. &nbsp;-- &nbsp;<a href="mailto:info@algarveassistants.com">info@algarveassistants.com</a> &nbsp;-- &nbsp;<a href="http://www.algarveassistants.com">www.algarveassistants.co</a>m</p>
         </div>
      </footer>


      <script src="assets/simulator/all.js"></script>  
      <script src="assets/simulator/selectFunction.js"></script>

      <!-- <script src="assets/web/assets/jquery/jquery.min.js"></script> -->
      <script src="assets/tether/tether.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/cookies-alert-plugin/cookies-alert-core.js"></script>
      <script src="assets/cookies-alert-plugin/cookies-alert-script.js"></script>
      <script src="assets/dropdown/js/script.min.js"></script>
      <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
      <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
      <script src="assets/smooth-scroll/smooth-scroll.js"></script>
      <script src="assets/typed/typed.min.js"></script>
      <script src="assets/countdown/jquery.countdown.min.js"></script>
      <script src="assets/jarallax/jarallax.js"></script>
      <script src="assets/mobirise3-blocks-plugin/js/script.js"></script>
      <script src="assets/theme/js/script.js"></script>
      <script src="assets/formoid/formoid.min.js"></script>
      <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
      <input name="animation" type="hidden">
      <input name="cookieData" type="hidden" data-cookie-colorText='#424a4d' data-cookie-colorBg='rgba(234, 239, 241, 0.99)' data-cookie-colorButton='#ffffff' data-cookie-colorLink='#ef7f1a' data-cookie-underlineLink='true' data-cookie-text="We use cookies to give you the best experience. Read our <a href='privacy_EN.html'>cookie policy</a>.">



      
   </body>
</html>