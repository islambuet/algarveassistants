<?php
include_once 'database.php';
class User{
    public static $logged_user = null;
    public static function get_user(){
        if(self::$logged_user){
            return self::$logged_user;
        }
        else if(isset($_SESSION['logged_user_id'])&& ($_SESSION['logged_user_id']>0)){
            $conn=Db::get_connection();
            $sql = 'Select  * from '.Db::$table_users.' where id='.$_SESSION['logged_user_id'];
            $row = $conn->query($sql)->fetch();
            if($row){
                self::$logged_user=$row;
            }
        }
        return self::$logged_user;
        //

    }
}
