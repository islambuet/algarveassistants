<?php
class Db{
    public static $table_agents='agents';
    public static $table_users='users';
    public static $db = null;
    public static function get_connection($ajax=false){
        $host= "localhost";
        $dbname="algarveassistants";
        $username = "root";
        $password = "";
//        $host= "localhost";
//        $dbname="vnmkrdmy_algarveassistants";
//        $username = "vnmkrdmy_james";
//        $password = "rbV3F[h.VucV";
        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$db=$conn;
            return self::$db;
        } catch(PDOException $e) {

            if($ajax){
                return json_encode(array('error'=>'DB_CONNECTION_FAIL','message'=>"Database Conneciotn failed"));
            }
            else{
                //header('location: index.html');
                header('location: error_db.php');
                //echo "<script type='text/javascript'>window.location.href = 'index.html';</script>";
                exit;
            }

        }

    }
}