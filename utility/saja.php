<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/6/2016
 * Time: 5:54 PM
 */
$a2=$_POST[a];
$b2=$_POST[b];
$c2=$_POST[c];
$d2=$_POST[d];
$e2=$_POST[e];
if (($a2 == null) && ($b2 == null) && ($c2 == null) && ($d2 == null)&& ($e2 == null)) {
    ?><script language="javascript">
        answer=confirm("select any one !!!")
        if(answer!=0)
        {
            location="u1.php"
        }
        else
            location="u1.php"
    </script> <?php

}
if($a2!=null){
    if (($b2 == null) && ($c2 == null) && ($d2 == null)&& ($e2 == null)) {
        $x=1;
    }
}

if($b2!=null){
    if (($a2 == null) && ($c2 == null) && ($d2 == null)&& ($e2 == null)) {
        $x=1;
    }
}

if($c2!=null){
    if (($b2 == null) && ($a2 == null) && ($d2 == null)&& ($e2 == null)) {
        $x=1;
    }
}

if($d2!=null){
    if (($b2 == null) && ($c2 == null) && ($a2 == null)&& ($e2 == null)) {
        $x=1;
    }
}

if($e2!=null){
    if (($b2 == null) && ($c2 == null) && ($d2 == null)&& ($a2 == null)) {
        $x=1;
    }
}

if($x!=1){
    ?><script language="javascript">
        answer=confirm("select any one !!!")
        if(answer!=0)
        {
            location="u1.php"
        }
        else
            location="u1.php"

    </script> <?php
    exit;


}



include 'connection.php';
$abc = @mysql_query("select * from sawal");
while ($r = mysql_fetch_array($abc)) {
    $h = $r['sn'];
    $e = $r['w1'];
    $f = $r['w2'];
    $g = $r['w3'];
    $i = $r['w4'];
    $xz=$r['w5'];
    //$e = $r['option1'];
    //$f = $r['option2'];
}
//echo $a;
//echo $b;
//echo $c;
//echo $d;
//echo $e;

$abc = @mysql_query("UPDATE sawal SET w1=$a2+$e WHERE sn=$h ");
$abc = @mysql_query("UPDATE sawal SET w2=$b2+$f WHERE sn=$h ");
$abc = @mysql_query("UPDATE sawal SET w3=$c2+$g WHERE sn=$h ");
$abc = @mysql_query("UPDATE sawal SET w4=$d2+$i WHERE sn=$h ");
$abc = @mysql_query("UPDATE sawal SET w5=$e2+$xz WHERE sn=$h ");
include 'u1.php';