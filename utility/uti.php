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
        }
        else {
            // echo "OK";
        }
        $selected=@mysql_select_db("ut",$con);
        if(!$selected){
            //echo"could not select db";
        }

        else{
            //echo"database selected";
        }

        $username=$_POST['txt'];
        $password=$_POST['ps'];

        if($username!=null ){
            $x=1;


        }
        if($password!=null ){
            $x=1;

        }

        if($x!=1){
            ?>
            <script language="javascript">
                answer=confirm("Please enter Username and Password Properly")
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

        $abc = @mysql_query("select * from form");
        while ($r = mysql_fetch_array($abc)) {
            $a = $r['Ac_no'];
            $b = $r['Fullname'];
            $c = $r['Address'];
            $d = $r['Username'];
            $e = $r['Password'];
            $f = $r['Email'];




            if(strcmp($username, $d) == 0 && strcmp($password, $e) == 0){

                $u=1;
            }


        }
        if($u!=1){?>
            <script language="javascript">
                answer=confirm("Username and Password doesnt match")
                if(answer!=0)
                {
                    location="pay.php"
                }
                else
                    location="u1.php"
            </script>


            <?php
            exit;


        }?>


        <br><br><br>
        <h1 align="center">Pay your Utility Bill Here !!!</h1><br><br><br>
        <form action="util.php" method="post"><b>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account no:&nbsp;<input type="text" name="acc" size="20" width="30">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pin no:
                &nbsp;<input type="text" name="pin" size="20" width="30"><br><br>

                &nbsp;&nbsp; Electricity Bill no:&nbsp;<input type="text" name="b1" size="20" width="30">&nbsp;&nbsp;&nbsp;&nbsp;
                Electricity Cost:&nbsp;<input type="text" name="e" size="20" width="30"><br><br>
                &nbsp;&nbsp;Telephone Bill no:&nbsp;<input type="text" name="b2" size="20" width="30">&nbsp;&nbsp;&nbsp;&nbsp;
                Telephone Cost:&nbsp;<input type="text" name="t" size="20" width="30"><br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;Home no:&nbsp;<input type="text" name="h" size="20" width="30">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="i" size="20" width="30" value="1100">Internet
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="d" size="20" width="30" value="200">Drinking Water&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="c" size="20" width="30" value="300">Cable&nbsp;&nbsp;<br><br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" value="Pay"></b>

        </form></div>


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
