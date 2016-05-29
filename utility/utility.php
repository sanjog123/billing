<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
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

        </dl>


        <br><div id="body1" class="a">
            <?php
            $con= @mysql_connect("localhost", "root", "root");
            if(!$con){
                // echo "NOK";
            }
            else {
                //echo "OK";
            }
            $selected=@mysql_select_db("ut",$con);
            if(!$selected){
                //echo"could not select db";
            }

            else {
                //echo"database selected";
            }

            $username = $_POST['txt'];
            $password = $_POST['ps'];
            if($username==null){
                $v=1;
            }
            if($password==null){
                $v=1;
            }
            if($v==1){
                ?>
                <script language="javascript">
                    answer=confirm("Fill the empty field")
                    if(answer!=0)
                    {
                        location="u1.php"
                    }
                    else
                        location="u1.php"
                </script>


                <?php

                exit;

            }


            $abc = @mysql_query("select * from form");
            while ($r = mysql_fetch_array($abc)) {
                $a = $r['Ac_no'];
                $b = $r['Fullname'];
                $c = $r['Address'];
                $d = $r['Username'];
                $e = $r['Password'];
                $f = $r['Contact'];


                if (strcmp($username, $d) == 0 && strcmp($password, $e) == 0) {

                    $x = 1;
                    $m = $a;
                    $x = 1;?> <h3 align="right">
                        <a href="u1.php">Log Out</a>
                        <a href="edit.php">Edit Profile</a>

                    </h3>
                    <?php



                   echo "<h2 align='left'>";
                    echo " &nbsp;&nbsp;Account Number:";
                    echo "&nbsp; "  .$a."<br>";
                    echo " &nbsp;&nbsp;Name:";
                    echo "&nbsp; "  .$b."<br>";
                    echo " &nbsp;&nbsp;Address:";
                    echo "&nbsp; "  .$c."<br>";
                    //echo "&nbsp;&nbsp; Username:";
                    //echo "&nbsp; "  .$d."<br>";
                    //echo " &nbsp;&nbsp;Password:";
                    //echo "&nbsp; "  .$e."<br>";
                    echo " &nbsp;&nbsp;Contact:";
                    echo "&nbsp; "  .$f."<br>";
                    echo "Thank you !!! for online payments of utility bill <br>
                            Your previous payments are ::<br><br>";
                    echo "</h2>";
                    ?>

                   <?php
                     $result = @mysql_query("select * from bill WHERE Account_no=$m");

                    echo "<table border='2' bgcolor='#008b8b'>

<tr bgcolor='red'><th>Date</th>
<th>Ac_no</th>
<th>E_Bill_no</th>
<th>E_cost</th>
<th>T_Bill_no</th>
<th>T_cost</th>
<th>H_no</th>
<th>Internet</th>
<th>D_Water</th>
<th>Cable</th>
<th>Total</th></tr>";
                    while ($r = @mysql_fetch_array($result)) {
                        echo "<tr>";
                        // $us=$r['Fullname'];
                        echo "<td>" . $r['Date'] . "</td>";
                        echo "<td>" . $r['Account_no'] . "</td>";
                        echo "<td>" . $r['Electricity_Bill_no'] . "</td>";
                        echo "<td>" . $r['Electricity_cost'] . "</td>";
                        echo "<td>" . $r['Telephone_Bill_no'] . "</td>";
                        echo "<td>" . $r['Telephone_cost'] . "</td>";
                        echo "<td>" . $r['Home_no'] . "</td>";
                        echo "<td>" . $r['Internet'] . "</td>";
                        echo "<td>" . $r['Drinking_water'] . "</td>";
                        echo "<td>" . $r['Cable'] . "</td>";
                        echo "<td>" . $r['Total'] . "</td>";
                        echo "</tr>";


                    }

                }
            }echo"</table>";


            if (strcmp($username, shawn) == 0 && strcmp($password, sanjog) == 0) {
                $x = 1;
                //$result = @mysql_query("select Username AND Password from record");
                $result = @mysql_query("select * from bill ");

                echo "<table border='2' bgcolor='aqua'>

<tr bgcolor='#a52a2a'><th>Date</th>
<th>Ac_no</th>
<th>E_Bill_no</th>
<th>E_cost</th>
<th>T_Bill_no</th>
<th>T_cost</th>
<th>H_no</th>
<th>Internet</th>
<th>D_Water</th>
<th>Cable</th>
<th>Total</th></tr>";
                while ($r = @mysql_fetch_array($result)) {
                    echo "<tr>";
                    // $us=$r['Fullname'];
                    echo "<td>" . $r['Date'] . "</td>";
                    echo "<td>" . $r['Account_no'] . "</td>";
                    echo "<td>" . $r['Electricity_Bill_no'] . "</td>";
                    echo "<td>" . $r['Electricity_cost'] . "</td>";
                    echo "<td>" . $r['Telephone_Bill_no'] . "</td>";
                    echo "<td>" . $r['Telephone_cost'] . "</td>";
                    echo "<td>" . $r['Home_no'] . "</td>";
                    echo "<td>" . $r['Internet'] . "</td>";
                    echo "<td>" . $r['Drinking_water'] . "</td>";
                    echo "<td>" . $r['Cable'] . "</td>";
                    echo "<td>" . $r['Total'] . "</td>";
                    echo "</tr>";
                    //echo $us;

                }
            }
echo"</table>";
            if ($x != 1){?>
             <script language="javascript">
                answer=confirm("Username and Password doesnt match")
                if(answer!=0)
                {
                    location="u1.php"
                }
                else
                    location="u1.php"
            </script>


<?php

                exit;

            }?></div>

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
