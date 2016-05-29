<font color="red">
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/3/2016
 * Time: 8:13 AM
 */

include 'out.php';
$abc = @mysql_query("select Fullname,coin from form ORDER BY coin DESC ");
for($v=1;$v<=3;$v++){
while ($r = mysql_fetch_array($abc)) {

    $b = $r['Fullname'];
    $a = $r['coin'];?><b><br><?php
    echo $b."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;".$a;?></b><br><br><?php
   break;
    }


}?>
</font>