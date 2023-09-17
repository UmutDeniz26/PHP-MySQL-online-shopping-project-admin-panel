<!DOCTYPE html>
<html lang="en">

<?php 
include_once '../operations/getDataFromTable.php';
include_once 'meta-head-admin.php'; 
?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php
            include_once 'header.php';
            include_once 'sidebar.php';
            
            $result = getDataFromTable("config", "config_id", 1); 

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
                                        <li><a class="cl    ose-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form action="../operations/updateContanctSettings.php" method="POST"
                                        id="update-general-settings-id" data-parsley-validate
                                        class="form-horizontal form-label-left">

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

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                for="site_author">City<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="site_city" required
                                                    value="<?php echo $result["site_city"] ?>"
                                                    class="form-control col-md-7 col-xs-12" name="site_city">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                for="site_author">State<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="site_state" required
                                                    value="<?php echo $result["site_state"] ?>"
                                                    class="form-control col-md-7 col-xs-12" name="site_state">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                for="site_author">Address<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea id="site_adress" required
                                                    class="form-control col-md-7 col-xs-12"
                                                    name="site_adress"><?php echo $result["site_adress"] ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                for="site_author">Shift<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="site_shift" required
                                                    value="<?php echo $result["site_shift"] ?>"
                                                    class="form-control col-md-7 col-xs-12" name="site_shift">
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
            include_once 'footer.php';
            include_once 'scripts.php';
            ?>
</body>

</html>