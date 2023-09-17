<?php 
    function updateSMTPSettings($site_smtphost, $site_smtpuser, $site_smtppassword, $site_smtpport, $db){
        $setup = $db->prepare(" UPDATE config 
                                SET site_smtphost=:a, site_smtpuser=:b,
                                    site_smtppassword=:c, site_smtpport=:d
                                WHERE config_id=:id               
                            ");
        $update = $setup->execute(
            array(
                "a" => $site_smtphost,
                "b" => $site_smtpuser,
                "c" => $site_smtppassword,
                "d" => $site_smtpport,
                "id" => 1
            )
        );
        Header("Location:../production/SMTP-settings.php?updateStatus=$update");
    }
    include_once('connectdb.php');
    if(isset($_POST["save-updated-settings"])){
        updateSMTPSettings($_POST["site_smtphost"], $_POST["site_smtpuser"], $_POST["site_smtppassword"], $_POST["site_smtpport"], $db);
    }else{
        Header("Location:../production/SMTP-settings.php?updateStatus=0");
    }
?>