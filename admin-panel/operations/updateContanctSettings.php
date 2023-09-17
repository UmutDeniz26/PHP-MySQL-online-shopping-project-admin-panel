<?php
//Form to collect site_tel, site_gsm, site_faks, site_mail, site_city, site_state, site_adress, site_shift 
function updateContantSettings($site_tel, $site_gsm, $site_faks, $site_mail,$site_city, $site_state, $site_adress, $site_shift, $db)
{
    
    $setup = $db->prepare(" UPDATE config 
                            SET site_tel=:a, site_gsm=:b,
                                site_faks=:c, site_mail=:d,
                                site_city=:e, site_state=:f,
                                site_adress=:g, site_shift=:h
                            WHERE config_id=:id               
                        ");
    $update = $setup->execute(
        array(
            "a" => $site_tel,
            "b" => $site_gsm,
            "c" => $site_faks,
            "d" => $site_mail,
            "e" => $site_city,
            "f" => $site_state,
            "g" => $site_adress,
            "h" => $site_shift,
            "id" => 1
        )
    );
    Header("Location:../production/contact-settings.php?updateStatus=$update");
}

if (isset($_POST["save-updated-settings"])) {
    include_once('connectdb.php');
    updateContantSettings($_POST["site_tel"], $_POST["site_gsm"], 
        $_POST["site_faks"], $_POST["site_mail"], $_POST["site_city"], 
        $_POST["site_state"], $_POST["site_adress"], $_POST["site_shift"], $db);

} else {
    Header("Location:../production/contact-settings.php?updateStatus=0");
}
?>