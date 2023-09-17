<?php
function updateContantSettings($site_tel, $site_gsm, $site_faks, $site_mail, $db, $config_id = 1)
{
    
    $setup = $db->prepare(" UPDATE config 
                            SET site_tel=:a, site_gsm=:b,
                                site_faks=:c, site_mail=:d
                            WHERE config_id=:e                 
                        ");
    $update = $setup->execute(
        array(
            "a" => $site_tel,
            "b" => $site_gsm,
            "c" => $site_faks,
            "d" => $site_mail,
            "e" => $config_id
        )
    );
    Header("Location:../production/contact-settings.php?updateStatus=$update");
}

if (isset($_POST["save-updated-settings"])) {
    include_once('connectdb.php');
    updateContantSettings($_POST["site_tel"], $_POST["site_gsm"], $_POST["site_faks"], $_POST["site_mail"], $db);
} else {
    Header("Location:../production/contact-settings.php?updateStatus=0");
}
?>