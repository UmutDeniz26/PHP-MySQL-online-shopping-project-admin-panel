<?php
function updateGeneralSettings($site_title, $site_description, $site_keyword, $site_author, $db, $config_id = 1)
{
    
    $setup = $db->prepare(" UPDATE config 
                            SET site_title=:a, site_description=:b,
                                site_keyword=:c, site_author=:d
                            WHERE config_id=:e                 
                        ");
    $update = $setup->execute(
        array(
            "a" => $site_title,
            "b" => $site_description,
            "c" => $site_keyword,
            "d" => $site_author,
            "e" => $config_id
        )
    );
    Header("Location:../production/general-settings.php?updateStatus=$update");
}

if (isset($_POST["save-updated-settings"])) {
    include_once('connectdb.php');
    updateGeneralSettings($_POST["site_title"], $_POST["site_description"], $_POST["site_keyword"], $_POST["site_author"], $db);
} else {
    Header("Location:../production/general-settings.php?updateStatus=0");
}
?>