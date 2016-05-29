<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/2/2016
 * Time: 7:09 AM
 */
$con= @mysql_connect("localhost", "root", "root");
if(!$con){
    // echo "NOK";
} else {
    //echo "OK";
}





$selected=@mysql_select_db("ut",$con);
if(!$selected){
//echo"could not select db";}
}

else {
    //echo"database selected";
}





