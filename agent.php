<?php
include_once 'header.php';
$error_message='';
$error_type='';

$agency_name='';
$ami_licence='';
$agent_name='';
$email_agent='';
$contact_us_txt='';
$agency_name='';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $agency_name = $_POST["agency_name"];
    $ami_licence = $_POST["ami_licence"];
    $agent_name = $_POST["agent_name"];
    $email_agent = $_POST["email_agent"];
    $contact_us_txt = $_POST["contact_us_txt"];
    $agent_password = $_POST["agent_password"];
    $confirmpass_proper = $_POST["confirmpass_proper"];
    if($agent_password !=$confirmpass_proper){
        $error_type = 'fail';
        $error_message = 'Password Mismatched';
    }
    else{
        $conn=Db::get_connection();
        try {
            $sql = 'INSERT INTO '.Db::$table_agents.'
            (agency_name, ami_licence, agent_name,email_agent,contact_us_txt,password,date_created)
            VALUES (
            "'.$_POST['agency_name'].'",
            "'.$_POST['ami_licence'].'",
            "'.$_POST['agent_name'].'",
            "'.$_POST['email_agent'].'",
            "'.$_POST['contact_us_txt'].'",
            "'.$_POST['agent_password'].'",
            "'.time().'"
            )';
            $conn->exec($sql);
            $error_type = 'success';
            $error_message = 'Agent Created Successfully.Please wait for approve';
            $agency_name='';
            $ami_licence='';
            $agent_name='';
            $email_agent='';
            $contact_us_txt='';
            $agency_name='';
        } catch(Exception $e) {
            $error_type = 'fail';
            $error_message = 'Agent Creation Failed';
        }
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
    <title>Algarve Assistants | Agent</title>

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


<section class="properSale_area" id="propertySale">
    <div class="container">
        <div class="propertyTitle simulatorTitle">
            <h3  class="mbr-section-title display-2">Agent</h3>
        </div>
        <?php
        if($error_type=='success'){?>
            <div data-form-alert="true">
                <div data-form-alert-success="false" class="alert alert-form alert-success text-xs-center"><?php echo $error_message; ?></div>
            </div>
        <?php
        }
        elseif( $error_type=='fail'){?>
        <div data-form-alert="true">
            <div data-form-alert-success="false" class="alert alert-form alert-danger text-xs-center"><?php echo $error_message; ?></div>
        </div>
        <?php
        }
        ?>
        <div class="prperySaleForm">
            <form action="" id="prperysale" method="post">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="agencyName">Agency name<span class="form-asterisk">*</span></label>
                            <input type="text" class="form-control" name="agency_name" id="agencyName" required="" placeholder="Agency Name" value="<?php echo $agency_name; ?>" >
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="AMIlicence">AMI licence nº<span class="form-asterisk">*</span></label>
                            <input type="text" class="form-control" name="ami_licence" id="AMIlicence" required="" placeholder="AMI licence nº" value="<?php echo $ami_licence; ?>" >
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="Name-propert">Name<span class="form-asterisk">*</span></label>
                            <input type="text" class="form-control" name="agent_name" id="Name-propert" required="" placeholder="Agent Name" value="<?php echo $agent_name; ?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="Email-property">Email<span class="form-asterisk">*</span></label>
                            <input type="email" class="form-control" name="email_agent" id="Email-property" required=""  value="<?php echo $email_agent; ?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="form-group">
                            <label class="form-control-label" for="Contact-contact">Contact<span class="form-asterisk">*</span></label>
                            <input type="text" class="form-control" name="contact_us_txt" id="Contact-contact" required="" value="<?php echo $contact_us_txt; ?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="Password-proptery">Password<span class="form-asterisk">*</span></label>
                            <input type="password" class="form-control" name="agent_password" id="Password-proptery" required="" >
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="Confirmpass-proper">Confirm Password<span class="form-asterisk">*</span></label>
                            <input type="password" class="form-control" name="confirmpass_proper" id="Confirmpass-proper" required="" >
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group checkCol">
                            <input type="checkbox" name="pripoli" id="pripoli" required="required" placeholder="privacy Policy">
                            <label for="pripoli">I authorize the use of my personal data in accordance with the purpose described in the website's Privacy Policy.</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="agent_login_btn" class="btn btn-primary">SUBMIT</button>
                    </div>
                </div>
            </form>
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