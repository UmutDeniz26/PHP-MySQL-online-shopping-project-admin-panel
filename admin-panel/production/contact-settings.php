<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php
            include 'header.php';
            include 'sidebar.php';
            include '../operations/connectdb.php';

            $setup = $db->prepare("SELECT * from config WHERE config_id=:id");
            $setup->execute(
                array(
                    "id" => 1
                )
            );
            $result = $setup->fetch(PDO::FETCH_ASSOC);
            ?>

            <div class="right_col" role="main">
                <div class="">

                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>General Settings <small>Operation Status: </small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form action="../operations/updateContantSettings.php" method="POST"
                                        id="update-general-settings-id" data-parsley-validate
                                        class="form-horizontal form-label-left">

                                        <!-- site_tel, site_gsm, site_faks, site_mail-->

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                for="site_title">Telephone Number<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="site_tel" required
                                                    value="<?php echo $result["site_tel"] ?>"
                                                    class="form-control col-md-7 col-xs-12" name="site_tel">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                for="site_description">GSM Number<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="site_gsm" required
                                                    value="<?php echo $result["site_gsm"] ?>"
                                                    class="form-control col-md-7 col-xs-12" name="site_gsm">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                for="site_keyword">Fax Number<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="site_faks" required
                                                    value="<?php echo $result["site_faks"] ?>"
                                                    class="form-control col-md-7 col-xs-12" name="site_faks">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                for="site_author">E-mail Address<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" id="site_mail" required
                                                    value="<?php echo $result["site_mail"] ?>"
                                                    class="form-control col-md-7 col-xs-12" name="site_mail">
                                            </div>
                                        </div>
                                        




                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success"
                                                    name="save-updated-settings">Submit</button>
                                            </div>

                                        </div>
                                        <?php
                                        if (isset($_GET["updateStatus"])) {
                                            if ($_GET["updateStatus"]) {
                                                $text = "Update is successful.";
                                                $color = "green";
                                            } else {
                                                $text = "Update is not successful.";
                                                $color = "red";
                                            }
                                            echo "<p style='color:$color;' class='col-md-6 col-sm-6 col-xs-12 col-md-offset-3'>$text</p>";
                                        }
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            include 'footer.php';
            include 'scripts.php';
            ?>
</body>

</html>