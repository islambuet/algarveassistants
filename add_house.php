<?php
include_once 'header.php';
$user=User::get_user();
if(!$user){
    header('location: login.php');
    die();
}
if($user['user_group']!='Agent'){
    header('location: no_access.php');
    die();
}
$error_message='';
$error_type='';
$conn=Db::get_connection();
$state='';
$city='';
$types='';
$price='';
$agentLicence='';
$attachment='';
$description='';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $state=$_POST['state'];
    $city=$_POST['city'];
    $types=$_POST['types'];
    $price=$_POST['price'];
    $agentLicence=$_POST['agentLicence'];
    $description=$_POST['description'];

    $attachments=array();
    for( $i=0 ; $i < count($_FILES['attachment']['name']); $i++ ) {

        //Get the temp file path
        $tmpFilePath = $_FILES['attachment']['tmp_name'][$i];

        //Make sure we have a file path
        if ($tmpFilePath != ""){
            //Setup our new file path
            $dir="property_files/".$user['id'];
            if ( ! is_dir($dir)) {
                mkdir($dir);
            }
            $newFilePath = $dir.'/'.time().'_' . $_FILES['attachment']['name'][$i];
            //$newFilePath = "./property_files/".time().'_' . $_FILES['attachment']['name'][$i];
            //Upload the file into the temp dir

            if(@move_uploaded_file($tmpFilePath, $newFilePath)) {
                $attachments[]=$newFilePath;
            }
            else{
                $error_type = 'error';
                $error_message = 'File Upload Error( '.$_FILES['attachment']['name'][$i].')';
                break;
            }
        }
    }
    if(!$error_type){
        $conn=Db::get_connection();
        try {
            $sql = 'INSERT INTO '.Db::$table_houses.'(state, city,types,price,agentLicence,description,attachments,date_created,user_created)VALUES(?,?,?,?,?,?,?,?,?)';
            $conn->prepare($sql)->execute([$state, $city,','.implode(",",$types).',',$price,$agentLicence,$description,json_encode($attachments),time(), $user['id']]);
            $error_type='success';
            $error_message='House added Successfully';

            $state='';
            $city='';
//            $types=$_POST['types'];
            $price='';
            $agentLicence='';
            $description='';
        } catch(Exception $e) {
            $error_type = 'error';
            $error_message = 'house Creation Failed';
            print_r($e);
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
    <title>Algarve Assistants | Add House</title>

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

<div class="dashboard_header">
    <div class="container">
        <div class="dash_nav">
            <a href="../" class="dashBrand"><img src="assets/images/logo-126x128-85.png" alt="Logo"> Algarve Assistants</a>
        </div>
    </div>
</div>



<section class="properSale_area" id="house_add">
    <div class="container">
        <div class="propertyTitle simulatorTitle">
            <h3  class="mbr-section-title display-2">Wellcome</h3>
        </div>
        <?php
        if($error_type=='success'){?>
            <div data-form-alert="true">
                <div data-form-alert-success="false" class="alert alert-form alert-success text-xs-center"><?php echo $error_message; ?></div>
            </div>
        <?php
        }
        elseif( $error_type=='error'){?>
            <div data-form-alert="true">
                <div data-form-alert-success="false" class="alert alert-form alert-danger text-xs-center"><?php echo $error_message; ?></div>
            </div>
        <?php
        }
        ?>

        <div class="prperySaleForm">
            <form action="" id="prperysale" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="SelectProperty">Select Property<span class="form-asterisk">*</span></label>
                            <div class="select2 animated fadeInUp">
                                <select class="js-example-basic-single form-control" name="state" id="SelectProperty" required="">
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
                            <label class="form-control-label" for="addCityname">Select City<span class="form-asterisk">*</span></label>
                            <input type="text" class="form-control" name="city" id="addCityname"  required="" value="<?php echo $city; ?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="PropertyType">Type of Property<span class="form-asterisk">*</span></label>
                            <div class="select2 animated fadeInUp">
                                <select class="js-example-basic-single form-control" name="types[]" multiple="multiple" id="PropertyType" required="">
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
                        <div class="form-group">
                            <label class="form-control-label" for="askkingPrize">Price<span class="form-asterisk">*</span></label>
                            <input type="text" class="form-control" name="price" id="askkingPrize" required="" value=" <?php echo $price; ?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="agentLicence">Agent Licence<span class="form-asterisk">*</span></label>
                            <input type="text" class="form-control" name="agentLicence" id="agentLicence"  required="" value="<?php echo $agentLicence; ?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="attachment">Photos (Max. 4 photos)<span class="form-asterisk">*</span></label>
                            <input type="file" class="form-control" name="attachment[]" id="attachment"  multiple="multiple" required="" >
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-12">
                        <div class="form-group">
                            <label class="form-control-label" for="houseDesc">Property Description<span class="form-asterisk">*</span></label>
                            <textarea class="form-control" name="description" id="houseDesc" rows="5"  value="<?php echo $description; ?>"></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary submitBtn">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- <script src="assets/web/assets/jquery/jquery.min.js"></script > -->
<script src="assets/tether/tether.min.js"></script>
<!-- <script src="assets/bootstrap/js/bootstrap.min.js"></script> -->
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

        $(document).on("submit", "#prperysale", function(event){
            var $fileUpload = $("#attachment");
            var total=parseInt($fileUpload.get(0).files.length);
            if (total>4){
                alert("You can only upload a maximum of 4 Property Photos");
                return false;
            }
            for(i=0;i<total;i++){
                let type=$fileUpload.get(0).files[i].type;
                if(!type){
                    alert('Invalid File type ('+$fileUpload.get(0).files[i].name+')');
                    return false;
                }
                else if(type.substr(0,5)!="image"){
                    alert('File type is not image ('+$fileUpload.get(0).files[i].name+')');
                    return false;
                }
            }


        });
    });


//    $(function(){
//        $("button.submitBtn").click(function(){
//            var $fileUpload = $("input[type='file']");
//            if (parseInt($fileUpload.get(0).files.length)>4){
//                alert("You can only upload a maximum of 4 Property Photos");
//            }
//        });
//    });

</script>


</body>
</html>