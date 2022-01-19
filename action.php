<?php
include_once 'header.php';
$conn=Db::get_connection();

if(isset($_POST["agent_login_btn"])){
	$agency_name = $_POST["agency_name"];
	$ami_licence = $_POST["ami_licence"];
	$agent_name = $_POST["agent_name"];
	$email_agent = $_POST["email_agent"];
	$contact_us_txt = $_POST["contact_us_txt"];
	$agent_password = $_POST["agent_password"];
	$confirmpass_proper = $_POST["confirmpass_proper"];
    if($agent_password !=$confirmpass_proper){
        $_SESSION['error_type'] = 'fail';
        $_SESSION['error_message'] = 'Password Mismatched';
    }
    else{
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
            $_SESSION['error_type'] = 'success';
            $_SESSION['error_message'] = 'Agent Created Successfully.Please wait for approve';
        } catch(Exception $e) {
            $_SESSION['error_type'] = 'fail';
            $_SESSION['error_message'] = 'Agent Creation Failed';
        }


    }
    header('location: agent.php');
    exit();
}
if(isset($_POST["login_form_btns"])){
	$loginEmail = $_POST["loginEmail"];
	$logPass = $_POST["logPass"];




}
if(isset($_POST["add_houseproperty_btn"])){
	$state_country = $_POST["state_country"];
	$addCityname = $_POST["addCityname"];
	$state_types = $_POST["state_types"];
	$askkingPrize = $_POST["askkingPrize"];
	$agentLicence = $_POST["agentLicence"];
	$attachment_files_prts = $_FILES["attachment_files_prt"];
	$houseDescs = $_POST["houseDesc"];
	
}
?>