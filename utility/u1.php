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
            <h1><img src="images/h1.jpg" width="744" height="63" /></h1>

            <!-- end nav -->
            <a href="u1.php"><img src="images/abc.jpg" width="744" height="145"  /></a>
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
                <form action="utility.php" method="post"><br><br><br><br><br>
                    <b> Username <br><input type="text" name="txt" ><br><br>
                        Password <input type="password" name="ps"><br><br>
                        <input type="submit" value="Login" ></b><br><br>


                </form>
                <a href="account.php">Create Account</a><br>
                <a href="forget.php">Forgot Password</a><br><br><br>
            </dd>

        </dl>
        <div id="body">
            <div class="inner">
                <div class="leftbox">
                    <h3>Electricity</h3>
                    <img src="images/e.jpg" width="93" height="95" alt="photo 1" class="left" />
                    <p><b>You can pay the electricity bill online but you must know your electricity bill no. to pay the bill</b></p>
                    <p><b>Must: You must have bank account</b></p>

                    <div class="clear"></div>
                </div>
                <!-- end .leftbox -->
                <div class="rightbox">
                    <h3>Internet </h3>
                    <img src="images/i.jpg" width="107" height="91" alt="photo 4" class="left" />
                    <p><b>You can pay the internet bill online but you must know your home no. to pay the bill</b></p>
                    <p><b>Must: You must have bank account</b></p>

                    <div class="clear"></div>
                </div>
                <!-- end .rightbox -->
                <div class="clear br"></div>
                <div class="leftbox">
                    <h3>Telephone </h3>
                    <img src="images/t.jpg" width="93" height="101" alt="photo 2" class="left" />
                    <p><b>You can pay the Telephone bill online but you must know your Telephone bill no. to pay the bill</b></p>
                    <p><b>Must: You must have bank account</b></p>
                    <div class="clear"></div>
                </div>
                <!-- end .leftbox -->
                <div class="rightbox">
                    <h3>Drinking Water</h3>
                    <img src="images/d.jpg" width="90" height="103" alt="photo 5" class="left" />
                    <p><b>You can pay the Drinking water bill online but you must know your home no. to pay the bill</b></p>
                    <p><b>Must: You must have bank account</b></p>
                    <div class="clear"></div>
                </div>
                <!-- end .rightbox -->
                <div class="clear br"></div>
                <div class="leftbox">
                    <h3>Cable </h3>
                    <img src="images/cable.jpg" width="106" height="100" alt="photo 3" class="left" />
                    <p><b>You can pay the Cable bill online but you must know your home no. to pay the bill</b></p>
                    <p><b>Must: You must have bank account</b></p>
                    <div class="clear"></div>
                </div>
                <!-- end .leftbox -->
                <div class="rightbox">
                    <h3 ><font color="red"> Top 3 Users</font></h3>
                    <img src="images/coins.png" width="91" height="99"  class="left" />
                    <?php //include 'out.php';
                          include 'coin.php';
                   // $abc = @mysql_query("select * from form");
                    ?>

                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <div class="clear br"></div>
                <div class="leftbox">
                    <p><form action="saja.php" method="post"><b> <?php

                        $abc = @mysql_query("select * from sawal");
                        while ($r = mysql_fetch_array($abc)) {
                            $g = $r['sn'];
                            $c = $r['option3'];
                            $d = $r['option4'];
                            $q = $r['question'];
                            $a = $r['option1'];
                            $b = $r['option2'];
                            $e = $r['option5'];
                        }
                        echo $q."<br>" ;
                        echo"<input type='radio' value='1' name='a'> &nbsp; $a<br>";
                        echo"<input type='radio'value='1'name='b'> &nbsp; $b<br>";
                        echo"<input type='radio'value='1'name='c'> &nbsp; $c<br>";
                        echo"<input type='radio'value='1'name='d'> &nbsp; $d<br>";
                        echo"<input type='radio'value='1'name='e'> &nbsp; $e<br>";
                        echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type='submit' value='Submit'> &nbsp; <br>";
                        ?></form>


                    </b>
                    <div class="clear"></div>
                </div>
                <!-- end .leftbox -->
                <div class="rightbox">
                    <p><h4><?php
                        include 'connection.php';
                        $abc = @mysql_query("select * from sawal");
                        while ($r = mysql_fetch_array($abc)) {
                            $h = $r['sn'];
                            $a=$r['option1'];
                            $a1 = $r['w1'];
                            $b=$r['option2'];
                            $b1 = $r['w2'];
                            $c=$r['option3'];
                            $c1 = $r['w3'];
                            $d=$r['option4'];
                            $d1 = $r['w4'];
                            $q = $r['question'];
                            $e=$r['option5'];
                            $e1 = $r['w5'];

                        }
                        $total=$a1+$b1+$c1+$d1+$e1;
                        $p1=($a1/$total)*100;
                        $p2=($b1/$total)*100;
                        $p3=($c1/$total)*100;
                        $p4=($d1/$total)*100;
                        $p5=($e1/$total)*100;
                        echo $q."<br><br>";
                        echo "*".$a."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; echo $p1."%"."<br>";
                        echo "*".$b."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; echo $p2."%"."<br>";
                        echo "*".$c."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; echo $p3."%"."<br>";
                        echo "*".$d."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; echo $p4."%" ."<br>";
                        echo "*".$e."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; echo $p5."%"."<br>";

                        ?>

                    </h4></p>

                    <div class="clear"></div>
                </div>

                <!-- end .rightbox -->
                <!-- end .rightbox -->
                <div class="clear"></div>
            </div>
            <!-- end .inner -->
        </div><!-- end body -->
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
</html>
