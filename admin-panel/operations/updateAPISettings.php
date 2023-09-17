<?php
function updateAPISettings($site_maps, $site_analytics, $site_zopim, $db)
{
    $setup = $db->prepare(" UPDATE config 
                            SET site_maps=:a, site_analytics=:b,
                                site_zopim=:c
                            WHERE config_id=:id               
                        ");
    $update = $setup->execute(
        array(
            "a" => $site_maps,
            "b" => $site_analytics,
            "c" => $site_zopim,
            "id" => 1
        )
    );
    Header("Location:../production/API-settings.php?updateStatus=$update");
}
include_once('connectdb.php');
if (isset($_POST["save-updated-settings"])) {
    updateAPISettings($_POST["site_maps"], $_POST["site_analytics"], $_POST["site_zopim"], $db);
} else {
    Header("Location:../production/API-settings.php?updateStatus=0");
}

?>