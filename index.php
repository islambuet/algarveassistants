<?php
include_once 'header.php';
$error_message='';
$error_type_email='';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['email_simulator'])){
        $to = "celia.vences@algarveassistants.com";
        $subject = "Car Tax Simulator!";
        $message='<html>
                <head>
                <title>Car Tax Simulator!</title>
                </head>
                <body>
                <p>Car Tax Simulator!</p>
                <table border="1">
                <tbody>
                ';
        $message.='<tr><td>Country</td><td>'.$_POST['state'].'</td>';
        $message.='<tr><td>Type of Car</td><td>'.$_POST['carType'].'</td>';
        $message.='<tr><td>Car Condition</td><td>'.$_POST['carCondition'].'</td>';
        $message.='<tr><td>Car Age</td><td>'.$_POST['carAge'].'</td>';
        $message.='<tr><td>Capacity of the Motor</td><td>'.$_POST['capacityMotor'].'</td>';
        $message.='<tr><td>Type of Fuel</td><td>'.$_POST['typeFuel'].'</td>';
        $message.='<tr><td>Particles(Min)</td><td>'.$_POST['particlesMin'].'</td>';
        $message.='<tr><td>Particles(Max)</td><td>'.$_POST['particlesMin'].'</td>';
        $message.='<tr><td>Type of Co2 test</td><td>'.$_POST['co2test'].'</td>';
        $message.='<tr><td>CO2 Emission</td><td>'.$_POST['co2Emission'].'</td>';
        $message.='<tr><td>Simulation</td><td>'.$_POST['simulation'].'</td>';
        $message.='</tbody>
                    </table>
                    </body>
                    </html>';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
        $headers .= 'From: waseem.linuxfreakz@gmail.com>' . "\r\n";
        if(mail($to,$subject,$message,$headers)){
            $error_message='Successfully sent mail';
            $error_type_email='success';
        }
        else{
            $error_message='Failed to send email';
            $error_type_email='error';
        }
    }
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
      <title>Algarve Assistants</title>

      <link href="assets/simulator/all.css" type="text/css" rel="stylesheet" media="all">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">


      <!-- <link rel="stylesheet" href="assets/swiperslider/swiper-bundle.min.css"> -->

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

      <section class="engine"><a href="https://mobirise.info/v">html templates</a></section>
      <section class="mbr-section mbr-section-hero mbr-section-full extHeader17 mbr-parallax-background mbr-after-navbar" id="index-extHeader17-0" data-rv-view="2" style="background-image: url(assets/images/algarve-1-2000x1333-50.jpg);">
         <div class="mbr-overlay" style="opacity: 0; background-color: rgb(0, 0, 0);">
         </div>
         <div class="mbr-table-cell">
            <div class="container">
               <div id="title">
                  <div class="mbr-figure image-size" style="width: 60%; font-size: 150px;"><img src="assets/images/logo-aa-branco-1400x402-37.png" alt="AA"></div>
                  <div class="mbr-table-cell col-md-6 text-xs-center text-md-left">
                     <div class="mbr-section-text lead">
                        <p>&nbsp; &nbsp;Support services for property owners and expatriates.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="mbr-arrow mbr-arrow-floating hidden-sm-down" aria-hidden="true"><a href="#index-header3-0"><i class="mbr-arrow-icon"></i></a></div>
      </section>

      <section class="mbr-section mbr-section__container article" id="index-header3-0" data-rv-view="5" style="background-color: rgb(255, 255, 255); padding-top: 80px; padding-bottom: 20px;">
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
                  <h3 class="mbr-section-title display-2">Our Services</h3>
                  <small class="mbr-section-subtitle">&nbsp;</small>
               </div>
            </div>
         </div>
      </section>

      <section class="mbr-section mbr-section-nopadding extFeatures5" id="index-extFeatures5-0" data-rv-view="7" style="background-color: rgb(255, 255, 255);">
         <div class="container">
            <div class="row">
               <div class="mbr-cards-row row">
                  <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0px; padding-bottom: 0px;">
                     <div class="wraper">
                        <div class="container">
                           <div class="card cart-block">
                              <div class="card-block">
                                 <div class="card-title-img">
                                    <div class="card-img"><span class="mbri-users mbr-iconfont mbr-iconfont-features4" style="color: rgb(230, 230, 230);"></span></div>
                                    <div class="card-title">
                                       <h4 class="card-title-h" style="padding-top: 25px;">Non Habitual Residency Tax Status<br><br></h4>
                                    </div>
                                 </div>
                                 <p class="card-text">In 2009, Portugal introduced a new tax regime for individuals moving to Portugal. This regime offers tax benefits for residents that have applied for this status for a period of 10 years. For example, people receiving pensions, rental income, capital gains or interest in Portugal from another country will not have to pay any tax on their income here. We help you apply for this status and give you any guidance and support needed. </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0px; padding-bottom: 0px;">
                     <div class="wraper">
                        <div class="container">
                           <div class="card cart-block">
                              <div class="card-block">
                                 <div class="card-title-img">
                                    <div class="card-img"><span class="mbri-home mbr-iconfont mbr-iconfont-features4" style="color: rgb(230, 230, 230);"></span></div>
                                    <div class="card-title">
                                       <h4 class="card-title-h" style="padding-top: 25px;">Rental License<br><br><br><br></h4>
                                    </div>
                                 </div>
                                 <p class="card-text">A new law published in 2014 requires all holiday rental homes or tourist properties to request a Rental License to the local councils. The house must comply with the characteristics requested by law.
                                    <br>There are a few obligations: communication to the SEF; invoices must be issued and send to the tax office, submit the tax return. We can help you to with all of these aspects.&nbsp;<br>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0px; padding-bottom: 0px;">
                     <div class="wraper">
                        <div class="container">
                           <div class="card cart-block">
                              <div class="card-block">
                                 <div class="card-title-img">
                                    <div class="card-img"><span class="mbri-sites mbr-iconfont mbr-iconfont-features4" style="color: rgb(230, 230, 230);"></span></div>
                                    <div class="card-title">
                                       <h4 class="card-title-h" style="padding-top: 25px;">Vehicle Matriculation with tax or tax exemption</h4>
                                    </div>
                                 </div>
                                 <p class="card-text">If you want to avoid the inconvenience of hiring a car every time you visit Portugal, the best option is to have your own car here. You can only have the vehicle in Portugal for 183 days, after that you are obliged to matriculate it or remove it from the country. We help you with all the process of matriculation and save you some time and stress from this bureaucratic process.<br></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0px; padding-bottom: 0px;">
                     <div class="wraper">
                        <div class="container">
                           <div class="card cart-block">
                              <div class="card-block">
                                 <div class="card-title-img">
                                    <div class="card-img"><span class="mbri-file mbr-iconfont mbr-iconfont-features4" style="color: rgb(230, 230, 230);"></span></div>
                                    <div class="card-title">
                                       <h4 class="card-title-h" style="padding-top: 25px;">Fiscal Representation<br><br><br></h4>
                                    </div>
                                 </div>
                                 <p class="card-text">This is the perfect option for you if you intend to own a house or business in Portugal and need help to comply with the Portuguese fiscal system. We offer fiscal representation for individuals and companies, being the intermediary between the non-resident and the Portuguese Fiscal Authorities in all matters.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      <section class="mbr-section mbr-section-nopadding extFeatures5" id="index-extFeatures5-1" data-rv-view="10" style="background-color: rgb(255, 255, 255);">
         <div class="container">
            <div class="row">
               <div class="mbr-cards-row row">
                  <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0px; padding-bottom: 0px;">
                     <div class="wraper">
                        <div class="container">
                           <div class="card cart-block">
                              <div class="card-block">
                                 <div class="card-title-img">
                                    <div class="card-img"><span class="mbri-credit-card mbr-iconfont mbr-iconfont-features4" style="color: rgb(230, 230, 230);"></span></div>
                                    <div class="card-title">
                                       <h4 class="card-title-h" style="padding-top: 25px;">Exchange or Register Driving Licenses</h4>
                                    </div>
                                 </div>
                                 <p class="card-text">You can drive with a foreign driving license in Portugal for as long as it is not expired, you only have to register the license to the authorities. If you wish to exchange your driving license for a Portuguese one that is also possible by gathering all the necessary documentation and submitting the request. For both the registration and the exchange we are able to provide you with all the help and support needed for this process and save you the time involved in this process.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0px; padding-bottom: 0px;">
                     <div class="wraper">
                        <div class="container">
                           <div class="card cart-block">
                              <div class="card-block">
                                 <div class="card-title-img">
                                    <div class="card-img"><span class="mbri-lock mbr-iconfont mbr-iconfont-features4" style="color: rgb(230, 230, 230);"></span></div>
                                    <div class="card-title">
                                       <h4 class="card-title-h" style="padding-top: 25px;">Insurance Quotation<br><br></h4>
                                    </div>
                                 </div>
                                 <p class="card-text">Thinking that you are paying too much for your insurance or have you just purchased a property or a car in Portugal and need an insurance? Just contact us and we will be able to provide you with insurance quotations in a timely fashion manner for all types of insurances you may need.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0px; padding-bottom: 0px;">
                     <div class="wraper">
                        <div class="container">
                           <div class="card cart-block">
                              <div class="card-block">
                                 <div class="card-title-img">
                                    <div class="card-img"><span class="mbri-cash mbr-iconfont mbr-iconfont-features4" style="color: rgb(230, 230, 230);"></span></div>
                                    <div class="card-title">
                                       <h4 class="card-title-h" style="padding-top: 25px;">Mortgages and Loans<br><br></h4>
                                    </div>
                                 </div>
                                 <p class="card-text">If you want to purchase a property or a land or a car in Portugal and need funding or if you simply need a personal loan we are able to help. We will search for the best option for you, by working together we will guarantee you the best option that suits your needs and demands. Getting a loan approved is not an easy and stress-free process and we are here to ensure the smooth run of the process.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0px; padding-bottom: 0px;">
                     <div class="wraper">
                        <div class="container">
                           <div class="card cart-block">
                              <div class="card-block">
                                 <div class="card-title-img">
                                    <div class="card-img"><span class="mbri-growing-chart mbr-iconfont mbr-iconfont-features4" style="color: rgb(230, 230, 230);"></span></div>
                                    <div class="card-title">
                                       <h4 class="card-title-h" style="padding-top: 25px;">Investment in Portugal<br><br></h4>
                                    </div>
                                 </div>
                                 <p class="card-text">Coming soon...</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>


      <section class="carSimulArea back-blue" id="Carsimulator">
         <div class="container">
            <div class="simulatorTitle">
               <h3 class="mbr-section-title display-2">Car Tax Simulator</h3>
            </div>
            <?php
            if($error_type_email=='success'){?>
                <div data-form-alert="true">
                    <div data-form-alert-success="false" class="alert alert-form alert-success text-xs-center"><?php echo $error_message; ?></div>
                </div>
            <?php
            }
            elseif( $error_type_email=='error'){?>
                <div data-form-alert="true">
                    <div data-form-alert-success="false" class="alert alert-form alert-danger text-xs-center"><?php echo $error_message; ?></div>
                </div>
            <?php
            }
            ?>
            <!-- <div class="row d-flex justify-content-center">
               <div class="col-12">
                  <form class="ajax-form forms2" method="post" action="#">
                     <div id="form_simulador_isv" class="" style=""></div>
                     <div class="row">
                        <div class="col-12 col-sm-6 mb-4">
                           <label>país da matricula do veiculo</label> 
                           <div class="select-box">
                              <select name="zona" class="selectpicker" data-width="100%">
                                 <option value="">selecione</option>
                                 <option title="" value="1">Estado-Membro da União Europeia </option>
                                 <option title="" value="2">País Terceiro</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 mb-4">
                           <label>tipo de veiculo</label> 
                           <div class="select-box tipo">
                              <select name="tipo" id="combo_tipo_veiculo" data-width="100%">
                                 <option value="">selecione</option>
                                 <optgroup label="Tabela A">
                                    <option data-subtext="ex: Mercedes A200, Audi A4" value="53" title="ligeiro de passageiros"> ligeiro de passageiros (100%) </option>
                                    <option data-subtext="ex: VW Sharan, Ford S-Max" value="54" title="monovolumes de passageiros -&gt; c/ 7 ou mais lugares, com mais de 2500 kg de peso bruto, sem tração às 4 rodas"> monovolumes de passageiros (40%) </option>
                                    <option data-subtext="ex: Chevrolet Spark 1.0 LS, Bi.fuel, Dacia Bi-fuel" value="57" title="exclusivamente a gás natural -&gt; depósito de combustivel com máximo de 15 l de capacidade"> exclusivamente a gás natural (40%) </option>
                                    <option data-subtext="ex: Hummer, limousines" value="56" title="passageiros não convencionais -&gt; passageiros com mais de 3500 kg de peso bruto"> passageiros não convencionais (100%) </option>
                                    <option data-subtext="" value="58" title="veículos híbridos -&gt; que tenham menos de 50g de CO2 e mais de 50 km de autonomia elétrica"> veículos híbridos (60%) </option>
                                    <option data-subtext="ex: Nissan Leaf" value="60" title="elétricos"> elétricos (Isento) </option>
                                    <option data-subtext="Ex: Porsche E-Hybrid, Audi A3 E-tron, Mercedes GLC 350E " value="59" title="híbridos plug-in -&gt; que tenham menos de 50g de CO2 e mais de 50 km de autonomia elétrica"> híbridos plug-in (25%) </option>
                                    <option data-subtext="" value="55" title="táxis -&gt; com menos de 4 anos, até 160 g/NEDC ou 184 g/WLTP"> táxis (30%) </option>
                                 </optgroup>
                                 <optgroup label="Tabela B">
                                    <option data-subtext="ex: Opel corsa, Renault Clio" value="61" title="ligeiros de mercadorias -&gt; até 3 lugares, até 3500 kg de peso bruto, com altura interior da caixa de carga no máximo 1.20 cm"> ligeiros de mercadorias (100%) </option>
                                    <option data-subtext="ex: Peugeot Partner, Renault Kangoo" value="73" title="ligeiros de mercadorias -&gt; até 3 lugares, até 3500 kg de peso bruto, com altura interior da caixa de carga superior a 1.20 cm"> ligeiros de mercadorias (10%) </option>
                                    <option data-subtext="ex: Toyota Land Cruiser, Mercedes Vito 4X4, Renault Kangoo 4X4" value="62" title="todo-o-terreno comerciais / monovolumes comerciais 4X4"> todo-o-terreno comerciais / monovolumes comerciais 4X4 (100%) </option>
                                    <option data-subtext="ex: Ford Transit, Mercedes Sprinter" value="68" title="monovolumes mercadorias -&gt; até 3 lugares, até 3500 kg de peso bruto, sem tração às 4 rodas, com altura da caixa de carga no minimo de 1.30 cm"> monovolumes mercadorias (10%) </option>
                                    <option data-subtext="ex: Mercedes Viano, Opel Vivaro" value="64" title="mistos -&gt; até 3500 kg de peso bruto, veiculos até 6 lugares, com separador para o espaço de carga e com a dimensão de caixa no minimo  de 1.30 cm de altura e 1.45 cm de comprimento"> mistos (15%) </option>
                                    <option data-subtext="ex: Iveco Daily (cabine dupla)" value="65" title="ligeiro de mercadorias de caixa aberta -&gt; com peso bruto de 3500kg com mais de 3 lugares e s/tração às 4 rodas"> ligeiro de mercadorias de caixa aberta (15%) </option>
                                    <option data-subtext="ex: Nissan Navarra, Toyota Hilux" value="63" title="ligeiro de mercadorias de caixa aberta -&gt; c/ tração às 4 rodas"> ligeiro de mercadorias de caixa aberta (50%) </option>
                                    <option data-subtext="ex: Dodge Ram, Toyota Dina, Mitsubishi Canter" value="69" title="ligeiro de mercadorias de caixa aberta -&gt; com peso bruto de 3500 kg, até 3 lugares e s/tração às 4 rodas"> ligeiro de mercadorias de caixa aberta (10%) </option>
                                    <option data-subtext="" value="66" title="autocaravanas -&gt; Ligeiras ou pesadas"> autocaravanas (30%) </option>
                                    <option data-subtext="" value="67" title="veiculos fabricados até 1969 -&gt; Veiculos comerciais aplica-se a tabela mais favorável"> veiculos fabricados até 1969 (95%) </option>
                                 </optgroup>
                                 <optgroup label="Tabela C">
                                    <option data-subtext="" value="71" title="motociclos, triciclos, quadriciclos"> motociclos, triciclos, quadriciclos (100%) </option>
                                 </optgroup>
                              </select>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 mb-4">
                           <div class="row">
                              <div class="col-6">
                                 <label>novo / usado</label> 
                                 <div class="select-box">
                                    <select name="estado" class="selectpicker" data-width="100%">
                                       <option value="">selecione</option>
                                       <option value="1">Novo</option>
                                       <option value="2">Usado</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-6"> <label>Data registo</label> <input name="data_registo" autocomplete="off" class="no-action-opacity" type="text"> </div>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 mb-4">
                           <label>cilindrada</label> 
                           <div class="input-box">
                              <input name="cilindrada" type="text"> 
                              <div class="mask">CC</div>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 mb-4">
                           <label>tipo de combustível</label> 
                           <div class="select-box">
                              <select name="combustivel" class="selectpicker" data-width="100%">
                                 <option value="">selecione</option>
                                 <option value="1">Gasolina</option>
                                 <option value="2">Gasóleo</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 mb-4">
                           <label>particulas</label> 
                           <div class="select-box no-action-opacity">
                              <select name="particula" class="selectpicker" data-width="100%">
                                 <option value="">selecione</option>
                                 <option data-subtext="menor que 0,001 g/km" value="5">&lt; 0,001 g/km</option>
                                 <option data-subtext="maior ou igual a 0,001 g/km" value="6">&gt;= 0,001 g/km</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 mb-4">
                           <label>tipo de testes co2</label> 
                           <div class="select-box">
                              <select name="componente_ambiental_tipo" class="selectpicker" data-width="100%">
                                 <option value="">selecione</option>
                                 <option value="1">NEDC</option>
                                 <option value="2">WLTP</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 mb-4">
                           <label>emissão gases co2</label> 
                           <div class="input-box">
                              <input name="emissao_gases" type="text"> 
                              <div class="mask">G/Km</div>
                           </div>
                        </div>
                        <div class="col mt-3"> <button class="hvr-bounce-to-right">SIMULAR cálculo ISV</button> </div>
                     </div>
                  </form>
               </div>
            </div>
 -->
               
            <div class="prperySaleForm" style="padding-top: 75px;">
               <form action="" id="addProperty" method="post">
                  <div class="row">
                     <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                           <label class="form-control-label" for="SelectCountry">Select Country<span class="form-asterisk">*</span></label>
                           <div class="select2 animated fadeInUp">
                              <select class="form-control" name="state" id="SelectCountry">
                                 <option value="EU Country">EU Country</option>
                                 <option value="Outside Country">Outside Country</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                           <label class="form-control-label" for="carType">Type of Car <span class="form-asterisk">*</span></label>
                           <div class="select2 animated fadeInUp">
                              <select class="form-control" name="carType" id="carType">
                                 <option value="Passenger Car">Passenger Car</option>
                                 <option value="7 Seats Car">7 Seats Car</option>
                                 <option value="Hybrids">Hybrids</option>
                                 <option value="Hybrids Plug-In">Hybrids Plug-In</option>
                                 <option value="Electric">Electric</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                           <label class="form-control-label" for="carCondi">Car<span class="form-asterisk">*</span></label>
                           <div class="select2 animated fadeInUp">
                              <select class="form-control" name="carCondition" id="carCondi">
                                 <option value="New Car">New Car</option>
                                 <option value="Used Car">Used Car</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                           <label class="form-control-label" for="carAge">Car Age<span class="form-asterisk">*</span></label>
                           <input type="date" class="form-control" name="carAge" id="carAge" required="" >
                        </div>
                     </div>
                     <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                           <label class="form-control-label" for="CapacityMotor">Capacity of the Motor<span class="form-asterisk">*</span></label>
                           <input type="text" class="form-control" name="capacityMotor" id="CapacityMotor" required="" >
                        </div>
                     </div>
                     <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                           <label class="form-control-label" for="TypeFuel">Type of Fuel<span class="form-asterisk">*</span></label>
                           <div class="select2 animated fadeInUp">
                              <select class="form-control" name="typeFuel" id="TypeFuel">
                                 <option value="Diesel">Diesel</option>
                                 <option value="Petrol">Petrol</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-md-6">
                        <label class="form-control-label" for="Particles">Particles<span class="form-asterisk">*</span></label>
                        <div class="row">
                           <div class="col-6 col-sm-6 col-xl-6 col-6">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="particlesMin" id="MinPrize" required="" placeholder=">=0,001">
                              </div>
                           </div>
                           <div class="col-6 col-sm-6 col-xl-6 col-6">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="particlesMax" id="MaxPrize" required="" placeholder="<0,001">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                           <label class="form-control-label" for="Co2test">Type of Co2 test<span class="form-asterisk">*</span></label>
                           <div class="select2 animated fadeInUp">
                              <select class="form-control" name="co2test" id="Co2test">
                                 <option value="NEDC">NEDC</option>
                                 <option value="WLTP">WLTP</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                           <label class="form-control-label" for="CO2Emission">CO2 Emission<span class="form-asterisk">*</span></label>
                           <input type="text" class="form-control" name="co2Emission" id="CO2Emission" required="" >
                        </div>
                     </div>
                     <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                           <label class="form-control-label" for="Simulation">Simulation<span class="form-asterisk">*</span></label>
                           <div class="select2 animated fadeInUp">
                              <select class="form-control" name="simulation" id="Simulation">
                                <option value="01 element -Capacity of the Moto  1,805.08 €">01 element -Capacity of the Moto 1,805.08 €</option>
                                <option value="02 Element- CO2 145.57 €">02 Element- CO2 145.57 €</option>
                                <option value="03 Red. Of the years Capacity Motor  631.78 €">03 Red. Of the years Capacity Motor  631.78 €</option>
                                <option value="04 Red.Of the years CO2  29.11 €">04 Red.Of the years CO2  29.11 €</option>
                                <option value="05Particles tax 500 €">05Particles tax 500 €</option>
                                <option value="06 Red.Particles tax  100 €">06 Red.Particles tax  100 €</option>
                                <option value="Total ISV to Pay   1,689.76 €">Total ISV to Pay   1,689.76 €</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <button type="submit" name="email_simulator" class="btn btn-primary submitBtn">SUBMIT</button>
                     </div>
                  </div>
               </form>
            </div>

         </div>
      </section>

      <section class="properSale_area" id="propertyFilter">
         <div class="container">
            <div class="propertyTitle simulatorTitle">
               <h3  class="mbr-section-title display-2">Property Filter</h3>
            </div>

            <div class="prperySaleForm">
               <form action="house_list.php" id="prperysale">
                  <div class="row">
                     <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                           <label class="form-control-label" for="AMIlicence">Select Property<span class="form-asterisk">*</span></label>
                           <div class="select2 animated fadeInUp">
                              <select class="js-example-basic-single form-control" name="state">
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                                 <option value="Apartment">Apartment</option>
                                 <option value="Country">Country House</option>
                                 <option value="Ruin">Ruin</option>
                                 <option value="Plot">Plot of Land</option>
                                 <option value="Villa">Villa</option>
                                 <option value="Shop">Shop</option>
                                 <option value="Storehouse">Storehouse</option>
                                 <option value="building">building</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                           <label class="form-control-label" for="SelectCity">Select City<span class="form-asterisk">*</span></label>
                            <input type="text" class="form-control" name="city" id="SelectCity"  required=""">
                        </div>
                     </div>
                     <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                           <label class="form-control-label" for="PropertyType">Type of Property<span class="form-asterisk">*</span></label>
                           <div class="select2 animated fadeInUp">
                              <select class="js-example-basic-single form-control" name="types[]" multiple="multiple" required="">
                                <option value="T0 ">T0 </option>
                                <option value="T1 ">T1 </option>
                                <option value="T2 ">T2 </option>
                                <option value="T3 ">T3 </option>
                                <option value="T4 ">T4 </option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-md-6">
                        <div class="row">
                           <div class="col-6">
                              <div class="form-group">
                                 <label class="form-control-label" for="MinPrize">Min Prize<span class="form-asterisk">*</span></label>
                                 <input type="number" step="0.01" class="form-control" name="minPrize" id="MinPrize" required="" >
                              </div>
                           </div>
                           <div class="col-6">
                              <div class="form-group">
                                 <label class="form-control-label" for="MaxPrize">Max Prize<span class="form-asterisk">*</span></label>
                                 <input type="number" step="0.01" class="form-control" name="maxPrize" id="MaxPrize" required="" >
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                     </div>
                  </div>
               </form>
            </div>


         </div>
      </section>

      <section class="mbr-section mbr-section__container article" id="index-header3-1" data-rv-view="13" style="background-color: rgb(247, 247, 247); padding-top: 60px; padding-bottom: 20px;">
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
                  <h3 class="mbr-section-title display-2">FAQ</h3>
               </div>
            </div>
         </div>
      </section>

      <section class="mbr-section extAccordion1" id="index-extAccordion1-0" data-rv-view="15" style="background-color: rgb(247, 247, 247); padding-top: 0px; padding-bottom: 50px;">
         <div class="container">
            <div class="row">
               <div class="col-md-10 col-md-offset-1">
                  <div class="section-head text-center space30">
                  </div>
                  <div class="clearfix"></div>
                  <div id="accordion" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                     <div class="accordion-group">
                        <div class="panel panel-default colorBG" style="display: block;">
                           <div class="panel-heading" role="tab" id="headingOne">
                              <span class="signSpan pseudoMinus"></span>
                              <h4 class="panel-title"><a role="button" class="" data-toggle="collapse" data-parent="#index-extAccordion1-0" data-core="" href="#collapseOneindex-extAccordion1-0" aria-expanded="true" aria-controls="collapseOne"><span class="sign"></span>1. How long does it take to matriculate the car?&nbsp;</a></h4>
                           </div>
                           <div id="collapseOneindex-extAccordion1-0" class="panel-collapse noScroll collapse in" role="tabpanel" aria-labelledby="headingOne">
                              <div class="panel-body">
                                 <p>The length of the process it depends on the car that you wish to import. If the car has no problems and if you have all the necessary documentation is should not take more than 1 month.</p>
                              </div>
                           </div>
                        </div>
                        <div class="panel panel-default" style="display: block;">
                           <div class="panel-heading" role="tab" id="headingTwo">
                              <span class="signSpan pseudoPlus"></span>
                              <h4 class="panel-title"><a role="button" class="collapsed" data-toggle="collapse" data-parent="#index-extAccordion1-0-init" data-core="" href="#collapseTwoindex-extAccordion1-0" aria-expanded="false" aria-controls="collapseTwo">2. To exchange my driving license for a Portuguese one do I have to do a practical test?</a></h4>
                           </div>
                           <div id="collapseTwoindex-extAccordion1-0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="panel-body">
                                 <p>You only need to do a practical driving test if your driving license is from outside the EU and you have been a resident in Portugal for more than 90 days.</p>
                              </div>
                           </div>
                        </div>
                        <div class="panel panel-default" style="display: block;">
                           <div class="panel-heading" role="tab" id="headingThree">
                              <span class="signSpan pseudoPlus"></span>
                              <h4 class="panel-title"><a role="button" class="collapsed" data-toggle="collapse" data-parent="#index-extAccordion1-0-init" data-core="" href="#collapseThreeindex-extAccordion1-0" aria-expanded="false" aria-controls="collapseThree">3. Can I import my car and not pay the import tax (ISV) ?&nbsp;</a></h4>
                           </div>
                           <div id="collapseThreeindex-extAccordion1-0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="panel-body">
                                 <p>Yes, you can import your car with an ISV exemption. For that you need to change your residency to Portugal and present documentation that proves your previous residency abroad alongside other requirements.</p>
                              </div>
                           </div>
                        </div>
                        <div class="panel panel-default" style="display: block;">
                           <div class="panel-heading" role="tab" id="headingThree">
                              <span class="signSpan pseudoPlus"></span>
                              <h4 class="panel-title"><a role="button" class="" data-toggle="collapse" data-parent="#index-extAccordion1-0-init" data-core="" href="#collapseFourindex-extAccordion1-0" aria-expanded="true" aria-controls="collapseFour">4. Can you help me to rent my house?&nbsp;</a></h4>
                           </div>
                           <div id="collapseFourindex-extAccordion1-0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="panel-body">
                                 <p>Yes, apart from applying for the rental license we can also make all the arrangements needed to rent it by working with rental agents to market your property.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="mbr-section mbr-section__container article" id="index-header3-2" data-rv-view="18" style="background-color: rgb(255, 255, 255); padding-top: 60px; padding-bottom: 20px;">
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
                  <h3 class="mbr-section-title display-2">About Us</h3>
               </div>
            </div>
         </div>
      </section>

      <section class="mbr-section article mbr-section__container" id="index-content2-0" data-rv-view="20" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">
         <div class="container">
            <div class="row">
               <div class="col-xs-12 lead">
                  <blockquote><strong>Algarve Assistants</strong> is an innovative company, since 2006, &nbsp;who are able to offer any form of support services for Portuguese property owners and visitors to Portugal. &nbsp;</blockquote>
                  <blockquote>
                     <p>Whether you require a one off service such as car matriculation or a rental license for your house or regular on-going assistance such as fiscal representation or assistance with your property management Algarve Assistants are the company to meet your needs.</p>
                     <p><span style="font-size: 1.09rem; line-height: 1.5;"><br></span></p>
                     <p><span style="font-size: 1.09rem; line-height: 1.5;">All our services can be provided on a one off basis or alternatively can form part of an annual contract combined with other services.</span></p>
                  </blockquote>
                  <blockquote>To give our clients the best possible service we are able to assist you from office on the Algarve, we have an office ideally located in Patacão near Faro.</blockquote>
                  <blockquote>
                     <p>If you have anything that you think we can help you with please give us as call and you will be impressed by the high quality and knowledgeable service that we will provide you with. Our mission is to save you money – but at the same time give you an unrivalled quality service.</p>
                     <p><br></p>
                     <p>Credit Intermediate License nº0002324, Click <a href="InfoCred_EN.html#image2-y">here</a> for more information.</p>
                  </blockquote>
               </div>
            </div>
         </div>
      </section>

      <section class="mbr-cards mbr-section extFeatures" id="index-extFeatures9-0" data-rv-view="22" style="background-color: rgb(247, 247, 247); padding-top: 80px; padding-bottom: 80px;">
         <div class="mbr-section mbr-section-nopadding">
            <div class="container">
               <div class="row">
                  <div class="col-xs-12 text-xs-center title-wrap">
                     <h3 class="mbr-section-title display-2">Our Team</h3>
                  </div>
               </div>
            </div>
         </div>
         <div class="mbr-cards-row row">
            <div class="mbr-cards-col col-xs-12 col-lg-6">
               <div class="container">
                  <div class="card cart-block">
                     <div class="feature-img"><img src="assets/images/female-business-user.png" class="card-img-top"></div>
                     <div class="card-block">
                        <h4 class="feature-title">Célia Vences</h4>
                        <h5 class="feature-subtitle">Owner &amp; Manager</h5>
                        <div class="delimiter"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="mbr-cards-col col-xs-12 col-lg-6">
               <div class="container">
                  <div class="card cart-block">
                     <div class="feature-img"><img src="assets/images/female-business-user-1.png" class="card-img-top"></div>
                     <div class="card-block">
                        <h4 class="feature-title">Soraia Barros</h4>
                        <h5 class="feature-subtitle">Assistant</h5>
                        <div class="delimiter"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="mbr-section mbr-section__container article" id="index-header3-3" data-rv-view="25" style="background-color: rgb(255, 255, 255); padding-top: 60px; padding-bottom: 0px;">
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
                  <h3 class="mbr-section-title display-2">Contact Us</h3>
               </div>
            </div>
         </div>
      </section>

      <section class="mbr-section extForm3" id="index-extForm3-1" data-rv-view="27" style="background-color: rgb(255, 255, 255); padding-top: 50px; padding-bottom: 50px;">
         <div class="mbr-table">
            <div class="mbr-table-cell">
               <div class="container">
                  <div class="row">
                     <div class="mbr-table-md-up">
                        <div class="mbr-table mbr-valign-top col-md-6">
                           <div class="mbr-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCy9r70T3NYf3PhvVflTo0_zdif2_IoIYs&amp;q=place_id:EidSLiBNYXIgZSBHdWVycmEgNzUsIDgwMDUgRmFybywgUG9ydHVnYWw" allowfullscreen=""></iframe></div>
                        </div>
                        <div class="mbr-table-cell col-md-6 text-md-left">
                           <div class="row">
                              <div class="col-md-12 parentInverse">
                                 <div class="col-md-12 col-lg-12 inverse-content" style="padding-left: 15px;">
                                    <div class="intro-box right">
                                       <span class="iconBackground"><span class="icon"><span class="etl-icon icon-envelope mbr-iconfont-form1" style="color: rgb(102, 102, 102);"></span></span></span>
                                       <div class="contentInverse" style="padding-left: 15px;">
                                          <h4 class="h-black text-right">Don't hesitate to contact us</h4>
                                          <p class="mbr-section-text-gray lead h-black">Address:<br>Rua de Mar e Guerra, 75a&nbsp;<br>Braciais<br>8005-424 Faro<br><br>Phone; +351 289 816 390<br>Mobile: +351 967 486 011<br><br>Email: info@algarveassistants.com</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- & -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="mbr-section form1" id="index-form1-0" data-rv-view="37" style="background-color: rgb(247, 247, 247); padding-top: 40px; padding-bottom: 40px;">
         <div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
               <div class="row">
                  <div class="col-xs-12 text-xs-center">
                     <h3 class="mbr-section-title display-2">Contact Form</h3>
                  </div>
               </div>
            </div>
         </div>
         <div class="mbr-section mbr-section-nopadding">
            <div class="container">
               <div class="row">
                  <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">
                     <div data-form-alert="true">
                        <div hidden="" data-form-alert-success="true" class="alert alert-form alert-success text-xs-center">Thanks for filling out the form!</div>
                     </div>
                     <form action="https://mobirise.com/" method="post" data-form-title="Contact Form">
                        <input type="hidden" value="pX1ugr2HxMkbkxLVHq/MtDfiZvYJRhF9QXT2sCjND9V2hSnvcPeEcmikE3SGL7yPX+HflCiqWn8vxBuNtaicx86c9Ngyp29a1F6Zmv+8IgclsyZLLBsno6bhPVRJaI9C" data-form-email="true">
                        <div class="row row-sm-offset">
                           <div class="col-xs-12 col-md-4">
                              <div class="form-group">
                                 <label class="form-control-label" for="index-form1-0-name">Name<span class="form-asterisk">*</span></label>
                                 <input type="text" class="form-control" name="name" required="" data-form-field="Name" id="index-form1-0-name">
                              </div>
                           </div>
                           <div class="col-xs-12 col-md-4">
                              <div class="form-group">
                                 <label class="form-control-label" for="index-form1-0-email">Email<span class="form-asterisk">*</span></label>
                                 <input type="email" class="form-control" name="email" required="" data-form-field="Email" id="index-form1-0-email">
                              </div>
                           </div>
                           <div class="col-xs-12 col-md-4">
                              <div class="form-group">
                                 <label class="form-control-label" for="index-form1-0-phone">Phone</label>
                                 <input type="tel" class="form-control" name="phone" data-form-field="Phone" id="index-form1-0-phone">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="form-control-label" for="index-form1-0-message">Message</label>
                           <textarea class="form-control" name="message" rows="7" data-form-field="Message" id="index-form1-0-message"></textarea>
                        </div>
                        <div><button type="submit" class="btn btn-primary">CONTACT US</button></div>
                        <span class="gdpr-block">
                        <label>
                        <span class="textGDPR" style="color: #a7a7a7"><input type="checkbox" name="gdpr" id="gdpr-input" required="">By continiung you agree to our <a style="color: #ef7f1a; text-decoration: none;" href="terms_EN.html">Terms of Service</a> and <a style="color: #ef7f1a; text-decoration: none;" href="privacy_EN.html">Privacy Policy</a>.</span>
                        </label>
                        </span>
                     </form>
                  </div>
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

      <!-- <script src="assets/swiperslider/swiper-bundle.min.css"></script> -->

      <script src="assets/select2/select2.min.js"></script>


      <script>
         $(document).ready(function() {
             $('.js-example-basic-single').select2();
         });
      </script>

      
   </body>
</html>