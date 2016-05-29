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
        <div id="body1" class="a" ><form action="ut.php" method="post"><br><b>
                &nbsp;&nbsp;   Account no      &nbsp;&nbsp;&nbsp;&nbsp;<input name="acc" size="20" type="text" /><br><br>

                &nbsp;&nbsp;  Fullname        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="add" size="20" type="text" /><br><br>

                &nbsp;&nbsp;  Address         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="con" size="20" type="text" /><br><br>

                &nbsp;&nbsp;  Username        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="txt" size="20" type="text" /><br><br>

                &nbsp;&nbsp;  Password        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="pswd" size="20" type="password" /><br><br>

                &nbsp;&nbsp;&nbsp;&nbsp; Contact        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="email" size="20" type="text" /><br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="15" type="submit" value="Sign Up" /></b>

            </form>



        <div class="clear"></div>
        <div id="footer"> Copyrights &copy; all rights reserved 2016 &nbsp;</div>

            <!-- end footnav -->
        </div>
        <!-- end footer -->
    </div>
    <!-- end inner -->
</div>
<!-- end wrapper -->
</body>
</html>
