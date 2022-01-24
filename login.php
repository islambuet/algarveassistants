<?php
    include_once 'header.php';
    if(User::get_user()){
        $user=User::get_user();
        if($user['user_group']=='Admin'){
            header('location: admin_agent_list.php');
        }
        elseif($user['user_group']=='Agent'){
            header('location: add_house.php');
        }

        //echo "<script type='text/javascript'>window.location.href = 'index.html';</script>";
        die();
    }
    $error_message='';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $conn=Db::get_connection();
        try {
            $sql = 'Select  * from '.Db::$table_users.' where username="'.$_POST['loginEmail'].'"';
            $row = $conn->query($sql)->fetch();
            if($row){
                if($row['password']==$_POST['logPass']){
                    $_SESSION['logged_user_id']=$row['id'];
                    if($row['user_group']=='Admin'){
                        header('location: admin_agent_list.php');
                    }
                    elseif($row['user_group']=='Agent'){
                        header('location: add_house.php');
                    }

                    //echo "<script type='text/javascript'>window.location.href = 'index.html';</script>";
                    die();
                }
                else{
                    $error_message="Wrong Password";
                }
            }else{
                $error_message="User Not Found";
            }
        }catch(Exception $e) {
            $error_message = 'Login Failed.';
        }

    }


?><!DOCTYPE html>
<html  >
   <head>
      <!-- Site made with Mobirise Website Builder v4.10.1, https://mobirise.com -->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="generator" content="Mobirise v4.10.1, mobirise.com">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
      <link rel="shortcut icon" href="assets/images/logo-126x128-85.png" type="image/x-icon">
      <meta name="description" content="Algarve Portugal support services, property owners, tolls, car matriculation, property management, villa services, Reducing running costs, Translation Services, Bureau and fiscal Services, Payment of Utility Bills, Villa Rental Licences, bureau services, fiscal representation,  vehicle Management, payment of Utility Bills, non habitual residents, expatriate, gains capitals.">
      <title>Algarve Assistants | Login</title>

      <link href="assets/simulator/all.css" type="text/css" rel="stylesheet" media="all">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">

      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

      <link rel="stylesheet" href="assets/select2/select2.min.css">
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

         
        <?php 
            include "menu.php";
        ?>



      <section class="properSale_area" id="house_add">
         <div class="container">
            <div class="propertyTitle simulatorTitle">
               <h3  class="mbr-section-title display-2">Login</h3>
            </div>
             <?php
             if($error_message){
                ?>
                 <div data-form-alert="true">
                     <div data-form-alert-success="false" class="alert alert-form alert-danger text-xs-center"><?php echo $error_message; ?></div>
                 </div>
                <?php
             }
             ?>
            <div class="prperySaleForm loginForm">
               <form action="" id="loginForm" method="post">
                  <div class="row">
                     <div class="col-xs-12 col-md-12">
                        <div class="form-group">
                           <label class="form-control-label" for="loginEmail">Email<span class="form-asterisk">*</span></label>
                           <input type="email" class="form-control" name="loginEmail" id="loginEmail" required="" >
                        </div>
                     </div>
                     <div class="col-xs-12 col-md-12">
                        <div class="form-group">
                           <label class="form-control-label" for="logPass">Password<span class="form-asterisk">*</span></label>
                           <input type="password" class="form-control" name="logPass" id="logPass" required="" >
                        </div>
                     </div>
                     <div class="col-md-12">
                        <button type="submit" class="btn btn-primary submitBtn">Login</button>
                     </div>
                  </div>
               </form>
            </div>

         </div>
      </section>




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

      <!-- <script src="assets/swiperslider/swiper-bundle.min.css"></script> -->

      <script src="assets/select2/select2.min.js"></script>


      <script>
         $(document).ready(function() {
             $('.js-example-basic-single').select2();
         });


         $(function(){
             $("button.submitBtn").click(function(){
                 var $fileUpload = $("input[type='file']");
                 if (parseInt($fileUpload.get(0).files.length)>4){
                  alert("You can only upload a maximum of 4 Property Photos");
                 }
             });    
         });

      </script>

      
   </body>
</html>