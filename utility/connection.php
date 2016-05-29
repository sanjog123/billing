<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/5/2016
 * Time: 3:43 PM
 */
$con= @mysql_connect("localhost", "root", "root");
if(!$con){
    // echo "NOK";
}
else {
  //  echo "OK";
}
$selected=@mysql_select_db("ut",$con);
if(!$selected){
   // echo"could not select db";
}

else {
//    echo"database selected";
}
