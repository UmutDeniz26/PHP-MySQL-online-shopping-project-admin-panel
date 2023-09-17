<?php 

    function updateSocialMediaSettings($site_facebook, $site_twitter, $site_youtube, $db){
        $setup = $db->prepare(" UPDATE config 
                                SET site_facebook=:a, site_twitter=:b,
                                    site_youtube=:c
                                WHERE config_id=:id               
                            ");
        $update = $setup->execute(
            array(
                "a" => $site_facebook,
                "b" => $site_twitter,
                "c" => $site_youtube,
                "id" => 1
            )
        );
        Header("Location:../production/social-media-settings.php?updateStatus=$update");
    }
    include_once('connectdb.php');
    if(isset($_POST["save-updated-settings"])){
        updateSocialMediaSettings($_POST["site_facebook"], $_POST["site_twitter"], $_POST["site_youtube"], $db);
    }else{
        Header("Location:../production/social-media-settings.php?updateStatus=0");
    }

?>