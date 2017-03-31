
/**
 * Created by IntelliJ IDEA.
 * User: sneha
 * Date: 3/31/2017
 * Time: 5:39 AM
 */

<?php
include('db.php');
ob_start();
session_start();

function sanitizeInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

$digits = 6;
$gencode = rand(pow(10, $digits-1), pow(10, $digits)-1);


$uid=$_SESSION['uid'];
$name=$_SESSION['name'];
//$typeid=$_SESSION['typeid'];
$email=$_SESSION['email'];
if (isset($_POST['verify'])) {
    $code = $_POST['code'];
    if ($code=$gencode)
    {
        header('Location: passwordreset.php');
    } else {
        header('Location: verifycode.php?error=1');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRM - Login</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet'
          type='text/css'/>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>

    <link type="text/css" rel="stylesheet" href="css/materialadmin.css"/>

    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"/>

    <link type="text/css" rel="stylesheet" href="css/material-design-iconic-font.min.css"/>


    <!-- END STYLESHEETS -->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5shiv.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->
</head>


<body class="menubar-hoverable header-fixed ">

<!-- BEGIN LOGIN SECTION -->
<section class="section-account">
    <div class="img-backdrop" style="background-image: url('img/img16.jpg')"></div>
    <div class="spacer"></div>
    <div class="card contain-sm style-transparent">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <br/>
                    <h2 style="padding-left: 270px;">TEST CRM</h2><br/><br/><br/>
                    <span class="text-lg text-primary" style="color : #2B323A; padding-left: 233px;">Sign in to start your session</span>
                    <br/><br/>
                    <form class="form floating-label" action="index.php" accept-charset="utf-8" method="post">
                        Please fill in the code sent to you on
                        <div class="form-group">
                            <input type="email" class="form-control" id="code" name="code" required>
                            <label for="email">Please enter the code sent to the given email ID to reset your password</label>
                        </div>

                        <br/>
                        <div class="row">
                            <div class="col-xs-6 text-right">
                                <input type="submit" class="btn btn-primary btn-raised" name="verify" id="verify"
                                       style="background-color : #2B323A; border-color : #2B323A;" Value="Verify"/><br/>

                            </div><!--end .col -->
                        </div><!--end .row -->
                    </form>
                </div><!--end .col -->

            </div><!--end .row -->
        </div><!--end .card-body -->
    </div><!--end .card -->
</section>
<!-- END LOGIN SECTION -->


<!-- BEGIN JAVASCRIPT -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/spin.min.js"></script>
<script src="js/jquery.autosize.min.js"></script>
<script src="js/jquery.nanoscroller.min.js"></script>
<script src="js/63d0445130d69b2868a8d28c93309746.js"></script>
<script src="js/Demo.js"></script>


<!-- END JAVASCRIPT -->


</body>
</html>