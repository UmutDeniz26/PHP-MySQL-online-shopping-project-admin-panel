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
                                    <h2>General Settings
                                        <?php
                                        if (isset($_GET["updateStatus"])) {
                                            if ($_GET["updateStatus"]) {
                                                $text = "Update is successful.";
                                                $color = "green";
                                            } else {
                                                $text = "Update is not successful.";
                                                $color = "red";
                                            }
                                        } else {
                                            $text = "Operation status.";
                                            $color = "gray";
                                        }
                                        echo "<small style='color:$color;'>$text</small>";
                                        ?>
                                    </h2>
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
                                    <form action="../operations/updateAPISettings.php" method="POST"
                                        id="update-general-settings-id" data-parsley-validate
                                        class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                for="site_maps">Maps API <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="site_maps" required
                                                    value="<?php echo $result["site_maps"] ?>"
                                                    class="form-control col-md-7 col-xs-12" name="site_maps">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                for="site_analytics">Analytics API <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="site_analytics" required
                                                    value="<?php echo $result["site_analytics"] ?>"
                                                    class="form-control col-md-7 col-xs-12" name="site_analytics">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                for="site_zopim">Zopim API <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="site_zopim" required
                                                    value="<?php echo $result["site_zopim"] ?>"
                                                    class="form-control col-md-7 col-xs-12" name="site_zopim">
                                            </div>
                                        </div>


                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success"
                                                    name="save-updated-settings">Submit</button>
                                            </div>
                                        </div>
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