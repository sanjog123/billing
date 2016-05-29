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

        </dl>
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
           // echo "OK";
        }
        $selected=@mysql_select_db("ut",$con);
        if(!$selected){
            //echo"could not select db";
        }

        else
           // echo"database selected";
            if($_POST[acc]==null){

                $q=1;
            }
        if($_POST[add]==null){
            $q=1;
        }
        if($_POST[con]==null){
            $q=1;
        }
        if($_POST[txt]==null){
            $q=1;
        }

        if($_POST[email]==null){
            $q=1;
        }
        if($q==1)
        {
            ?>
            <script language="javascript">
                answer=confirm("Fill the empty field")
                if(answer!=0)
                {
                    location="account.php"
                }
                else
                    location="u1.php"
            </script>


            <?php
            exit;
        }
        if(strlen($_POST[pswd])<=6){
            ?>
            <script language="javascript">
                answer=confirm("Password must be more than sixx digit")
                if(answer!=0)
                {
                    location="account.php"
                }
                else
                    location="u1.php"
            </script>


            <?php
            exit;
        }

        if(strlen($_POST[email])>10) {
            ?>
            <script language="javascript">
                answer=confirm("Enter a valid contact no")
                if(answer!=0)
                {
                    location="account.php"
                }
                else
                    location="u1.php"
            </script>


            <?php
            exit;
        }

        if(strlen($_POST[email])<9) {
            ?>
            <script language="javascript">
                answer=confirm("Enter a valid contact no")
                if(answer!=0)
                {
                    location="account.php"
                }
                else
                    location="u1.php"
            </script>


            <?php
            exit;
        }
            $username=$_POST[txt];
            $password=$_POST[pswd];


        $abc = @mysql_query("select * from form");
        while ($r = mysql_fetch_array($abc)) {
            $a = $r['Ac_no'];
            $b = $r['Fullname'];
            $c = $r['Address'];
            $d = $r['Username'];
            $e = $r['Password'];
            $f = $r['Email'];




            if(strcmp($username, $d) == 0) {

                $x=2;
            }
        if( strcmp($password, $e) == 0){
            $x=3;
        }


        }
        if($x==2){?>
        <script language="javascript">
            answer=confirm("TRY another one,it has been used by someone")
            if(answer!=0)
            {
                location="account.php"
            }
            else
                location="u1.php"
                    </script>

            <?php
            exit;
        }
        if($x==3){?>
        <script language="javascript">
            answer=confirm("TRY another one, it has been already used")
            if(answer!=0)
            {
                location="account.php"
            }
            else
                location="u1.php"
                    </script>

            <?php            exit;
        }


        $sql="insert into form (Ac_no, Fullname, Address, Username, Password, Contact) VALUES
('$_POST[acc]','$_POST[add]','$_POST[con]','$_POST[txt]','$_POST[pswd]','$_POST[email]')";
        if(!mysql_query($sql,$con)){
            die("error".mysql_error());
        }


            ?>
            <script language="javascript">
                answer=confirm("Sucessfully Created")
                if(answer!=0)
                {
                    location="pay.php"
                }
                else
                    location="u1.php"
            </script>


            <?php
            exit;







        mysql_close($con);


        ?>

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
