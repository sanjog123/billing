<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Online Billing System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
    <div id="inner">
        <div id="header">
            <h1><img src="images/h1.jpg" width="744" height="63" alt="Online Movie Store" /></h1>

            <!-- end nav -->
            <a href="u1.php"><img src="images/abc.jpg" width="744" height="145" alt="Harry Potter cd" /></a>
            <marquee bgcolor="#227293" ><h3><font color="white" size="2">Pay Your Utility Bill Here</font></h3></marquee>
        </div>
        <!-- end header -->
        <dl id="browse">
            <dt>Pages</dt>
            <dd><a href="u1.php">Home</a></dd>
            <dd><a href="account.php">Account</a></dd>
            <dd><a href="pay.php">Pay Bill</a></dd>
            <dd><a href="about.php">About us</a></dd>
            <dd><a href="contact.php">Contact us</a></dd>
            <dt>Login</dt>
            <dd class="searchform">
                <br>
                <form action="utility.php" method="post">
                    <b> Username <br><input type="text" name="txt" ><br><br>
                        Password <input type="password" name="ps"><br><br>
                        <input type="submit" value="Login" ></b><br><br>


                </form>
                <a href="account.php">Create Account</a><br>
                <a href="">Forgot Password</a><br><br><br>
            </dd>


        </dl><div id="body1" class="a">
        <?php


        $con= @mysql_connect("localhost", "root", "root");
        if(!$con){
            // echo "NOK";
        } else {
            //echo "OK";
        }



        $username=$_POST['acc'];
        $password=$_POST['pin'];
        $l=$_POST[b1];
        $u=$_POST[b2];
        $y=$_POST[t];
        $m=$_POST[i];
        $n=$_POST[d];
        $o=$_POST[c];
        $z=$_POST[e];
        $ab=$_POST[h];
        $total=$z+$m+$n+$o+$y;



        $selected=@mysql_select_db("bank",$con);
        if(!$selected){
//echo"could not select db";}
        }

        else {
            //echo"database selected";
        }





        $abc = @mysql_query("select * from xyz");
        while ($r = mysql_fetch_array($abc)) {
            $a = $r['Sn'];
            $b = $r['Ac_no'];
            $c = $r['Name'];
            $d = $r['Pin_no'];
            $e = $r['Amt'];




            if(strcmp($username, $b) == 0 && strcmp($password, $d) == 0){

                $x=1;
                $w=$e;

            }


        }








        if($x!=1){
            ?>
            <script language="javascript">
                answer=confirm("Account number and Pin number doesnt match with bank")
                if(answer!=0)
                {
                    location="pay.php"
                }
                else
                    location="u1.php"
            </script>


            <?php
            exit;
        }
        //echo $w;
        //echo $total;
        if($w>$total)
        {
            $a=$w-$total;
            // echo $a;
            $abc = @mysql_query("UPDATE xyz SET Amt=$a WHERE Ac_no=$username");

            $abc = @mysql_query("select * from xyz");
            while ($r = mysql_fetch_array($abc)) {
                $a1 = $r['Sn'];
                $b1 = $r['Ac_no'];
                $c1 = $r['Name'];
                $d1 = $r['Pin_no'];
                $e1 = $r['Amt'];
                if (strcmp($b1, 11) == 0) {
                    $i=+5;
                    $a2 = $e1 + $z;
                    $abc = @mysql_query("UPDATE xyz SET Amt=$a2 WHERE Ac_no=11");
                }

            }

            $abc = @mysql_query("select * from xyz");
            while ($r = mysql_fetch_array($abc)) {
                $a1 = $r['Sn'];
                $b1 = $r['Ac_no'];
                $c1 = $r['Name'];
                $d1 = $r['Pin_no'];
                $e1 = $r['Amt'];
                if (strcmp($b1, 16) == 0) {

                    $a7 = $e1 + $o;
                    $abc = @mysql_query("UPDATE xyz SET Amt=$a7 WHERE Ac_no=16");
                }

            }

            $abc = @mysql_query("select * from xyz");
            while ($r = mysql_fetch_array($abc)) {
                $a1 = $r['Sn'];
                $b1 = $r['Ac_no'];
                $c1 = $r['Name'];
                $d1 = $r['Pin_no'];
                $e1 = $r['Amt'];
                if (strcmp($b1, 12) == 0) {

                    $a3 = $e1 + $n;
                    $abc = @mysql_query("UPDATE xyz SET Amt=$a3 WHERE Ac_no=12");
                }

            }

            $abc = @mysql_query("select * from xyz");
            while ($r = mysql_fetch_array($abc)) {
                $a1 = $r['Sn'];
                $b1 = $r['Ac_no'];
                $c1 = $r['Name'];
                $d1 = $r['Pin_no'];
                $e1 = $r['Amt'];
                if (strcmp($b1, 14) == 0) {

                    $a4 = $e1 + $y;
                    $abc = @mysql_query("UPDATE xyz SET Amt=$a4 WHERE Ac_no=14");
                }

            }

            $abc = @mysql_query("select * from xyz");
            while ($r = mysql_fetch_array($abc)) {
                $a1 = $r['Sn'];
                $b1 = $r['Ac_no'];
                $c1 = $r['Name'];
                $d1 = $r['Pin_no'];
                $e1 = $r['Amt'];
                if (strcmp($b1, 15) == 0) {

                    $a5 = $e1 + $m;
                    $abc = @mysql_query("UPDATE xyz SET Amt=$a5 WHERE Ac_no=15");
                }

            }



        }
        else{
            ?>
            <script language="javascript">
                answer=confirm("Sorry!!! you dont have sufficient balance")
                if(answer!=0)
                {
                    location="pay.php"
                }
                else
                    location="u1.php"
            </script>


            <?php
            exit;}
        @mysql_close($con);



        ?>
        <?php
        $coin=0;
        if($l==null){
            if($z!=null)
                $r=2;
        }
        else if($z==null){
            if($l!=null)
            $r=2;
        }

        else{
            $coin=$coin+2;
        }

        if($u==null){
            if($y!=null)

                $k=2;
        }


        else if($y==null) {
            if($u!=null)

            $k=2;
        }

        else{
            $coin=$coin+2;
        }


        if($ab==null) {

            if ($m != null) {
                $w = 2;
            }

            if($n != null){$w = 2;}
            if($o != null){$w = 2;}


        }



        if($ab!=null) {

            if (($m == null) && ($n == null) && ($o == null)) {
                $w = 2;
            }

            if ($m != null) {
                $coin=$coin+2;
            }

            if($n != null){ $coin=$coin+2;}
            if($o != null){ $coin=$coin+2;}



        }
        if (($l == null) && ($u == null) && ($ab == null)) {
            $de = 2;
        }
            if($r==2){
                ?>
                <script language="javascript">
                    answer=confirm("Sorry!!! To pay electricity cost you have to enter electricity bill no and cost both")
                    if(answer!=0)
                    {
                        location="pay.php"
                    }
                    else
                        location="u1.php"
                </script>


            <?php
                exit;

            }
            if($k==2){
            ?>
            <script language="javascript">
                answer=confirm("Sorry!!! To pay telephone cost you have to enter telephone bill no and cost both")
                if(answer!=0)
                {
                    location="pay.php"
                }
                else
                    location="u1.php"
            </script>


        <?php
                exit;
        }
            if($w==2){
        ?>
            <script language="javascript">
                answer=confirm("Sorry!!! To pay internet, drinking water and cable cost you have to enter home no as well as you have to select whatever you want")
                if(answer!=0)
                {
                    location="pay.php"
                }
                else
                    location="u1.php"
            </script>


        <?php
                exit;

        }
        if($de==2){
            ?>
            <script language="javascript">
                answer=confirm("To pay the bill you have to fill up the form")
                if(answer!=0)
                {
                    location="pay.php"
                }
                else
                    location="u1.php"
            </script>


        <?php
            exit;
        }


        ?>




        <?php
        /**
         * Created by PhpStorm.
         * User: user
         * Date: 12/26/2015
         * Time: 7:48 PM
         */
        $con= @mysql_connect("localhost", "root", "root");
        if(!$con){
            // echo "NOK";
        } else {
            //echo "OK";
        }



        $selected=@mysql_select_db("ut",$con);
        if(!$selected){
            //echo"could not select db";
        }

        else
            // echo"database;

            date_default_timezone_get("Nepal/ktm");
        $date=date("Y-m-d ");


        $sql="insert into bill (Date, Account_no, Pin_no,Electricity_Bill_no,Electricity_cost, Telephone_Bill_no, Telephone_cost, Home_no, Internet,
