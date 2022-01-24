<?php
    include_once 'header.php';
    $user=User::get_user();
    if(!$user){
        header('location: login.php');
        die();
    }
    if($user['user_group']!='Admin'){
        header('location: no_access.php');
        die();
    }
    $error_message='';
    $error_type='';
    $conn=Db::get_connection();
    if(isset($_GET['action']) && isset($_GET['id'])){
        try{
            $sql = 'Select  * from '.Db::$table_agents.' where status_approve!="Deleted" and id ="'.$_GET['id'].'"';
            $agent = $conn->query($sql)->fetch();
            if(!$agent){
                $error_type='error';
                $error_message='Invalid Agent';
            }else{
                if($agent['status_approve']!='Pending'){
                    $error_type='error';
                    $error_message='Already '.$agent['status_approve'];
                }
                else if($_GET['action']==1){
                    $sql = 'Select  * from '.Db::$table_users.' where status!="Deleted" and email ="'.$agent['email_agent'].'"';
                    $row = $conn->query($sql)->fetch();
                    if($row){
                        $error_type='error';
                        $error_message='Agent with same email Exists';
                    }else{
                        try {
                            $conn->beginTransaction();
                            $sql = 'INSERT INTO '.Db::$table_users.'(username, password,user_group,email,date_created,user_created)VALUES(?,?,?,?,?,?)';

                            //$sql = 'UPDATE '.Db::$table_agents.' SET status_approve=?, date_updated=?, user_updated=? WHERE id=?';
                            $time=time();
                            $conn->prepare($sql)->execute([$agent['email_agent'],$agent['password'], 'Agent',$agent['email_agent'],$time, $user['id']]);
                            $sql = 'UPDATE '.Db::$table_agents.' SET status_approve=?,user_id=?, date_updated=?, user_updated=? WHERE id=?';
                            $conn->prepare($sql)->execute(['Approved',$conn->lastInsertId(), $time, $user['id'], $agent['id']]);
                            $conn->commit();
                        }
                        catch (PDOException $e) {
                            // rollback the transaction
                            $conn->rollBack();
                            $error_type='error';
                            $error_message='Database Problem';

                            // show the error message

                        }

                        //$sql = 'UPDATE '.Db::$table_agents.' SET status_approve=?, date_updated=?, user_updated=? WHERE id=?';
                        //$conn->prepare($sql)->execute(['Rejected', time(), $user['id'], $agent['id']]);

                        $error_type='success';
                        $error_message='Approved ('.$agent['email_agent'].') Successfully';
                    }

                }elseif($_GET['action']==2){
                    $sql = 'UPDATE '.Db::$table_agents.' SET status_approve=?, date_updated=?, user_updated=? WHERE id=?';
                    $conn->prepare($sql)->execute(['Rejected', time(), $user['id'], $agent['id']]);
                    $error_type='success';
                    $error_message='Rejected('.$agent['email_agent'].') Successfully';

                }
                else{
                    $error_type='error';
                    $error_message='Invalid Url';
                }
            }
        }catch(Exception $e) {
            print_r($e);
        }

    }

    $agents=array();
    try{
            $sql = 'Select  * from '.Db::$table_agents.' where status_approve!="Deleted" order by status_approve DESC,  id ASC';
            $agents = $conn->query($sql)->fetchAll();
    }catch(Exception $e) {
        print_r($e);

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
      <title>Algarve Assistants | Agents List</title>

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

<!--       <div class="dashboard_header">
         <div class="container">
            <div class="dash_nav">
               <a href="../" class="dashBrand"><img src="assets/images/logo-126x128-85.png" alt="Logo"> Algarve Assistants</a>
            </div>
         </div>
      </div> -->



      
    <?php 
        include "menu.php";
    ?>
      

      <section class="properSale_area" id="house_add">
         <div class="container">
            <div class="propertyTitle simulatorTitle">
               <h3  class="mbr-section-title display-2">Agents List</h3>
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
             <div class="card-body" style='overflow-x:auto;min-height:250px;'>
                 <table class="table table-bordered">
                     <thead class="table-active">
                     <tr>
                         <th>Action</th>
                         <th>Agency name</th>
                         <th>AMI licence nº</th>
                         <th>Name</th>
                         <th>Email</th>
                     </tr>
                     </thead>
                     <tbody class="table-striped table-hover">
                     <?php
                     foreach($agents as $agent){
                         ?>
                         <tr>
                             <td>
                                 <?php
                                 if($agent['status_approve']!='Pending'){
                                     echo $agent['status_approve'];
                                 }
                                 else{
                                     ?>
                                     <a class='btn btn-success' href='admin_agent_list.php?action=1&id=<?php echo $agent['id']; ?>' onclick='return confirm("Are you sure to Approve?")' >Approve</a>
                                     <a class='btn btn-danger' href='admin_agent_list.php?action=2&id=<?php echo $agent['id']; ?>' onclick='return confirm("Are you sure to Reject?")'>Reject</a>
                                    <?php
                                 }
                                 ?>
                             </td>
                             <td><?php echo $agent['agency_name']?></td>
                             <td><?php echo $agent['ami_licence']?></td>
                             <td><?php echo $agent['agent_name']?></td>
                             <td><?php echo $agent['email_agent']?></td>
                         </tr>
                        <?php
                     }
                     ?>

                     </tbody>
                 </table>
             </div>

         </div>
      </section>
   </body>
</html>