Drinking_water, Cable, Total) VALUES
('$date','$_POST[acc]','$_POST[pin]','$_POST[b1]','$_POST[e]','$_POST[b2]','$_POST[t]','$_POST[h]','$_POST[i]','$_POST[d]','$_POST[c]','$total')";
        if(!mysql_query($sql,$con)){
            die("error".mysql_error());
        }
        mysql_close($con);
        //echo "1 record added";
        ?>


<h3 align="right">
        <?php
        echo " you got".$coin."coin";
        ?></h3>
        <h1 align="center"><br><br><br>Payment Sucessful <br><br>
            <?php echo $date;?><br>
            Home no=<?php echo $_POST[h]?><br>
            Electricity Bill no=<?php echo $_POST[b1]?>&nbsp;&nbsp;
            Electricity cost=<?php echo $_POST[e]?><br>
            Telephone Bill no=<?php echo $_POST[b2]?>&nbsp;&nbsp;
            Telephone cost=<?php echo $_POST[t]?><br>
            Internet=<?php echo $_POST[i]?>&nbsp;&nbsp;
            Drinking Water=<?php echo $_POST[d]?>&nbsp;&nbsp;
            Cable=<?php echo $_POST[c]?><br>
            Total=<?php echo $total?></h1></div>




        <div class="clear"></div>
        <div id="footer"> Copyrights &copy; all rights reserved 2016 &nbsp;

            <!-- end footnav -->
        </div>
        <!-- end footer -->
    </div>
    <!-- end inner -->
</div>
<!-- end wrapper -->
</body>
</html><?php
include 'out.php';
$abc = @mysql_query("select * from form");
while ($r = mysql_fetch_array($abc)) {
    $b = $r['Ac_no'];
    $a = $r['coin'];

//$c = $r['Name'];
//$d = $r['Pin_no'];
//  $e = $r['Amt'];

    if (strcmp($b, $username) == 0) {
       // echo $coin+$a;
        $abc = @mysql_query("UPDATE form SET coin=$coin+$a WHERE Ac_no=$b");
    }
}
